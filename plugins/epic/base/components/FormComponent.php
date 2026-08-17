<?php

namespace Epic\Base\Components;

use Illuminate\Support\Facades\Mail;
use Input;
use Event;
use App;
use Carbon\Carbon;
use Session;
use Flash;
use Validator;
use ValidationException;
use Auth;
use Redirect;
use BackendAuth;
use Http;
use Cache;

use Tailor\Models\EntryRecord as EntryRecord;
use Tailor\Models\GlobalRecord as GlobalRecord;

class FormComponent extends \Cms\Classes\ComponentBase
{

    public function componentDetails()
    {
        return [
          'name' => 'Form Component',
          'description' => 'Form Component'
        ];
    }

    public function onFormSubmit() {

        $form_input = input();
        $form_id = $form_input["form_id"];
        $form_success_message = $form_input["success_message"];
        $form = EntryRecord::inSection('Content\Forms')->find($form_id);
        $submission = EntryRecord::inSection('Content\Forms\Submissions');
        $settings = GlobalRecord::findForGlobal('Content\Settings');
        $form_validation_rules = [];
        $form_validation_messages = [];
        $form_input_formatted = '';
        $form_name = '(no data)';

        // Parse form validation data
        foreach ($form->fields as $field) {

            $field_validation_rules = [];
            $field_validation_messages = [];

            if($field->validation == true) {

                foreach ($field->validation_rules as $validation_item) {
                    if($validation_item->attributes['validation_type'] == "phone") {
                        $field_validation_rules[] = "regex:/^([0-9\s\-\+\(\)]*)$/";
                        $field_validation_rules[] = "min:9";
                        $field_validation_messages[$field->slug . '.' . "regex"] = $validation_item->attributes['error_message'];
                        $field_validation_messages[$field->slug . '.' . "min"] = $validation_item->attributes['error_message'];
                    } elseif ($validation_item->attributes['validation_type'] == "regex") {
                        $field_validation_rules[] = "regex:" . $validation_item->attributes['regex'];
                        $field_validation_messages[$field->slug . '.' . "regex"] = $validation_item->attributes['error_message'];
                    } elseif ($validation_item->attributes['validation_type'] == "custom") {
                        $rule_name = strtok($validation_item->attributes['custom'], ':');
                        $field_validation_rules[] = $validation_item->attributes['custom'];
                        $field_validation_messages[$field->slug . '.' . $rule_name] = $validation_item->attributes['error_message'];
                    } else {
                        $field_validation_rules[] = $validation_item->attributes['validation_type'];
                        $field_validation_messages[$field->slug . '.' . $validation_item->attributes['validation_type']] = $validation_item->attributes['error_message'];
                    }

                }

                $form_validation_rules[] = [$field->slug => $field_validation_rules];
                $form_validation_messages[] = $field_validation_messages;
                if($form->enable_recaptcha) {
                    $form_validation_rules[] = [
                        // 'g-recaptcha-response' => 'required|recaptcha'
                        'cf-turnstile-response' => 'required|recaptcha'
                    ];
                    $form_validation_messages[] = [
                        // 'g-recaptcha-response.required' => 'Please ensure you are not a robot.'
                        'cf-turnstile-response.required' => 'Please ensure you are not a robot.'
                        
                    ];
                }
            }

        }

        // Format Rules and messages
        $form_validation_rules = array_merge(...$form_validation_rules);
        $form_validation_messages = array_merge(...$form_validation_messages);

        $form_unwanted_fields = [
            "form_id",
            "success_message",
            "submitted",
            "_preview_token",
            "_token",
            "cf-turnstile-response"
        ];

        // Validate Fields
        $validation = Validator::make(request()->all(), $form_validation_rules, $form_validation_messages);

        if($validation->fails()) {
            throw new ValidationException($validation);
        }

        foreach ($form_input as $key => $value) {

            if(!in_array($key, $form_unwanted_fields)) {
                if($key == array_key_first($form_input)){
                    $form_name = (!empty($value)) ? $value : $form_name;
                }

                $key = ucwords(str_replace("-", ' ', $key));

                if(is_object($value)) {
                    $form_input_formatted .= $key . ": " . $value->getClientOriginalName()  . "\n";
                } elseif(!is_array($value)) {
                    $form_input_formatted .= $key . ": " . $value  . "\n";
                } 
            }

            if(is_array($value)) {
                $submission->files = $value;
            }

        }

        $submission->title = $form_name;
        $submission->form  = $form_input['form_id'];
        $submission->data  = $form_input_formatted;

        $submission->save();

        try {

            // Send Email
            $mail_data = [
                'form_name' => $form->title,
                'form_data' => $form_input_formatted,
            ];
    
            $mail_recipients = [];
    
    
            if(!$form->recipients->isEmpty()){
                foreach ($form->recipients as $recipient) {
                    $mail_recipients[$recipient->email] = $recipient->name;
                }
            } else {
                if((!empty($settings->notification_email) && (!empty($settings->notification_email_recipient_name)))) {
                    $mail_recipients = [
                        $settings->notification_email => $settings->notification_email_recipient_name
                    ];
                }
    
            }
    
            if(($form->enable_notifications) && (!empty($mail_recipients))) {
    
                Mail::send('epic.base::mail.form_submission', $mail_data, function($message) use ($mail_recipients, $form) {
                    foreach ($mail_recipients as $email => $name) {
                        $message->to($email, $name);
                        $message->subject('Nova poruka ' . $form->title);
                    }
                });
    
            }
    
            Flash::success($form_success_message);
    
            $this->page['submitted'] = $form_input['submitted'];

        } catch(\Exception $e) {

            trace_log($e->getMessage());

        }


    }

}
