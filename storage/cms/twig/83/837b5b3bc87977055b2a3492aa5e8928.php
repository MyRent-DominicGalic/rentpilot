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

/* E:\faks\_zavrsni\tailorblueprint\plugins/epic/gdpr/components/cookiesbar/cookiesbar-data.htm */
class __TwigTemplate_9fd5154c664ea725a9f41c6f88727aaa extends Template
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
        if ( !Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["epicCookies"] ?? null), "consent", [], "any", false, false, false, 1)) {
            // line 2
            yield "    ";
            $cmsPartialParams = [];
            yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["__SELF__"] ?? null) . "::cookiesbar")            , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)            , true            );
            // line 3
            yield "    ";
            $cmsPartialParams = [];
            yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("@modal-scripts"            , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)            , true            );
        }
        // line 5
        yield "
";
        // line 6
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("@run-scripts"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\tailorblueprint\\plugins/epic/gdpr/components/cookiesbar/cookiesbar-data.htm";
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
        return array (  56 => 6,  53 => 5,  48 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if not epicCookies.consent %}
    {% partial __SELF__ ~ '::cookiesbar' %}
    {% partial '@modal-scripts' %}
{% endif %}

{% partial '@run-scripts' %}
", "E:\\faks\\_zavrsni\\tailorblueprint\\plugins/epic/gdpr/components/cookiesbar/cookiesbar-data.htm", "");
    }
}
