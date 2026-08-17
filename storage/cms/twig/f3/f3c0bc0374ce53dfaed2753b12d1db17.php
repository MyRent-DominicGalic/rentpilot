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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/site/modal.htm */
class __TwigTemplate_634bd81ced11d9c07a06302089b66acc extends Template
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
        yield "<div id=\"site-modal\" class=\"modal\" style=\"display:none\">
  <div class=\"fixed top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50 z-50 overflow-y-auto\" data-dismiss=\"modal\">
    <div class=\"max-w-3xl w-full my-16 px-5 mx-auto relative\">

        <div id=\"site-modal-content\">



        </div>

    </div>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/modal.htm";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"site-modal\" class=\"modal\" style=\"display:none\">
  <div class=\"fixed top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50 z-50 overflow-y-auto\" data-dismiss=\"modal\">
    <div class=\"max-w-3xl w-full my-16 px-5 mx-auto relative\">

        <div id=\"site-modal-content\">



        </div>

    </div>
  </div>
</div>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/modal.htm", "");
    }
}
