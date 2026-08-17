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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/content/two_columns.htm */
class __TwigTemplate_958dc895b62a0ab1951c2d8f0ac2a953 extends Template
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
        yield "<div class=\"sm:flex gap-12 py-6\">
  <div class=\"sm:w-1/2\">
    ";
        // line 3
        yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "column_one", [], "any", false, false, false, 3));
        yield "
  </div>
  <div class=\"sm:w-1/2\">
    ";
        // line 6
        yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "column_two", [], "any", false, false, false, 6));
        yield "
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/content/two_columns.htm";
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
        return array (  52 => 6,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"sm:flex gap-12 py-6\">
  <div class=\"sm:w-1/2\">
    {{ section.column_one | content }}
  </div>
  <div class=\"sm:w-1/2\">
    {{ section.column_two | content }}
  </div>
</div>", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/content/two_columns.htm", "");
    }
}
