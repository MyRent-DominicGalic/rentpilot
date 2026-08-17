<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* /home/myrent/htdocs/myrent.hr/plugins/pragmaticagility/toc/components/toc/default.htm */
class __TwigTemplate_e5faac53918dddb8e1229ca6fa234b31 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["tocSelector"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tocSelector", [], "any", false, false, false, 1);
        // line 2
        $context["contentSelector"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "contentSelector", [], "any", false, false, false, 2);
        // line 3
        $context["headingSelector"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "headingSelector", [], "any", false, false, false, 3);
        // line 4
        $context["autoHeadings"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "autoHeadings", [], "any", false, false, false, 4);
        // line 5
        $context["listBullets"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "listBullets", [], "any", false, false, false, 5);
        // line 6
        $context["ignoreSelector"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ignoreSelector", [], "any", false, false, false, 6);
        // line 7
        $context["linkClass"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "linkClass", [], "any", false, false, false, 7);
        // line 8
        $context["extraLinkClasses"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "extraLinkClasses", [], "any", false, false, false, 8);
        // line 9
        $context["activeLinkClass"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeLinkClass", [], "any", false, false, false, 9);
        // line 10
        $context["listClass"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "listClass", [], "any", false, false, false, 10);
        // line 11
        $context["extraListClasses"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "extraListClasses", [], "any", false, false, false, 11);
        // line 12
        $context["isCollapsedClass"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "isCollapsedClass", [], "any", false, false, false, 12);
        // line 13
        $context["collapsibleClass"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "collapsibleClass", [], "any", false, false, false, 13);
        // line 14
        $context["listItemClass"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "listItemClass", [], "any", false, false, false, 14);
        // line 15
        $context["collapseDepth"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "collapseDepth", [], "any", false, false, false, 15);
        // line 16
        $context["scrollSmooth"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "scrollSmooth", [], "any", false, false, false, 16);
        // line 17
        $context["scrollSmoothDuration"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "scrollSmoothDuration", [], "any", false, false, false, 17);
        // line 18
        $context["scrollEndCallback"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "scrollEndCallback", [], "any", false, false, false, 18);
        // line 19
        $context["headingsOffset"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "headingsOffset", [], "any", false, false, false, 19);
        // line 20
        $context["throttleTimeout"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "throttleTimeout", [], "any", false, false, false, 20);
        // line 21
        $context["positionFixedSelector"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "positionFixedSelector", [], "any", false, false, false, 21);
        // line 22
        $context["positionFixedClass"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "positionFixedClass", [], "any", false, false, false, 22);
        // line 23
        $context["fixedSidebarOffset"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixedSidebarOffset", [], "any", false, false, false, 23);
        // line 24
        $context["includeHtml"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "includeHtml", [], "any", false, false, false, 24);
        // line 25
        $context["onClick"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "onClick", [], "any", false, false, false, 25);
        // line 26
        $context["orderedList"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "orderedList", [], "any", false, false, false, 26);
        // line 27
        $context["hasInnerContainers"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "hasInnerContainers", [], "any", false, false, false, 27);
        // line 28
        $context["textSize"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "textSize", [], "any", false, false, false, 28);
        // line 29
        yield "

<script type=\"text/javascript\">
    function applyHeaders()
    {
        let x = document.getElementsByClassName(\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["contentSelector"] ?? null), "html", null, true);
        yield "\");
        let array = \"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headingSelector"] ?? null), "html", null, true);
        yield "\".split(\",\").map(function(item) {
            return item.toUpperCase().trim();
        });
        for (let i = 0; i < x[0].children.length; i++) {
            if(array.includes(x[0].children[i].tagName))
            {
                x[0].children[i].id = i.toString();
            }
        }
    }

    function removeListBullets()
    {
        let x = document.getElementsByClassName(\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["listClass"] ?? null), "html", null, true);
        yield "\");
        for (let i = 0; i < x.length; i++) {
            x[i].style.listStyleType = \"none\";
        }

    }

    function setTextSize()
    {
        let x = document.getElementsByClassName(\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["listClass"] ?? null), "html", null, true);
        yield "\");
        for (let i = 0; i < x.length; i++) {

            x[i].style.fontSize = \"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["textSize"] ?? null), "html", null, true);
        yield "px\";
        }
    }

    let callback = function(){

        if(";
        // line 66
        if (($context["autoHeadings"] ?? null)) {
            yield " true ";
        } else {
            yield " false ";
        }
        yield ")
        {
            applyHeaders();
        }

        tocbot.init({
            // Where to render the table of contents.
            tocSelector: '.";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tocSelector"] ?? null), "html", null, true);
        yield "',

            // Where to grab the headings to build the table of contents.
            contentSelector: '.";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["contentSelector"] ?? null), "html", null, true);
        yield "',

            // Which headings to grab inside of the contentSelector element.
            headingSelector: '";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headingSelector"] ?? null), "html", null, true);
        yield " ',

            // Headings that match the ignoreSelector will be skipped.
            ignoreSelector: '.";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ignoreSelector"] ?? null), "html", null, true);
        yield "',

            // Main class to add to links.
            linkClass: '";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["linkClass"] ?? null), "html", null, true);
        yield "',

            // Extra classes to add to links.
            extraLinkClasses: '";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraLinkClasses"] ?? null), "html", null, true);
        yield "',

            // Class to add to active links,
            // the link corresponding to the top most heading on the page.
            activeLinkClass: '";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeLinkClass"] ?? null), "html", null, true);
        yield "',

            // Main class to add to lists.
            listClass: '";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["listClass"] ?? null), "html", null, true);
        yield "',

            // Extra classes to add to lists.
            extraListClasses: '";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraListClasses"] ?? null), "html", null, true);
        yield "',

            // Class that gets added when a list should be collapsed.
            isCollapsedClass: '";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["isCollapsedClass"] ?? null), "html", null, true);
        yield "',

            // Class that gets added when a list should be able
            // to be collapsed but isn't necessarily collpased.
            collapsibleClass: '";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["collapsibleClass"] ?? null), "html", null, true);
        yield "',

            // Class to add to list items.
            listItemClass: '";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["listItemClass"] ?? null), "html", null, true);
        yield "',

            // How many heading levels should not be collpased.
            // For example, number 6 will show everything since
            // there are only 6 heading levels and number 0 will collpase them all.
            // The sections that are hidden will open
            // and close as you scroll to headings within them.
            collapseDepth: ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["collapseDepth"] ?? null), "html", null, true);
        yield ",

            // Smooth scrolling enabled.
            scrollSmooth: ";
        // line 118
        if (($context["scrollSmooth"] ?? null)) {
            yield " true ";
        } else {
            yield " false ";
        }
        yield ",

            // Smooth scroll duration.
            scrollSmoothDuration: ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["scrollSmoothDuration"] ?? null), "html", null, true);
        yield ",

            // Callback for scroll end.
            scrollEndCallback: function (e) { ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["scrollEndCallback"] ?? null), "html", null, true);
        yield " },

            // Headings offset between the headings and the top of the document (this is meant for minor adjustments).
            headingsOffset: ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["headingsOffset"] ?? null), "html", null, true);
        yield ",

            // Timeout between events firing to make sure it's
            // not too rapid (for performance reasons).
            throttleTimeout: ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["throttleTimeout"] ?? null), "html", null, true);
        yield ",

            // Element to add the positionFixedClass to.
            positionFixedSelector: ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["positionFixedSelector"] ?? null), "html", null, true);
        yield ",

            // Fixed position class to add to make sidebar fixed after scrolling
            // down past the fixedSidebarOffset.
            positionFixedClass: '";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["is"] ?? null) - ($context["position"] ?? null)) - ($context["fixed"] ?? null)), "html", null, true);
        yield "',

            // fixedSidebarOffset can be any number but by default is set
            // to auto which sets the fixedSidebarOffset to the sidebar
            // element's offsetTop from the top of the document on init.
            fixedSidebarOffset: '";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fixedSidebarOffset"] ?? null), "html", null, true);
        yield "',

            // includeHtml can be set to true to include the HTML markup from the
            // heading node instead of just including the textContent.
            includeHtml: ";
        // line 147
        if (($context["includeHtml"] ?? null)) {
            yield " true ";
        } else {
            yield " false ";
        }
        yield ",

            // onclick function to apply to all links in toc. will be called with
            // the event as the first parameter, and this can be used to stop,
            // propagation, prevent default or perform action
            onClick: ";
        // line 152
        if (($context["onClick"] ?? null)) {
            yield " true ";
        } else {
            yield " false ";
        }
        yield ",

            orderedList: ";
        // line 154
        if (($context["orderedLists"] ?? null)) {
            yield " true ";
        } else {
            yield " false ";
        }
        yield ",

            hasInnerContainers: ";
        // line 156
        if (($context["hasInnerContainers"] ?? null)) {
            yield " true ";
        } else {
            yield " false ";
        }
        yield ",

        });
        if(";
        // line 159
        if (($context["listBullets"] ?? null)) {
            yield " false ";
        } else {
            yield " true ";
        }
        yield ") {
            removeListBullets();
        }

        if(";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["textSize"] ?? null), "html", null, true);
        yield " > 0)
        {
            setTextSize();
        }

    };

    if (
        document.readyState === \"complete\" ||
        (document.readyState !== \"loading\" && !document.documentElement.doScroll)
    ) {
        callback();
    } else {
        document.addEventListener(\"DOMContentLoaded\", callback);
    }




</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/plugins/pragmaticagility/toc/components/toc/default.htm";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  358 => 163,  347 => 159,  337 => 156,  328 => 154,  319 => 152,  307 => 147,  300 => 143,  292 => 138,  285 => 134,  279 => 131,  272 => 127,  266 => 124,  260 => 121,  250 => 118,  244 => 115,  234 => 108,  228 => 105,  221 => 101,  215 => 98,  209 => 95,  203 => 92,  196 => 88,  190 => 85,  184 => 82,  178 => 79,  172 => 76,  166 => 73,  152 => 66,  143 => 60,  137 => 57,  125 => 48,  109 => 35,  105 => 34,  98 => 29,  96 => 28,  94 => 27,  92 => 26,  90 => 25,  88 => 24,  86 => 23,  84 => 22,  82 => 21,  80 => 20,  78 => 19,  76 => 18,  74 => 17,  72 => 16,  70 => 15,  68 => 14,  66 => 13,  64 => 12,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%  set tocSelector = __SELF__.tocSelector %}
{%  set contentSelector = __SELF__.contentSelector %}
{%  set headingSelector = __SELF__.headingSelector %}
{%  set autoHeadings = __SELF__.autoHeadings %}
{%  set listBullets = __SELF__.listBullets %}
{%  set ignoreSelector = __SELF__.ignoreSelector%}
{%  set linkClass = __SELF__.linkClass %}
{%  set extraLinkClasses = __SELF__.extraLinkClasses %}
{%  set activeLinkClass = __SELF__.activeLinkClass %}
{%  set listClass = __SELF__.listClass %}
{%  set extraListClasses = __SELF__.extraListClasses %}
{%  set isCollapsedClass = __SELF__.isCollapsedClass %}
{%  set collapsibleClass = __SELF__.collapsibleClass %}
{%  set listItemClass = __SELF__.listItemClass %}
{%  set collapseDepth = __SELF__.collapseDepth %}
{%  set scrollSmooth = __SELF__.scrollSmooth %}
{%  set scrollSmoothDuration = __SELF__.scrollSmoothDuration %}
{%  set scrollEndCallback = __SELF__.scrollEndCallback %}
{%  set headingsOffset = __SELF__.headingsOffset %}
{%  set throttleTimeout = __SELF__.throttleTimeout %}
{%  set positionFixedSelector = __SELF__.positionFixedSelector %}
{%  set positionFixedClass = __SELF__.positionFixedClass %}
{%  set fixedSidebarOffset = __SELF__.fixedSidebarOffset %}
{%  set includeHtml = __SELF__.includeHtml %}
{%  set onClick = __SELF__.onClick %}
{%  set orderedList = __SELF__.orderedList %}
{%  set hasInnerContainers = __SELF__.hasInnerContainers %}
{%  set textSize = __SELF__.textSize %}


<script type=\"text/javascript\">
    function applyHeaders()
    {
        let x = document.getElementsByClassName(\"{{contentSelector}}\");
        let array = \"{{headingSelector}}\".split(\",\").map(function(item) {
            return item.toUpperCase().trim();
        });
        for (let i = 0; i < x[0].children.length; i++) {
            if(array.includes(x[0].children[i].tagName))
            {
                x[0].children[i].id = i.toString();
            }
        }
    }

    function removeListBullets()
    {
        let x = document.getElementsByClassName(\"{{listClass}}\");
        for (let i = 0; i < x.length; i++) {
            x[i].style.listStyleType = \"none\";
        }

    }

    function setTextSize()
    {
        let x = document.getElementsByClassName(\"{{listClass}}\");
        for (let i = 0; i < x.length; i++) {

            x[i].style.fontSize = \"{{textSize}}px\";
        }
    }

    let callback = function(){

        if({% if autoHeadings %} true {% else %} false {% endif %})
        {
            applyHeaders();
        }

        tocbot.init({
            // Where to render the table of contents.
            tocSelector: '.{{ tocSelector }}',

            // Where to grab the headings to build the table of contents.
            contentSelector: '.{{ contentSelector }}',

            // Which headings to grab inside of the contentSelector element.
            headingSelector: '{{ headingSelector }} ',

            // Headings that match the ignoreSelector will be skipped.
            ignoreSelector: '.{{ ignoreSelector }}',

            // Main class to add to links.
            linkClass: '{{linkClass}}',

            // Extra classes to add to links.
            extraLinkClasses: '{{extraLinkClasses}}',

            // Class to add to active links,
            // the link corresponding to the top most heading on the page.
            activeLinkClass: '{{activeLinkClass}}',

            // Main class to add to lists.
            listClass: '{{listClass}}',

            // Extra classes to add to lists.
            extraListClasses: '{{ extraListClasses }}',

            // Class that gets added when a list should be collapsed.
            isCollapsedClass: '{{ isCollapsedClass }}',

            // Class that gets added when a list should be able
            // to be collapsed but isn't necessarily collpased.
            collapsibleClass: '{{collapsibleClass}}',

            // Class to add to list items.
            listItemClass: '{{listItemClass}}',

            // How many heading levels should not be collpased.
            // For example, number 6 will show everything since
            // there are only 6 heading levels and number 0 will collpase them all.
            // The sections that are hidden will open
            // and close as you scroll to headings within them.
            collapseDepth: {{ collapseDepth }},

            // Smooth scrolling enabled.
            scrollSmooth: {% if scrollSmooth %} true {% else %} false {% endif %},

            // Smooth scroll duration.
            scrollSmoothDuration: {{scrollSmoothDuration}},

            // Callback for scroll end.
            scrollEndCallback: function (e) { {{scrollEndCallback }} },

            // Headings offset between the headings and the top of the document (this is meant for minor adjustments).
            headingsOffset: {{ headingsOffset }},

            // Timeout between events firing to make sure it's
            // not too rapid (for performance reasons).
            throttleTimeout: {{ throttleTimeout  }},

            // Element to add the positionFixedClass to.
            positionFixedSelector: {{ positionFixedSelector }},

            // Fixed position class to add to make sidebar fixed after scrolling
            // down past the fixedSidebarOffset.
            positionFixedClass: '{{is-position-fixed}}',

            // fixedSidebarOffset can be any number but by default is set
            // to auto which sets the fixedSidebarOffset to the sidebar
            // element's offsetTop from the top of the document on init.
            fixedSidebarOffset: '{{ fixedSidebarOffset }}',

            // includeHtml can be set to true to include the HTML markup from the
            // heading node instead of just including the textContent.
            includeHtml: {% if includeHtml %} true {% else %} false {% endif %},

            // onclick function to apply to all links in toc. will be called with
            // the event as the first parameter, and this can be used to stop,
            // propagation, prevent default or perform action
            onClick: {% if onClick %} true {% else %} false {% endif %},

            orderedList: {% if orderedLists %} true {% else %} false {% endif %},

            hasInnerContainers: {% if hasInnerContainers %} true {% else %} false {% endif %},

        });
        if({% if listBullets %} false {% else %} true {% endif %}) {
            removeListBullets();
        }

        if({{ textSize }} > 0)
        {
            setTextSize();
        }

    };

    if (
        document.readyState === \"complete\" ||
        (document.readyState !== \"loading\" && !document.documentElement.doScroll)
    ) {
        callback();
    } else {
        document.addEventListener(\"DOMContentLoaded\", callback);
    }




</script>
", "/home/myrent/htdocs/myrent.hr/plugins/pragmaticagility/toc/components/toc/default.htm", "");
    }
}
