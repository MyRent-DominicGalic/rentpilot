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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/layout/lang-switch.htm */
class __TwigTemplate_dc409b3ed1d699dccce815262040b023 extends Template
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
        yield "<div class=\"js-dropdown relative mr-4\">

    ";
        // line 4
        yield "    <button class=\"flex items-center gap-1 js-dropdown-toggle\" type=\"button\">
        <img width=\"28\" height=\"28\" src=\"";
        // line 5
        yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/flag-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, false, false, 5), "code", [], "any", false, false, false, 5)) . ".svg"));
        yield "\" alt=\"flag\" />
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M4 6L8 10L12 6\" class=\"stroke-gray-light\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
    </button>

    ";
        // line 12
        yield "    <ul class=\"absolute z-10 bg-white top-full mt-8 left-0 py-4 rounded-lg shadow-xl w-40 opacity-0 invisible pointer-events-none js-dropdown-content\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["sitePicker"] ?? null), "sites", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 14
            yield "        <li>
        <a href=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "url", [], "any", false, false, false, 15), "html", null, true);
            yield "\" class=\"flex items-center gap-2 py-2 px-4 transition ease-out duration-300 select-none cursor-pointer hover:bg-primary hover:bg-opacity-10\">
            <img width=\"28\" height=\"28\" src=\"";
            // line 16
            yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/flag-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "code", [], "any", false, false, false, 16)) . ".svg"));
            yield "\" alt=\"flag\" />
            <span class=\"text-gray-dark font-medium\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "</span>
        </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['site'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "    </ul>

</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/layout/lang-switch.htm";
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
        return array (  86 => 21,  76 => 17,  72 => 16,  68 => 15,  65 => 14,  61 => 13,  58 => 12,  49 => 5,  46 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"js-dropdown relative mr-4\">

    {# Btn #}
    <button class=\"flex items-center gap-1 js-dropdown-toggle\" type=\"button\">
        <img width=\"28\" height=\"28\" src=\"{{ ('assets/icons/flag-' ~ this.site.code ~ '.svg')|theme }}\" alt=\"flag\" />
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M4 6L8 10L12 6\" class=\"stroke-gray-light\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
    </button>

    {# Dropdown #}
    <ul class=\"absolute z-10 bg-white top-full mt-8 left-0 py-4 rounded-lg shadow-xl w-40 opacity-0 invisible pointer-events-none js-dropdown-content\">
        {% for site in sitePicker.sites %}
        <li>
        <a href=\"{{ site.url }}\" class=\"flex items-center gap-2 py-2 px-4 transition ease-out duration-300 select-none cursor-pointer hover:bg-primary hover:bg-opacity-10\">
            <img width=\"28\" height=\"28\" src=\"{{ ('assets/icons/flag-' ~ site.code ~ '.svg')|theme }}\" alt=\"flag\" />
            <span class=\"text-gray-dark font-medium\">{{ site.name }}</span>
        </a>
        </li>
        {% endfor %}
    </ul>

</div>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/layout/lang-switch.htm", "");
    }
}
