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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/pages/index.htm */
class __TwigTemplate_23e119b3c848ee59fe463b8f61e0adfe extends Template
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
        $context["page"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "homepage", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('header_code'        , function() use ($context, $blocks, $macros) {
        // line 4
        yield "    ";
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "header_code", [], "any", false, false, false, 4);
        yield "
";
        // line 3
        return; yield '';}, true        );
        // line 6
        yield "
";
        // line 7
        $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('body_code'        , function() use ($context, $blocks, $macros) {
        // line 8
        yield "    ";
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "body_code", [], "any", false, false, false, 8);
        yield "
";
        // line 7
        return; yield '';}, true        );
        // line 10
        yield "
";
        // line 11
        $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('footer_code'        , function() use ($context, $blocks, $macros) {
        // line 12
        yield "    ";
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_code", [], "any", false, false, false, 12);
        yield "
";
        // line 11
        return; yield '';}, true        );
        // line 14
        yield "
";
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "homepage", [], "any", false, false, false, 15))) {
            // line 16
            yield "    ";
            $this->extensions['Cms\Twig\Extension']->abortFunction("404");
            // line 17
            yield "\t";
        } else {
            // line 19
            yield "
    ";
            // line 20
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "entry_type", [], "any", false, false, false, 20) == "simple")) {
                // line 21
                yield "      ";
                $cmsPartialParams = [];
                $cmsPartialParams['section'] = ($context["section"] ?? null)                ;
                yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("page/content"                , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)                , true                );
                // line 22
                yield "    ";
            }
            // line 23
            yield "
    ";
            // line 24
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "entry_type", [], "any", false, false, false, 24) == "builder")) {
                // line 25
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "builder", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 26
                    yield "          ";
                    $cmsPartialParams = [];
                    $cmsPartialParams['section'] = $context["section"]                    ;
                    yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction(("builder/sections/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["section"], "content_group", [], "any", false, false, false, 26))                    , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)                    , true                    );
                    // line 27
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                yield "    ";
            }
            // line 29
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/pages/index.htm";
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
        return array (  128 => 29,  125 => 28,  119 => 27,  114 => 26,  109 => 25,  107 => 24,  104 => 23,  101 => 22,  96 => 21,  94 => 20,  91 => 19,  88 => 17,  85 => 16,  83 => 15,  80 => 14,  78 => 11,  73 => 12,  71 => 11,  68 => 10,  66 => 7,  61 => 8,  59 => 7,  56 => 6,  54 => 3,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set page = settings.homepage %}

{% put header_code %}
    {{ page.header_code|raw }}
{% endput %}

{% put body_code %}
    {{ page.body_code|raw }}
{% endput %}

{% put footer_code %}
    {{ page.footer_code|raw }}
{% endput %}

{% if settings.homepage is empty %}
    {% do abort('404') %}
\t{# do redirect('/') #}
{% else %}

    {% if page.entry_type == 'simple' %}
      {% partial 'page/content' section=section %}
    {% endif %}

    {% if page.entry_type == 'builder' %}
        {% for section in page.builder %}
          {% partial 'builder/sections/' ~ section.content_group section=section %}
        {% endfor %}
    {% endif %}

{% endif %}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/pages/index.htm", "");
    }
}
