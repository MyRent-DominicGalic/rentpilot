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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/images_list.htm */
class __TwigTemplate_708eeee5a213fe8de1b0829975dfe99d extends Template
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
        yield "\" class=\"overflow-hidden ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "css_classes", [], "any", false, false, false, 1), " "), "html", null, true);
        yield "\">

  <div class=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 3), "html", null, true);
        yield "\">

    <div class=\"px-4 pt-6 pb-12 flex justify-center items-center flex-wrap gap-10\">

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "images", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            yield "            ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 8)) {
                // line 9
                yield "            <a href=\"";
                yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 9));
                yield "\">
            ";
            }
            // line 11
            yield "              <img class=\"filter grayscale transition-all hover:filter-none\" width=\"140\" height=\"80\" src=\"";
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11));
            yield "\" loading=\"lazy\" alt=\"";
            yield Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11), ["<em>" => "", "</em>" => ""]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11), ["-" => " ", "_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
            yield "\" title=\"";
            yield Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11), ["<em>" => "", "</em>" => ""]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11), ["-" => " ", "_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
            yield "\" />
            ";
            // line 12
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 12)) {
                // line 13
                yield "            </a>
            ";
            }
            // line 15
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
    </div>

  </div>


</";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 22), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/images_list.htm";
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
        return array (  105 => 22,  97 => 16,  91 => 15,  87 => 13,  85 => 12,  72 => 11,  66 => 9,  63 => 8,  59 => 7,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"overflow-hidden {{ section.css_classes |join(' ') }}\">

  <div class=\"{{ section.container_style }}\">

    <div class=\"px-4 pt-6 pb-12 flex justify-center items-center flex-wrap gap-10\">

        {% for item in section.images %}
            {% if item.page %}
            <a href=\"{{ item.page | link }}\">
            {% endif %}
              <img class=\"filter grayscale transition-all hover:filter-none\" width=\"140\" height=\"80\" src=\"{{ item.image | media }}\" loading=\"lazy\" alt=\"{{ item.title | replace({ '<em>' : '', '</em>' : '' }) | raw }} {{ item.image | replace({ '-' : ' ', '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" title=\"{{ item.title | replace({ '<em>' : '', '</em>' : '' }) | raw }} {{ item.image | replace({ '-' : ' ', '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" />
            {% if item.page %}
            </a>
            {% endif %}
        {% endfor %}

    </div>

  </div>


</{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/images_list.htm", "");
    }
}
