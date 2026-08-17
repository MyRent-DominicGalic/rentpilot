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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/site/scripts.htm */
class __TwigTemplate_cd6677805c98751356c508d36055145c extends Template
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
        yield "<!-- Scripts  -->
<script type=\"text/javascript\" src=\"";
        // line 2
        yield $this->extensions['Cms\Twig\Extension']->themeFilter(["@framework", "@framework.turbo", "@framework.extras", "assets/vendor/mmenu/mmenu-light.js", "assets/js/app.js"]);
        // line 8
        yield "\">
</script>
";
        // line 10
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->assetsFunction('js');
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('scripts');
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/scripts.htm";
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
        return array (  51 => 10,  47 => 8,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Scripts  -->
<script type=\"text/javascript\" src=\"{{ [
  '@framework',
  '@framework.turbo',
  '@framework.extras',
  'assets/vendor/mmenu/mmenu-light.js',
  'assets/js/app.js'
  ] | theme }}\">
</script>
{% scripts %}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/scripts.htm", "");
    }
}
