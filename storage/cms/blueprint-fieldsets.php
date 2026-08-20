<?php return array (
  'b022a74b-15e6-4c6b-9eb9-17efc5103543' => 
  array (
    'name' => 'Category',
    'handle' => 'Blog\\Category',
    'contentUuid' => 'b022a74b-15e6-4c6b-9eb9-17efc5103543',
    'fields' => 
    array (
      'description' => 
      array (
        'label' => 'Description',
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  'edcd102e-0525-4e4d-b07e-633ae6c18db6:regular_post' => 
  array (
    'name' => 'Regular Post',
    'handle' => 'regular_post',
    'contentUuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
    'fields' => 
    array (
      'content' => 
      array (
        'tab' => 'Edit',
        'label' => 'Content',
        'type' => 'richeditor',
        'span' => 'adaptive',
      ),
      '_blog_post_content' => 
      array (
        'type' => 'mixin',
        'source' => 'Blog\\BlogContent',
      ),
      'seo_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\SEOFields',
      ),
      'code_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\CodeFields',
      ),
    ),
  ),
  'edcd102e-0525-4e4d-b07e-633ae6c18db6:dynamic_post' => 
  array (
    'name' => 'Dynamic Post',
    'handle' => 'dynamic_post',
    'contentUuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
    'icon' => 'icon-columns',
    'description' => 'Post with configurable content.',
    'fields' => 
    array (
      'builder' => 
      array (
        'tab' => 'Edit',
        'label' => 'Content',
        'type' => 'repeater',
        'commentAbove' => 'Create content for this section. Each content block uses it\'s own column. Max of 4 per section.',
        'span' => 'full',
        'displayMode' => 'builder',
        'titleFrom' => 'title',
        'groups' => 
        array (
          'full_text' => 
          array (
            'name' => 'One column',
            'icon' => 'icon-align-left',
            'fields' => 
            array (
              'content' => 
              array (
                'label' => 'Content',
                'type' => 'richeditor',
                'size' => 'huge',
              ),
            ),
          ),
          'two_columns' => 
          array (
            'name' => 'Two Columns',
            'icon' => 'icon-align-left',
            'fields' => 
            array (
              'column_one' => 
              array (
                'type' => 'richeditor',
                'label' => 'First column',
                'size' => 'huge',
                'span' => 'full',
              ),
              'column_two' => 
              array (
                'type' => 'richeditor',
                'label' => 'Second column',
                'size' => 'huge',
                'span' => 'full',
              ),
            ),
          ),
          'image_text' => 
          array (
            'name' => 'Image Text',
            'icon' => 'icon-align-left',
            'fields' => 
            array (
              'content' => 
              array (
                'label' => 'Content',
                'type' => 'richeditor',
                'size' => 'huge',
              ),
              'image' => 
              array (
                'type' => 'mediafinder',
                'mode' => 'image',
                'maxItems' => 1,
                'label' => 'Image',
                'span' => 'auto',
              ),
              'reverse' => 
              array (
                'type' => 'switch',
                'comment' => 'Switch this on to reverse image / content direction',
                'label' => 'Reverse?',
                'span' => 'auto',
              ),
            ),
          ),
        ),
      ),
      '_blog_post_content' => 
      array (
        'type' => 'mixin',
        'source' => 'Blog\\BlogContent',
      ),
      'seo_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\SEOFields',
      ),
      'code_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\CodeFields',
      ),
    ),
  ),
  '1ceb82f6-590b-4921-bb9d-477c0179e1a2' => 
  array (
    'name' => 'Menus',
    'handle' => 'Content\\Menu',
    'contentUuid' => '1ceb82f6-590b-4921-bb9d-477c0179e1a2',
    'fields' => 
    array (
      'links' => 
      array (
        'type' => 'entries',
        'displayMode' => 'controller',
        'source' => 'Content\\MenuLink',
        'singleMode' => false,
        'showReorder' => true,
        'scope' => false,
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  'f18400ca-7b76-485e-a836-85fbe3e8eab2' => 
  array (
    'name' => 'Menu Link',
    'handle' => 'Content\\MenuLink',
    'contentUuid' => 'f18400ca-7b76-485e-a836-85fbe3e8eab2',
    'fields' => 
    array (
      'page' => 
      array (
        'type' => 'pagefinder',
        'label' => 'Page',
        'singleMode' => true,
        'translatable' => false,
        'span' => 'full',
      ),
      'banner' => 
      array (
        'label' => 'Image',
        'type' => 'mediafinder',
        'mode' => 'image',
        'span' => 'auto',
        'translatable' => false,
      ),
      'icon' => 
      array (
        'label' => 'Icon',
        'type' => 'text',
        'span' => 'auto',
        'translatable' => false,
      ),
      'external' => 
      array (
        'label' => 'External link',
        'type' => 'switch',
        'default' => 'unchecked',
      ),
      'is_megamenu' => 
      array (
        'label' => 'Megamenu?',
        'type' => 'switch',
        'default' => 'unchecked',
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  '698afed6-70f1-47dd-9dcf-dc2a0f903ff2:simple' => 
  array (
    'name' => 'Simple Page',
    'handle' => 'simple',
    'contentUuid' => '698afed6-70f1-47dd-9dcf-dc2a0f903ff2',
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'tab' => 'Edit',
        'type' => 'richeditor',
        'span' => 'adaptive',
      ),
      'seo_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\SEOFields',
      ),
      'code_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\CodeFields',
      ),
    ),
  ),
  '698afed6-70f1-47dd-9dcf-dc2a0f903ff2:builder' => 
  array (
    'name' => 'Dynamic Page',
    'handle' => 'builder',
    'contentUuid' => '698afed6-70f1-47dd-9dcf-dc2a0f903ff2',
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
    'fields' => 
    array (
      'builder' => 
      array (
        'tab' => 'Edit',
        'type' => 'mixin',
        'name' => 'Builder',
        'source' => 'Content\\Builder',
      ),
      'seo_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\SEOFields',
      ),
      'code_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\CodeFields',
      ),
    ),
  ),
  'f04b58ea-6d80-11ed-aa98-d348ccf890ef' => 
  array (
    'name' => 'Forms',
    'handle' => 'Content\\Forms',
    'contentUuid' => 'f04b58ea-6d80-11ed-aa98-d348ccf890ef',
    'fields' => 
    array (
      'fields' => 
      array (
        'type' => 'repeater',
        'prompt' => 'Add New Field',
        'label' => 'Fields',
        'displayMode' => 'builder',
        'titleFrom' => 'Label',
        'tab' => 'Form Fields',
        'useTabs' => true,
        'form' => 
        array (
          'fields' => 
          array (
            'label' => 
            array (
              'label' => 'Field Label',
              'type' => 'text',
              'commentAbove' => 'The name of the field',
              'validation' => 'required',
              'tab' => 'Field',
              'span' => 'left',
            ),
            'slug' => 
            array (
              'type' => 'text',
              'label' => 'Field Slug',
              'commentAbove' => 'Used to identify the field in the form. If Unsure, match it to the label with letters, numbers, and dashes only.',
              'span' => 'right',
              'validation' => 'alpha_dash|required',
              'tab' => 'Field',
              'preset' => 
              array (
                'field' => 'label',
                'type' => 'slug',
              ),
            ),
            'field_type' => 
            array (
              'label' => 'Field Type',
              'validation' => 'required',
              'type' => 'dropdown',
              'tab' => 'Field',
              'span' => 'left',
              'commentAbove' => 'Choose the type of this field.',
              'options' => 
              array (
                'text' => 'Text',
                'textarea' => 'Multi-line Text',
                'checkbox' => 'Checkbox',
                'select' => 'Dropdown',
                'file' => 'File',
              ),
            ),
            'placeholder' => 
            array (
              'type' => 'text',
              'label' => 'Placeholder',
              'commentAbove' => 'The text that appears inside the field.',
              'tab' => 'Field',
              'span' => 'right',
              'trigger' => 
              array (
                'action' => 'show',
                'field' => 'field_type',
                'condition' => 'value[select][text][dropdown][textarea]',
              ),
            ),
            'options' => 
            array (
              'type' => 'repeater',
              'label' => 'Field Options',
              'commentAbove' => 'Add items to the dropdown',
              'tab' => 'Field',
              'form' => 
              array (
                'fields' => 
                array (
                  'label' => 
                  array (
                    'type' => 'text',
                    'label' => 'Option Name',
                    'commentAbove' => 'The name of the option',
                    'validation' => 'required',
                    'span' => 'left',
                  ),
                  'slug' => 
                  array (
                    'type' => 'text',
                    'label' => 'Option Slug',
                    'commentAbove' => 'Used to identify the option in the dropdown. If Unsure, match it to the label with letters, numbers, and dashes only.',
                    'validation' => 'alpha_dash|required',
                    'span' => 'right',
                    'preset' => 
                    array (
                      'field' => 'label',
                      'type' => 'slug',
                    ),
                  ),
                ),
              ),
              'trigger' => 
              array (
                'action' => 'show',
                'field' => 'field_type',
                'condition' => 'value[select]',
              ),
            ),
            'validation' => 
            array (
              'label' => 'Enable Field Validation',
              'comment' => 'Enable this field to be required with rules you specify',
              'type' => 'switch',
              'tab' => 'Validation',
            ),
            'validation_rules' => 
            array (
              'label' => 'Validation Rules',
              'type' => 'repeater',
              'tab' => 'Validation',
              'form' => 
              array (
                'fields' => 
                array (
                  'validation_type' => 
                  array (
                    'type' => 'dropdown',
                    'label' => 'Validation Type',
                    'span' => 'left',
                    'options' => 
                    array (
                      'required' => 'Required',
                      'email' => 'Email',
                      'numeric' => 'Numeric',
                      'phone' => 'Phone',
                      'image' => 'Image',
                      'regex' => 'Regular Expression (Advanced)',
                      'custom' => 'Custom Rule (Advanced)',
                    ),
                  ),
                  'error_message' => 
                  array (
                    'span' => 'right',
                    'label' => 'Validation Error Message',
                    'type' => 'text',
                    'placeholder' => 'Please enter valid data',
                    'default' => 'Please enter valid data',
                  ),
                  'regex' => 
                  array (
                    'type' => 'text',
                    'label' => 'Regex',
                    'commentAbove' => 'Regular expression to use.',
                    'span' => 'left',
                    'trigger' => 
                    array (
                      'action' => 'show',
                      'field' => 'validation_type',
                      'condition' => 'value[regex]',
                    ),
                  ),
                  'custom' => 
                  array (
                    'type' => 'text',
                    'label' => 'Custom Rule',
                    'commentAbove' => 'Custom rule string to use',
                    'span' => 'left',
                    'trigger' => 
                    array (
                      'action' => 'show',
                      'field' => 'validation_type',
                      'condition' => 'value[custom]',
                    ),
                  ),
                  'regex_explainer' => 
                  array (
                    'type' => 'hint',
                    'mode' => 'info',
                    'label' => 'Advanced Setting',
                    'comment' => 'This specifies a rule for advanced validation. If this is set, it\'s best to leave it alone. Edit only if you know what you are doing.',
                    'span' => 'right',
                    'trigger' => 
                    array (
                      'action' => 'show',
                      'field' => 'validation_type',
                      'condition' => 'value[regex]',
                    ),
                  ),
                  'custom_explainer' => 
                  array (
                    'type' => 'hint',
                    'mode' => 'info',
                    'label' => 'Custom Rule Setting',
                    'comment' => 'This specifies a rule for advanced validation. If this is set, it\'s best to leave it alone. Edit only if you know what you are doing. Find available validation rules <a target="_blank" href="https://docs.octobercms.com/3.x/extend/services/validation.html">here</a>',
                    'commentHtml' => true,
                    'span' => 'right',
                    'trigger' => 
                    array (
                      'action' => 'show',
                      'field' => 'validation_type',
                      'condition' => 'value[custom]',
                    ),
                  ),
                ),
              ),
              'trigger' => 
              array (
                'action' => 'show',
                'field' => 'validation',
                'condition' => 'checked',
              ),
            ),
            'width' => 
            array (
              'label' => 'Field Width',
              'type' => 'dropdown',
              'commentAbove' => 'Choose how wide this field should be',
              'tab' => 'Field',
              'options' => 
              array (
                12 => 'Full Width',
                9 => 'Two Thirds Width',
                6 => 'Half Width',
              ),
            ),
          ),
        ),
      ),
      'success_message' => 
      array (
        'label' => 'Success Message',
        'type' => 'richeditor',
        'tab' => 'Manage',
        'commentAbove' => 'The message you want to display upon successful submission of the form',
        'placeholder' => 'Thank you! We have received your submission.',
        'default' => 'Thank you! We have received your submission.',
      ),
      'enable_recaptcha' => 
      array (
        'label' => 'Enable reCAPTCHA',
        'type' => 'switch',
        'tab' => 'Manage',
        'comment' => 'Enable reCAPTCHA spam prevention to prevent unwanted form submissions. Make sure you have <a href="../../../tailor/globals/content_settings#primarytab-forms">reCAPTCHA keys</a> set',
        'commentHtml' => true,
        'span' => 'right',
        'spanClass' => 'col-lg-2 col-12',
      ),
      'enable_notifications' => 
      array (
        'label' => 'Enable Notifications',
        'tab' => 'Manage',
        'comment' => 'Enable notifications for this form',
        'type' => 'switch',
        'span' => 'left',
        'spanClass' => 'col-lg-2 col-12',
      ),
      'recipients' => 
      array (
        'label' => 'Recipients',
        'tab' => 'Manage',
        'type' => 'repeater',
        'commentAbove' => 'Add recipients for this form. If none is set, it will default to the notification email in the settings.',
        'span' => 'full',
        'icon' => 'icon-email',
        'form' => 
        array (
          'fields' => 
          array (
            'email' => 
            array (
              'label' => 'Email',
              'type' => 'text',
              'validation' => 'required|email',
              'span' => 'left',
            ),
            'name' => 
            array (
              'label' => 'Recipient Name',
              'type' => 'text',
              'validation' => 'required',
              'span' => 'right',
            ),
          ),
        ),
        'trigger' => 
        array (
          'action' => 'show',
          'field' => 'enable_notifications',
          'condition' => 'checked',
        ),
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  '912c5956-878d-11ed-9699-df30dbea9de3' => 
  array (
    'name' => 'Submissions',
    'handle' => 'Content\\Forms\\Submissions',
    'contentUuid' => '912c5956-878d-11ed-9699-df30dbea9de3',
    'fields' => 
    array (
      'form' => 
      array (
        'type' => 'entries',
        'source' => 'Content\\Forms',
        'label' => 'Submissions From',
        'commentAbove' => 'The form that this data came from.',
        'displayMode' => 'recordFinder',
        'maxItems' => 1,
        'disabled' => true,
      ),
      'data' => 
      array (
        'type' => 'textarea',
        'label' => 'Submission Data',
        'disabled' => true,
        'column' => 
        array (
          'type' => 'summary',
          'label' => 'Submission Data',
        ),
      ),
      'files' => 
      array (
        'type' => 'fileupload',
        'label' => 'Files',
        'disabled' => true,
        'column' => 
        array (
          'type' => 'image',
          'label' => 'Files',
        ),
      ),
    ),
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
  ),
  '0bc8c426-3eeb-4dd8-a082-d6605181af18:regular_article' => 
  array (
    'name' => 'Regular Article',
    'handle' => 'regular_article',
    'contentUuid' => '0bc8c426-3eeb-4dd8-a082-d6605181af18',
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
    'fields' => 
    array (
      'content' => 
      array (
        'tab' => 'Edit',
        'label' => 'Content',
        'type' => 'richeditor',
        'span' => 'adaptive',
      ),
      'seo_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\SEOFields',
      ),
      'code_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\CodeFields',
      ),
    ),
  ),
  '0bc8c426-3eeb-4dd8-a082-d6605181af18:dynamic_article' => 
  array (
    'name' => 'Dynamic Article',
    'handle' => 'dynamic_article',
    'contentUuid' => '0bc8c426-3eeb-4dd8-a082-d6605181af18',
    'columns' => NULL,
    'scopes' => NULL,
    'validation' => NULL,
    'icon' => 'icon-columns',
    'description' => 'Article with configurable content.',
    'fields' => 
    array (
      'builder' => 
      array (
        'tab' => 'Edit',
        'label' => 'Content',
        'type' => 'repeater',
        'commentAbove' => 'Create content for this section. Each content block uses it\'s own column. Max of 4 per section.',
        'span' => 'full',
        'displayMode' => 'builder',
        'titleFrom' => 'title',
        'groups' => 
        array (
          'full_text' => 
          array (
            'name' => 'One column',
            'icon' => 'icon-align-left',
            'fields' => 
            array (
              'content' => 
              array (
                'label' => 'Content',
                'type' => 'richeditor',
                'size' => 'huge',
              ),
            ),
          ),
          'two_columns' => 
          array (
            'name' => 'Two Columns',
            'icon' => 'icon-align-left',
            'fields' => 
            array (
              'column_one' => 
              array (
                'type' => 'richeditor',
                'label' => 'First column',
                'size' => 'huge',
                'span' => 'full',
              ),
              'column_two' => 
              array (
                'type' => 'richeditor',
                'label' => 'Second column',
                'size' => 'huge',
                'span' => 'full',
              ),
            ),
          ),
          'image_text' => 
          array (
            'name' => 'Image Text',
            'icon' => 'icon-align-left',
            'fields' => 
            array (
              'content' => 
              array (
                'label' => 'Content',
                'type' => 'richeditor',
                'size' => 'huge',
              ),
              'image' => 
              array (
                'type' => 'mediafinder',
                'mode' => 'image',
                'maxItems' => 1,
                'label' => 'Image',
                'span' => 'auto',
              ),
              'reverse' => 
              array (
                'type' => 'switch',
                'comment' => 'Switch this on to reverse image / content direction',
                'label' => 'Reverse?',
                'span' => 'auto',
              ),
            ),
          ),
        ),
      ),
      '_blog_article_content' => 
      array (
        'type' => 'mixin',
        'source' => 'Blog\\BlogContent',
      ),
      'seo_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\SEOFields',
      ),
      'code_fields' => 
      array (
        'tab' => 'Manage',
        'type' => 'mixin',
        'name' => 'SEO Fields',
        'source' => 'Content\\CodeFields',
      ),
    ),
  ),
  'b5884275-919c-4496-8fb6-4f8e820c7c47' => 
  array (
    'name' => 'SEO',
    'handle' => 'Content\\SEO',
    'contentUuid' => 'b5884275-919c-4496-8fb6-4f8e820c7c47',
    'fields' => 
    array (
      'website_name' => 
      array (
        'label' => 'Placeholder',
        'tab' => 'General',
        'translatable' => true,
      ),
    ),
    'validation' => NULL,
  ),
  '81be3e95-1186-405f-a6fc-dbf725a7e93a' => 
  array (
    'name' => 'SiteMap',
    'handle' => 'Content\\SEO\\SiteMap',
    'contentUuid' => '81be3e95-1186-405f-a6fc-dbf725a7e93a',
    'fields' => 
    array (
      'header_code' => 
      array (
        'label' => 'Header Code',
        'type' => 'codeeditor',
        'language' => 'html',
        'commentAbove' => 'Insert code inside the <code>&lt;head&gt;</code> on every page. Useful if you have some tracking code that needs to be entered.',
        'commentHtml' => true,
        'tab' => 'Global Code',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
        'translatable' => true,
      ),
      'body_code' => 
      array (
        'label' => 'Body Code',
        'type' => 'codeeditor',
        'language' => 'html',
        'commentAbove' => 'Insert code right after the opening <code>&lt;body&gt;</code> tag on every page. Useful if you have some tracking code that needs to be entered.',
        'commentHtml' => true,
        'tab' => 'Global Code',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
        'translatable' => true,
      ),
      'footer_code' => 
      array (
        'label' => 'Footer Code',
        'type' => 'codeeditor',
        'language' => 'html',
        'commentAbove' => 'Insert code right before the closing <code>&lt;/body&gt;</code> tag on every page. Useful if you have some tracking code that needs to be entered.',
        'commentHtml' => true,
        'tab' => 'Global Code',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
        'translatable' => true,
      ),
    ),
    'validation' => NULL,
  ),
  '24f86cb8-0eaa-4e73-9b54-85a54021477c' => 
  array (
    'name' => 'Static Content',
    'handle' => 'Content\\PageSettings',
    'contentUuid' => '24f86cb8-0eaa-4e73-9b54-85a54021477c',
    'fields' => 
    array (
      'contact_title' => 
      array (
        'label' => 'Title',
        'type' => 'text',
        'span' => 'auto',
        'translatable' => true,
        'tab' => 'Contact Section',
      ),
      'contact_hours' => 
      array (
        'label' => 'Working hours',
        'type' => 'text',
        'span' => 'auto',
        'tab' => 'Contact Section',
      ),
      'contact_email' => 
      array (
        'label' => 'Email',
        'type' => 'text',
        'span' => 'auto',
        'tab' => 'Contact Section',
      ),
      'contact_phone' => 
      array (
        'label' => 'Phone',
        'type' => 'text',
        'span' => 'auto',
        'tab' => 'Contact Section',
      ),
      'contact_company' => 
      array (
        'label' => 'Company',
        'type' => 'text',
        'span' => 'auto',
        'tab' => 'Contact Section',
      ),
      'contact_address' => 
      array (
        'label' => 'Address',
        'type' => 'textarea',
        'size' => 'small',
        'span' => 'auto',
        'tab' => 'Contact Section',
      ),
      'support_title' => 
      array (
        'label' => 'Title',
        'type' => 'text',
        'span' => 'auto',
        'translatable' => true,
        'tab' => 'Support Section',
      ),
      'support_hours' => 
      array (
        'label' => 'Working hours',
        'type' => 'text',
        'span' => 'auto',
        'tab' => 'Support Section',
      ),
      'support_phone' => 
      array (
        'label' => 'Phone',
        'type' => 'text',
        'span' => 'auto',
        'tab' => 'Support Section',
      ),
      'support_email' => 
      array (
        'label' => 'Email',
        'type' => 'text',
        'span' => 'auto',
        'tab' => 'Support Section',
      ),
      'newsletter_title' => 
      array (
        'label' => 'Title',
        'type' => 'text',
        'span' => 'auto',
        'translatable' => true,
        'tab' => 'Newsletter Section',
      ),
      'newsletter_description' => 
      array (
        'label' => 'Description',
        'type' => 'textarea',
        'span' => 'auto',
        'translatable' => true,
        'tab' => 'Newsletter Section',
      ),
      'newsletter_button' => 
      array (
        'label' => 'Button',
        'type' => 'text',
        'span' => 'auto',
        'translatable' => true,
        'tab' => 'Newsletter Section',
      ),
      'rent_type' => 
      array (
        'label' => 'Rental type',
        'type' => 'text',
        'span' => 'auto',
        'translatable' => true,
        'tab' => 'Title Section',
      ),
      'product' => 
      array (
        'label' => 'Product',
        'type' => 'text',
        'span' => 'auto',
        'translatable' => true,
        'tab' => 'Title Section',
      ),
    ),
    'validation' => NULL,
  ),
  '533c314d-6e80-430c-b278-272cbc6632cf' => 
  array (
    'name' => 'Settings',
    'handle' => 'Content\\Settings',
    'contentUuid' => '533c314d-6e80-430c-b278-272cbc6632cf',
    'fields' => 
    array (
      'homepage' => 
      array (
        'maxItems' => 1,
        'label' => 'Home Page',
        'tab' => 'Settings',
        'type' => 'entries',
        'source' => 'Content\\Page',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-6',
        'translatable' => false,
        'commentAbove' => 'The default homepage',
        'displayMode' => 'recordfinder',
        'conditions' => 'content_group != \'search\'',
        'permissions' => 'tailor.entry.698afed670f147dd9dcfdc2a0f903ff2',
      ),
      'website_name' => 
      array (
        'label' => 'Website Name',
        'tab' => 'Settings',
        'translatable' => false,
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-6',
        'commentAbove' => 'The name of the website. Used in the footer and in the header if no logo is set',
        'permissions' => 'tailor.entry.698afed670f147dd9dcfdc2a0f903ff2',
      ),
      'favicon' => 
      array (
        'type' => 'mediafinder',
        'mode' => 'image',
        'label' => 'Favicon',
        'commentAbove' => 'The icon that appears in the browser tab or window',
        'tab' => 'Settings',
        'translatable' => false,
        'maxItems' => 1,
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
        'permissions' => 'tailor.entry.698afed670f147dd9dcfdc2a0f903ff2',
      ),
      'favicon_dark' => 
      array (
        'type' => 'mediafinder',
        'mode' => 'image',
        'label' => 'Dark Favicon',
        'commentAbove' => 'The icon that appears in dark mode',
        'tab' => 'Settings',
        'translatable' => false,
        'maxItems' => 1,
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
        'permissions' => 'tailor.entry.698afed670f147dd9dcfdc2a0f903ff2',
      ),
      'logo' => 
      array (
        'type' => 'mediafinder',
        'mode' => 'image',
        'label' => 'Logo',
        'commentAbove' => 'The Logo. Appears in the navigation',
        'tab' => 'Settings',
        'translatable' => false,
        'maxItems' => 1,
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
        'permissions' => 'tailor.entry.698afed670f147dd9dcfdc2a0f903ff2',
      ),
      'logo_alt' => 
      array (
        'type' => 'mediafinder',
        'mode' => 'image',
        'label' => 'Secondary Logo',
        'commentAbove' => 'Secondary Logo. Appears in footer',
        'tab' => 'Settings',
        'translatable' => false,
        'maxItems' => 1,
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
        'permissions' => 'tailor.entry.698afed670f147dd9dcfdc2a0f903ff2',
      ),
      'hr_1' => 
      array (
        'type' => 'ruler',
        'tab' => 'Settings',
      ),
      'main_menu' => 
      array (
        'maxItems' => 1,
        'label' => 'Main Menu',
        'tab' => 'Menus',
        'translatable' => false,
        'type' => 'entries',
        'span' => 'auto',
        'source' => 'Content\\Menu',
        'commentAbove' => 'The default menu.',
        'displayMode' => 'recordfinder',
      ),
      'secondary_menu' => 
      array (
        'maxItems' => 1,
        'label' => 'Footer Terms Menu',
        'tab' => 'Menus',
        'translatable' => false,
        'type' => 'entries',
        'span' => 'auto',
        'source' => 'Content\\Menu',
        'commentAbove' => 'Footer menu.',
        'displayMode' => 'recordfinder',
      ),
      'footer_link_menu' => 
      array (
        'maxItems' => 1,
        'label' => 'Footer Renter Type Menu',
        'tab' => 'Menus',
        'translatable' => false,
        'type' => 'entries',
        'span' => 'auto',
        'source' => 'Content\\Menu',
        'commentAbove' => 'The footer links menu.',
        'displayMode' => 'recordfinder',
      ),
      'footer_external_menu' => 
      array (
        'maxItems' => 1,
        'label' => 'Footer Products Menu',
        'tab' => 'Menus',
        'span' => 'auto',
        'translatable' => false,
        'type' => 'entries',
        'source' => 'Content\\Menu',
        'commentAbove' => 'The external links menu.',
        'displayMode' => 'recordfinder',
      ),
      'try_free_button' => 
      array (
        'type' => 'pagefinder',
        'label' => 'Try free',
        'singleMode' => true,
        'span' => 'right',
        'tab' => 'Menus',
      ),
      'login_button' => 
      array (
        'type' => 'pagefinder',
        'label' => 'Login',
        'singleMode' => true,
        'span' => 'right',
        'tab' => 'Menus',
      ),
      'social_networks_menu' => 
      array (
        'maxItems' => 1,
        'label' => 'Social Networks Menu',
        'tab' => 'Menus',
        'span' => 'auto',
        'translatable' => false,
        'type' => 'entries',
        'source' => 'Content\\Menu',
        'commentAbove' => 'The social networks menu.',
        'displayMode' => 'recordfinder',
      ),
      'default_search_page' => 
      array (
        'maxItems' => 1,
        'label' => 'Default Search Page',
        'tab' => 'Search',
        'translatable' => false,
        'type' => 'entries',
        'source' => 'Content\\Page',
        'commentAbove' => 'The default search page. Used if no page is set in a search block.',
        'displayMode' => 'recordfinder',
        'permissions' => 'tailor.entry.698afed670f147dd9dcfdc2a0f903ff2',
        'validation' => 
        array (
          0 => 'required_if:enable_search,1',
        ),
        'conditions' => 'content_group = \'search\'',
        'trigger' => 
        array (
          'action' => 'show',
          'field' => 'enable_search',
          'condition' => 'checked',
        ),
      ),
      'enable_global_search' => 
      array (
        'type' => 'switch',
        'comment' => 'Enable Global Search in the navbar',
        'label' => 'Enable Global Search',
        'default' => false,
        'translatable' => false,
        'tab' => 'Search',
        'span' => 'full',
        'permissions' => 'tailor.entry.698afed670f147dd9dcfdc2a0f903ff2',
        'trigger' => 
        array (
          'action' => 'show',
          'field' => 'enable_search',
          'condition' => 'checked',
        ),
      ),
      'entries_to_search' => 
      array (
        'label' => 'Global Items to Search',
        'commentAbove' => 'What content should be searchable?',
        'type' => 'checkboxlist',
        'tab' => 'Search',
        'quickselect' => true,
        'translatable' => false,
        'permissions' => 'tailor.entry.698afed670f147dd9dcfdc2a0f903ff2',
        'options' => 
        array (
          'pages' => 'Pages',
          'posts' => 'Blog Posts',
          'articles' => 'Articles',
          'documents' => 'Documents',
        ),
        'trigger' => 
        array (
          'action' => 'show',
          'field' => 'enable_search',
          'condition' => 'checked',
        ),
      ),
      'notification_email' => 
      array (
        'type' => 'text',
        'label' => 'Notification Email',
        'commentAbove' => 'Specify an email to send email notifications to. Form Submissions default to this email',
        'tab' => 'Mail Notifications',
        'span' => 'left',
        'permissions' => 
        array (
          0 => 'tailor.entry.f04b58ea6d8011edaa98d348ccf890ef',
          1 => 'tailor.entry.2a9a76d0010c11ed90b6fc95f7401555',
        ),
        'validation' => 
        array (
          0 => 'email',
          1 => 'required_with:stripe_public_key',
          2 => 'required_with:stripe_secret_key',
          3 => 'required_with:stripe_webhook_secret_key',
        ),
      ),
      'notification_email_recipient_name' => 
      array (
        'type' => 'text',
        'label' => 'Recipient Name',
        'tab' => 'Mail Notifications',
        'commentAbove' => 'The name of the person receiving the notification email. Form Submissions default to this name',
        'span' => 'right',
        'permissions' => 
        array (
          0 => 'tailor.entry.f04b58ea6d8011edaa98d348ccf890ef',
          1 => 'tailor.entry.2a9a76d0010c11ed90b6fc95f7401555',
        ),
        'validation' => 
        array (
          0 => 'required_with:notification_email',
        ),
      ),
      'recaptcha_section' => 
      array (
        'type' => 'section',
        'label' => 'Recaptcha Keys',
        'comment' => 'Recaptcha helps limit spam from forms in the backend. Only v2 is supported. You can get your keys <a href="https://www.google.com/recaptcha/admin#list">here</a>',
        'commentHtml' => true,
        'tab' => 'Forms',
        'permissions' => 'tailor.entry.f04b58ea6d8011edaa98d348ccf890ef',
      ),
      'recaptcha_site_key' => 
      array (
        'type' => 'text',
        'label' => 'Recaptcha Site Key',
        'tab' => 'Forms',
        'permissions' => 'tailor.entry.f04b58ea6d8011edaa98d348ccf890ef',
      ),
      'recaptcha_secret_key' => 
      array (
        'type' => 'text',
        'label' => 'Recaptcha Secret Key',
        'tab' => 'Forms',
        'permissions' => 'tailor.entry.f04b58ea6d8011edaa98d348ccf890ef',
      ),
      'top_banner_text' => 
      array (
        'type' => 'text',
        'label' => 'Conference banner text',
        'tab' => 'Conference banner',
        'span' => 'left',
      ),
      'top_banner_image' => 
      array (
        'label' => 'Conference banner image',
        'mode' => 'image',
        'imageWidth' => '1920',
        'imageHeight' => '100',
        'useCaption' => true,
        'thumbOptions' => 
        array (
          'mode' => 'crop',
          'extension' => 'auto',
        ),
        'span' => 'auto',
        'type' => 'mediafinder',
        'tab' => 'Conference banner',
      ),
      'top_banner_background' => 
      array (
        'label' => 'Conference banner background',
        'mode' => 'image',
        'imageWidth' => '1920',
        'imageHeight' => '100',
        'useCaption' => true,
        'thumbOptions' => 
        array (
          'mode' => 'crop',
          'extension' => 'auto',
        ),
        'span' => 'auto',
        'type' => 'mediafinder',
        'tab' => 'Conference banner',
      ),
      'top_banner_url' => 
      array (
        'type' => 'pagefinder',
        'label' => 'Conference banner url',
        'tab' => 'Conference banner',
        'span' => 'right',
      ),
    ),
    'validation' => NULL,
  ),
);