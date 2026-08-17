<?php return array (
  'b022a74b-15e6-4c6b-9eb9-17efc5103543' => 
  array (
    'uuid' => 'b022a74b-15e6-4c6b-9eb9-17efc5103543',
    'type' => 'structure',
    'handle' => 'Blog\\Category',
    'name' => 'Category',
    'drafts' => false,
    'multisite' => 'sync',
    'customMessages' => 
    array (
      'buttonCreate' => 'New Category',
    ),
    'structure' => 
    array (
      'maxDepth' => 1,
    ),
    'navigation' => 
    array (
      'label' => 'Categories',
      'parent' => 'Blog\\Post',
      'icon' => 'octo-icon-list-ul',
      'order' => 150,
    ),
    'fields' => 
    array (
      'description' => 
      array (
        'label' => 'Description',
      ),
    ),
    'handleSlug' => 'blog_category',
  ),
  'edcd102e-0525-4e4d-b07e-633ae6c18db6' => 
  array (
    'uuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
    'handle' => 'Blog\\Post',
    'type' => 'stream',
    'name' => 'Post',
    'drafts' => true,
    'multisite' => 'sync',
    'customMessages' => 
    array (
      'buttonCreate' => 'New Post',
    ),
    'primaryNavigation' => 
    array (
      'label' => 'Blog',
      'icon' => 'octo-icon-file',
      'iconSvg' => 'modules/tailor/assets/images/blog-icon.svg',
      'order' => 95,
    ),
    'navigation' => 
    array (
      'label' => 'Posts',
      'icon' => 'octo-icon-pencil',
      'order' => 100,
    ),
    'groups' => 
    array (
      'regular_post' => 
      array (
        'name' => 'Regular Post',
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
      'dynamic_post' => 
      array (
        'name' => 'Dynamic Post',
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
    ),
    'handleSlug' => 'blog_post',
  ),
  '1ceb82f6-590b-4921-bb9d-477c0179e1a2' => 
  array (
    'uuid' => '1ceb82f6-590b-4921-bb9d-477c0179e1a2',
    'handle' => 'Content\\Menu',
    'type' => 'entry',
    'name' => 'Menus',
    'drafts' => false,
    'multisite' => 'sync',
    'pagefinder' => false,
    'navigation' => 
    array (
      'icon' => 'icon-list',
      'parent' => 'Content\\Page',
      'order' => 5,
    ),
    'customMessages' => 
    array (
      'buttonCreate' => 'New Menu',
    ),
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
    'handleSlug' => 'content_menu',
  ),
  'f18400ca-7b76-485e-a836-85fbe3e8eab2' => 
  array (
    'uuid' => 'f18400ca-7b76-485e-a836-85fbe3e8eab2',
    'handle' => 'Content\\MenuLink',
    'type' => 'structure',
    'name' => 'Menu Link',
    'drafts' => false,
    'multisite' => 'sync',
    'pagefinder' => false,
    'navigation' => false,
    'structure' => 
    array (
      'maxDepth' => 3,
    ),
    'customMessages' => 
    array (
      'buttonCreate' => 'New Menu Link',
    ),
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
    'handleSlug' => 'content_menu_link',
  ),
  '698afed6-70f1-47dd-9dcf-dc2a0f903ff2' => 
  array (
    'uuid' => '698afed6-70f1-47dd-9dcf-dc2a0f903ff2',
    'handle' => 'Content\\Page',
    'type' => 'structure',
    'name' => 'Pages',
    'drafts' => true,
    'multisite' => 'sync',
    'pagefinder' => 'item',
    'structure' => 
    array (
      'maxDepth' => 2,
    ),
    'primaryNavigation' => 
    array (
      'label' => 'Pages & Menus',
      'icon' => 'icon-file',
      'order' => 140,
    ),
    'navigation' => 
    array (
      'icon' => 'icon-file',
      'parent' => 'Content\\Page',
      'order' => 1,
    ),
    'customMessages' => 
    array (
      'buttonCreate' => 'New Page',
    ),
    'groups' => 
    array (
      'simple' => 
      array (
        'name' => 'Simple Page',
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
      'builder' => 
      array (
        'name' => 'Dynamic Page',
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
    ),
    'handleSlug' => 'content_page',
  ),
  'f04b58ea-6d80-11ed-aa98-d348ccf890ef' => 
  array (
    'uuid' => 'f04b58ea-6d80-11ed-aa98-d348ccf890ef',
    'handle' => 'Content\\Forms',
    'type' => 'structure',
    'name' => 'Forms',
    'drafts' => false,
    'multisite' => 'sync',
    'pagefinder' => false,
    'structure' => 
    array (
      'maxDepth' => 0,
    ),
    'primaryNavigation' => 
    array (
      'label' => 'Forms',
      'icon' => 'icon-inbox',
      'order' => 145,
    ),
    'navigation' => 
    array (
      'icon' => 'icon-list',
      'parent' => 'Content\\Forms',
      'order' => 12,
    ),
    'customMessages' => 
    array (
      'buttonCreate' => 'New Form',
    ),
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
    'handleSlug' => 'content_forms',
  ),
  '912c5956-878d-11ed-9699-df30dbea9de3' => 
  array (
    'uuid' => '912c5956-878d-11ed-9699-df30dbea9de3',
    'handle' => 'Content\\Forms\\Submissions',
    'type' => 'stream',
    'name' => 'Submissions',
    'drafts' => false,
    'multisite' => false,
    'pagefinder' => false,
    'navigation' => 
    array (
      'icon' => 'icon-inbox',
      'parent' => 'Content\\Forms',
      'order' => 12,
    ),
    'customMessages' => 
    array (
      'buttonCreate' => 'New Submission',
    ),
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
    'handleSlug' => 'content_forms_submissions',
  ),
  '0bc8c426-3eeb-4dd8-a082-d6605181af18' => 
  array (
    'uuid' => '0bc8c426-3eeb-4dd8-a082-d6605181af18',
    'handle' => 'Knowledge\\Article',
    'type' => 'stream',
    'name' => 'Article',
    'drafts' => true,
    'multisite' => 'sync',
    'customMessages' => 
    array (
      'buttonCreate' => 'New Article',
    ),
    'primaryNavigation' => 
    array (
      'label' => 'Knowledge',
      'icon' => 'octo-icon-file',
      'iconSvg' => 'modules/tailor/assets/images/blog-icon.svg',
      'order' => 95,
    ),
    'navigation' => 
    array (
      'label' => 'Articles',
      'icon' => 'octo-icon-pencil',
      'order' => 100,
    ),
    'groups' => 
    array (
      'regular_article' => 
      array (
        'name' => 'Regular Article',
        'fields' => 
        array (
          'content' => 
          array (
            'tab' => 'Edit',
            'label' => 'Content',
            'type' => 'richeditor',
            'span' => 'adaptive',
          ),
          '_blog_article_content' => 
          array (
            'type' => 'mixin',
            'source' => 'Knowledge\\ArticleContent',
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
      'dynamic_article' => 
      array (
        'name' => 'Dynamic Article',
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
    ),
    'handleSlug' => 'knowledge_article',
  ),
  '1e954298-5231-45d0-a25e-34e7e5802b06' => 
  array (
    'uuid' => '1e954298-5231-45d0-a25e-34e7e5802b06',
    'type' => 'structure',
    'handle' => 'Knowledge\\Category',
    'name' => 'Category',
    'drafts' => false,
    'multisite' => 'sync',
    'customMessages' => 
    array (
      'buttonCreate' => 'New Category',
    ),
    'structure' => 
    array (
      'maxDepth' => 1,
    ),
    'navigation' => 
    array (
      'label' => 'Categories',
      'parent' => 'Knowledge\\Article',
      'icon' => 'octo-icon-list-ul',
      'order' => 150,
    ),
    'fields' => 
    array (
      'description' => 
      array (
        'label' => 'Description',
      ),
    ),
    'handleSlug' => 'knowledge_category',
  ),
);