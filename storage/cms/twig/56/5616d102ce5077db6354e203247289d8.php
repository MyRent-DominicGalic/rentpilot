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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/content_list.htm */
class __TwigTemplate_3b79f5b48aa223e8b9b2b67cc996782c extends Template
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
            yield "            <div class=\"";
            yield (((($context["key"] % 2 != 0) && Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "use_zigzag", [], "any", false, false, false, 6))) ? ("bg-secondary bg-opacity-5") : (""));
            yield " flex flex-row gap-3\">
                <div class=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 7), "html", null, true);
            yield " ";
            yield (((($context["key"] % 2 != 0) && Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "use_zigzag", [], "any", false, false, false, 7))) ? ("my-16") : (""));
            yield " relative\">
                  ";
            // line 8
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "use_numbers", [], "any", false, false, false, 8)) {
                // line 9
                yield "                  <div class=\"flex flex-col lg:absolute lg:top-0 transform ";
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "arrow_center", [], "any", false, false, false, 9)) ? ("lg:left-1/2 lg:ml-6") : ("lg:left-6"));
                yield " lg:-translate-x-1/2 lg:h-full\">
                      <div class=\"flex items-center justify-center w-9 h-9 rounded-full bg-secondary text-white font-bold mb-3\">";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["key"] + 1), "html", null, true);
                yield "</div>
                      <div class=\"flex-1 bg-secondary w-0.5 mx-auto relative\"></div>
                      <div class=\"triangle_down mx-auto\"></div>
                  </div>
                  ";
            }
            // line 15
            yield "                  <div class=\"grid grid-cols-1 lg:grid-cols-2 ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "arrow_center", [], "any", false, false, false, 15)) ? ("gap-6 lg:gap-20") : (""));
            yield " items-center ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "use_numbers", [], "any", false, false, false, 15)) ? ("lg:pl-12") : (""));
            yield "\">
                      ";
            // line 16
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 16)) {
                // line 17
                yield "                        <a class=\"order-2 image-hover-efect  ";
                yield ((($context["key"] % 2 != 0)) ? ("lg:order-1 pr-10") : ("lg:order-2"));
                yield "\" href=\"";
                yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 17));
                yield "\" ";
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_external", [], "any", false, false, false, 17)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
                yield " aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_title", [], "any", false, false, false, 17), "html", null, true);
                yield "\">
                         ";
                // line 18
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image_code", [], "any", false, false, false, 18)) {
                    // line 19
                    yield "                             ";
                    yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image_code", [], "any", false, false, false, 19);
                    yield "
                           ";
                } else {
                    // line 21
                    yield "                              <div class=\"card_renter_sm flex flex-col rounded-md overflow-hidden\">
                                ";
                    // line 22
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 22)) {
                        // line 23
                        yield "                                 <img class=\"max-w-xl lg:max-w-none w-full h-auto w-full \" src=\"";
                        yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 23));
                        yield "\" loading=\"lazy\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 23), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
                        yield "\" title=\"";
                        yield Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 23), ["<em>" => "", "</em>" => ""]);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 23), ["-" => " ", "_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
                        yield " \" />
                                ";
                    }
                    // line 25
                    yield "                              </div>
                           ";
                }
                // line 27
                yield "                       </a>
                      ";
            } else {
                // line 29
                yield "                      <div class=\"order-2 ";
                yield ((($context["key"] % 2 != 0)) ? ("lg:order-1 pr-10") : ("lg:order-2"));
                yield "\" href=\"";
                yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 29));
                yield "\" ";
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_external", [], "any", false, false, false, 29)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
                yield ">
                         ";
                // line 30
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image_code", [], "any", false, false, false, 30)) {
                    // line 31
                    yield "                             ";
                    yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image_code", [], "any", false, false, false, 31);
                    yield "
                         ";
                } else {
                    // line 33
                    yield "                             <div class=\"card_renter_sm flex flex-col rounded-md overflow-hidden\">
                                ";
                    // line 34
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 34)) {
                        // line 35
                        yield "                                 <img class=\"max-w-xl lg:max-w-none w-full h-auto  w-full\" src=\"";
                        yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 35));
                        yield "\" loading=\"lazy\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 35), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
                        yield "\" title=\"";
                        yield Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 35), ["<em>" => "", "</em>" => ""]);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 35), ["-" => " ", "_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
                        yield " \" />
                                 ";
                    }
                    // line 37
                    yield "                             </div>
                         ";
                }
                // line 39
                yield "                      </div>
                      ";
            }
            // line 41
            yield "                      <div class=\"order-1 ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "arrow_center", [], "any", false, false, false, 41)) ? ("") : ("lg:pl-12"));
            yield " ";
            yield ((($context["key"] % 2 != 0)) ? ("lg:order-2") : ("lg:order-1"));
            yield "\">
                          <";
            // line 42
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title_type", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title_type", [], "any", false, false, false, 42), "html", null, true)) : ("h3"));
            yield " class=\"mb-4\">";
            yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 42);
            yield "</";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title_type", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title_type", [], "any", false, false, false, 42), "html", null, true)) : ("h3"));
            yield ">
                          <div class=\"richText font-medium text-gray mb-4 sm:pr-12\">
                            ";
            // line 44
            yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 44));
            yield "
                          </div>
                          ";
            // line 46
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 46)) {
                // line 47
                yield "                          <a href=\"";
                yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 47));
                yield "\" ";
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_external", [], "any", false, false, false, 47)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
                yield " class=\"inline-block text-sm lg:text-base bg-primary text-silver-light transition ease-out duration-300 rounded-full px-4 lg:px-5 py-2 lg:py-2.5 mt-4 font-bold hover:bg-secondary\"\">
                              ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_title", [], "any", false, false, false, 48), "html", null, true);
                yield "
                          </a>
                          ";
            }
            // line 51
            yield "                      </div>
                  </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "
    </div>

</";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 59), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/content_list.htm";
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
        return array (  230 => 59,  225 => 56,  215 => 51,  209 => 48,  202 => 47,  200 => 46,  195 => 44,  186 => 42,  179 => 41,  175 => 39,  171 => 37,  159 => 35,  157 => 34,  154 => 33,  148 => 31,  146 => 30,  137 => 29,  133 => 27,  129 => 25,  117 => 23,  115 => 22,  112 => 21,  106 => 19,  104 => 18,  93 => 17,  91 => 16,  84 => 15,  76 => 10,  71 => 9,  69 => 8,  63 => 7,  58 => 6,  54 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"overflow-hidden {{ section.css_classes |join(' ') }}\">

    <div class=\"flex flex-col gap-y-8 lg:gap-y-20 py-24\">

            {% for key, item in section.sections %}
            <div class=\"{{ key is odd and section.use_zigzag ? 'bg-secondary bg-opacity-5' }} flex flex-row gap-3\">
                <div class=\"{{ section.container_style }} {{ key is odd and section.use_zigzag ? 'my-16' }} relative\">
                  {% if section.use_numbers %}
                  <div class=\"flex flex-col lg:absolute lg:top-0 transform {{ section.arrow_center ? 'lg:left-1/2 lg:ml-6' : 'lg:left-6' }} lg:-translate-x-1/2 lg:h-full\">
                      <div class=\"flex items-center justify-center w-9 h-9 rounded-full bg-secondary text-white font-bold mb-3\">{{ key + 1 }}</div>
                      <div class=\"flex-1 bg-secondary w-0.5 mx-auto relative\"></div>
                      <div class=\"triangle_down mx-auto\"></div>
                  </div>
                  {% endif %}
                  <div class=\"grid grid-cols-1 lg:grid-cols-2 {{ section.arrow_center ? 'gap-6 lg:gap-20' }} items-center {{ section.use_numbers ? 'lg:pl-12' }}\">
                      {% if item.button_page %}
                        <a class=\"order-2 image-hover-efect  {{ key is odd ? 'lg:order-1 pr-10' : 'lg:order-2' }}\" href=\"{{ item.button_page | link }}\" {{ item.button_external ? 'target=\"_blank\" rel=\"noopener\"' }} aria-label=\"{{ item.button_title }}\">
                         {% if item.image_code  %}
                             {{ item.image_code | raw }}
                           {% else %}
                              <div class=\"card_renter_sm flex flex-col rounded-md overflow-hidden\">
                                {% if item.image  %}
                                 <img class=\"max-w-xl lg:max-w-none w-full h-auto w-full \" src=\"{{ item.image | media }}\" loading=\"lazy\" alt=\"{{ item.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" title=\"{{ item.title | replace({ '<em>' : '', '</em>' : '' }) | raw }} {{ item.image | replace({ '-' : ' ', '_' : ' ', '/site-images/' : '', '.webp' : '' }) }} \" />
                                {% endif %}
                              </div>
                           {% endif %}
                       </a>
                      {% else %}
                      <div class=\"order-2 {{ key is odd ? 'lg:order-1 pr-10' : 'lg:order-2' }}\" href=\"{{ item.button_page | link }}\" {{ item.button_external ? 'target=\"_blank\" rel=\"noopener\"' }}>
                         {% if item.image_code  %}
                             {{ item.image_code | raw }}
                         {% else %}
                             <div class=\"card_renter_sm flex flex-col rounded-md overflow-hidden\">
                                {% if item.image  %}
                                 <img class=\"max-w-xl lg:max-w-none w-full h-auto  w-full\" src=\"{{ item.image | media }}\" loading=\"lazy\" alt=\"{{ item.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" title=\"{{ item.title | replace({ '<em>' : '', '</em>' : '' }) | raw }} {{ item.image | replace({ '-' : ' ', '_' : ' ', '/site-images/' : '', '.webp' : '' }) }} \" />
                                 {% endif %}
                             </div>
                         {% endif %}
                      </div>
                      {% endif %}
                      <div class=\"order-1 {{ section.arrow_center ? '' : 'lg:pl-12' }} {{ key is odd ? 'lg:order-2' : 'lg:order-1' }}\">
                          <{{ item.title_type ? item.title_type : 'h3' }} class=\"mb-4\">{{ item.title | raw }}</{{ item.title_type ? item.title_type : 'h3' }}>
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
            </div>
            {% endfor %}

    </div>

</{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/content_list.htm", "");
    }
}
