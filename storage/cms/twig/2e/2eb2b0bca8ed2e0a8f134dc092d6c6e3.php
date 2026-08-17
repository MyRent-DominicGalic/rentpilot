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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/pages/page.htm */
class __TwigTemplate_7cfc962ccea9b7ad94d15a43233e7de6 extends Template
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
        $context["page"] = ($context["section"] ?? null);
        // line 2
        yield "
";
        // line 3
        $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('header_code'        , function() use ($context, $blocks, $macros) {
        // line 4
        yield "
    ";
        // line 5
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "header_code", [], "any", false, false, false, 5);
        yield "

    ";
        // line 7
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "schema_code", [], "any", false, false, false, 7);
        yield "

";
        // line 3
        return; yield '';}, true        );
        // line 10
        yield "
";
        // line 11
        $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('body_code'        , function() use ($context, $blocks, $macros) {
        // line 12
        yield "    ";
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "body_code", [], "any", false, false, false, 12);
        yield "
";
        // line 11
        return; yield '';}, true        );
        // line 14
        yield "
";
        // line 15
        $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('footer_code'        , function() use ($context, $blocks, $macros) {
        // line 16
        yield "    ";
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_code", [], "any", false, false, false, 16);
        yield "
";
        // line 15
        return; yield '';}, true        );
        // line 18
        yield "
";
        // line 19
        if (Twig\Extension\CoreExtension::testEmpty(($context["page"] ?? null))) {
            // line 20
            yield "\t";
            $this->extensions['Cms\Twig\Extension']->redirectFunction("/");
            // line 21
            yield "    ";
        } else {
            // line 23
            yield "    ";
            if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "homepage", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23) == Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 23)) && (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "homepage", [], "any", false, false, false, 23), "slug", [], "any", false, false, false, 23) == Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "slug", [], "any", false, false, false, 23)))) {
                // line 24
                yield "        ";
                $this->extensions['Cms\Twig\Extension']->redirectFunction(($this->extensions['System\Twig\Extension']->appFilter("/") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, false, false, 24), "route_prefix", [], "any", false, false, false, 24)), 301);
                // line 25
                yield "    ";
            } else {
                // line 26
                yield "
        ";
                // line 27
                if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "entry_type", [], "any", false, false, false, 27) == "simple")) {
                    // line 28
                    yield "          ";
                    $cmsPartialParams = [];
                    $cmsPartialParams['section'] = ($context["section"] ?? null)                    ;
                    yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("page/content"                    , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)                    , true                    );
                    // line 29
                    yield "        ";
                }
                // line 30
                yield "
        ";
                // line 31
                if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "entry_type", [], "any", false, false, false, 31) == "builder")) {
                    // line 32
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "builder", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                        // line 33
                        yield "              ";
                        $cmsPartialParams = [];
                        $cmsPartialParams['section'] = $context["section"]                        ;
                        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction(("builder/sections/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["section"], "content_group", [], "any", false, false, false, 33))                        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)                        , true                        );
                        // line 34
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    yield "        ";
                }
                // line 36
                yield "
    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/pages/page.htm";
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
        return array (  145 => 36,  142 => 35,  136 => 34,  131 => 33,  126 => 32,  124 => 31,  121 => 30,  118 => 29,  113 => 28,  111 => 27,  108 => 26,  105 => 25,  102 => 24,  99 => 23,  96 => 21,  93 => 20,  91 => 19,  88 => 18,  86 => 15,  81 => 16,  79 => 15,  76 => 14,  74 => 11,  69 => 12,  67 => 11,  64 => 10,  62 => 3,  57 => 7,  52 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set page = section %}

{% put header_code %}

    {{ page.header_code|raw }}

    {{ page.schema_code|raw }}

{% endput %}

{% put body_code %}
    {{ page.body_code|raw }}
{% endput %}

{% put footer_code %}
    {{ page.footer_code|raw }}
{% endput %}

{% if page is empty %}
\t{% do redirect('/') %}
    {# do abort('404') #}
{% else %}
    {% if (settings.homepage.id == page.id) and (settings.homepage.slug == page.slug) %}
        {% do redirect('/'|app ~ this.site.route_prefix, 301) %}
    {% else %}

        {% if page.entry_type == 'simple' %}
          {% partial 'page/content' section=section %}
        {% endif %}

        {% if page.entry_type == 'builder' %}
            {% for section in page.builder %}
              {% partial 'builder/sections/' ~ section.content_group section=section %}
            {% endfor %}
        {% endif %}

    {% endif %}
{% endif %}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/pages/page.htm", "");
    }
}
