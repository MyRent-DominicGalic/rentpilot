<?php return array (
  '4d7fd1e4-85f2-48f5-947e-92819fc8664b' => 
  array (
    'uuid' => '4d7fd1e4-85f2-48f5-947e-92819fc8664b',
    'handle' => 'Blog\\BlogContent',
    'type' => 'mixin',
    'name' => 'Blog Post Content',
    'fields' => 
    array (
      'banner' => 
      array (
        'tab' => 'Details',
        'label' => 'Banner',
        'type' => 'mediafinder',
        'mode' => 'image',
        'span' => 'left',
        'maxItems' => 1,
      ),
      'featured_text' => 
      array (
        'tab' => 'Details',
        'label' => 'Featured Text',
        'type' => 'textarea',
        'size' => 'tiny',
        'span' => 'left',
      ),
      'categories' => 
      array (
        'tab' => 'Details',
        'label' => 'Categories',
        'commentAbove' => 'Select categories the blog post belongs to',
        'type' => 'entries',
        'source' => 'Blog\\Category',
      ),
    ),
    'handleSlug' => 'blog_blog_content',
  ),
  '96601276-a7c0-11ed-b652-e07d090eb056' => 
  array (
    'uuid' => '96601276-a7c0-11ed-b652-e07d090eb056',
    'handle' => 'Content\\Posts',
    'type' => 'mixin',
    'name' => 'Blog Posts',
    'fields' => 
    array (
      'common_fields' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\PostsCommonFields',
      ),
    ),
    'handleSlug' => 'content_posts',
  ),
  '96d5b37c-a7c0-11ed-bcf3-d58139d0635e' => 
  array (
    'uuid' => '96d5b37c-a7c0-11ed-bcf3-d58139d0635e',
    'handle' => 'Content\\PostsColum',
    'type' => 'mixin',
    'name' => 'Blog Posts',
    'fields' => 
    array (
      'column_header' => 
      array (
        'type' => 'mixin',
        'label' => 'Column Header',
        'source' => 'Content\\ColumnHeader',
      ),
      'common_fields' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\PostsCommonFields',
      ),
      'column_options' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\ColumnOptions',
      ),
      'advanced_content' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\AdvancedFieldsColumn',
        'label' => 'Advanced Settings',
        'tab' => 'Advanced',
      ),
    ),
    'handleSlug' => 'content_posts_colum',
  ),
  '96a004f6-a7c0-11ed-b644-7a5c145f9873' => 
  array (
    'uuid' => '96a004f6-a7c0-11ed-b644-7a5c145f9873',
    'handle' => 'Content\\PostsCommonFields',
    'type' => 'mixin',
    'name' => 'Blog Posts Common Fields',
    'fields' => 
    array (
      'sort_by' => 
      array (
        'type' => 'dropdown',
        'span' => 'left',
        'label' => 'Sort Posts',
        'commentAbove' => 'Choose how you would like to sort your posts.',
        'tab' => 'General',
        'options' => 
        array (
          'date' => 'Post Published Date',
          'title' => 'Post Title',
        ),
      ),
      'limit' => 
      array (
        'type' => 'number',
        'span' => 'right',
        'label' => 'Post Limit',
        'commentAbove' => 'How many posts would you like to show? Also used for pagination.',
        'default' => 3,
        'min' => 1,
        'tab' => 'General',
        'trigger' => 
        array (
          'action' => 'disable|empty',
          'field' => 'show_specific_items',
          'condition' => 'checked',
        ),
      ),
      'filter_by_category' => 
      array (
        'type' => 'switch',
        'span' => 'left',
        'cssClass' => 'mt-3',
        'label' => 'Filter By Category',
        'comment' => 'Filter posts by a specific category',
        'tab' => 'General',
        'trigger' => 
        array (
          'action' => 'disable|empty',
          'field' => 'show_specific_items',
          'condition' => 'checked',
        ),
      ),
      'reverse_order' => 
      array (
        'type' => 'switch',
        'span' => 'right',
        'cssClass' => 'mt-3',
        'label' => 'Reverse Order',
        'comment' => 'Reverse the sort order of the posts (Descending).',
        'tab' => 'General',
      ),
      'post_category_filter' => 
      array (
        'label' => 'Choose Category',
        'commentAbove' => 'Choose a category to filter by',
        'type' => 'entries',
        'span' => 'full',
        'maxItems' => 1,
        'displayMode' => 'recordfinder',
        'prompt' => 'Click the %s to find a post category.',
        'source' => 'Blog\\Category',
        'tab' => 'General',
        'trigger' => 
        array (
          'action' => 'show',
          'field' => 'filter_by_category',
          'condition' => 'checked',
        ),
      ),
      'specific_items_mixin' => 
      array (
        'type' => 'mixin',
        'tab' => 'General',
        'source' => 'Content\\SpecificItems',
      ),
      'specific_items' => 
      array (
        'type' => 'repeater',
        'label' => 'Specific Items',
        'commentAbove' => 'Add items to show for this block.',
        'span' => 'auto',
        'tab' => 'General',
        'showDuplicate' => false,
        'showReorder' => false,
        'prompt' => 'Add a Post',
        'form' => 
        array (
          'fields' => 
          array (
            'item' => 
            array (
              'label' => 'Post',
              'type' => 'entries',
              'maxItems' => 1,
              'source' => 'Blog\\Post',
            ),
          ),
        ),
        'trigger' => 
        array (
          'action' => 'show',
          'field' => 'show_specific_items',
          'condition' => 'checked',
        ),
      ),
      'show_category_nav' => 
      array (
        'type' => 'switch',
        'span' => 'auto',
        'cssClass' => 'mt-3',
        'label' => 'Show Category nav',
        'comment' => 'Show category navigation',
        'tab' => 'General',
      ),
      'url' => 
      array (
        'type' => 'pagefinder',
        'label' => 'Show More Url',
        'singleMode' => true,
        'scope' => false,
        'tab' => 'General',
        'span' => 'auto',
      ),
      'pagination' => 
      array (
        'type' => 'mixin',
        'tab' => 'General',
        'source' => 'Content\\Pagination',
      ),
    ),
    'handleSlug' => 'content_posts_common_fields',
  ),
  '78650dea-607e-4c63-bde8-2364cb786072' => 
  array (
    'uuid' => '78650dea-607e-4c63-bde8-2364cb786072',
    'handle' => 'Content\\Builder',
    'type' => 'mixin',
    'name' => 'Builder',
    'fields' => 
    array (
      'builder' => 
      array (
        'type' => 'repeater',
        'label' => 'Builder',
        'displayMode' => 'builder',
        'span' => 'adaptive',
        'prompt' => 'Add a Block',
        'groups' => 
        array (
          'hero' => 
          array (
            'name' => 'Hero',
            'icon' => 'icon-laptop',
            'description' => 'A hero section with a background image.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'above_title' => 
              array (
                'label' => 'Above Title',
                'type' => 'text',
                'commentAbove' => 'It filled displays above title',
                'span' => 'left',
                'tab' => 'General',
              ),
              'title_html_tag' => 
              array (
                'type' => 'dropdown',
                'label' => 'Title HTML Tag type',
                'commentAbove' => 'Override this title html tag to one of the options below.',
                'span' => 'right',
                'tab' => 'General',
                'options' => 
                array (
                  'h1' => 'h1',
                  'h2' => 'h2',
                  'h3' => 'h3',
                ),
              ),
              'content_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\Content',
                'commentAbove' => 'Content Fields',
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'card_slider' => 
          array (
            'name' => 'Card Slider',
            'icon' => 'icon-laptop',
            'description' => 'A section with card slider',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'title' => 
              array (
                'label' => 'Title',
                'type' => 'text',
                'commentAbove' => 'Only for organizational purposes',
                'tab' => 'General',
                'span' => 'auto',
              ),
              'layout' => 
              array (
                'type' => 'dropdown',
                'label' => 'Layout',
                'commentAbove' => 'Change the layout of this slider.',
                'span' => 'auto',
                'tab' => 'General',
                'default' => 'value[simple]',
                'options' => 
                array (
                  'simple' => 'Simple',
                  'overflow' => 'Simple overflow',
                  'grid' => 'Grid',
                  'dynamic' => 'Dynamic with nav',
                ),
              ),
              'items' => 
              array (
                'type' => 'repeater',
                'label' => 'Slides',
                'displayMode' => 'builder',
                'commentAbove' => 'Add slide to show on slider.',
                'span' => 'full',
                'tab' => 'General',
                'maxItems' => 16,
                'showDuplicate' => true,
                'showReorder' => true,
                'prompt' => 'Add an slide',
                'form' => 
                array (
                  'fields' => 
                  array (
                    'item' => 
                    array (
                      'label' => 'Post',
                      'type' => 'entries',
                      'maxItems' => 1,
                      'hidden' => 1,
                      'source' => 'Blog\\Post',
                      'trigger' => 
                      array (
                        'action' => 'hide',
                        'field' => 'is_custom',
                        'condition' => 'checked',
                      ),
                    ),
                    'is_custom' => 
                    array (
                      'label' => 'Custom Slide',
                      'type' => 'switch',
                      'span' => 'auto',
                      'column' => false,
                      'default' => 1,
                      'scope' => false,
                    ),
                    'item_custom' => 
                    array (
                      'type' => 'mixin',
                      'source' => 'Content\\Content',
                      'trigger' => 
                      array (
                        'action' => 'disable|hide',
                        'field' => 'is_custom',
                        'condition' => 'unchecked',
                      ),
                    ),
                  ),
                ),
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'nav_icons' => 
          array (
            'name' => 'Icons nav',
            'icon' => 'icon-laptop',
            'description' => 'A list of icons for navigation',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'title' => 
              array (
                'label' => 'Title',
                'type' => 'text',
                'commentAbove' => 'Only for organizational purposes',
                'tab' => 'General',
                'span' => 'auto',
              ),
              'single_row' => 
              array (
                'label' => 'Single row icons',
                'type' => 'switch',
                'span' => 'auto',
                'tab' => 'General',
                'column' => false,
                'default' => 0,
                'scope' => false,
              ),
              'items' => 
              array (
                'type' => 'repeater',
                'label' => 'Icons',
                'displayMode' => 'builder',
                'commentAbove' => 'Add icon.',
                'span' => 'full',
                'tab' => 'General',
                'maxItems' => 16,
                'showDuplicate' => true,
                'showReorder' => true,
                'prompt' => 'Add an Icon',
                'titleFrom' => 'title',
                'form' => 
                array (
                  'fields' => 
                  array (
                    'title' => 
                    array (
                      'label' => 'Title',
                      'type' => 'text',
                      'span' => 'auto',
                    ),
                    'icon' => 
                    array (
                      'label' => 'Icon',
                      'type' => 'text',
                      'span' => 'auto',
                    ),
                    'page' => 
                    array (
                      'type' => 'pagefinder',
                      'label' => 'Page',
                      'singleMode' => true,
                      'span' => 'left',
                    ),
                  ),
                ),
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'header_section' => 
          array (
            'name' => 'Header section',
            'icon' => 'icon-laptop',
            'description' => 'A section with heading',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'above_title' => 
              array (
                'label' => 'Above Title',
                'type' => 'text',
                'span' => 'full',
                'tab' => 'General',
              ),
              'title' => 
              array (
                'label' => 'Title',
                'commentAbove' => 'Title of this section',
                'type' => 'text',
                'span' => 'auto',
                'tab' => 'General',
              ),
              'title_html_tag' => 
              array (
                'type' => 'dropdown',
                'label' => 'Title HTML Tag type',
                'commentAbove' => 'Override this title html tag to one of the options below.',
                'span' => 'right',
                'tab' => 'General',
                'options' => 
                array (
                  'h2' => 'h2',
                  'h1' => 'h1',
                  'h3' => 'h3',
                ),
              ),
              'sub_title' => 
              array (
                'label' => 'Sub Title',
                'type' => 'richeditor',
                'span' => 'full',
                'size' => 'small',
                'tab' => 'General',
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'content_section' => 
          array (
            'name' => 'Content section',
            'icon' => 'icon-laptop',
            'description' => 'A section with content',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'content_rich_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\ContentRich',
                'commentAbove' => 'Content Fields',
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'content_list' => 
          array (
            'name' => 'Content list',
            'icon' => 'icon-laptop',
            'description' => 'Contect List',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'title' => 
              array (
                'label' => 'Title',
                'type' => 'text',
                'commentAbove' => 'Only for organizational purposes',
                'tab' => 'General',
                'span' => 'auto',
              ),
              'use_numbers' => 
              array (
                'label' => 'Use arrow',
                'type' => 'switch',
                'default' => 0,
                'span' => 'right',
                'comment' => 'Use arrow with numbering',
                'tab' => 'General',
              ),
              'arrow_center' => 
              array (
                'label' => 'Arrow center',
                'type' => 'switch',
                'default' => 0,
                'span' => 'right',
                'comment' => 'Put arrow on center',
                'tab' => 'General',
              ),
              'use_zigzag' => 
              array (
                'label' => 'ZigZag background',
                'type' => 'switch',
                'default' => 0,
                'span' => 'right',
                'comment' => 'Use alternating background color',
                'tab' => 'General',
              ),
              'sections' => 
              array (
                'type' => 'repeater',
                'label' => 'Sections',
                'displayMode' => 'builder',
                'commentAbove' => 'Add an section',
                'span' => 'full',
                'tab' => 'General',
                'maxItems' => 16,
                'showDuplicate' => true,
                'showReorder' => true,
                'prompt' => 'Add an section',
                'titleFrom' => 'title',
                'form' => 
                array (
                  'fields' => 
                  array (
                    'content_rich_fields' => 
                    array (
                      'type' => 'mixin',
                      'source' => 'Content\\ContentRich',
                      'commentAbove' => 'Content Fields',
                    ),
                    'image_code' => 
                    array (
                      'label' => 'Image code',
                      'type' => 'codeeditor',
                      'size' => 'small',
                      'language' => 'html',
                    ),
                  ),
                ),
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'icons_list' => 
          array (
            'name' => 'Icons list',
            'icon' => 'icon-laptop',
            'description' => 'A list of icons',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'title' => 
              array (
                'label' => 'Title',
                'type' => 'text',
                'commentAbove' => 'Only for organizational purposes',
                'tab' => 'General',
                'span' => 'auto',
              ),
              'icons' => 
              array (
                'type' => 'repeater',
                'label' => 'Icons',
                'displayMode' => 'builder',
                'commentAbove' => 'Add an icon',
                'span' => 'full',
                'tab' => 'General',
                'maxItems' => 16,
                'showDuplicate' => true,
                'showReorder' => true,
                'prompt' => 'Add an icon',
                'titleFrom' => 'title',
                'form' => 
                array (
                  'fields' => 
                  array (
                    'title' => 
                    array (
                      'label' => 'Title',
                      'type' => 'text',
                      'span' => 'auto',
                    ),
                    'icon' => 
                    array (
                      'label' => 'Icon',
                      'type' => 'text',
                      'span' => 'auto',
                    ),
                    'content' => 
                    array (
                      'label' => 'Answer',
                      'type' => 'text',
                      'span' => 'full',
                    ),
                  ),
                ),
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'images_list' => 
          array (
            'name' => 'Images list',
            'icon' => 'icon-laptop',
            'description' => 'A list of images',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'title' => 
              array (
                'label' => 'Title',
                'type' => 'text',
                'commentAbove' => 'Only for organizational purposes',
                'tab' => 'General',
                'span' => 'auto',
              ),
              'images' => 
              array (
                'type' => 'repeater',
                'label' => 'Images',
                'displayMode' => 'builder',
                'commentAbove' => 'Add an image',
                'span' => 'full',
                'tab' => 'General',
                'maxItems' => 16,
                'showDuplicate' => true,
                'showReorder' => true,
                'prompt' => 'Add an image',
                'titleFrom' => 'title',
                'form' => 
                array (
                  'fields' => 
                  array (
                    'title' => 
                    array (
                      'label' => 'Title',
                      'type' => 'text',
                      'span' => 'full',
                    ),
                    'image' => 
                    array (
                      'label' => 'Image',
                      'type' => 'mediafinder',
                      'commentAbove' => 'Image of this section',
                      'span' => 'auto',
                      'mode' => 'image',
                      'maxItems' => 1,
                      'tab' => 'General',
                    ),
                    'page' => 
                    array (
                      'type' => 'pagefinder',
                      'label' => 'Page',
                      'commentAbove' => 'Link to when click on image',
                      'singleMode' => true,
                      'span' => 'auto',
                    ),
                  ),
                ),
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'boxes_list' => 
          array (
            'name' => 'Boxes list',
            'icon' => 'icon-laptop',
            'description' => 'A list of boxes',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'title' => 
              array (
                'label' => 'Title',
                'type' => 'text',
                'commentAbove' => 'Only for organizational purposes',
                'tab' => 'General',
                'span' => 'auto',
              ),
              'boxes' => 
              array (
                'type' => 'repeater',
                'label' => 'Boxes',
                'displayMode' => 'builder',
                'commentAbove' => 'Add an box',
                'span' => 'full',
                'tab' => 'General',
                'maxItems' => 16,
                'showDuplicate' => true,
                'showReorder' => true,
                'prompt' => 'Add an box',
                'titleFrom' => 'title',
                'form' => 
                array (
                  'fields' => 
                  array (
                    'above_title' => 
                    array (
                      'label' => 'Above Title',
                      'type' => 'text',
                      'span' => 'full',
                    ),
                    'title' => 
                    array (
                      'label' => 'Title',
                      'type' => 'text',
                      'span' => 'auto',
                    ),
                    'icon' => 
                    array (
                      'label' => 'Icon',
                      'type' => 'text',
                      'span' => 'auto',
                    ),
                    'url' => 
                    array (
                      'type' => 'pagefinder',
                      'label' => 'Box link',
                      'singleMode' => true,
                      'span' => 'auto',
                    ),
                    'content' => 
                    array (
                      'label' => 'Content',
                      'type' => 'richeditor',
                      'commentAbove' => 'Text content of this section',
                      'span' => 'full',
                      'size' => 'small',
                      'tab' => 'General',
                    ),
                  ),
                ),
              ),
              'connect_boxes' => 
              array (
                'label' => 'Connect Boxes',
                'type' => 'switch',
                'default' => 0,
                'span' => 'auto',
                'comment' => 'Connect boxes with arrows',
                'tab' => 'General',
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'reviews_list' => 
          array (
            'name' => 'Reviews list',
            'icon' => 'icon-laptop',
            'description' => 'A list of reviews',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'title' => 
              array (
                'label' => 'Title',
                'type' => 'text',
                'commentAbove' => 'Only for organizational purposes',
                'tab' => 'General',
                'span' => 'auto',
              ),
              'reviews' => 
              array (
                'type' => 'repeater',
                'label' => 'Reviews',
                'displayMode' => 'builder',
                'commentAbove' => 'Add an review',
                'span' => 'full',
                'tab' => 'General',
                'maxItems' => 12,
                'showDuplicate' => true,
                'showReorder' => true,
                'prompt' => 'Add an review',
                'titleFrom' => 'title',
                'form' => 
                array (
                  'fields' => 
                  array (
                    'author' => 
                    array (
                      'label' => 'Author',
                      'type' => 'text',
                      'span' => 'auto',
                    ),
                    'url' => 
                    array (
                      'type' => 'pagefinder',
                      'label' => 'Review link',
                      'singleMode' => true,
                      'span' => 'auto',
                    ),
                    'company' => 
                    array (
                      'label' => 'Company',
                      'type' => 'text',
                      'span' => 'auto',
                    ),
                    'logo' => 
                    array (
                      'label' => 'Logo',
                      'type' => 'mediafinder',
                      'span' => 'auto',
                      'mode' => 'image',
                      'maxItems' => 1,
                      'tab' => 'General',
                    ),
                    'content' => 
                    array (
                      'label' => 'Content',
                      'type' => 'textarea',
                      'span' => 'full',
                      'size' => 'small',
                      'tab' => 'General',
                    ),
                  ),
                ),
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'posts' => 
          array (
            'name' => 'Posts',
            'icon' => 'icon-newspaper-o',
            'description' => 'Section with blog posts.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'posts' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\Posts',
                'tab' => 'General',
              ),
              'advanced_fields' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFields',
                'commentAbove' => 'Advanced Fields',
              ),
            ),
          ),
          'form' => 
          array (
            'name' => 'Form',
            'icon' => 'icon-list-alt',
            'description' => 'Section with a form.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'title' => 
              array (
                'label' => 'Title',
                'type' => 'text',
                'commentAbove' => 'Only for organizational purposes',
                'tab' => 'General',
                'span' => 'auto',
              ),
              'form' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\Form',
              ),
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'content_builder',
  ),
  '31c7a237-fee5-11ec-b7e2-1d5410f76a4d' => 
  array (
    'uuid' => '31c7a237-fee5-11ec-b7e2-1d5410f76a4d',
    'handle' => 'Content\\Buttons',
    'type' => 'mixin',
    'name' => 'Button',
    'fields' => 
    array (
      'button_title' => 
      array (
        'type' => 'text',
        'label' => 'Button Title',
        'span' => 'left',
        'placeholder' => 'Your button\'s text',
      ),
      'button_page' => 
      array (
        'type' => 'pagefinder',
        'label' => 'Button Page',
        'singleMode' => true,
        'span' => 'right',
      ),
      'hr_1' => 
      array (
        'type' => 'ruler',
      ),
      'button_style' => 
      array (
        'type' => 'dropdown',
        'label' => 'Style',
        'commentAbove' => 'Change the style of this button.',
        'span' => 'auto',
        'default' => 'value[primary]',
        'options' => 
        array (
          'primary' => 'Primary',
        ),
      ),
      'button_external' => 
      array (
        'type' => 'switch',
        'label' => 'Open in new tab',
        'comment' => 'If activated, when someone clicks this link, it\'ll open it in a new tab.',
        'span' => 'right',
      ),
      'icon' => 
      array (
        'label' => 'Icon',
        'type' => 'text',
        'span' => 'auto',
        'tab' => 'General',
      ),
    ),
    'handleSlug' => 'content_buttons',
  ),
  'ed7df322-083f-11ed-a233-11166f9cffdf' => 
  array (
    'uuid' => 'ed7df322-083f-11ed-a233-11166f9cffdf',
    'handle' => 'Content\\Form',
    'type' => 'mixin',
    'multisite' => 'sync',
    'name' => 'Form',
    'fields' => 
    array (
      'forms' => 
      array (
        'type' => 'entries',
        'label' => 'Form',
        'commentAbove' => 'Choose a forms you want to display.',
        'source' => 'Content\\Forms',
        'displayMode' => 'recordfinder',
        'maxItems' => 1,
        'tab' => 'General',
      ),
    ),
    'handleSlug' => 'content_form',
  ),
  '1a55cbd0-0840-11ed-900b-0e02148bcfbe' => 
  array (
    'uuid' => '1a55cbd0-0840-11ed-900b-0e02148bcfbe',
    'handle' => 'Content\\FormColumn',
    'type' => 'mixin',
    'name' => 'Form',
    'fields' => 
    array (
      'column_header' => 
      array (
        'type' => 'mixin',
        'label' => 'Column Header',
        'source' => 'Content\\ColumnHeader',
      ),
      'form' => 
      array (
        'type' => 'entries',
        'label' => 'Form',
        'commentAbove' => 'Choose a form you want to display.',
        'source' => 'Content\\Forms',
        'displayMode' => 'recordfinder',
        'maxItems' => 1,
      ),
      'column_options' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\ColumnOptions',
      ),
      'advanced_content' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\AdvancedFieldsColumn',
        'label' => 'Advanced Settings',
        'tab' => 'Advanced',
      ),
    ),
    'handleSlug' => 'content_form_column',
  ),
  'b40edf19-a48b-11ed-991f-e92b3ed5c133' => 
  array (
    'uuid' => 'b40edf19-a48b-11ed-991f-e92b3ed5c133',
    'handle' => 'Content\\AdvancedFields',
    'type' => 'mixin',
    'name' => 'Advanced Fields',
    'fields' => 
    array (
      'css_classes' => 
      array (
        'type' => 'taglist',
        'label' => 'CSS Classes',
        'commentAbove' => 'Specify CSS classes for this section. Separate them with a comma.',
        'span' => 'left',
        'tab' => 'Advanced',
      ),
      'html_anchor' => 
      array (
        'type' => 'text',
        'label' => 'ID/Anchor',
        'commentAbove' => 'Specify a unique ID for this section.',
        'commentHtml' => true,
        'validation' => 'alpha_dash',
        'span' => 'right',
        'tab' => 'Advanced',
      ),
      'container_style' => 
      array (
        'type' => 'dropdown',
        'label' => 'Container Style',
        'commentAbove' => 'Choose the container style. Pick "Fluid" for full width.',
        'tab' => 'Advanced',
        'span' => 'left',
        'options' => 
        array (
          'container' => 'Normal',
          'container-fluid' => 'Fluid',
        ),
      ),
      'html_tag' => 
      array (
        'type' => 'dropdown',
        'label' => 'HTML Tag type',
        'commentAbove' => 'Override this block tag to one of the options below.',
        'span' => 'right',
        'tab' => 'Advanced',
        'options' => 
        array (
          'section' => 'Section',
          'header' => 'Header',
          'article' => 'Article',
        ),
      ),
    ),
    'handleSlug' => 'content_advanced_fields',
  ),
  'f1552d25-70b7-11ed-a56d-4202acb2e0bc' => 
  array (
    'uuid' => 'f1552d25-70b7-11ed-a56d-4202acb2e0bc',
    'handle' => 'Content\\CodeFields',
    'type' => 'mixin',
    'name' => 'Code Fields',
    'fields' => 
    array (
      'header_code' => 
      array (
        'label' => 'Header Code',
        'type' => 'codeeditor',
        'language' => 'html',
        'commentAbove' => 'Insert code inside the <code>&lt;head&gt;</code> on this page. Useful if you have some tracking code that needs to be entered.',
        'commentHtml' => true,
        'translatable' => false,
        'tab' => 'Code',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
      ),
      'body_code' => 
      array (
        'label' => 'Body Code',
        'type' => 'codeeditor',
        'language' => 'html',
        'commentAbove' => 'Insert code right after the opening <code>&lt;body&gt;</code> tag on this page. Useful if you have some tracking code that needs to be entered.',
        'commentHtml' => true,
        'translatable' => false,
        'tab' => 'Code',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
      ),
      'footer_code' => 
      array (
        'label' => 'Footer Code',
        'translatable' => false,
        'type' => 'codeeditor',
        'language' => 'html',
        'commentAbove' => 'Insert code right before the closing <code>&lt;/body&gt;</code> tag on this page. Useful if you have some tracking code that needs to be entered.',
        'commentHtml' => true,
        'tab' => 'Code',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
      ),
      'schema_code' => 
      array (
        'label' => 'Schema Code',
        'translatable' => true,
        'type' => 'codeeditor',
        'language' => 'html',
        'commentAbove' => 'Insert the schema code here including <code>&lt;script&gt;</code> tag.',
        'commentHtml' => true,
        'tab' => 'Code',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-4',
      ),
    ),
    'handleSlug' => 'content_code_fields',
  ),
  '3034bbe6-a717-11ed-a6fb-c04e8b85ae38' => 
  array (
    'uuid' => '3034bbe6-a717-11ed-a6fb-c04e8b85ae38',
    'handle' => 'Content\\Pagination',
    'type' => 'mixin',
    'name' => 'Pagination',
    'fields' => 
    array (
      'hr_pagination' => 
      array (
        'type' => 'ruler',
        'tab' => 'General',
      ),
      'enable_pagination' => 
      array (
        'type' => 'switch',
        'label' => 'Enable Pagination',
        'comment' => 'Enable Pagination for this block. Also disables the limit. Applies to all content (old and new).',
        'span' => 'left',
        'tab' => 'General',
        'trigger' => 
        array (
          'action' => 'disable|empty',
          'field' => 'show_specific_items',
          'condition' => 'checked',
        ),
      ),
    ),
    'handleSlug' => 'content_pagination',
  ),
  'b50bab4d-a3c8-4ba4-97eb-d45117f33eb8' => 
  array (
    'uuid' => 'b50bab4d-a3c8-4ba4-97eb-d45117f33eb8',
    'handle' => 'Content\\SEOFields',
    'type' => 'mixin',
    'name' => 'SEO Fields',
    'fields' => 
    array (
      'meta_title' => 
      array (
        'label' => 'Meta Title',
        'tab' => 'Manage',
        'type' => 'text',
        'commentAbove' => 'Meta Title. Used for SEO',
        'attributes' => 
        array (
          'maxlength' => 70,
        ),
        'preset' => 
        array (
          'field' => 'title',
          'type' => 'exact',
        ),
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-6',
        'column' => false,
      ),
      'change_frequency' => 
      array (
        'commentAbove' => 'How frequently the page is likely to change. Used for the Sitemap definition',
        'label' => 'Sitemap Change Frequency',
        'type' => 'dropdown',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-3',
        'default' => 'value[daily]',
        'translatable' => false,
        'options' => 
        array (
          'always' => 'Always',
          'hourly' => 'Hourly',
          'daily' => 'Daily',
          'weekly' => 'Weekly',
          'monthly' => 'Monthly',
          'yearly' => 'Yearly',
          'never' => 'Never',
        ),
        'trigger' => 
        array (
          'action' => 'disable',
          'field' => 'exclude_in_sitemap',
          'condition' => 'checked',
        ),
      ),
      'priority' => 
      array (
        'label' => 'URL Priority',
        'commentAbove' => 'The priority of this URL relative to other URLs on your site. Used for the Sitemap definition',
        'type' => 'dropdown',
        'span' => 'row',
        'translatable' => false,
        'spanClass' => 'col-12 col-lg-3',
        'default' => 'value[0.8]',
        'options' => 
        array (
          '0.1' => '0.1',
          '0.2' => '0.2',
          '0.3' => '0.3',
          '0.4' => '0.4',
          '0.5' => '0.5',
          '0.6' => '0.6',
          '0.7' => '0.7',
          '0.8' => '0.8',
          '0.9' => '0.9',
          '1.0' => '1.0',
        ),
        'trigger' => 
        array (
          'action' => 'disable',
          'field' => 'exclude_in_sitemap',
          'condition' => 'checked',
        ),
      ),
      'sharing_image' => 
      array (
        'label' => 'Sharing Image',
        'tab' => 'Manage',
        'type' => 'mediafinder',
        'translatable' => false,
        'commentAbove' => 'Image used for social media sites (Facebook, Twitter, Etc.)',
        'mode' => 'image',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-6',
        'maxItems' => 1,
        'column' => false,
      ),
      'exclude_in_sitemap' => 
      array (
        'label' => 'Remove from Sitemap',
        'type' => 'switch',
        'tab' => 'Manage',
        'translatable' => false,
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-6',
        'cssClass' => 'mt-4',
        'comment' => 'Remove this item from the <a target="_blank" href="/sitemap.xml">sitemap.xml</a> file. Useful if you don\'t want search engines to index this page.',
        'commentHtml' => true,
        'default' => 'unchecked',
        'column' => false,
        'scope' => false,
      ),
      'meta_description' => 
      array (
        'label' => 'Meta Description',
        'tab' => 'Manage',
        'type' => 'textarea',
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-6',
        'commentAbove' => 'Meta Description. Used for SEO. Limited to 300 characters.',
        'attributes' => 
        array (
          'maxlength' => 300,
        ),
      ),
      'robots' => 
      array (
        'label' => 'Robots Info',
        'commentAbove' => 'Use this section to determine what search engine robots should do when they reach your page.',
        'tab' => 'Manage',
        'type' => 'checkboxlist',
        'translatable' => false,
        'span' => 'row',
        'spanClass' => 'col-12 col-lg-6',
        'quickselect' => true,
        'column' => false,
        'scope' => false,
        'options' => 
        array (
          'noindex' => 
          array (
            0 => 'No Index',
            1 => 'Disallow search engine robots to index this page.',
          ),
          'nofollow' => 
          array (
            0 => 'No Follow',
            1 => 'Disallow disallow search engines from crawling the links on this page.',
          ),
        ),
      ),
    ),
    'handleSlug' => 'content_s_e_o_fields',
  ),
  'e77eeaff-0f6a-47ef-9d3e-e3f2e39ea951' => 
  array (
    'uuid' => 'e77eeaff-0f6a-47ef-9d3e-e3f2e39ea951',
    'handle' => 'Content\\Content',
    'type' => 'mixin',
    'name' => 'Content',
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'commentAbove' => 'Title of this section',
        'type' => 'text',
        'span' => 'auto',
        'tab' => 'General',
      ),
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'mediafinder',
        'commentAbove' => 'Image of this section',
        'span' => 'auto',
        'mode' => 'image',
        'maxItems' => 1,
        'tab' => 'General',
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'textarea',
        'commentAbove' => 'Text content of this section',
        'span' => 'full',
        'size' => 'small',
        'tab' => 'General',
      ),
      'button' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\Buttons',
        'commentAbove' => 'Display link in your content as button. Use a Page or specify a link.',
        'tab' => 'General',
      ),
    ),
    'handleSlug' => 'content_content',
  ),
  'e77eeaff-0f6a-47ef-9d3e-e3f2e39ea351' => 
  array (
    'uuid' => 'e77eeaff-0f6a-47ef-9d3e-e3f2e39ea351',
    'handle' => 'Content\\ContentRich',
    'type' => 'mixin',
    'name' => 'ContentRich',
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'commentAbove' => 'Title of this section',
        'type' => 'text',
        'span' => 'left',
        'tab' => 'General',
      ),
      'title_type' => 
      array (
        'label' => 'Header Tag',
        'commentAbove' => 'Pick <h> tag for title',
        'type' => 'dropdown',
        'default' => 'h2',
        'options' => 
        array (
          'h2' => 'h2',
          'h3' => 'h3',
        ),
        'span' => 'right',
        'tab' => 'General',
      ),
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'mediafinder',
        'commentAbove' => 'Image of this section',
        'span' => 'full',
        'mode' => 'image',
        'maxItems' => 1,
        'tab' => 'General',
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'richeditor',
        'commentAbove' => 'Text content of this section',
        'span' => 'full',
        'size' => 'huge',
        'tab' => 'General',
      ),
      'button' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\Buttons',
        'commentAbove' => 'Display link in your content as button. Use a Page or specify a link.',
        'tab' => 'General',
      ),
    ),
    'handleSlug' => 'content_content_rich',
  ),
  '1be4d611-a49d-11ed-9116-3a678152e91c' => 
  array (
    'uuid' => '1be4d611-a49d-11ed-9116-3a678152e91c',
    'handle' => 'Content\\Section',
    'type' => 'mixin',
    'name' => 'Section',
    'fields' => 
    array (
      'section_header' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\SectionHeader',
      ),
      'reverse_columns_on_mobile' => 
      array (
        'label' => 'Reverse Columns on Mobile',
        'comment' => 'Useful if you have content that needs to be stacked a different way on a phone.',
        'type' => 'switch',
        'tab' => 'Style',
      ),
      'columns' => 
      array (
        'label' => 'Content',
        'type' => 'repeater',
        'commentAbove' => 'Create content for this section. Each content block uses it\'s own column. Max of 4 per section.',
        'span' => 'full',
        'displayMode' => 'builder',
        'tab' => 'General',
        'groups' => 
        array (
          'content' => 
          array (
            'name' => 'Content',
            'icon' => 'icon-align-left',
            'description' => 'Add content to your section. Has buttons as well.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'column_header' => 
              array (
                'type' => 'mixin',
                'label' => 'Column Header',
                'source' => 'Content\\ColumnHeader',
              ),
              'content' => 
              array (
                'label' => 'Content',
                'type' => 'richeditor',
                'tab' => 'General',
              ),
              'hr_1' => 
              array (
                'type' => 'ruler',
                'tab' => 'General',
              ),
              'buttons' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\Buttons',
                'commentAbove' => 'Display links in your content as buttons. Use a Page or specify a link. Max of 3 per content block.',
                'tab' => 'General',
              ),
              'column_options' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\ColumnOptions',
              ),
              'advanced_content' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFieldsColumn',
                'label' => 'Advanced Settings',
                'tab' => 'Advanced',
              ),
            ),
          ),
          'buttons' => 
          array (
            'name' => 'Buttons',
            'icon' => 'icon-link',
            'titleFrom' => 'title',
            'description' => 'Add buttons to your section.',
            'useTabs' => true,
            'fields' => 
            array (
              'column_header' => 
              array (
                'type' => 'mixin',
                'label' => 'Column Header',
                'source' => 'Content\\ColumnHeader',
              ),
              'buttons' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\Buttons',
                'commentAbove' => 'Display links in your content as buttons. Use a Page or specify a link. Max of 3 per content block.',
                'tab' => 'General',
              ),
              'column_options' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\ColumnOptions',
              ),
              'advanced_content' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFieldsColumn',
                'label' => 'Advanced Settings',
                'tab' => 'Advanced',
              ),
            ),
          ),
          'image' => 
          array (
            'name' => 'Image',
            'icon' => 'icon-image',
            'description' => 'Add an image to your section.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'column_header' => 
              array (
                'type' => 'mixin',
                'label' => 'Column Header',
                'source' => 'Content\\ColumnHeader',
              ),
              'image' => 
              array (
                'label' => 'Image',
                'type' => 'mediafinder',
                'commentAbove' => 'Pick an image for this column.',
                'span' => 'left',
                'mode' => 'image',
                'maxItems' => 1,
                'tab' => 'General',
              ),
              'image_description' => 
              array (
                'label' => 'Image Description',
                'type' => 'text',
                'commentAbove' => 'The Description of the image. Use for SEO purposes.',
                'span' => 'right',
                'tab' => 'General',
              ),
              'image_link' => 
              array (
                'label' => 'Image Link',
                'type' => 'pagefinder',
                'commentAbove' => 'Add a link for this image. Leave empty for no link.',
                'span' => 'full',
                'tab' => 'General',
                'singleMode' => true,
              ),
              'external_link' => 
              array (
                'label' => 'External link',
                'comment' => 'Open in new tab',
                'type' => 'switch',
                'default' => 'unchecked',
                'tab' => 'General',
                'span' => 'full',
              ),
              'column_options' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\ColumnOptions',
              ),
              'advanced_content' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\AdvancedFieldsColumn',
                'label' => 'Advanced Settings',
                'tab' => 'Advanced',
              ),
            ),
          ),
          'posts' => 
          array (
            'name' => 'Posts',
            'icon' => 'icon-newspaper-o',
            'description' => 'Column with blog posts.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'posts' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\PostsColum',
              ),
            ),
          ),
          'events' => 
          array (
            'name' => 'Events',
            'icon' => 'icon-calendar',
            'description' => 'Column with events.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'events' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\EventsColumn',
              ),
            ),
          ),
          'products' => 
          array (
            'name' => 'Products',
            'icon' => 'icon-cube',
            'description' => 'Column with products.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'products' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\ProductsColumn',
              ),
            ),
          ),
          'faqs' => 
          array (
            'name' => 'FAQs',
            'icon' => 'icon-question-circle-o',
            'description' => 'Column with Frequently Asked Questions',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'search' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\FAQsColumn',
              ),
            ),
          ),
          'form' => 
          array (
            'name' => 'Form',
            'icon' => 'icon-list-alt',
            'description' => 'Section with a form.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'form' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\FormColumn',
                'tab' => 'General',
              ),
            ),
          ),
          'search' => 
          array (
            'name' => 'Search',
            'icon' => 'icon-search',
            'description' => 'Section with a search field.',
            'titleFrom' => 'title',
            'useTabs' => true,
            'fields' => 
            array (
              'search' => 
              array (
                'type' => 'mixin',
                'source' => 'Content\\SearchColumn',
              ),
            ),
          ),
        ),
      ),
      'advanced_content' => 
      array (
        'type' => 'mixin',
        'source' => 'Content\\AdvancedFields',
        'label' => 'Advanced Settings',
        'tab' => 'Advanced',
      ),
    ),
    'handleSlug' => 'content_section',
  ),
  'e3df68b2-f675-4ae6-befa-422770a72bda' => 
  array (
    'uuid' => 'e3df68b2-f675-4ae6-befa-422770a72bda',
    'handle' => 'Knowledge\\ArticleContent',
    'type' => 'mixin',
    'name' => 'Article Content',
    'fields' => 
    array (
      'banner' => 
      array (
        'tab' => 'Details',
        'label' => 'Banner',
        'type' => 'mediafinder',
        'mode' => 'image',
        'span' => 'left',
        'maxItems' => 1,
      ),
      'featured_text' => 
      array (
        'tab' => 'Details',
        'label' => 'Featured Text',
        'type' => 'textarea',
        'size' => 'tiny',
        'span' => 'left',
      ),
      'categories' => 
      array (
        'tab' => 'Details',
        'label' => 'Categories',
        'commentAbove' => 'Select categories the blog post belongs to',
        'type' => 'entries',
        'source' => 'Knowledge\\Category',
      ),
    ),
    'handleSlug' => 'knowledge_article_content',
  ),
);