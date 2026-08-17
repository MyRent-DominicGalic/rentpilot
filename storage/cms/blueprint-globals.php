<?php return array (
  'b5884275-919c-4496-8fb6-4f8e820c7c47' => 
  array (
    'uuid' => 'b5884275-919c-4496-8fb6-4f8e820c7c47',
    'handle' => 'Content\\SEO',
    'type' => 'global',
    'name' => 'SEO',
    'multisite' => true,
    'primaryNavigation' => 
    array (
      'label' => 'SEO',
      'icon' => 'icon-dashboard',
      'order' => 150,
    ),
    'navigation' => 
    array (
      'parent' => 'Content\\SEO',
      'icon' => 'icon-dashboard',
      'order' => 10,
    ),
    'fields' => 
    array (
      'website_name' => 
      array (
        'label' => 'Placeholder',
        'tab' => 'General',
        'translatable' => true,
      ),
    ),
    'handleSlug' => 'content_s_e_o',
  ),
  '81be3e95-1186-405f-a6fc-dbf725a7e93a' => 
  array (
    'uuid' => '81be3e95-1186-405f-a6fc-dbf725a7e93a',
    'handle' => 'Content\\SEO\\SiteMap',
    'type' => 'global',
    'name' => 'SiteMap',
    'multisite' => true,
    'navigation' => 
    array (
      'parent' => 'Content\\SEO',
      'icon' => 'icon-sitemap',
      'order' => 20,
    ),
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
    'handleSlug' => 'content_s_e_o_site_map',
  ),
  '24f86cb8-0eaa-4e73-9b54-85a54021477c' => 
  array (
    'uuid' => '24f86cb8-0eaa-4e73-9b54-85a54021477c',
    'handle' => 'Content\\PageSettings',
    'type' => 'global',
    'name' => 'Static Content',
    'multisite' => true,
    'description' => 'Adjust the content parameters of the site.',
    'navigation' => 
    array (
      'icon' => 'icon-cog',
      'order' => 32,
    ),
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
    'handleSlug' => 'content_page_settings',
  ),
  '533c314d-6e80-430c-b278-272cbc6632cf' => 
  array (
    'uuid' => '533c314d-6e80-430c-b278-272cbc6632cf',
    'handle' => 'Content\\Settings',
    'type' => 'global',
    'name' => 'Settings',
    'multisite' => false,
    'description' => 'Adjust the default settings of the site.',
    'navigation' => 
    array (
      'icon' => 'icon-cog',
      'order' => 24,
    ),
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
    'handleSlug' => 'content_settings',
  ),
);