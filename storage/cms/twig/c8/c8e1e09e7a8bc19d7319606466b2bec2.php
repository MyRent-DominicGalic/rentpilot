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

/* E:\faks\_zavrsni\tailorblueprint\themes/myrent/partials/site/favicon.htm */
class __TwigTemplate_f70677831d5165f9330084c8e2e8d84f extends Template
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
        // line 2
        yield "
    ";
        // line 14
        yield "
    ";
        // line 15
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 15)) {
            // line 16
            yield "    <link rel=\"icon\" type=\"image/svg+xml\" href=\"";
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 16));
            yield "\" />
    ";
        } else {
            // line 18
            yield "    <link rel=\"icon\" type=\"image/svg+xml\" href=\"";
            yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/favicon/favicon.svg");
            yield "\" />
    ";
        }
        // line 20
        yield "    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/favicon/apple-touch-icon.png");
        yield "\" />
    <meta name=\"apple-mobile-web-app-title\" content=\"MyRent\" />
    <link rel=\"manifest\" href=\"";
        // line 22
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/favicon/site.webmanifest");
        yield "\" />";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\tailorblueprint\\themes/myrent/partials/site/favicon.htm";
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
        return array (  68 => 22,  62 => 20,  56 => 18,  50 => 16,  48 => 15,  45 => 14,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Favicons #}

    {#
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ settings.favicon|media|resize(180) }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ settings.favicon|media|resize(32) }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ settings.favicon|media|resize(16) }}\">

    
    {% if settings.favicon_dark|length %}
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ settings.favicon_dark|media|resize(32) }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ settings.favicon_dark|media|resize(16) }}\">
    {% endif %}
    #}

    {% if settings.favicon %}
    <link rel=\"icon\" type=\"image/svg+xml\" href=\"{{ settings.favicon | media }}\" />
    {% else %}
    <link rel=\"icon\" type=\"image/svg+xml\" href=\"{{'assets/icons/favicon/favicon.svg' | theme }}\" />
    {% endif %}
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{'assets/icons/favicon/apple-touch-icon.png' | theme }}\" />
    <meta name=\"apple-mobile-web-app-title\" content=\"MyRent\" />
    <link rel=\"manifest\" href=\"{{'assets/icons/favicon/site.webmanifest' | theme }}\" />", "E:\\faks\\_zavrsni\\tailorblueprint\\themes/myrent/partials/site/favicon.htm", "");
    }
}
