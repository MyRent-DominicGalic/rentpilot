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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/buttons_list.htm */
class __TwigTemplate_325d55e98b622d7167ddecac6c680621 extends Template
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

          <div class=\"flex justify-center flex-wrap gap-4 px-4\">
              ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "buttons", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            yield "              <a href=\"";
            yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 7));
            yield "\" ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_external", [], "any", false, false, false, 7)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
            yield " class=\"flex items-center gap-4 rounded-xl shadow-base bg-white p-4 transition ease-out duration-300 hover:bg-primary hover:text-white\">
                  <img width=\"32\" height=\"32\" src=\"";
            // line 8
            yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 8)) . ".svg"));
            yield "\" alt=\"icon\" />
                  <span class=\"text-base lg:text-lg font-bold\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_title", [], "any", false, false, false, 9), "html", null, true);
            yield "</span>
              </a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "          </div>

        </div>

</";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 16), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/buttons_list.htm";
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
        return array (  88 => 16,  82 => 12,  73 => 9,  69 => 8,  62 => 7,  58 => 6,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"{{ section.css_classes |join(' ') }}\">

        <div class=\"{{ section.container_style }}\">

          <div class=\"flex justify-center flex-wrap gap-4 px-4\">
              {% for item in section.buttons %}
              <a href=\"{{ item.button_page | link }}\" {{ item.button_external ? 'target=\"_blank\" rel=\"noopener\"' }} class=\"flex items-center gap-4 rounded-xl shadow-base bg-white p-4 transition ease-out duration-300 hover:bg-primary hover:text-white\">
                  <img width=\"32\" height=\"32\" src=\"{{ ('assets/icons/' ~ item.icon ~ '.svg')| theme }}\" alt=\"icon\" />
                  <span class=\"text-base lg:text-lg font-bold\">{{ item.button_title }}</span>
              </a>
              {% endfor %}
          </div>

        </div>

</{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/buttons_list.htm", "");
    }
}
