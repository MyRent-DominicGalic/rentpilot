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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\plugins/epic/gdpr/components/cookiesmanage/cookiesmanage-data.htm */
class __TwigTemplate_2d845c7ab56a29b1d4e612d7a67f25f8 extends Template
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
        yield "<div id=\"epic-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["__SELF__"] ?? null), "html", null, true);
        yield "\">

    ";
        // line 3
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["__SELF__"] ?? null) . "::cookiesmanage-default")        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 4
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\plugins/epic/gdpr/components/cookiesmanage/cookiesmanage-data.htm";
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
        return array (  51 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"epic-{{ __SELF__ }}\">

    {% partial __SELF__ ~ '::cookiesmanage-default' %}

</div>
", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\plugins/epic/gdpr/components/cookiesmanage/cookiesmanage-data.htm", "");
    }
}
