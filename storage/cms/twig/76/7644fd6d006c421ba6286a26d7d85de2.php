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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/pages/sitemap.htm */
class __TwigTemplate_324b47b08eb2ca1242f29c9e408e9c30 extends Template
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
        yield "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["pages"] ?? null), "where", ["exclude_in_sitemap", false], "method", false, false, false, 3), "where", ["is_enabled", true], "method", false, false, false, 3), "get", [], "method", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            yield "\t\t<url>
\t\t\t";
            // line 5
            if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "homepage", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 5)) && (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "homepage", [], "any", false, false, false, 5), "slug", [], "any", false, false, false, 5) == Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 5)))) {
                // line 6
                yield "\t    \t<loc>";
                yield $this->extensions['System\Twig\Extension']->appFilter("/");
                yield "</loc>
\t\t\t";
            } else {
                // line 8
                yield "\t\t\t<loc>";
                yield $this->extensions['Cms\Twig\Extension']->pageFilter("page", ["fullslug" => ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "fullslug", [], "any", false, false, false, 8))) ? (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "fullslug", [], "any", false, false, false, 8)) : (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 8)))]);
                yield "</loc>
\t\t\t";
            }
            // line 10
            yield "\t    \t<lastmod>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "updated_at", [], "any", false, false, false, 10), "c"), "html", null, true);
            yield "</lastmod>
\t    \t<changefreq>";
            // line 11
            yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "change_frequency", [], "any", false, false, false, 11))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "change_frequency", [], "any", false, false, false, 11), "html", null, true)) : ("0.8"));
            yield "</changefreq>
\t    \t<priority>";
            // line 12
            yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "priority", [], "any", false, false, false, 12))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["page"], "priority", [], "any", false, false, false, 12), "html", null, true)) : ("always"));
            yield "</priority>
\t    </url>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["posts"] ?? null), "where", ["exclude_in_sitemap", false], "method", false, false, false, 15), "where", ["is_enabled", true], "method", false, false, false, 15), "get", [], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            yield "\t\t<url>
\t    \t<loc>";
            // line 17
            yield $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 17)]);
            yield "</loc>
\t    \t<lastmod>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "updated_at", [], "any", false, false, false, 18), "c"), "html", null, true);
            yield "</lastmod>
\t    \t<changefreq>";
            // line 19
            yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "change_frequency", [], "any", false, false, false, 19))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "change_frequency", [], "any", false, false, false, 19), "html", null, true)) : ("0.8"));
            yield "</changefreq>
\t    \t<priority>";
            // line 20
            yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "priority", [], "any", false, false, false, 20))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "priority", [], "any", false, false, false, 20), "html", null, true)) : ("always"));
            yield "</priority>
\t    </url>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "</urlset>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/pages/sitemap.htm";
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
        return array (  114 => 23,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  90 => 16,  85 => 15,  76 => 12,  72 => 11,  67 => 10,  61 => 8,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
\t{% for page in pages.where('exclude_in_sitemap', false).where('is_enabled', true).get() %}
\t\t<url>
\t\t\t{% if (settings.homepage.id == page.id) and (settings.homepage.slug == page.slug) %}
\t    \t<loc>{{ '/'|app }}</loc>
\t\t\t{% else %}
\t\t\t<loc>{{ 'page'|page({fullslug: (page.fullslug|length ? page.fullslug : page.slug) }) }}</loc>
\t\t\t{% endif %}
\t    \t<lastmod>{{ page.updated_at|date('c') }}</lastmod>
\t    \t<changefreq>{{ page.change_frequency|length ? page.change_frequency : '0.8' }}</changefreq>
\t    \t<priority>{{ page.priority|length ? page.priority : 'always' }}</priority>
\t    </url>
\t{% endfor %}
\t{% for post in posts.where('exclude_in_sitemap', false).where('is_enabled', true).get() %}
\t\t<url>
\t    \t<loc>{{ 'post'|page({slug: post.slug}) }}</loc>
\t    \t<lastmod>{{ post.updated_at|date('c') }}</lastmod>
\t    \t<changefreq>{{ post.change_frequency|length ? post.change_frequency : '0.8' }}</changefreq>
\t    \t<priority>{{ post.priority|length ? post.priority : 'always' }}</priority>
\t    </url>
\t{% endfor %}
</urlset>", "/home/myrent/htdocs/myrent.hr/themes/myrent/pages/sitemap.htm", "");
    }
}
