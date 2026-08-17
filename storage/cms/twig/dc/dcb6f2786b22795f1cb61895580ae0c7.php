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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/layouts/default.htm */
class __TwigTemplate_548ab2b443a5a814511f8ac52bd00d57 extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, false, false, 2), "code", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
    <head>

        ";
        // line 5
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("head"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 6
        yield "
    </head>
    <body class=\"layout-";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "layout", [], "any", false, false, false, 8), "html", null, true);
        yield " page-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "html", null, true);
        yield " page-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "slug", [], "any", false, false, false, 8), "html", null, true);
        yield "\">

        ";
        // line 10
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("tracking/gtag-body"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 11
        yield "       \t";
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["sitemap"] ?? null), "body_code", [], "any", false, false, false, 11);
        yield "

        <div class=\"site-wrapper\">

          <header id=\"layout-header\" class=\"c-StickyBar site-header sticky top-0 left-0 right-0 z-50\">
            ";
        // line 16
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("layout/header"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 17
        yield "          </header>

          <main id=\"layout-page\" class=\"site-content\">
              ";
        // line 20
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->pageFunction($context);
        // line 21
        yield "          </main>

          <footer id=\"layout-footer\" class=\"site-footer\">
            ";
        // line 24
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("layout/footer"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 25
        yield "          </footer>

        </div>

        ";
        // line 29
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("layout/mobile-menu"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 30
        yield "
        ";
        // line 31
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("foot"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 32
        yield "
        <!-- Cookie Bars -->
        ";
        // line 34
        $context['__cms_component_params'] = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("cookiesBar"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 35
        yield "        ";
        $context['__cms_component_params'] = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("cookiesManage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        yield "
    </body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/layouts/default.htm";
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
        return array (  125 => 36,  120 => 35,  116 => 34,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  97 => 25,  94 => 24,  89 => 21,  87 => 20,  82 => 17,  79 => 16,  70 => 11,  67 => 10,  58 => 8,  54 => 6,  51 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ this.site.code }}\">
    <head>

        {% partial 'head' %}

    </head>
    <body class=\"layout-{{ this.page.layout }} page-{{ this.page.id }} page-{{ section.slug }}\">

        {% partial 'tracking/gtag-body' %}
       \t{{ sitemap.body_code|raw }}

        <div class=\"site-wrapper\">

          <header id=\"layout-header\" class=\"c-StickyBar site-header sticky top-0 left-0 right-0 z-50\">
            {% partial 'layout/header' %}
          </header>

          <main id=\"layout-page\" class=\"site-content\">
              {% page %}
          </main>

          <footer id=\"layout-footer\" class=\"site-footer\">
            {% partial 'layout/footer' %}
          </footer>

        </div>

        {% partial 'layout/mobile-menu' %}

        {% partial 'foot' %}

        <!-- Cookie Bars -->
        {% component 'cookiesBar' %}
        {% component 'cookiesManage' %}

    </body>
</html>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/layouts/default.htm", "");
    }
}
