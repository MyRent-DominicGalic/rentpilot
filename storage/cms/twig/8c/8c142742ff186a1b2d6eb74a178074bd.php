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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/content_slider.htm */
class __TwigTemplate_10c63e6aa041900153c5e8f152ecdf26 extends Template
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

    <div class=\"grid grid-cols-11 pt-2 lg:pt-24\">

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "slides", [], "any", false, false, false, 7));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 8
            yield "
          ";
            // line 9
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9)) {
                // line 10
                yield "          <a href=\"#slide-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" class=\"text-center relative block js-switch-slide\">
              ";
                // line 12
                yield "              <div class=\"absolute z-10 -top-2 left-1/2 transform -translate-x-1/2 bg-secondary w-9 h-9 rounded-full flex items-center justify-center\">
                <div class=\"bg-white w-4 h-4 rounded-full\"></div>
              </div>
              ";
                // line 16
                yield "              <div class=\"relative flex justify-center after:content-[''] after:absolute after:top-1/2 transform after:-translate-y-1/2 after:left-1/2 after:right-0 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\">
              </div>

              ";
                // line 20
                yield "              <div class=\"font-bold text-primary font-medium mx-auto max-w-32 w-full lg:w-auto py-5\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20), "html", null, true);
                yield "</div>
          </a>
          ";
            } elseif (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,             // line 22
$context["loop"], "last", [], "any", false, false, false, 22)) {
                // line 23
                yield "           ";
                if (($context["key"] % 2 != 0)) {
                    // line 24
                    yield "             <a href=\"#slide-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" class=\"text-center relative block js-switch-slide\">
                 <div class=\"relative flex justify-center transform after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-1/2 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\"></div>
                 <div class=\"font-medium w-32 lg:w-auto py-5 absolute transform top-0 -translate-y-full\">";
                    // line 26
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 26), "html", null, true);
                    yield "</div>
             </a>
           ";
                } else {
                    // line 29
                    yield "             <a href=\"#slide-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" class=\"text-center relative block js-switch-slide\">
                 <div class=\"relative flex justify-center transform after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-1/2 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\"></div>
                 <div class=\"font-medium w-32 lg:w-auto py-5\">";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 31), "html", null, true);
                    yield "</div>
             </a>
           ";
                }
                // line 34
                yield "          ";
            } else {
                // line 35
                yield "            ";
                if (($context["key"] % 2 != 0)) {
                    // line 36
                    yield "              <a href=\"#slide-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" class=\"text-center relative block js-switch-slide\">
                  <div class=\"relative flex justify-center after:content-[''] after:absolute after:top-1/2 transform after:-translate-y-1/2 after:left-0 after:right-0 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\"></div>
                  <div class=\"absolute bottom-full lg:w-28 h-20\">
                      <div class=\"relative\">
                          <div class=\"mx-auto max-w-32 w-full lg:w-auto lg:absolute lg:h-20 lg:top-0 lg:left-1/2 lg:-translate-x-1/2 font-medium pt-3 pb-12 lg:pb-4 transform\">";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 40), "html", null, true);
                    yield "</div>
                      </div>
                  </div>
              </a>
            ";
                } else {
                    // line 45
                    yield "            <a href=\"#slide-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" class=\"text-center relative block js-switch-slide\">
                <div class=\"relative flex justify-center after:content-[''] after:absolute after:top-1/2 transform after:-translate-y-1/2 after:left-0 after:right-0 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\"></div>
                <div class=\"font-medium mx-auto max-w-32 w-full lg:w-auto py-5\">Rezervacije i kalendar</div>
            </a>
            ";
                }
                // line 50
                yield "          ";
            }
            // line 51
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "
    </div>

    <div class=\"gap-6 pb-8\">

        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "slides", [], "any", false, false, false, 57));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 58
            yield "        <article id=\"slide-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" class=\"js-slide w-full lg:py-12 py-8 flex gap-8 md:gap-32 justify-between ";
            yield ((($context["key"] == 0)) ? ("") : ("hidden"));
            yield "\">
                <div class=\"md:w-1/2 w-full\">
                    <h3 class=\"mb-4\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 60), "html", null, true);
            yield "</h3>
                    <p class=\"font-medium text-gray-dark mb-4\">
                      ";
            // line 62
            yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 62));
            yield "
                    </p>
                    ";
            // line 64
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 64)) {
                // line 65
                yield "                    <a href=\"";
                yield $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 65));
                yield "\" ";
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_external", [], "any", false, false, false, 65)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
                yield " class=\"inline-block text-sm mt-3 lg:text-base bg-primary text-silver-light transition ease-out duration-300 rounded-full px-4 lg:px-5 py-2 lg:py-2.5 font-bold hover:bg-secondary\">
                        ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_title", [], "any", false, false, false, 66), "html", null, true);
                yield "
                    </a>
                    ";
            }
            // line 69
            yield "                </div>
                <img class=\"md:w-1/2 w-full h-auto lg:ml-auto\" src=\"";
            // line 70
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 70));
            yield "\" loading=\"lazy\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 70), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
            yield "\"  />
        </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "
    </div>

  </div>

</";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 78), "html", null, true);
        yield ">

";
        // line 80
        $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('scripts'        , function() use ($context, $blocks, $macros) {
        // line 81
        yield "<!-- TODO:  switch slides on click -->
<script type=\"text/javascript\">
  /*
  Click on .js-switch-slide takes href attribute and shows .js-slide with ID attribute matching href atribute
  */

  console.log(\"page is fully loaded\");

  window.addEventListener(\"load\", (event) => {
        console.log(\"page is fully loaded\");
    });


     document.addEventListener('DOMContentLoaded', function () {

        const slider = document.querySelector('.js-slider-overflow');
        const prevButton = document.querySelector('.js-goto-prev-slide');
        const nextButton = document.querySelector('.js-goto-next-slide');
        const scrollAmount = 300; // Adjust scroll amount as needed

        // Scroll to the left
        prevButton.addEventListener('click', function () {

            console.log('prevButton');

          slider.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth',
          });
        });

        // Scroll to the right
        nextButton.addEventListener('click', function () {
            console.log('nextButton');

          slider.scrollBy({
            left: scrollAmount,
            behavior: 'smooth',
          });
        });
    });

</script>
";
        // line 80
        return; yield '';}, true        );
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/content_slider.htm";
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
        return array (  296 => 80,  251 => 81,  249 => 80,  244 => 78,  237 => 73,  226 => 70,  223 => 69,  217 => 66,  210 => 65,  208 => 64,  203 => 62,  198 => 60,  190 => 58,  186 => 57,  179 => 52,  165 => 51,  162 => 50,  153 => 45,  145 => 40,  137 => 36,  134 => 35,  131 => 34,  125 => 31,  119 => 29,  113 => 26,  107 => 24,  104 => 23,  102 => 22,  96 => 20,  91 => 16,  86 => 12,  81 => 10,  79 => 9,  76 => 8,  59 => 7,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"{{ section.css_classes |join(' ') }}\">

  <div class=\"{{ section.container_style }}\">

    <div class=\"grid grid-cols-11 pt-2 lg:pt-24\">

        {% for key, item in section.slides %}

          {% if loop.first %}
          <a href=\"#slide-{{ key }}\" class=\"text-center relative block js-switch-slide\">
              {# Active circle #}
              <div class=\"absolute z-10 -top-2 left-1/2 transform -translate-x-1/2 bg-secondary w-9 h-9 rounded-full flex items-center justify-center\">
                <div class=\"bg-white w-4 h-4 rounded-full\"></div>
              </div>
              {# End - active circle #}
              <div class=\"relative flex justify-center after:content-[''] after:absolute after:top-1/2 transform after:-translate-y-1/2 after:left-1/2 after:right-0 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\">
              </div>

              {# Active class=\"font-bold text-primary\" #}
              <div class=\"font-bold text-primary font-medium mx-auto max-w-32 w-full lg:w-auto py-5\">{{ item.title }}</div>
          </a>
          {% elseif loop.last %}
           {% if key is odd %}
             <a href=\"#slide-{{ key }}\" class=\"text-center relative block js-switch-slide\">
                 <div class=\"relative flex justify-center transform after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-1/2 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\"></div>
                 <div class=\"font-medium w-32 lg:w-auto py-5 absolute transform top-0 -translate-y-full\">{{ item.title }}</div>
             </a>
           {% else %}
             <a href=\"#slide-{{ key }}\" class=\"text-center relative block js-switch-slide\">
                 <div class=\"relative flex justify-center transform after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-1/2 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\"></div>
                 <div class=\"font-medium w-32 lg:w-auto py-5\">{{ item.title }}</div>
             </a>
           {% endif %}
          {% else %}
            {% if key is odd %}
              <a href=\"#slide-{{ key }}\" class=\"text-center relative block js-switch-slide\">
                  <div class=\"relative flex justify-center after:content-[''] after:absolute after:top-1/2 transform after:-translate-y-1/2 after:left-0 after:right-0 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\"></div>
                  <div class=\"absolute bottom-full lg:w-28 h-20\">
                      <div class=\"relative\">
                          <div class=\"mx-auto max-w-32 w-full lg:w-auto lg:absolute lg:h-20 lg:top-0 lg:left-1/2 lg:-translate-x-1/2 font-medium pt-3 pb-12 lg:pb-4 transform\">{{ item.title }}</div>
                      </div>
                  </div>
              </a>
            {% else %}
            <a href=\"#slide-{{ key }}\" class=\"text-center relative block js-switch-slide\">
                <div class=\"relative flex justify-center after:content-[''] after:absolute after:top-1/2 transform after:-translate-y-1/2 after:left-0 after:right-0 after:bg-secondary after:bg-opacity-10 after:h-3 before:content-[''] before:top-0 before:left-1/2 before:border before:border-secondary before:bg-white before:z-10 before:rounded-full before:w-5 before:h-5\"></div>
                <div class=\"font-medium mx-auto max-w-32 w-full lg:w-auto py-5\">Rezervacije i kalendar</div>
            </a>
            {% endif %}
          {% endif %}
        {% endfor %}

    </div>

    <div class=\"gap-6 pb-8\">

        {% for key, item in section.slides %}
        <article id=\"slide-{{ key }}\" class=\"js-slide w-full lg:py-12 py-8 flex gap-8 md:gap-32 justify-between {{ key == 0 ? '' : 'hidden' }}\">
                <div class=\"md:w-1/2 w-full\">
                    <h3 class=\"mb-4\">{{ item.title }}</h3>
                    <p class=\"font-medium text-gray-dark mb-4\">
                      {{ item.content | content }}
                    </p>
                    {% if item.button_page %}
                    <a href=\"{{ item.button_page | page }}\" {{ item.button_external ? 'target=\"_blank\" rel=\"noopener\"' }} class=\"inline-block text-sm mt-3 lg:text-base bg-primary text-silver-light transition ease-out duration-300 rounded-full px-4 lg:px-5 py-2 lg:py-2.5 font-bold hover:bg-secondary\">
                        {{ item.button_title }}
                    </a>
                    {% endif %}
                </div>
                <img class=\"md:w-1/2 w-full h-auto lg:ml-auto\" src=\"{{ item.image | media }}\" loading=\"lazy\" alt=\"{{ item.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\"  />
        </article>
        {% endfor %}

    </div>

  </div>

</{{ section.html_tag }}>

{% put scripts %}
<!-- TODO:  switch slides on click -->
<script type=\"text/javascript\">
  /*
  Click on .js-switch-slide takes href attribute and shows .js-slide with ID attribute matching href atribute
  */

  console.log(\"page is fully loaded\");

  window.addEventListener(\"load\", (event) => {
        console.log(\"page is fully loaded\");
    });


     document.addEventListener('DOMContentLoaded', function () {

        const slider = document.querySelector('.js-slider-overflow');
        const prevButton = document.querySelector('.js-goto-prev-slide');
        const nextButton = document.querySelector('.js-goto-next-slide');
        const scrollAmount = 300; // Adjust scroll amount as needed

        // Scroll to the left
        prevButton.addEventListener('click', function () {

            console.log('prevButton');

          slider.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth',
          });
        });

        // Scroll to the right
        nextButton.addEventListener('click', function () {
            console.log('nextButton');

          slider.scrollBy({
            left: scrollAmount,
            behavior: 'smooth',
          });
        });
    });

</script>
{% endput %}", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/content_slider.htm", "");
    }
}
