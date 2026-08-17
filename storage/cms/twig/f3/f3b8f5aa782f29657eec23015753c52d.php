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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/articles/_posts.htm */
class __TwigTemplate_9044759c52d0a463489a2adda4afd3c9 extends Template
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
        $context["query"] = $this->env->getFunction('input')->getCallable()("q");
        // line 2
        $context["categories"] = $this->env->getFunction('input')->getCallable()("categories");
        // line 3
        yield "
";
        // line 4
        $context["sort_order"] = ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "reverse_order", [], "any", false, false, false, 4)) ? ("desc") : ("asc"));
        // line 5
        yield "
";
        // line 6
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "show_specific_items", [], "any", false, false, false, 6)) {
            // line 7
            yield "    ";
            $context["posts"] = $this->extensions['System\Twig\Extension']->collectFunction();
            // line 8
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "specific_items", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 9
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "item", [], "any", false, false, false, 9))) {
                    // line 10
                    yield "            ";
                    Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "push", [Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "item", [], "any", false, false, false, 10)], "method", false, false, false, 10);
                    // line 11
                    yield "        ";
                }
                // line 12
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 14
        yield "
";
        // line 15
        if (($context["categories"] ?? null)) {
            // line 16
            yield "    ";
            $context["posts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "whereRelation", ["categories", "id", ($context["categories"] ?? null)], "method", false, false, false, 16);
        }
        // line 18
        yield "
";
        // line 19
        if (($context["query"] ?? null)) {
            // line 20
            yield "  ";
            $context["posts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "searchWhere", [            // line 21
($context["query"] ?? null), ["title", "content", "meta_title", "meta_description", "featured_text"]], "method", false, false, false, 20);
        }
        // line 24
        yield "
";
        // line 25
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sort_by", [], "any", false, false, false, 25) == "title")) {
            // line 26
            yield "    ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "show_specific_items", [], "any", false, false, false, 26)) {
                // line 27
                yield "        ";
                if ((($context["sort_order"] ?? null) == "asc")) {
                    // line 28
                    yield "            ";
                    $context["posts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "sortBy", ["title"], "method", false, false, false, 28);
                    // line 29
                    yield "        ";
                } else {
                    // line 30
                    yield "            ";
                    $context["posts"] = Twig\Extension\CoreExtension::reverse($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "sortBy", ["title"], "method", false, false, false, 30));
                    // line 31
                    yield "        ";
                }
                // line 32
                yield "    ";
            } else {
                // line 33
                yield "        ";
                $context["posts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "orderBy", ["title", ($context["sort_order"] ?? null)], "method", false, false, false, 33);
                // line 34
                yield "    ";
            }
        }
        // line 36
        yield "
";
        // line 37
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sort_by", [], "any", false, false, false, 37) == "date")) {
            // line 38
            yield "    ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "show_specific_items", [], "any", false, false, false, 38)) {
                // line 39
                yield "        ";
                if ((($context["sort_order"] ?? null) == "asc")) {
                    // line 40
                    yield "            ";
                    $context["posts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "sortBy", ["published_at_date"], "method", false, false, false, 40);
                    // line 41
                    yield "        ";
                } else {
                    // line 42
                    yield "            ";
                    $context["posts"] = Twig\Extension\CoreExtension::reverse($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "sortBy", ["published_at_date"], "method", false, false, false, 42));
                    // line 43
                    yield "        ";
                }
                // line 44
                yield "    ";
            } else {
                // line 45
                yield "        ";
                $context["posts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "orderBy", ["published_at_date", ($context["sort_order"] ?? null)], "method", false, false, false, 45);
                // line 46
                yield "    ";
            }
        }
        // line 48
        yield "
";
        // line 49
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "enable_pagination", [], "any", false, false, false, 49)) {
            // line 50
            yield "    ";
            $context["posts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "paginate", [Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "limit", [], "any", false, false, false, 50)], "method", false, false, false, 50);
        } else {
            // line 52
            yield "    ";
            if ( !Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "show_specific_items", [], "any", false, false, false, 52)) {
                // line 53
                yield "        ";
                $context["posts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "limit", [Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "limit", [], "any", false, false, false, 53)], "method", false, false, false, 53), "get", [], "method", false, false, false, 53);
                // line 54
                yield "    ";
            }
        }
        // line 56
        yield "
";
        // line 57
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["posts"] ?? null))) {
            // line 58
            yield "  <div class=\"c-Blogs__list grid grid-cols-1 sm:grid-cols-3 gap-5 sm:gap-8 ";
            yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "limit", [], "any", false, false, false, 58) == 3)) ? ("overflow-x-wrap-nowrap overflow-x-wrap-nowrap--three") : (""));
            yield "\">

    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 61
                yield "      ";
                $cmsPartialParams = [];
                $cmsPartialParams['item'] = $context["item"]                ;
                $cmsPartialParams['key'] = $context["key"]                ;
                yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("builder/articles/_article"                , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)                , true                );
                // line 62
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "
  </div>
";
        } else {
            // line 66
            yield "  ";
            $cmsPartialParams = [];
            $cmsPartialParams['item'] = ($context["item"] ?? null)            ;
            $cmsPartialParams['key'] = ($context["key"] ?? null)            ;
            yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("builder/articles/_noresults"            , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)            , true            );
        }
        // line 68
        yield "
";
        // line 69
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "enable_pagination", [], "any", false, false, false, 69)) {
            // line 70
            yield "<footer class=\"flex justify-center items-center\">
  ";
            // line 71
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "hasMorePages", [], "any", false, false, false, 71)) {
                // line 72
                yield "      <button class=\"bg-purple text-white text-md rounded-full px-4 py-2\"
          data-request=\"onAjax\"
          data-request-update=\"{ _self: '@' }\"
          data-request-success=\"this.parentElement.remove()\"
          data-request-data=\"{ page: ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 76) + 1), "html", null, true);
                yield " }\"
          data-attach-loading>
          Učitaj još
      </button>

      <div class=\"text-gray ml-4\">
        Prikazano ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "count", [], "method", false, false, false, 82) * Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 82)), "html", null, true);
                yield " članaka od ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "total", [], "method", false, false, false, 82), "html", null, true);
                yield "
      </div>
  ";
            }
            // line 85
            yield "</footer>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/articles/_posts.htm";
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
        return array (  256 => 85,  248 => 82,  239 => 76,  233 => 72,  231 => 71,  228 => 70,  226 => 69,  223 => 68,  216 => 66,  211 => 63,  205 => 62,  199 => 61,  195 => 60,  189 => 58,  187 => 57,  184 => 56,  180 => 54,  177 => 53,  174 => 52,  170 => 50,  168 => 49,  165 => 48,  161 => 46,  158 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  135 => 37,  132 => 36,  128 => 34,  125 => 33,  122 => 32,  119 => 31,  116 => 30,  113 => 29,  110 => 28,  107 => 27,  104 => 26,  102 => 25,  99 => 24,  96 => 21,  94 => 20,  92 => 19,  89 => 18,  85 => 16,  83 => 15,  80 => 14,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  59 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set query = input('q') %}
{% set categories = input('categories') %}

{% set sort_order = section.reverse_order ? 'desc' : 'asc' %}

{% if section.show_specific_items %}
    {% set posts = collect() %}
    {% for post in section.specific_items %}
        {% if post.item is not empty %}
            {% do posts.push(post.item) %}
        {% endif %}
    {% endfor %}
{% endif %}

{% if categories %}
    {% set posts = posts.whereRelation('categories', 'id', categories) %}
{% endif %}

{% if query %}
  {% set posts = posts
      .searchWhere(query, ['title', 'content', 'meta_title', 'meta_description', 'featured_text'])
  %}
{% endif %}

{% if section.sort_by == 'title' %}
    {% if section.show_specific_items %}
        {% if sort_order == 'asc' %}
            {% set posts = posts.sortBy('title') %}
        {% else %}
            {% set posts = posts.sortBy('title')|reverse %}
        {% endif %}
    {% else %}
        {% set posts = posts.orderBy('title', sort_order) %}
    {% endif %}
{% endif %}

{% if section.sort_by == 'date' %}
    {% if section.show_specific_items %}
        {% if sort_order == 'asc' %}
            {% set posts = posts.sortBy('published_at_date') %}
        {% else %}
            {% set posts = posts.sortBy('published_at_date')|reverse %}
        {% endif %}
    {% else %}
        {% set posts = posts.orderBy('published_at_date', sort_order) %}
    {% endif %}
{% endif %}

{% if section.enable_pagination %}
    {% set posts = posts.paginate(section.limit) %}
{% else %}
    {% if not section.show_specific_items %}
        {% set posts = posts.limit(section.limit).get() %}
    {% endif %}
{% endif %}

{% if posts | length %}
  <div class=\"c-Blogs__list grid grid-cols-1 sm:grid-cols-3 gap-5 sm:gap-8 {{ section.limit == 3 ? 'overflow-x-wrap-nowrap overflow-x-wrap-nowrap--three' }}\">

    {% for key, item in posts %}
      {% partial 'builder/articles/_article' item = item key = key %}
    {% endfor %}

  </div>
{% else %}
  {% partial 'builder/articles/_noresults' item = item key = key %}
{% endif %}

{% if section.enable_pagination %}
<footer class=\"flex justify-center items-center\">
  {% if posts.hasMorePages %}
      <button class=\"bg-purple text-white text-md rounded-full px-4 py-2\"
          data-request=\"onAjax\"
          data-request-update=\"{ _self: '@' }\"
          data-request-success=\"this.parentElement.remove()\"
          data-request-data=\"{ page: {{ posts.currentPage + 1 }} }\"
          data-attach-loading>
          Učitaj još
      </button>

      <div class=\"text-gray ml-4\">
        Prikazano {{ posts.count() * posts.currentPage }} članaka od {{ posts.total() }}
      </div>
  {% endif %}
</footer>
{% endif %}", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/articles/_posts.htm", "");
    }
}
