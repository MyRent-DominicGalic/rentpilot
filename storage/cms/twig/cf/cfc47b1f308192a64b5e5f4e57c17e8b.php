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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/layout/main-menu.htm */
class __TwigTemplate_892f7ec5966fbe582c3c0acbed481fd9 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "is_enabled", [], "any", false, false, false, 2)) {
                // line 3
                yield "
";
                // line 4
                if ( !Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "parent_id", [], "any", false, false, false, 4)) {
                    // line 5
                    yield "<div class=\"relative js-dropdown\">

    ";
                    // line 7
                    if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 7))) {
                        // line 8
                        yield "    <button class=\"js-dropdown-toggle nav_hover flex items-center gap-1 p-2 select-none cursor-pointer text-gray-dark hover:text-secondary transition ease-out duration-300\">
        <div class=\"font-medium\">";
                        // line 9
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 9), "html", null, true);
                        yield "</div>
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M4 6L8 10L12 6\" class=\"transition ease-out duration-300 stroke-gray-light\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
        </svg>
    </button>
    <ul class=\"absolute z-10 top-full left-0 mt-7 bg-white rounded-xl ";
                        // line 14
                        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "is_megamenu", [], "any", false, false, false, 14)) ? ("flex gap-6 w-fit-dropdown p-6") : ("w-72"));
                        yield " overflow-hidden shadow-xl opacity-0 invisible pointer-events-none js-dropdown-content\">
        ";
                        // line 15
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 15));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 16
                            yield "        ";
                            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 16))) {
                                // line 17
                                yield "        <li class=\"flex items-start gap-3 lg:w-1/4\">
            <img width=\"40\" height=\"40\" src=\"";
                                // line 18
                                yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 18)) . ".svg"));
                                yield "\" alt=\"icon\" />
            <div class=\"w-full\">
                <div class=\"text-gray-dark font-bold text-lg mb-2\">";
                                // line 20
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20), "html", null, true);
                                yield "</div>
                <ul>
                    ";
                                // line 22
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 22));
                                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                    // line 23
                                    yield "                    <li>
                        <a href=\"";
                                    // line 24
                                    yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 24));
                                    yield "\" ";
                                    yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 24)) ? ("target=\"_blank\" rel=\"noopener\" ") : (""));
                                    yield " class=\"block text-gray-dark font-medium py-2 transition ease-out duration-300 hover:text-secondary\">
                            ";
                                    // line 25
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25), "html", null, true);
                                    yield "
                        </a>
                    </li>
                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 29
                                yield "                </ul>
            </div>
        </li>
        ";
                            } else {
                                // line 33
                                yield "        <li>
            <a href=\"";
                                // line 34
                                yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 34));
                                yield "\" ";
                                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 34)) ? ("target=\"_blank\" rel=\"noopener\" ") : (""));
                                yield " class=\"block px-6 py-2 text-gray-dark font-medium transition ease-out duration-300 hover:text-secondary\">
                ";
                                // line 35
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 35), "html", null, true);
                                yield "
            </a>
        </li>
        ";
                            }
                            // line 39
                            yield "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        yield "    </ul>
    ";
                    } else {
                        // line 42
                        yield "    <a class=\"text-gray-dark p-2 font-medium hover:text-secondary transition ease-out duration-300\" href=\"";
                        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 42));
                        yield "\" ";
                        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 42)) ? ("target=\"_blank\" rel=\"noopener\" ") : (""));
                        yield ">
        ";
                        // line 43
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 43), "html", null, true);
                        yield "
    </a>
    ";
                    }
                    // line 46
                    yield "</div>
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/layout/main-menu.htm";
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
        return array (  162 => 46,  156 => 43,  149 => 42,  145 => 40,  139 => 39,  132 => 35,  126 => 34,  123 => 33,  117 => 29,  107 => 25,  101 => 24,  98 => 23,  94 => 22,  89 => 20,  84 => 18,  81 => 17,  78 => 16,  74 => 15,  70 => 14,  62 => 9,  59 => 8,  57 => 7,  53 => 5,  51 => 4,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for item in items %}
{% if item.is_enabled %}

{% if not item.parent_id %}
<div class=\"relative js-dropdown\">

    {% if item.children | length %}
    <button class=\"js-dropdown-toggle nav_hover flex items-center gap-1 p-2 select-none cursor-pointer text-gray-dark hover:text-secondary transition ease-out duration-300\">
        <div class=\"font-medium\">{{ item.title }}</div>
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M4 6L8 10L12 6\" class=\"transition ease-out duration-300 stroke-gray-light\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
        </svg>
    </button>
    <ul class=\"absolute z-10 top-full left-0 mt-7 bg-white rounded-xl {{ item.is_megamenu ? 'flex gap-6 w-fit-dropdown p-6' : 'w-72' }} overflow-hidden shadow-xl opacity-0 invisible pointer-events-none js-dropdown-content\">
        {% for item in item.children %}
        {% if item.children | length %}
        <li class=\"flex items-start gap-3 lg:w-1/4\">
            <img width=\"40\" height=\"40\" src=\"{{ ('assets/icons/' ~ item.icon ~ '.svg')| theme }}\" alt=\"icon\" />
            <div class=\"w-full\">
                <div class=\"text-gray-dark font-bold text-lg mb-2\">{{ item.title }}</div>
                <ul>
                    {% for item in item.children %}
                    <li>
                        <a href=\"{{ item.page | link }}\" {{ item.external ? 'target=\"_blank\" rel=\"noopener\" '}} class=\"block text-gray-dark font-medium py-2 transition ease-out duration-300 hover:text-secondary\">
                            {{ item.title }}
                        </a>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </li>
        {% else %}
        <li>
            <a href=\"{{ item.page | link }}\" {{ item.external ? 'target=\"_blank\" rel=\"noopener\" '}} class=\"block px-6 py-2 text-gray-dark font-medium transition ease-out duration-300 hover:text-secondary\">
                {{ item.title }}
            </a>
        </li>
        {% endif %}
        {% endfor %}
    </ul>
    {% else %}
    <a class=\"text-gray-dark p-2 font-medium hover:text-secondary transition ease-out duration-300\" href=\"{{ item.page | link }}\" {{ item.external ? 'target=\"_blank\" rel=\"noopener\" '}}>
        {{ item.title }}
    </a>
    {% endif %}
</div>
{% endif %}
{% endif %}
{% endfor %}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/layout/main-menu.htm", "");
    }
}
