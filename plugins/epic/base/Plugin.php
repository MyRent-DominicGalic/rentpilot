<?php

namespace Epic\Base;

use System\Models\RequestLog;

use Backend;
use Event;
use Log;
use Mail;
use System\Classes\PluginBase;
use Tailor\Models\EntryRecord;
use Tailor\Models\GlobalRecord;
use View;
use Request;
use Validator;

/**
 * Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Epic Base',
            'description' => 'A plugin to go with the October 3.0 Theme.',
            'author'      => 'Epic',
            'icon'        => 'icon-cog'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
    }

    public function registerMailTemplates()
    {
        return [
            'epic.base::mail.form_submission',
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
      try{
        Event::listen('cms.page.beforeDisplay', function ($controller, $page) {
          $log = [];
          $log['code'] = $controller->getStatusCode();
          $log['url'] = Request::url();
          $log['referrer'] = Request::server('HTTP_REFERER') ?? 'Direct Visit';
          $log['ip'] = Request::ip();
          $log['user_agent'] = Request::header('User-Agent');
          
          //trace_log($log);
          
          if ($controller->getStatusCode() == 404) {
                Log::warning("404 Page Not Found", [
                    'url' => Request::url(),
                    'referrer' => Request::server('HTTP_REFERER') ?? 'Direct Visit',
                    'ip' => Request::ip(),
                    'user_agent' => Request::header('User-Agent')
                ]);
            }
        });
      }
      catch(Exception $e){
        View::share('app_url', config('app.url'));
      }
      
      
        View::share('app_url', config('app.url'));

        // Google reCAPTCHA
        // Validator::extend('recaptcha', function ($attribute, $value, $parameters, $validator) {
        //     $secret = env('RECAPTCHA_SECRET_KEY');
        //     $url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$value}";
        //     $response = file_get_contents($url);
        //     $captcha = json_decode($response, true);

        //     $captchaSuccess = $captcha['success'] ?? null;
        //     $captchaScore = $captcha['score'] ?? 0;

        //     return !empty($captchaSuccess) && $captchaScore >= 0.5;
        // });

        // CloudFlare reCAPTCHA
        Validator::extend('recaptcha', function ($attribute, $value, $parameters, $validator) {
            $secret = env('RECAPTCHA_SECRET_KEY');
            $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

            $data = [
                'secret' => $secret,
                'response' => $value
            ];
            $remoteip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
            if ($remoteip) {
                $data['remoteip'] = $remoteip;
            }
            $options = [
                'http' => [
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($data)
                ]
            ];
            $context = stream_context_create($options);
            $response = file_get_contents($url, false, $context);
            $captcha = json_decode($response, true);

            if($captcha === FALSE) {
                return false;
            }

            return true;
        });

        Validator::replacer('recaptcha', function ($message, $attribute, $rule, $parameters) {
            return 'reCAPTCHA verification failed.';
        });
    }


    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Epic\Base\Components\BaseComponent' => 'baseComponent',
            'Epic\Base\Components\FormComponent' => 'formComponent'
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

    }

    /**
     * Registers backend navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
    }


    public function registerMarkupTags()
    {
        return [
          'filters' => [
            'image_width' => [$this, 'getImageWidth'],
            'image_height' => [$this, 'getImageHeight'],
          ],
        ];
    }

    public function getImageWidth($url)
    {
        return $this->getImageSize($url) ? $this->getImageSize($url)['width'] : null;
    }

    public function getImageHeight($url)
    {
        return $this->getImageSize($url) ? $this->getImageSize($url)['height'] : null;
    }

    private $images = [];

    private function getImageSize($url)
    {
        if (!isset($this->images[$url])) {
            $data = @getimagesize($url);
            if ($data) {
                $this->images[$url] = [
                  'width'     => $data[0],
                  'height'    => $data[1],
                ];
            } else {
                $this->images[$url] = false;
            }
        }

        return $this->images[$url];
    }


}
