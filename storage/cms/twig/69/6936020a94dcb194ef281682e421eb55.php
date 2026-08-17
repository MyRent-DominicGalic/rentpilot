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

/* /home/myrent/htdocs/myrent.hr/plugins/epic/gdpr/components/cookiesbar/default.htm */
class __TwigTemplate_529d3524b34e6269a44922381cf90bc4 extends Template
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
        yield "<div id=\"ajax-cookiesBar\">
</div>


<script type=\"text/javascript\">
  oc.ajax('";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["__SELF__"] ?? null), "html", null, true);
        yield "::onRun', {
      update: {'";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["__SELF__"] ?? null), "html", null, true);
        yield "::cookiesbar-data': '#ajax-cookiesBar'}
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/plugins/epic/gdpr/components/cookiesbar/default.htm";
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
        return array (  53 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"ajax-cookiesBar\">
</div>


<script type=\"text/javascript\">
  oc.ajax('{{__SELF__}}::onRun', {
      update: {'{{__SELF__}}::cookiesbar-data': '#ajax-cookiesBar'}
    });
</script>
", "/home/myrent/htdocs/myrent.hr/plugins/epic/gdpr/components/cookiesbar/default.htm", "");
    }
}
