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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/boxes_list.htm */
class __TwigTemplate_93eeb28f0ca870db3907a687c6572a6d extends Template
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
        yield " px-4 py-16\">

    <div class=\"grid grid-cols-";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "boxes", [], "any", false, false, false, 5)) / 2), "html", null, true);
        yield " lg:grid-cols-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "boxes", [], "any", false, false, false, 5)), "html", null, true);
        yield " s-boxes ";
        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "connect_boxes", [], "any", false, false, false, 5)) ? ("s-boxes--connect gap-9") : ("gap-4"));
        yield "\">

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "boxes", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            yield "        <";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 8)) ? ("a") : ("div"));
            yield " ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 8)) {
                yield "href=\"";
                yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 8));
                yield "\"";
            }
            yield " class=\"s-boxes__item ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 8)) ? ("cursor-pointer") : (""));
            yield " px-2 sm:px-4 py-4 shadow-lg transition-all hover:shadow-2xl rounded-xl text-center border border-silver-light\">
\t\t\t";
            // line 9
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 9)) {
                // line 10
                yield "            \t<img class=\"mx-auto mb-4 w-10 lg:w-14 h-10 lg:h-14\" src=\"";
                yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 10)) . ".svg"));
                yield "\" alt=\"";
                yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 10);
                yield " icon\" />
            ";
            }
            // line 11
            yield "            
            <div class=\"text-base lg:text-lg font-bold mb-2 lg:mb-4\">";
            // line 12
            yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 12);
            yield "</div>
            <p class=\"text-sm lg:text-base font-medium text-gray\">
              ";
            // line 14
            yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 14));
            yield "
            </p>
        </";
            // line 16
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 16)) ? ("a") : ("div"));
            yield ">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
    </div>

  </div>


</";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 24), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/boxes_list.htm";
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
        return array (  122 => 24,  114 => 18,  106 => 16,  101 => 14,  96 => 12,  93 => 11,  85 => 10,  83 => 9,  70 => 8,  66 => 7,  57 => 5,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"overflow-hidden {{ section.css_classes |join(' ') }}\">

  <div class=\"{{ section.container_style }} px-4 py-16\">

    <div class=\"grid grid-cols-{{ (section.boxes | length) / 2 }} lg:grid-cols-{{ section.boxes | length }} s-boxes {{ section.connect_boxes ? 's-boxes--connect gap-9' : 'gap-4' }}\">

        {% for item in section.boxes %}
        <{{  item.url ? 'a' : 'div' }} {% if item.url %}href=\"{{ item.url | link }}\"{% endif %} class=\"s-boxes__item {{ item.url ? 'cursor-pointer' }} px-2 sm:px-4 py-4 shadow-lg transition-all hover:shadow-2xl rounded-xl text-center border border-silver-light\">
\t\t\t{% if item.icon  %}
            \t<img class=\"mx-auto mb-4 w-10 lg:w-14 h-10 lg:h-14\" src=\"{{ ('assets/icons/' ~ item.icon ~ '.svg')| theme }}\" alt=\"{{ item.title | raw }} icon\" />
            {% endif %}            
            <div class=\"text-base lg:text-lg font-bold mb-2 lg:mb-4\">{{ item.title | raw }}</div>
            <p class=\"text-sm lg:text-base font-medium text-gray\">
              {{ item.content | content }}
            </p>
        </{{ item.url ? 'a' : 'div' }}>
        {% endfor %}

    </div>

  </div>


</{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/boxes_list.htm", "");
    }
}
