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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/components/share.htm */
class __TwigTemplate_cd3d3a7ecb9f3c25aac78455a608b402 extends Template
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
        yield "<ul class=\"flex gap-4\">
    <li>
      <a href=\"https://facebook.com/sharer.php?u=";
        // line 3
        yield $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 3));
        yield "\" target=\"_blank\" rel=\"noopener\">
        <img width=\"24\" height=\"24\" src=\"";
        // line 4
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/facebook.svg");
        yield "\" alt=\"facebook\"/></a>
      </li>
    ";
        // line 15
        yield "    <li>
      <a href=\"https://twitter.com/intent/tweet?status=";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "+";
        yield $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 16));
        yield "\" target=\"_blank\" rel=\"noopener\">
        <img width=\"24\" height=\"24\" src=\"";
        // line 17
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/twitter.svg");
        yield "\" alt=\"twitter\"/>
      </a>
    </li>
    <li>
      <a href=\"https://www.linkedin.com/sharing/share-offsite/?url=";
        // line 21
        yield $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 21));
        yield "\">
        <img width=\"24\" height=\"24\" src=\"";
        // line 22
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/linkedin.svg");
        yield "\" alt=\"linkedin\"/>
      </a>
    </li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/components/share.htm";
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
        return array (  75 => 22,  71 => 21,  64 => 17,  58 => 16,  55 => 15,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<ul class=\"flex gap-4\">
    <li>
      <a href=\"https://facebook.com/sharer.php?u={{ page.id | page }}\" target=\"_blank\" rel=\"noopener\">
        <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/facebook.svg'| theme }}\" alt=\"facebook\"/></a>
      </li>
    {#
      <li>
        <a class=\"relative js--copy-link\" href=\"javascript:;\" data-text=\"{{ ''| page }}\"  data-success=\"{{ 'share.linkcopied'|trans }}\" onclick=\"copyLinkFunction(this);\">
            <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/instagram.svg'| theme }}\" alt=\"instagram\"/>
        </a>
        <p class=\"bg-secondary text-white text-center absolute left-0 bottom-0 mb-12 py-3 min-w-15 rounded rounded--lg text-sm font-semibold px-6\" style=\"display:none\">
        </p>
      </li>
    #}
    <li>
      <a href=\"https://twitter.com/intent/tweet?status={{ item.title }}+{{ page.id | page }}\" target=\"_blank\" rel=\"noopener\">
        <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/twitter.svg'| theme }}\" alt=\"twitter\"/>
      </a>
    </li>
    <li>
      <a href=\"https://www.linkedin.com/sharing/share-offsite/?url={{ page.id | page }}\">
        <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/linkedin.svg'| theme }}\" alt=\"linkedin\"/>
      </a>
    </li>
</ul>", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/components/share.htm", "");
    }
}
