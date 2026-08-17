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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/content_section.htm */
class __TwigTemplate_92fbaedd455d460cd325d0a907b203e9 extends Template
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
      <div class=\"w-full lg:py-12 py-8\">
        ";
        // line 5
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 5)) {
            // line 6
            yield "          <img class=\"w-full h-auto max-w-2xl mx-auto mb-12\" src=\"";
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 6));
            yield "\" loading=\"lazy\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 6), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
            yield "\"  />
        ";
        }
        // line 8
        yield "        <div class=\"w-full flex flex-col items-center justify-center text-center mx-auto max-w-3xl\">
            <h2 class=\"mb-4\">";
        // line 9
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 9);
        yield "</h2>
            <div class=\"font-medium text-gray-dark mb-4\">
              ";
        // line 11
        yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "content", [], "any", false, false, false, 11));
        yield "
            </div>
            ";
        // line 13
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "button_page", [], "any", false, false, false, 13)) {
            // line 14
            yield "            <a href=\"";
            yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "button_page", [], "any", false, false, false, 14));
            yield "\" ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "button_external", [], "any", false, false, false, 14)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
            yield " class=\"inline-block text-sm mt-3 lg:text-base bg-primary text-silver-light transition ease-out duration-300 rounded-full px-4 lg:px-5 py-2 lg:py-2.5 font-bold hover:bg-secondary\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "button_title", [], "any", false, false, false, 14), "html", null, true);
            yield "\">
                ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "button_title", [], "any", false, false, false, 15), "html", null, true);
            yield "
            </a>
            ";
        }
        // line 18
        yield "        </div>
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
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/content_section.htm";
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
        return array (  103 => 22,  97 => 18,  91 => 15,  82 => 14,  80 => 13,  75 => 11,  70 => 9,  67 => 8,  59 => 6,  57 => 5,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"{{ section.css_classes |join(' ') }}\">

    <div class=\"{{ section.container_style }}\">
      <div class=\"w-full lg:py-12 py-8\">
        {% if section.image %}
          <img class=\"w-full h-auto max-w-2xl mx-auto mb-12\" src=\"{{ section.image | media }}\" loading=\"lazy\" alt=\"{{ section.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\"  />
        {% endif %}
        <div class=\"w-full flex flex-col items-center justify-center text-center mx-auto max-w-3xl\">
            <h2 class=\"mb-4\">{{ section.title | raw }}</h2>
            <div class=\"font-medium text-gray-dark mb-4\">
              {{ section.content | content }}
            </div>
            {% if section.button_page %}
            <a href=\"{{ section.button_page | link }}\" {{ section.button_external ? 'target=\"_blank\" rel=\"noopener\"' }} class=\"inline-block text-sm mt-3 lg:text-base bg-primary text-silver-light transition ease-out duration-300 rounded-full px-4 lg:px-5 py-2 lg:py-2.5 font-bold hover:bg-secondary\" aria-label=\"{{ section.button_title }}\">
                {{ section.button_title }}
            </a>
            {% endif %}
        </div>
      </div>
    </div>

</{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/content_section.htm", "");
    }
}
