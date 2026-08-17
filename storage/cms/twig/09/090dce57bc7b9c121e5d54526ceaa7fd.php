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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\plugins/epic/gdpr/components/cookiesmanage/default.htm */
class __TwigTemplate_d48bf6c815c60dae91b08745ebc901d6 extends Template
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
        yield "<div id=\"ajax-cookiesManage\">
</div>


<script type=\"text/javascript\">
if(document.cookie.indexOf('epic-cookies-consent=') == -1) {
    oc.ajax('";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["__SELF__"] ?? null), "html", null, true);
        yield "::onRun', {
      update: {'";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["__SELF__"] ?? null), "html", null, true);
        yield "::cookiesmanage-data': '#ajax-cookiesManage'},
    });
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\plugins/epic/gdpr/components/cookiesmanage/default.htm";
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
        return array (  54 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"ajax-cookiesManage\">
</div>


<script type=\"text/javascript\">
if(document.cookie.indexOf('epic-cookies-consent=') == -1) {
    oc.ajax('{{__SELF__}}::onRun', {
      update: {'{{__SELF__}}::cookiesmanage-data': '#ajax-cookiesManage'},
    });
}
</script>
", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\plugins/epic/gdpr/components/cookiesmanage/default.htm", "");
    }
}
