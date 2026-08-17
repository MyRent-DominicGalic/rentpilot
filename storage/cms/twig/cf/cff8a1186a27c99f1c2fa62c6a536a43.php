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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/posts.htm */
class __TwigTemplate_df975b1c23148f714177ea6b67f454f7 extends Template
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
        yield "<";
        yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", true, true, false, 1) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 1)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 1), "html", null, true)) : ("div"));
        yield " id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_anchor", [], "any", false, false, false, 1), "html", null, true);
        yield "\" class=\"pb-16 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "css_classes", [], "any", false, false, false, 1), " "), "html", null, true);
        yield "\">

    <div class=\"";
        // line 3
        yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", true, true, false, 3) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 3)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 3), "html", null, true)) : ("container"));
        yield "\">

        ";
        // line 5
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "show_category_nav", [], "any", false, false, false, 5)) {
            // line 6
            yield "          ";
            $cmsPartialParams = [];
            yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("builder/blogs/_sidebar"            , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)            , true            );
            // line 7
            yield "        ";
        }
        // line 8
        yield "
        <div id=\"posts-ajax\">
          ";
        // line 10
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("builder/blogs/_ajaxlist"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 11
        yield "        </div>

        ";
        // line 13
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "url", [], "any", false, false, false, 13)) {
            // line 14
            yield "        <footer class=\"mb-16\">
            <a class=\"inline-block text-base font-medium border border-purple bg-purple hover:bg-purple-light transition-all text-white rounded-full px-4 py-1\" href=\"";
            // line 15
            yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "url", [], "any", false, false, false, 15));
            yield "\">
              Pogledaj više
            </a>
        </footer>
        ";
        }
        // line 20
        yield "
    </div>

</";
        // line 23
        yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", true, true, false, 23) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 23)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 23), "html", null, true)) : ("div"));
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/posts.htm";
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
        return array (  95 => 23,  90 => 20,  82 => 15,  79 => 14,  77 => 13,  73 => 11,  70 => 10,  66 => 8,  63 => 7,  59 => 6,  57 => 5,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag ?? 'div' }} id=\"{{ section.html_anchor }}\" class=\"pb-16 {{ section.css_classes |join(' ') }}\">

    <div class=\"{{ section.container_style ?? 'container' }}\">

        {% if section.show_category_nav %}
          {% partial 'builder/blogs/_sidebar' %}
        {% endif %}

        <div id=\"posts-ajax\">
          {% partial 'builder/blogs/_ajaxlist' %}
        </div>

        {% if section.url %}
        <footer class=\"mb-16\">
            <a class=\"inline-block text-base font-medium border border-purple bg-purple hover:bg-purple-light transition-all text-white rounded-full px-4 py-1\" href=\"{{ section.url | link }}\">
              Pogledaj više
            </a>
        </footer>
        {% endif %}

    </div>

</{{ section.html_tag ?? 'div' }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/posts.htm", "");
    }
}
