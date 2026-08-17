<?php
namespace Pragmaticagility\Toc\Components;
use Cms\Classes\ComponentBase;

class Toc extends ComponentBase
{
    public $tocSelector;
    public $contentSelector;
    public $headingSelector;
    public $autoHeadings;
    public $listBullets;
    public $ignoreSelector;
    public $linkClass;
    public $extraLinkClasses;
    public $activeLinkClass;
    public $listClass;
    public $extraListClasses;
    public $isCollapsedClass;
    public $collapsibleClass;
    public $listItemClass;
    public $collapseDepth;
    public $scrollSmooth;
    public $scrollSmoothDuration;
    public $scrollEndCallback;
    public $headingsOffset;
    public $throttleTimeout;
    public $positionFixedSelector;
    public $positionFixedClass;
    public $fixedSidebarOffset;
    public $includeHtml;
    public $onClick;
    public $orderedList;
    public $hasInnerContainers;
    public $textSize;



    public $extraListClass;

    //Define component name and description
    public function componentDetails()
    {
        return [
            'name'        => 'TOC Component',
            'description' => 'Table of contents.  apply ID # to H tags'
        ];
    }

    //No properties to define on the component form
    public function defineProperties()
    {
        return [
             'headingSelector' => [
                'description' => 'Headings that will be targeted by TOC',
                'title'       => 'TOC heading Selector',
                'default'     => 'h1, h2, h3',
                'type'        => 'string'
            ],
            'autoHeadings' => [
                'description' => 'Automatically Apply Heading IDs to indicated headings.  If you unselect this, you must apply ids to your own headings',
                'title'       => 'Auto ID headings',
                'default'     => true,
                'type'        => 'checkbox'
            ],
            'listBullets' => [
                'description' => 'Show list bullets or numbers.  Targets by list class',
                'title'       => 'Show list bullets/numbers',
                'default'     => true,
                'type'        => 'checkbox'
            ],
            'tocSelector' =>[
                'description' => 'Where to render the table of contents',
                'title'       => 'Render div class',
                'default'     => 'js-toc',
                'type'        => 'string'
            ],
           'contentSelector' =>[
               'description' => 'Where to grab the headings to build the table of contents.',
               'title'       => 'Capture div class',
               'default'     => 'js-toc-content',
               'type'        => 'string'
              ],
            'ignoreSelector' =>[
                'description' => 'Headings that match the ignoreSelector will be skipped.',
                'title'       => 'Ignore div class',
                'default'     => 'js-toc-ignore',
                'type'        => 'string'
            ],
            'scrollSmooth' =>[
        'description' => 'Smooth scrolling enabled.',
        'title'       => 'Smooth Scrolling',
        'default'     => true,
        'type'        => 'checkbox'
           ],
            'linkClass' =>[
                'description' => 'Main class to add to links.',
                'title'       => 'Link Class',
                'default'     => 'toc-link',
                'type'        => 'string'
            ],
            'extraLinkClasses' =>[
                'description' => 'Extra classes to add to links.',
                'title'       => 'Extra Link Classes',
                'default'     => '',
                'type'        => 'string'
            ],
            'activeLinkClass' =>[
                'description' => 'Class to add to active links.  the link corresponding to the top most heading on the page.',
                'title'       => 'Active Link Classes',
                'default'     => 'is-active-link',
                'type'        => 'string'
            ],
            'listClass' =>[
                'description' => 'Main class to add to lists.',
                'title'       => 'List Class',
                'default'     => 'toc-list',
                'type'        => 'string'
            ],
            'extraListClasses' =>[
                'description' => 'Extra classes to add to lists.',
                'title'       => 'Extra List Classes',
                'default'     => '',
                'type'        => 'string'
            ],
            'isCollapsedClass' =>[
                'description' => 'Class that gets added when a list should be collapsed.',
                'title'       => 'Is Collapsed Class',
                'default'     => 'is-collapsed',
                'type'        => 'string'
            ],
            'collapsibleClass' =>[
                'description' => 'Class that gets added when a list should be able to be collapsed but isn\'t necessarily collapsed.',
                'title'       => 'Collapsed Class',
                'default'     => 'is-collapsible',
                'type'        => 'string'
            ],
            'listItemClass' =>[
                'description' => 'Class to add to list items.',
                'title'       => 'List Item Class',
                'default'     => 'toc-list-item',
                'type'        => 'string'
            ],
            'collapseDepth' =>[
                'description' => 'How many heading levels should not be collapsed.  there are only 6 heading levels and number 0 will collpase them all.',
                'title'       => 'Collapsed Depth',
                'default'     => 0,
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Collapse Depth must be a number.'
            ],
            'scrollSmoothDuration' =>[
                'description' => 'Smooth scroll duration.',
                'title'       => 'Scroll Smooth Duration',
                'default'     => 420,
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Smooth scroll duration must be a number.'
            ],
            'headingsOffset' =>[
                'description' => 'Headings offset between the headings and the top of the document (this is meant for minor adjustments).',
                'title'       => 'Headings Offset',
                'default'     => 1,
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Headings Offset must be a number.'
            ],
            'throttleTimeout' =>[
                'description' => 'Timeout between events firing to make sure it\'s not too rapid (for performance reasons).',
                'title'       => 'throttle Timeout',
                'default'     => 50,
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'throttle Timeout must be a number.'
            ],
            'positionFixedSelector' =>[
                'description' => 'Element to add the positionFixedClass to.',
                'title'       => 'Position Fixed Selector',
                'default'     => 'null',
                'type'        => 'string'
            ],
            'positionFixedClass' =>[
                'description' => 'Fixed position class to add to make sidebar fixed after scrolling down past the fixedSidebarOffset',
                'title'       => 'Position Fixed Class',
                'default'     => 'is-position-fixed',
                'type'        => 'string'
            ],
            'fixedSidebarOffset' =>[
                'description' => 'fixedSidebarOffset can be any number but by default is set to auto which sets the fixedSidebarOffset to the sidebar element\'s offsetTop from the top of the document on init.',
                'title'       => 'Fixed Sidebar Offset',
                'default'     => 'auto',
                'type'        => 'string'
            ],
            'includeHtml' =>[
                'description' => 'includeHtml can be set to true to include the HTML markup from the heading node instead of just including the textContent.',
                'title'       => 'Include HTML',
                'default'     => false,
                'type'        => 'checkbox'
            ],
            'onClick' =>[
                'description' => 'onclick function to apply to all links in toc. will be called with the event as the first parameter, and this can be used to stop, propagation, prevent default or perform action',
                'title'       => 'On Click',
                'default'     => false,
                'type'        => 'checkbox'
            ],
            'scrollEndCallback' =>[
                'description' => 'Callback for scroll end.',
                'title'       => 'Scroll End Callback.',
                'default'     => '',
                'type'        => 'string'
            ],
            'orderedList' =>[
                'description' => 'Switch for ordered list versus unordered list',
                'title'       => 'Ordered List',
                'default'     => true,
                'type'        => 'checkbox'
            ],
            'textSize' =>[
                'description' => 'Text size of toc list in pixels.  0 is the default size',
                'title'       => 'Text Size',
                'default'     => 0,
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Text size should be numerical.  Pixels'
            ],
            'hasInnerContainers' =>[
                'description' => 'For headings inside relative or absolute positioned containers within content',
                'title'       => 'Has Inner Containers',
                'default'     => false,
                'type'        => 'checkbox'
            ]


        ];
    }

    //Initial run event.
    public function onRun()
    {
        $this->headingSelector = $this->property('headingSelector');
        $this->autoHeadings = $this->property('autoHeadings');
        $this->listBullets =$this->property('listBullets');
        $this->tocSelector = $this->property('tocSelector');
        $this->contentSelector = $this->property('contentSelector');
        $this->ignoreSelector = $this->property('ignoreSelector');
        $this->scrollSmooth = $this->property('scrollSmooth');
        $this->linkClass = $this->property('linkClass');
        $this->extraLinkClasses = $this->property('extraLinkClasses');
        $this->activeLinkClass = $this->property('activeLinkClass');
        $this->listClass = $this->property('listClass');
        $this->extraListClasses = $this->property('extraListClasses');
        $this->isCollapsedClass = $this->property('isCollapsedClass');
        $this->collapsibleClass = $this->property('collapsibleClass');
        $this->listItemClass = $this->property('listItemClass');
        $this->collapseDepth = $this->property('collapseDepth');
        $this->scrollSmoothDuration = $this->property('scrollSmoothDuration');
        $this->scrollEndCallback = $this->property('scrollEndCallback');
        $this->headingsOffset = $this->property('headingsOffset');

        $this->throttleTimeout = $this->property('throttleTimeout');
        $this->positionFixedSelector = $this->property('positionFixedSelector');
        $this->positionFixedClass = $this->property('positionFixedClass');
        $this->fixedSidebarOffset = $this->property('fixedSidebarOffset');
        $this->includeHtml = $this->property('includeHtml');
        $this->onClick = $this->property('onClick');
        $this->orderedList = $this->property('orderedList');
        $this->hasInnerContainers = $this->property('hasInnerContainers');

        $this->textSize= $this->property('textSize');


        $this->addCss('/plugins/pragmaticagility/toc/assets/css/toc.css');

        //Add JS
        $this->addJs('/plugins/pragmaticagility/toc/assets/js/toc.js');
    }
}
