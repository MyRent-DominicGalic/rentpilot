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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/foot.htm */
class __TwigTemplate_3dd4ec117395b9bb9378b4b828143f16 extends Template
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
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/modal"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 2
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/scripts"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 3
        yield "
";
        // line 4
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_code", [], "any", false, false, false, 4);
        yield "
";
        // line 5
        $context['__placeholder_footer_code_default_contents'] = null;        yield $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('footer_code', $context['__placeholder_footer_code_default_contents']);
        unset($context['__placeholder_footer_code_default_contents']);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/foot.htm";
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
        return array (  55 => 5,  51 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% partial 'site/modal' %}
{% partial 'site/scripts' %}

{{ settings.footer_code|raw }}
{% placeholder footer_code %}
{# Test Git Deploy #}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/foot.htm", "");
    }
}
