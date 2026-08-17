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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/content_split.htm */
class __TwigTemplate_72b988bb8b8e21bc8027bc808b74f3be extends Template
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

    <div class=\"flex flex-col gap-y-8 lg:gap-y-20 py-24\">

            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sections", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 6
            yield "            ";
            if ( !($context["key"] % 2 != 0)) {
                // line 7
                yield "                <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 7), "html", null, true);
                yield (((($context["key"] % 2 != 0) && Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "use_zigzag", [], "any", false, false, false, 7))) ? ("bg-secondary bg-opacity-5") : (""));
                yield " flex flex-row gap-3\">
            ";
            }
            // line 9
            yield "                <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 9), "html", null, true);
            yield " ";
            yield (((($context["key"] % 2 != 0) && Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "use_zigzag", [], "any", false, false, false, 9))) ? ("my-16") : (""));
            yield " relative\">
                  ";
            // line 10
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "use_numbers", [], "any", false, false, false, 10)) {
                // line 11
                yield "                  <div class=\"flex flex-col lg:absolute lg:top-0 transform ";
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "arrow_center", [], "any", false, false, false, 11)) ? ("lg:left-1/2 lg:ml-6") : ("lg:left-6"));
                yield " lg:-translate-x-1/2 lg:h-full\">
                      <div class=\"flex items-center justify-center w-9 h-9 rounded-full bg-secondary text-white font-bold mb-3\">";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["key"] + 1), "html", null, true);
                yield "</div>
                      <div class=\"flex-1 bg-secondary w-0.5 mx-auto relative\"></div>
                      <div class=\"triangle_down mx-auto\"></div>
                  </div>
                  ";
            }
            // line 17
            yield "                  <div class=\"";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "arrow_center", [], "any", false, false, false, 17)) ? ("gap-6 lg:gap-20") : (""));
            yield " items-center ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "use_numbers", [], "any", false, false, false, 17)) ? ("lg:pl-12") : (""));
            yield "\">
                      <div class=\"order-1 ";
            // line 18
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "arrow_center", [], "any", false, false, false, 18)) ? ("") : ("lg:pl-12"));
            yield " ";
            yield ((($context["key"] % 2 != 0)) ? ("lg:order-2") : ("lg:order-1"));
            yield "\">
                          <";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title_type", [], "any", false, false, false, 19), "html", null, true);
            yield " class=\"mb-4\">";
            yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 19);
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title_type", [], "any", false, false, false, 19), "html", null, true);
            yield ">
                          <div class=\"richText font-medium text-gray mb-4 sm:pr-12\">
                            ";
            // line 21
            yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 21));
            yield "
                          </div>
                          ";
            // line 23
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 23)) {
                // line 24
                yield "                          <a href=\"";
                yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 24));
                yield "\" ";
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_external", [], "any", false, false, false, 24)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
                yield " class=\"inline-block text-sm lg:text-base bg-primary text-silver-light transition ease-out duration-300 rounded-full px-4 lg:px-5 py-2 lg:py-2.5 mt-4 font-bold hover:bg-secondary\"\">
                              ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_title", [], "any", false, false, false, 25), "html", null, true);
                yield "
                          </a>
                          ";
            }
            // line 28
            yield "                      </div>
                  </div>
                </div>
            ";
            // line 31
            if (($context["key"] % 2 != 0)) {
                // line 32
                yield "                </div>
            ";
            }
            // line 34
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "
    </div>

</";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 38), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/content_split.htm";
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
        return array (  154 => 38,  149 => 35,  143 => 34,  139 => 32,  137 => 31,  132 => 28,  126 => 25,  119 => 24,  117 => 23,  112 => 21,  103 => 19,  97 => 18,  90 => 17,  82 => 12,  77 => 11,  75 => 10,  68 => 9,  61 => 7,  58 => 6,  54 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"overflow-hidden {{ section.css_classes |join(' ') }}\">

    <div class=\"flex flex-col gap-y-8 lg:gap-y-20 py-24\">

            {% for key, item in section.sections %}
            {% if key is not odd %}
                <div class=\"{{ section.container_style }}{{ key is odd and section.use_zigzag ? 'bg-secondary bg-opacity-5' }} flex flex-row gap-3\">
            {% endif %}
                <div class=\"{{ section.container_style }} {{ key is odd and section.use_zigzag ? 'my-16' }} relative\">
                  {% if section.use_numbers %}
                  <div class=\"flex flex-col lg:absolute lg:top-0 transform {{ section.arrow_center ? 'lg:left-1/2 lg:ml-6' : 'lg:left-6' }} lg:-translate-x-1/2 lg:h-full\">
                      <div class=\"flex items-center justify-center w-9 h-9 rounded-full bg-secondary text-white font-bold mb-3\">{{ key + 1 }}</div>
                      <div class=\"flex-1 bg-secondary w-0.5 mx-auto relative\"></div>
                      <div class=\"triangle_down mx-auto\"></div>
                  </div>
                  {% endif %}
                  <div class=\"{{ section.arrow_center ? 'gap-6 lg:gap-20' }} items-center {{ section.use_numbers ? 'lg:pl-12' }}\">
                      <div class=\"order-1 {{ section.arrow_center ? '' : 'lg:pl-12' }} {{ key is odd ? 'lg:order-2' : 'lg:order-1' }}\">
                          <{{ item.title_type }} class=\"mb-4\">{{ item.title | raw }}</{{ item.title_type }}>
                          <div class=\"richText font-medium text-gray mb-4 sm:pr-12\">
                            {{ item.content | content }}
                          </div>
                          {% if item.button_page %}
                          <a href=\"{{ item.button_page | link }}\" {{ item.button_external ? 'target=\"_blank\" rel=\"noopener\"' }} class=\"inline-block text-sm lg:text-base bg-primary text-silver-light transition ease-out duration-300 rounded-full px-4 lg:px-5 py-2 lg:py-2.5 mt-4 font-bold hover:bg-secondary\"\">
                              {{ item.button_title }}
                          </a>
                          {% endif %}
                      </div>
                  </div>
                </div>
            {% if key is odd %}
                </div>
            {% endif %}
            {% endfor %}

    </div>

</{{ section.html_tag }}>", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/content_split.htm", "");
    }
}
