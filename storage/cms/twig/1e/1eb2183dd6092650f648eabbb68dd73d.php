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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/layout/mobile-menu.htm */
class __TwigTemplate_69f7aad4f7972f36235b7818a4d19695 extends Template
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
        $context["items"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu", [], "any", false, false, false, 1), "links", [], "any", false, false, false, 1);
        // line 2
        yield "
<nav id=\"mobile-menu\">


    <ul>
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            yield "        ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "is_enabled", [], "any", false, false, false, 8)) {
                // line 9
                yield "          ";
                if ( !Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "parent_id", [], "any", false, false, false, 9)) {
                    // line 10
                    yield "            ";
                    if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 10))) {
                        // line 11
                        yield "              <li>
                  <span>";
                        // line 12
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 12), "html", null, true);
                        yield "</span>
                  <ul>
                      ";
                        // line 14
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 14));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 15
                            yield "                        ";
                            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 15))) {
                                // line 16
                                yield "                        <li>
                            <span class=\"flexed-wrap\">
                              <span class=\"flexed\">
                                <img width=\"40\" height=\"40\" src=\"";
                                // line 19
                                yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 19)) . ".svg"));
                                yield "\" alt=\"icon\" />
                                ";
                                // line 20
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20), "html", null, true);
                                yield "
                              </span>
                            </span>
                            <ul>
                              ";
                                // line 24
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 24));
                                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                    // line 25
                                    yield "                                ";
                                    if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 25))) {
                                        // line 26
                                        yield "                                <span>
                                    ";
                                        // line 27
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 27), "html", null, true);
                                        yield "
                                </span>
                                <ul>
                                  ";
                                        // line 30
                                        $context['_parent'] = $context;
                                        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 30));
                                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                            // line 31
                                            yield "                                  <li>
                                    <a href=\"";
                                            // line 32
                                            yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 32));
                                            yield "\" ";
                                            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 32)) ? ("target=\"_blank\" rel=\"noopener\" ") : (""));
                                            yield ">";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 32), "html", null, true);
                                            yield "</a>
                                  </li>
                                  ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 35
                                        yield "                                </ul>
                                ";
                                    } else {
                                        // line 37
                                        yield "                                <li>
                                  <a href=\"";
                                        // line 38
                                        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 38));
                                        yield "\" ";
                                        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 38)) ? ("target=\"_blank\" rel=\"noopener\" ") : (""));
                                        yield ">";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 38), "html", null, true);
                                        yield "</a>
                                </li>
                                ";
                                    }
                                    // line 41
                                    yield "                              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 42
                                yield "                            </ul>
                        </li>
                        ";
                            } else {
                                // line 45
                                yield "                        <li>
                          <a href=\"";
                                // line 46
                                yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 46));
                                yield "\" ";
                                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 46)) ? ("target=\"_blank\" rel=\"noopener\" ") : (""));
                                yield ">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 46), "html", null, true);
                                yield "</a>
                        </li>
                        ";
                            }
                            // line 49
                            yield "                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 50
                        yield "                  </ul>
              </li>
            ";
                    } else {
                        // line 53
                        yield "              <li>
                <a href=\"";
                        // line 54
                        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 54));
                        yield "\" ";
                        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "external", [], "any", false, false, false, 54)) ? ("target=\"_blank\" rel=\"noopener\" ") : (""));
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 54), "html", null, true);
                        yield "</a>
              </li>
            ";
                    }
                    // line 57
                    yield "          ";
                }
                // line 58
                yield "        ";
            }
            // line 59
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "      <li>
          <span>
            Jezik
          </span>
          <ul>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["sitePicker"] ?? null), "sites", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 66
            yield "            <li>
              <a class=\"flexed items-center gap-2\" href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "url", [], "any", false, false, false, 67), "html", null, true);
            yield "\">
                <img width=\"24\" height=\"24\" src=\"";
            // line 68
            yield $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/icons/flag-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "code", [], "any", false, false, false, 68)) . ".svg"));
            yield "\" alt=\"flag\" />
                ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "name", [], "any", false, false, false, 69), "html", null, true);
            yield "
              </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['site'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "          </ul>
      </li>
      <li>
        <a class=\"link-try-free\" href=\"";
        // line 76
        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "try_free_button", [], "any", false, false, false, 76));
        yield "\" ";
        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "external", [], "any", false, false, false, 76)) ? ("target=\"_blank\" rel=\"noopener\" ") : (""));
        yield ">Isprobaj besplatno</a>
      </li>
      <li class=\"link-last\">
        <a class=\"link-login\" href=\"https://app.my-rent.net/users/logi\" ";
        // line 79
        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "external", [], "any", false, false, false, 79)) ? ("target=\"_blank\" rel=\"noopener\" ") : (""));
        yield ">
          <img width=\"24\" height=\"24\" src=\"";
        // line 80
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/log-in.svg");
        yield "\" alt=\"Login icon\" loading=\"lazy\" />
          Prijavi se
        </a>
      </li>

    </ul>


</nav>


";
        // line 91
        $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('scripts'        , function() use ($context, $blocks, $macros) {
        // line 92
        yield "<style media=\"screen\">
  .mm-ocd-opened .menu-icon {
    display: none!important;
  }
  .mm-ocd-opened .close-icon {
    display: block!important;
  }

</style>
<script type=\"text/javascript\">
    var menu = new MmenuLight(document.querySelector(\"#mobile-menu\"), \"all\");

    var navigator = menu.navigation({
         slidingSubmenus: true,
    });

    var drawer = menu.offcanvas({
    });

    //\tOpen the menu.
    document
        .querySelector('.js-sidemenu-trigger')
        .addEventListener(\"click\", (e) => {
            e.preventDefault();
          if(document.body.classList.contains('mm-ocd-opened')) {
            drawer.close()
          } else {
            drawer.open()
          }
        });

</script>
";
        // line 91
        return; yield '';}, true        );
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/layout/mobile-menu.htm";
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
        return array (  307 => 91,  273 => 92,  271 => 91,  257 => 80,  253 => 79,  245 => 76,  240 => 73,  230 => 69,  226 => 68,  222 => 67,  219 => 66,  215 => 65,  208 => 60,  202 => 59,  199 => 58,  196 => 57,  186 => 54,  183 => 53,  178 => 50,  172 => 49,  162 => 46,  159 => 45,  154 => 42,  148 => 41,  138 => 38,  135 => 37,  131 => 35,  118 => 32,  115 => 31,  111 => 30,  105 => 27,  102 => 26,  99 => 25,  95 => 24,  88 => 20,  84 => 19,  79 => 16,  76 => 15,  72 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  51 => 7,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set items = settings.main_menu.links %}

<nav id=\"mobile-menu\">


    <ul>
      {% for item in items %}
        {% if item.is_enabled %}
          {% if not item.parent_id %}
            {% if item.children | length %}
              <li>
                  <span>{{ item.title }}</span>
                  <ul>
                      {% for item in item.children %}
                        {% if item.children | length %}
                        <li>
                            <span class=\"flexed-wrap\">
                              <span class=\"flexed\">
                                <img width=\"40\" height=\"40\" src=\"{{ ('assets/icons/' ~ item.icon ~ '.svg')| theme }}\" alt=\"icon\" />
                                {{ item.title }}
                              </span>
                            </span>
                            <ul>
                              {% for item in item.children %}
                                {% if item.children | length %}
                                <span>
                                    {{ item.title }}
                                </span>
                                <ul>
                                  {% for item in item.children %}
                                  <li>
                                    <a href=\"{{ item.page | link }}\" {{ item.external ? 'target=\"_blank\" rel=\"noopener\" '}}>{{ item.title }}</a>
                                  </li>
                                  {% endfor %}
                                </ul>
                                {% else %}
                                <li>
                                  <a href=\"{{ item.page | link }}\" {{ item.external ? 'target=\"_blank\" rel=\"noopener\" '}}>{{ item.title }}</a>
                                </li>
                                {% endif %}
                              {% endfor %}
                            </ul>
                        </li>
                        {% else %}
                        <li>
                          <a href=\"{{ item.page | link }}\" {{ item.external ? 'target=\"_blank\" rel=\"noopener\" '}}>{{ item.title }}</a>
                        </li>
                        {% endif %}
                      {% endfor %}
                  </ul>
              </li>
            {% else %}
              <li>
                <a href=\"{{ item.page | link }}\" {{ item.external ? 'target=\"_blank\" rel=\"noopener\" '}}>{{ item.title }}</a>
              </li>
            {% endif %}
          {% endif %}
        {% endif %}
      {% endfor %}
      <li>
          <span>
            Jezik
          </span>
          <ul>
            {% for site in sitePicker.sites %}
            <li>
              <a class=\"flexed items-center gap-2\" href=\"{{ site.url }}\">
                <img width=\"24\" height=\"24\" src=\"{{ ('assets/icons/flag-' ~ site.code ~ '.svg')|theme }}\" alt=\"flag\" />
                {{ site.name }}
              </a>
            </li>
            {% endfor %}
          </ul>
      </li>
      <li>
        <a class=\"link-try-free\" href=\"{{ settings.try_free_button | link }}\" {{ item.external ? 'target=\"_blank\" rel=\"noopener\" '}}>Isprobaj besplatno</a>
      </li>
      <li class=\"link-last\">
        <a class=\"link-login\" href=\"https://app.my-rent.net/users/logi\" {{ item.external ? 'target=\"_blank\" rel=\"noopener\" '}}>
          <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/log-in.svg'|theme }}\" alt=\"Login icon\" loading=\"lazy\" />
          Prijavi se
        </a>
      </li>

    </ul>


</nav>


{% put scripts %}
<style media=\"screen\">
  .mm-ocd-opened .menu-icon {
    display: none!important;
  }
  .mm-ocd-opened .close-icon {
    display: block!important;
  }

</style>
<script type=\"text/javascript\">
    var menu = new MmenuLight(document.querySelector(\"#mobile-menu\"), \"all\");

    var navigator = menu.navigation({
         slidingSubmenus: true,
    });

    var drawer = menu.offcanvas({
    });

    //\tOpen the menu.
    document
        .querySelector('.js-sidemenu-trigger')
        .addEventListener(\"click\", (e) => {
            e.preventDefault();
          if(document.body.classList.contains('mm-ocd-opened')) {
            drawer.close()
          } else {
            drawer.open()
          }
        });

</script>
{% endput %}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/layout/mobile-menu.htm", "");
    }
}
