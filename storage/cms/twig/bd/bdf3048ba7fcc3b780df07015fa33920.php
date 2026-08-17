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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/reviews_list.htm */
class __TwigTemplate_9ec38fec85e37f8c70f8246dd6473294 extends Template
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
        yield " \">
      <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

          ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "reviews", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            yield "          <";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 7)) ? ("a") : ("div"));
            yield " ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 7)) {
                yield "href=\"";
                yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 7));
                yield "\"";
            }
            yield " class=\"";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 7)) ? ("cursor-pointer") : (""));
            yield " hover:filter-none flex flex-col gap-4 relative transition-all hover:shadow-xl border border-silver-light p-6 rounded-2xl\">
              <img class=\"absolute -top-5 -left-4\" width=\"42\" height=\"42\" src=\"";
            // line 8
            yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/bi-quote.svg");
            yield "\" alt=\"icon\" />
              <p class=\"text-lg text-gray-dark font-medium\">
                ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 10), "html", null, true);
            yield "
              </p>
              <div class=\"flex items-center justify-between gap-4\">
                  <div>
                      <div class=\"font-bold\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "author", [], "any", false, false, false, 14), "html", null, true);
            yield "</div>
                      <div class=\"font-medium text-sm text-gray\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "company", [], "any", false, false, false, 15), "html", null, true);
            yield "</div>
                  </div>
                  <img class=\"filter grayscale\" width=\"109\" height=\"44\" src=\"";
            // line 17
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "logo", [], "any", false, false, false, 17));
            yield "\" loading=\"lazy\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "author", [], "any", false, false, false, 17), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "company", [], "any", false, false, false, 17), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 17), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "author", [], "any", false, false, false, 17), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "company", [], "any", false, false, false, 17), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 17), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
            yield "\" />
              </div>
          </";
            // line 19
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 19)) ? ("a") : ("div"));
            yield ">
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
      </div>
  </div>

</";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 25), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/reviews_list.htm";
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
        return array (  127 => 25,  121 => 21,  113 => 19,  96 => 17,  91 => 15,  87 => 14,  80 => 10,  75 => 8,  62 => 7,  58 => 6,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"{{ section.css_classes |join(' ') }}\">

  <div class=\"{{ section.container_style }} \">
      <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">

          {% for item in section.reviews %}
          <{{  item.url ? 'a' : 'div' }} {% if item.url %}href=\"{{ item.url | link }}\"{% endif %} class=\"{{ item.url ? 'cursor-pointer' }} hover:filter-none flex flex-col gap-4 relative transition-all hover:shadow-xl border border-silver-light p-6 rounded-2xl\">
              <img class=\"absolute -top-5 -left-4\" width=\"42\" height=\"42\" src=\"{{ 'assets/icons/bi-quote.svg'| theme }}\" alt=\"icon\" />
              <p class=\"text-lg text-gray-dark font-medium\">
                {{ item.content }}
              </p>
              <div class=\"flex items-center justify-between gap-4\">
                  <div>
                      <div class=\"font-bold\">{{ item.author }}</div>
                      <div class=\"font-medium text-sm text-gray\">{{ item.company }}</div>
                  </div>
                  <img class=\"filter grayscale\" width=\"109\" height=\"44\" src=\"{{ item.logo | media }}\" loading=\"lazy\" alt=\"{{ item.author }} {{ item.company }} {{ section.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" title=\"{{ item.author }} {{ item.company }} {{ section.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" />
              </div>
          </{{ item.url ? 'a' : 'div' }}>
          {% endfor %}

      </div>
  </div>

</{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/reviews_list.htm", "");
    }
}
