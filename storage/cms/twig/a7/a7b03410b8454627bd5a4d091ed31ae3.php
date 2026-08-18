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

/* E:\faks\_zavrsni\tailorblueprint\themes/myrent/partials/builder/sections/nav_icons.htm */
class __TwigTemplate_6ae2a1ade6af436b6797e36ae6f149bd extends Template
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

      ";
        // line 5
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "single_row", [], "any", false, false, false, 5)) {
            // line 6
            yield "      <div class=\"flex flex-col lg:flex-row justify-center gap-3\">

          ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "items", [], "any", false, false, false, 8));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                yield "          <div class=\"text-center\">
              ";
                // line 10
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 10)) {
                    // line 11
                    yield "              <";
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 11)) {
                        yield "a href=\"";
                        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 11));
                        yield "\"";
                    } else {
                        yield "div";
                    }
                    yield " class=\"nav-link block relative before:content-[''] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-3 before:h-3 before:rounded-full before:bg-white before:z-10 before:border before:border-secondary after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\">
                  <img class=\"mx-auto relative z-10\" width=\"48\" height=\"48\" src=\"";
                    // line 12
                    yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 12)) . ".svg"));
                    yield "\" alt=\"icon\" />
              </";
                    // line 13
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 13)) {
                        yield "a";
                    } else {
                        yield "div";
                    }
                    yield ">
              ";
                } elseif (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,                 // line 14
$context["loop"], "last", [], "any", false, false, false, 14)) {
                    // line 15
                    yield "              <";
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 15)) {
                        yield "a href=\"";
                        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 15));
                        yield "\"";
                    } else {
                        yield "div";
                    }
                    yield " class=\"nav-link block relative before:content-[''] before:absolute before:top-1/2 before:-translate-y-1/2 before:right-0 before:w-3 before:h-3 before:rounded-full before:bg-white before:z-10 before:border before:border-secondary after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\">
                <img class=\"mx-auto relative z-10\" width=\"48\" height=\"48\" src=\"";
                    // line 16
                    yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 16)) . ".svg"));
                    yield "\" alt=\"icon\" />
              </";
                    // line 17
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 17)) {
                        yield "a";
                    } else {
                        yield "div";
                    }
                    yield ">
              ";
                } else {
                    // line 19
                    yield "              <";
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 19)) {
                        yield "a href=\"";
                        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 19));
                        yield "\"";
                    } else {
                        yield "div";
                    }
                    yield " class=\"nav-link block relative after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\">
                <img class=\"mx-auto relative z-10\" width=\"48\" height=\"48\" src=\"";
                    // line 20
                    yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 20)) . ".svg"));
                    yield "\" alt=\"icon\" />
              </";
                    // line 21
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 21)) {
                        yield "a";
                    } else {
                        yield "div";
                    }
                    yield ">
              ";
                }
                // line 23
                yield "              <div class=\"font-medium px-4 pt-4 pb-8 lg:pb-4\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 23), "html", null, true);
                yield "</div>
          </div>
          ";
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "
      </div>

      ";
        } else {
            // line 30
            yield "
      <nav class=\"grid grid-cols-2 lg:grid-cols-11 mt-48 lg:mb-20\">

          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "items", [], "any", false, false, false, 33));
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
                // line 34
                yield "            ";
                if (($context["key"] % 2 == 0)) {
                    // line 35
                    yield "              <div class=\"text-center\">
                  ";
                    // line 36
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) {
                        // line 37
                        yield "                  <div class=\"relative before:content-[''] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-3 before:h-3 before:rounded-full before:bg-white before:z-10 before:border before:border-secondary after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\"></div>
                  ";
                    } elseif (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,                     // line 38
$context["loop"], "last", [], "any", false, false, false, 38)) {
                        // line 39
                        yield "                  <div class=\"relative before:content-[''] before:absolute before:top-1/2 before:-translate-y-1/2 before:right-full lg:before:right-0 before:w-3 before:h-3 before:rounded-full before:bg-white before:z-10 before:border before:border-secondary after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\"></div>
                  ";
                    } else {
                        // line 41
                        yield "                  <div class=\"relative after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\"></div>
                  ";
                    }
                    // line 43
                    yield "                  <";
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 43)) {
                        yield "a href=\"";
                        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 43));
                        yield "\"";
                    } else {
                        yield "div";
                    }
                    yield " class=\"block relative -mt-6 lg:mt-0 lg:before:content-[''] lg:before:absolute lg:before:-top-8 lg:before:-translate-x-1/2 lg:before:left-1/2 lg:before:border lg:before:border-white lg:before:rounded-full lg:before:w-4 lg:before:h-4 lg:before:bg-secondary\">
                      <img class=\"mx-auto relative z-10 lg:mt-6\" width=\"48\" height=\"48\" src=\"";
                    // line 44
                    yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 44)) . ".svg"));
                    yield "\" alt=\"icon\" loading=\"lazy\" />
                      <div class=\"font-medium mx-auto max-w-32 w-full lg:w-auto pt-3 pb-12 lg:pb-4\">
                        ";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 46), "html", null, true);
                    yield "
                      </div>
                  </";
                    // line 48
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 48)) {
                        yield "a";
                    } else {
                        yield "div";
                    }
                    yield ">
              </div>
            ";
                } else {
                    // line 51
                    yield "              <div class=\"text-center relative border-r lg:border-none border-secondary\">
                  <div class=\"relative after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\"></div>
                  <div class=\"relative -mt-6 lg:mt-0 lg:before:content-[''] lg:before:absolute lg:before:-top-1.5 lg:before:-translate-x-1/2 lg:before:left-1/2 lg:before:rounded-full lg:before:w-3 lg:before:h-3 lg:before:bg-primary\"></div>
                  <";
                    // line 54
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 54)) {
                        yield "a href=\"";
                        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 54));
                        yield "\"";
                    } else {
                        yield "div";
                    }
                    yield " class=\"lg:absolute lg:bottom-full lg:w-28 lg:h-36 lg:mb-2 block\">
                      <img class=\"mx-auto relative z-10 lg:mt-6\" width=\"48\" height=\"48\" src=\"";
                    // line 55
                    yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 55)) . ".svg"));
                    yield "\" alt=\"icon\" />
                      <div class=\"relative\">
                          <div class=\"mx-auto max-w-32 w-full lg:w-auto lg:absolute lg:h-20 lg:top-0  lg:-translate-x-1/2 font-medium pt-3 pb-12 lg:pb-4\">
                            ";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 58), "html", null, true);
                    yield "
                          </div>
                      </div>
                  </";
                    // line 61
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 61)) {
                        yield "a";
                    } else {
                        yield "div";
                    }
                    yield ">
              </div>
            ";
                }
                // line 64
                yield "          ";
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
            // line 65
            yield "
      </nav>
      ";
        }
        // line 68
        yield "
  </div>

</";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 71), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\tailorblueprint\\themes/myrent/partials/builder/sections/nav_icons.htm";
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
        return array (  317 => 71,  312 => 68,  307 => 65,  293 => 64,  283 => 61,  277 => 58,  271 => 55,  261 => 54,  256 => 51,  246 => 48,  241 => 46,  236 => 44,  225 => 43,  221 => 41,  217 => 39,  215 => 38,  212 => 37,  210 => 36,  207 => 35,  204 => 34,  187 => 33,  182 => 30,  176 => 26,  158 => 23,  149 => 21,  145 => 20,  134 => 19,  125 => 17,  121 => 16,  110 => 15,  108 => 14,  100 => 13,  96 => 12,  85 => 11,  83 => 10,  80 => 9,  63 => 8,  59 => 6,  57 => 5,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"{{ section.css_classes |join(' ') }}\">

  <div class=\"{{ section.container_style }} \">

      {% if section.single_row %}
      <div class=\"flex flex-col lg:flex-row justify-center gap-3\">

          {% for item in section.items %}
          <div class=\"text-center\">
              {% if loop.first %}
              <{% if item.page %}a href=\"{{ item.page | link }}\"{% else %}div{% endif %} class=\"nav-link block relative before:content-[''] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-3 before:h-3 before:rounded-full before:bg-white before:z-10 before:border before:border-secondary after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\">
                  <img class=\"mx-auto relative z-10\" width=\"48\" height=\"48\" src=\"{{ ('assets/icons/' ~ item.icon ~ '.svg')| theme }}\" alt=\"icon\" />
              </{% if item.page %}a{% else %}div{% endif %}>
              {% elseif loop.last %}
              <{% if item.page %}a href=\"{{ item.page | link }}\"{% else %}div{% endif %} class=\"nav-link block relative before:content-[''] before:absolute before:top-1/2 before:-translate-y-1/2 before:right-0 before:w-3 before:h-3 before:rounded-full before:bg-white before:z-10 before:border before:border-secondary after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\">
                <img class=\"mx-auto relative z-10\" width=\"48\" height=\"48\" src=\"{{ ('assets/icons/' ~ item.icon ~ '.svg')| theme }}\" alt=\"icon\" />
              </{% if item.page %}a{% else %}div{% endif %}>
              {% else %}
              <{% if item.page %}a href=\"{{ item.page | link }}\"{% else %}div{% endif %} class=\"nav-link block relative after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\">
                <img class=\"mx-auto relative z-10\" width=\"48\" height=\"48\" src=\"{{ ('assets/icons/' ~ item.icon ~ '.svg')| theme }}\" alt=\"icon\" />
              </{% if item.page %}a{% else %}div{% endif %}>
              {% endif %}
              <div class=\"font-medium px-4 pt-4 pb-8 lg:pb-4\">{{ item.title }}</div>
          </div>
          {% endfor %}

      </div>

      {% else %}

      <nav class=\"grid grid-cols-2 lg:grid-cols-11 mt-48 lg:mb-20\">

          {% for key, item in section.items %}
            {% if key is even %}
              <div class=\"text-center\">
                  {% if loop.first %}
                  <div class=\"relative before:content-[''] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-3 before:h-3 before:rounded-full before:bg-white before:z-10 before:border before:border-secondary after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\"></div>
                  {% elseif loop.last %}
                  <div class=\"relative before:content-[''] before:absolute before:top-1/2 before:-translate-y-1/2 before:right-full lg:before:right-0 before:w-3 before:h-3 before:rounded-full before:bg-white before:z-10 before:border before:border-secondary after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\"></div>
                  {% else %}
                  <div class=\"relative after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\"></div>
                  {% endif %}
                  <{% if item.page %}a href=\"{{ item.page | link }}\"{% else %}div{% endif %} class=\"block relative -mt-6 lg:mt-0 lg:before:content-[''] lg:before:absolute lg:before:-top-8 lg:before:-translate-x-1/2 lg:before:left-1/2 lg:before:border lg:before:border-white lg:before:rounded-full lg:before:w-4 lg:before:h-4 lg:before:bg-secondary\">
                      <img class=\"mx-auto relative z-10 lg:mt-6\" width=\"48\" height=\"48\" src=\"{{ ('assets/icons/' ~ item.icon ~ '.svg')| theme }}\" alt=\"icon\" loading=\"lazy\" />
                      <div class=\"font-medium mx-auto max-w-32 w-full lg:w-auto pt-3 pb-12 lg:pb-4\">
                        {{ item.title }}
                      </div>
                  </{% if item.page %}a{% else %}div{% endif %}>
              </div>
            {% else %}
              <div class=\"text-center relative border-r lg:border-none border-secondary\">
                  <div class=\"relative after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-0 after:right-0 after:border-b after:border-secondary\"></div>
                  <div class=\"relative -mt-6 lg:mt-0 lg:before:content-[''] lg:before:absolute lg:before:-top-1.5 lg:before:-translate-x-1/2 lg:before:left-1/2 lg:before:rounded-full lg:before:w-3 lg:before:h-3 lg:before:bg-primary\"></div>
                  <{% if item.page %}a href=\"{{ item.page | link }}\"{% else %}div{% endif %} class=\"lg:absolute lg:bottom-full lg:w-28 lg:h-36 lg:mb-2 block\">
                      <img class=\"mx-auto relative z-10 lg:mt-6\" width=\"48\" height=\"48\" src=\"{{ ('assets/icons/' ~ item.icon ~ '.svg')| theme }}\" alt=\"icon\" />
                      <div class=\"relative\">
                          <div class=\"mx-auto max-w-32 w-full lg:w-auto lg:absolute lg:h-20 lg:top-0  lg:-translate-x-1/2 font-medium pt-3 pb-12 lg:pb-4\">
                            {{ item.title }}
                          </div>
                      </div>
                  </{% if item.page %}a{% else %}div{% endif %}>
              </div>
            {% endif %}
          {% endfor %}

      </nav>
      {% endif %}

  </div>

</{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\tailorblueprint\\themes/myrent/partials/builder/sections/nav_icons.htm", "");
    }
}
