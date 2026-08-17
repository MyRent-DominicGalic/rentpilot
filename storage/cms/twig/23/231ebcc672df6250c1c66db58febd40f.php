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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/head.htm */
class __TwigTemplate_232a9fdc956fb6f9913abb40f6a04f07 extends Template
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
        $context["sites"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["sitePicker"] ?? null), "sites", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        $cmsPartialParams = [];
        $cmsPartialParams['sites'] = ($context["sites"] ?? null)        ;
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/meta"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 4
        $cmsPartialParams = [];
        $cmsPartialParams['settings'] = ($context["settings"] ?? null)        ;
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/favicon"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 5
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/styles"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 6
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("tracking/gtag-head"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 7
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/recaptcha"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/head.htm";
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
        return array (  61 => 7,  58 => 6,  55 => 5,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set sites = sitePicker.sites %}

{% partial 'site/meta' sites = sites %}
{% partial 'site/favicon' settings = settings %}
{% partial 'site/styles' %}
{% partial 'tracking/gtag-head' %}
{% partial 'site/recaptcha' %}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/head.htm", "");
    }
}
