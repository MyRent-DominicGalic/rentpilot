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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/blogs/_noresults.htm */
class __TwigTemplate_95d74b6c3b4b965a4cddaffc65abea73 extends Template
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
        yield "<div class=\"w-full lg:py-12 py-8 max-w-xl mx-auto\">
    <img class=\"w-60 h-auto mb-6 mx-auto\" src=\"";
        // line 2
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/seo-browser-2-streamline.svg");
        yield "\" alt=\"icon\" loading=\"lazy\"  />
  <div class=\"w-full flex flex-col items-center justify-center text-center mx-auto max-w-3xl\">
      <h2 class=\"mb-4\">Nema rezultata</h2>
      <div class=\"font-medium text-gray sm:px-12 leading-relaxed mb-4\">
          <p>Nažalost, nismo uspjeli pronaći rezultate koji odgovaraju vašem upitu. Provjerite pravopis ili pokušajte s drugom ključnom riječi.</p>
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
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/blogs/_noresults.htm";
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
        return array (  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"w-full lg:py-12 py-8 max-w-xl mx-auto\">
    <img class=\"w-60 h-auto mb-6 mx-auto\" src=\"{{ ('assets/icons/seo-browser-2-streamline.svg')| theme }}\" alt=\"icon\" loading=\"lazy\"  />
  <div class=\"w-full flex flex-col items-center justify-center text-center mx-auto max-w-3xl\">
      <h2 class=\"mb-4\">Nema rezultata</h2>
      <div class=\"font-medium text-gray sm:px-12 leading-relaxed mb-4\">
          <p>Nažalost, nismo uspjeli pronaći rezultate koji odgovaraju vašem upitu. Provjerite pravopis ili pokušajte s drugom ključnom riječi.</p>
      </div>
  </div>
</div>", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/blogs/_noresults.htm", "");
    }
}
