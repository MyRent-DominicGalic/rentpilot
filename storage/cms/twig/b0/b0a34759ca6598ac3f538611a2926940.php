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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/hero.htm */
class __TwigTemplate_47c6e72871efacb53a8a57e0863b1fc7 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 1), "html", null, true);
        yield " id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_anchor", [], "any", false, false, false, 1), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "css_classes", [], "any", false, false, false, 1), " "), "html", null, true);
        yield "\">

    <div class=\"relative\">

        <div class=\"absolute top-0 left-0 w-full h-full\">
            <img class=\"w-full h-full object-cover\" src=\"";
        // line 6
        yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 6));
        yield "\" fetchpriority=\"high\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 6), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
        yield "\" title=\"";
        yield Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 6), ["<em>" => "", "</em>" => ""]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 6), ["-" => " ", "_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
        yield " \" />
        </div>

        <div class=\"absolute top-0 left-0 w-full h-full bg-teal mix-blend-multiply\"></div>
        <div class=\"absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 mix-blend-multiply\"></div>

        <div class=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 12), "html", null, true);
        yield " px-4 max-w-4xl mx-auto ";
        yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_anchor", [], "any", false, false, false, 12) == "home-hero")) ? ("pt-24 pb-44") : ("pt-36 pb-28"));
        yield " text-center text-white relative\">
            ";
        // line 13
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "above_title", [], "any", false, false, false, 13)) {
            // line 14
            yield "            <div class=\"text-sm font-bold uppercase mb-3 tracking-wider\">
              ";
            // line 15
            yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "above_title", [], "any", false, false, false, 15);
            yield "
            </div>
            ";
        }
        // line 18
        yield "            <";
        yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", true, true, false, 18) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", false, false, false, 18)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", false, false, false, 18), "html", null, true)) : ("h1"));
        yield " class=\"text-h1 mb-6\">
              ";
        // line 19
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 19);
        yield "
            </";
        // line 20
        yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", true, true, false, 20) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", false, false, false, 20)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", false, false, false, 20), "html", null, true)) : ("h1"));
        yield ">
            <p class=\"text-lg lg:text-xl font-medium mb-12 md:px-24\">
              ";
        // line 22
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "content", [], "any", false, false, false, 22);
        yield "
            </p>
            ";
        // line 24
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "button_page", [], "any", false, false, false, 24)) {
            // line 25
            yield "            <div class=\"inline-block bg-white rounded-full\">
                <a href=\"";
            // line 26
            yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "button_page", [], "any", false, false, false, 26));
            yield "\" ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "button_external", [], "any", false, false, false, 26)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
            yield " class=\"block font-bold bg-secondary bg-opacity-5 text-primary transition ease-out duration-300 hover:bg-opacity-20 rounded-full px-5 py-2.5\">
                  ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "button_title", [], "any", false, false, false, 27), "html", null, true);
            yield "
                </a>
            </div>
            ";
        }
        // line 31
        yield "        </div>


    </div>

</";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 36), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/hero.htm";
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
        return array (  131 => 36,  124 => 31,  117 => 27,  111 => 26,  108 => 25,  106 => 24,  101 => 22,  96 => 20,  92 => 19,  87 => 18,  81 => 15,  78 => 14,  76 => 13,  70 => 12,  55 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"{{ section.css_classes |join(' ') }}\">

    <div class=\"relative\">

        <div class=\"absolute top-0 left-0 w-full h-full\">
            <img class=\"w-full h-full object-cover\" src=\"{{ section.image | media }}\" fetchpriority=\"high\" alt=\"{{ section.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" title=\"{{ section.title | replace({ '<em>' : '', '</em>' : '' }) | raw }} {{ section.image | replace({ '-' : ' ', '_' : ' ', '/site-images/' : '', '.webp' : '' }) }} \" />
        </div>

        <div class=\"absolute top-0 left-0 w-full h-full bg-teal mix-blend-multiply\"></div>
        <div class=\"absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 mix-blend-multiply\"></div>

        <div class=\"{{ section.container_style }} px-4 max-w-4xl mx-auto {{ section.html_anchor == 'home-hero' ? 'pt-24 pb-44' : 'pt-36 pb-28' }} text-center text-white relative\">
            {% if section.above_title %}
            <div class=\"text-sm font-bold uppercase mb-3 tracking-wider\">
              {{ section.above_title | raw }}
            </div>
            {% endif %}
            <{{ section.title_html_tag ?? 'h1' }} class=\"text-h1 mb-6\">
              {{ section.title | raw }}
            </{{ section.title_html_tag ?? 'h1' }}>
            <p class=\"text-lg lg:text-xl font-medium mb-12 md:px-24\">
              {{ section.content | raw  }}
            </p>
            {% if section.button_page %}
            <div class=\"inline-block bg-white rounded-full\">
                <a href=\"{{ section.button_page | link }}\" {{ section.button_external ? 'target=\"_blank\" rel=\"noopener\"' }} class=\"block font-bold bg-secondary bg-opacity-5 text-primary transition ease-out duration-300 hover:bg-opacity-20 rounded-full px-5 py-2.5\">
                  {{ section.button_title }}
                </a>
            </div>
            {% endif %}
        </div>


    </div>

</{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/hero.htm", "");
    }
}
