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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/header_section.htm */
class __TwigTemplate_0c0b52e9360121530337f171efd35d73 extends Template
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

    <div class=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 3), "html", null, true);
        yield "\">
      <div class=\"pt-10 lg:pt-16 max-w-2xl mx-auto text-center\">
        ";
        // line 5
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "above_title", [], "any", false, false, false, 5)) {
            // line 6
            yield "          <p class=\"text-sm uppercase font-bold mb-4 max-w-md mx-auto\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "above_title", [], "any", false, false, false, 6), "html", null, true);
            yield "</p>
        ";
        }
        // line 8
        yield "        <";
        yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", true, true, false, 8) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", false, false, false, 8)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", false, false, false, 8), "html", null, true)) : ("h2"));
        yield " class=\"text-h2 mb-4\">
          ";
        // line 9
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 9);
        yield "
        </";
        // line 10
        yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", true, true, false, 10) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", false, false, false, 10)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title_html_tag", [], "any", false, false, false, 10), "html", null, true)) : ("h2"));
        yield ">
        ";
        // line 11
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sub_title", [], "any", false, false, false, 11)) {
            // line 12
            yield "          <div class=\"rich-em font-medium text-gray max-w-lg mx-auto leading-relaxed\">
            ";
            // line 13
            yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sub_title", [], "any", false, false, false, 13));
            yield "
          </div>
        ";
        }
        // line 16
        yield "      </div>
    </div>

</";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 19), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/header_section.htm";
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
        return array (  94 => 19,  89 => 16,  83 => 13,  80 => 12,  78 => 11,  74 => 10,  70 => 9,  65 => 8,  59 => 6,  57 => 5,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"{{ section.css_classes |join(' ') }}\">

    <div class=\"{{ section.container_style }}\">
      <div class=\"pt-10 lg:pt-16 max-w-2xl mx-auto text-center\">
        {% if section.above_title %}
          <p class=\"text-sm uppercase font-bold mb-4 max-w-md mx-auto\">{{ section.above_title }}</p>
        {% endif %}
        <{{ section.title_html_tag ?? 'h2' }} class=\"text-h2 mb-4\">
          {{ section.title | raw }}
        </{{ section.title_html_tag ?? 'h2' }}>
        {% if section.sub_title %}
          <div class=\"rich-em font-medium text-gray max-w-lg mx-auto leading-relaxed\">
            {{ section.sub_title | content  }}
          </div>
        {% endif %}
      </div>
    </div>

</{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/header_section.htm", "");
    }
}
