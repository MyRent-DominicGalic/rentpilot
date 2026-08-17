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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/site/styles.htm */
class __TwigTemplate_af15cc7ddaf81c4f55b783add1cb4965 extends Template
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
        yield "<link passive href=\"";
        yield $this->extensions['Cms\Twig\Extension']->themeFilter(["@framework.extras", "assets/base.css", "assets/app.css"]);
        // line 5
        yield "\" rel=\"stylesheet\">

    <link passive href=\"";
        // line 7
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/utilities.css");
        // line 9
        yield "\" rel=\"stylesheet\">

  ";
        // line 11
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->assetsFunction('css');
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('styles');
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/styles.htm";
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
        return array (  55 => 11,  51 => 9,  49 => 7,  45 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link passive href=\"{{ [
    '@framework.extras',
    'assets/base.css',
    'assets/app.css'
    ] | theme }}\" rel=\"stylesheet\">

    <link passive href=\"{{
      'assets/utilities.css'
       | theme }}\" rel=\"stylesheet\">

  {% styles %}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/styles.htm", "");
    }
}
