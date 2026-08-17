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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/site/meta.htm */
class __TwigTemplate_1987f8e330c71799d7138283e7f1e685 extends Template
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
        yield "<link rel=\"preconnect\" href=\"https://www.googletagmanager.com\" />

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
<meta name=\"turbo-visit-control\" content=\"disable\" />

";
        // line 7
        if (Twig\Extension\CoreExtension::testEmpty(($context["section"] ?? null))) {
            // line 8
            yield "
    ";
            // line 9
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "url", [], "any", false, false, false, 9) == "/")) {
                // line 10
                yield "
        ";
                // line 11
                $context["section"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "homepage", [], "any", false, false, false, 11);
                // line 12
                yield "        ";
                // line 13
                yield "        <title>
          ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_title", [], "any", false, false, false, 14) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 14)), "html", null, true);
                yield "</title>
        <meta name=\"title\" content=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_title", [], "any", false, false, false, 15) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 15)), "html", null, true);
                yield "\">
        <meta name=\"description\" content=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_description", [], "any", false, false, false, 16), "html", null, true);
                yield "\">
        ";
                // line 17
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_keywords", [], "any", false, false, false, 17))) {
                    // line 18
                    yield "            <meta name=\"keywords\" content=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_keywords", [], "any", false, false, false, 18), "html", null, true);
                    yield "\">
        ";
                }
                // line 20
                yield "        <link rel=\"canonical\" href=\"";
                yield $this->extensions['System\Twig\Extension']->appFilter("");
                yield "\">
        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["sites"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                    // line 22
                    yield "            ";
                    if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22) != Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 22))) {
                        // line 23
                        yield "                <link rel=\"alternate\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "url", [], "any", false, false, false, 23), "html", null, true);
                        yield "\" hreflang=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "route_prefix", [], "any", false, false, false, 23), ["/" => ""]), "html", null, true);
                        yield "\">
            ";
                    }
                    // line 25
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['site'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "
        ";
                // line 28
                yield "        ";
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "robots", [], "any", false, false, false, 28))) {
                    // line 29
                    yield "            <meta name=\"robots\" content=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "robots", [], "any", false, false, false, 29));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                        yield (( !Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 29)) ? (", ") : (""));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield "\">
        ";
                }
                // line 31
                yield "

        ";
                // line 34
                yield "        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"";
                // line 35
                yield $this->extensions['System\Twig\Extension']->appFilter("");
                yield "\">
        <meta property=\"og:title\" content=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_title", [], "any", false, false, false, 36) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 36)), "html", null, true);
                yield "\">
        <meta property=\"og:description\" content=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_description", [], "any", false, false, false, 37), "html", null, true);
                yield "\">
        ";
                // line 38
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sharing_image", [], "any", false, false, false, 38))) {
                    // line 39
                    yield "            <meta property=\"og:image\" content=\"";
                    yield $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sharing_image", [], "any", false, false, false, 39)), 1200, 627, ["mode" => "crop"]);
                    yield "\">
        ";
                } else {
                    // line 41
                    yield "             <meta property=\"og:image\" content=\"https://myrent.hr/storage/app/media/myrent/myrent-app-sastanak.webp\">
        ";
                }
                // line 43
                yield "
        ";
                // line 45
                yield "        <meta property=\"twitter:card\" content=\"summary_large_image\">
        <meta property=\"twitter:url\" content=\"";
                // line 46
                yield $this->extensions['System\Twig\Extension']->appFilter("");
                yield "\">
        <meta property=\"twitter:title\" content=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_title", [], "any", false, false, false, 47) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 47)), "html", null, true);
                yield "\">
        <meta property=\"twitter:description\" content=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_description", [], "any", false, false, false, 48), "html", null, true);
                yield "\">
        ";
                // line 49
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sharing_image", [], "any", false, false, false, 49))) {
                    // line 50
                    yield "            <meta property=\"twitter:image\" content=\"";
                    yield $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sharing_image", [], "any", false, false, false, 50)), 1200, 627, ["mode" => "crop"]);
                    yield "\">
        ";
                } else {
                    // line 52
                    yield "             <meta property=\"twitter:image\" content=\"https://myrent.hr/storage/app/media/myrent/myrent-app-sastanak.webp\">
        ";
                }
                // line 54
                yield "    ";
            } else {
                // line 55
                yield "        ";
                // line 56
                yield "        <title>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 56), "meta_title", [], "any", false, false, false, 56) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 56)), "html", null, true);
                yield "</title>
        <meta name=\"title\" content=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 57), "meta_title", [], "any", false, false, false, 57) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 57)), "html", null, true);
                yield "\">
        <meta name=\"description\" content=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 58), "meta_description", [], "any", false, false, false, 58), "html", null, true);
                yield "\">

        <link rel=\"canonical\" href=\"";
                // line 60
                yield $this->extensions['Cms\Twig\Extension']->pageFilter("");
                yield "\">
        ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["sites"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                    // line 62
                    yield "            ";
                    if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62) != Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 62))) {
                        // line 63
                        yield "                <link rel=\"alternate\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "url", [], "any", false, false, false, 63), "html", null, true);
                        yield "\" hreflang=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "route_prefix", [], "any", false, false, false, 63), ["/" => ""]), "html", null, true);
                        yield "\">
            ";
                    }
                    // line 65
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['site'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                yield "

        ";
                // line 69
                yield "        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"";
                // line 70
                yield $this->extensions['Cms\Twig\Extension']->pageFilter("");
                yield "\">
        <meta property=\"og:title\" content=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 71), "meta_title", [], "any", false, false, false, 71) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 71)), "html", null, true);
                yield "\">
        <meta property=\"og:description\" content=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 72), "meta_description", [], "any", false, false, false, 72), "html", null, true);
                yield "\">

        ";
                // line 75
                yield "        <meta property=\"twitter:card\" content=\"summary_large_image\">
        <meta property=\"twitter:url\" content=\"";
                // line 76
                yield $this->extensions['Cms\Twig\Extension']->pageFilter("");
                yield "\">
        <meta property=\"twitter:title\" content=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 77), "meta_title", [], "any", false, false, false, 77) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 77)), "html", null, true);
                yield "\">
        <meta property=\"twitter:description\" content=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 78), "meta_description", [], "any", false, false, false, 78), "html", null, true);
                yield "\">
    ";
            }
            // line 80
            yield "
";
        } else {
            // line 82
            yield "
    ";
            // line 84
            yield "    <title>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_title", [], "any", false, false, false, 84) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 84)), "html", null, true);
            yield "</title>
    <meta name=\"title\" content=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_title", [], "any", false, false, false, 85) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 85)), "html", null, true);
            yield "\">
    <meta name=\"description\" content=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_description", [], "any", false, false, false, 86), "html", null, true);
            yield "\">
    ";
            // line 87
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_keywords", [], "any", false, false, false, 87))) {
                // line 88
                yield "        <meta name=\"keywords\" content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_keywords", [], "any", false, false, false, 88), "html", null, true);
                yield "\">
    ";
            }
            // line 90
            yield "
    <link rel=\"canonical\" href=\"";
            // line 91
            yield $this->extensions['Cms\Twig\Extension']->pageFilter("");
            yield "\">
    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sites"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 93
                yield "        ";
                if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93) != Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 93))) {
                    // line 94
                    yield "            <link rel=\"alternate\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "url", [], "any", false, false, false, 94), "html", null, true);
                    yield "\" hreflang=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "route_prefix", [], "any", false, false, false, 94), ["/" => ""]), "html", null, true);
                    yield "\">
        ";
                }
                // line 96
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['site'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "
    ";
            // line 99
            yield "    ";
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "robots", [], "any", false, false, false, 99))) {
                // line 100
                yield "        <meta name=\"robots\" content=\"";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "robots", [], "any", false, false, false, 100));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                    yield (( !Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 100)) ? (", ") : (""));
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "\">
    ";
            }
            // line 102
            yield "
    ";
            // line 104
            yield "    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
            // line 105
            yield $this->extensions['Cms\Twig\Extension']->pageFilter("");
            yield "\">
    <meta property=\"og:title\" content=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_title", [], "any", false, false, false, 106) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 106)), "html", null, true);
            yield "\">
    <meta property=\"og:description\" content=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_description", [], "any", false, false, false, 107), "html", null, true);
            yield "\">
    ";
            // line 108
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sharing_image", [], "any", false, false, false, 108))) {
                // line 109
                yield "        <meta property=\"og:image\" content=\"";
                yield $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sharing_image", [], "any", false, false, false, 109)), 1200, 627, ["mode" => "crop"]);
                yield "\">
    ";
            } else {
                // line 111
                yield "         <meta property=\"og:image\" content=\"https://myrent.hr/storage/app/media/myrent/myrent-app-sastanak.webp\">
     ";
            }
            // line 113
            yield "
    ";
            // line 115
            yield "    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"";
            // line 116
            yield $this->extensions['Cms\Twig\Extension']->pageFilter("");
            yield "\">
    <meta property=\"twitter:title\" content=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_title", [], "any", false, false, false, 117) . " - ") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "website_name", [], "any", false, false, false, 117)), "html", null, true);
            yield "\">
    <meta property=\"twitter:description\" content=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_description", [], "any", false, false, false, 118), "html", null, true);
            yield "\">
    ";
            // line 119
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sharing_image", [], "any", false, false, false, 119))) {
                // line 120
                yield "        <meta property=\"twitter:image\" content=\"";
                yield $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sharing_image", [], "any", false, false, false, 120)), 1200, 627, ["mode" => "crop"]);
                yield "\">
    ";
            } else {
                // line 122
                yield "        <meta property=\"twitter:image\" content=\"https://myrent.hr/storage/app/media/myrent/myrent-app-sastanak.webp\">
    ";
            }
            // line 124
            yield "
";
        }
        // line 126
        yield "

";
        // line 129
        yield "  ";
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["sitemap"] ?? null), "header_code", [], "any", false, false, false, 129);
        yield "
";
        // line 130
        $context['__placeholder_header_code_default_contents'] = null;        yield $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('header_code', $context['__placeholder_header_code_default_contents']);
        unset($context['__placeholder_header_code_default_contents']);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/meta.htm";
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
        return array (  465 => 130,  460 => 129,  456 => 126,  452 => 124,  448 => 122,  442 => 120,  440 => 119,  436 => 118,  432 => 117,  428 => 116,  425 => 115,  422 => 113,  418 => 111,  412 => 109,  410 => 108,  406 => 107,  402 => 106,  398 => 105,  395 => 104,  392 => 102,  357 => 100,  354 => 99,  351 => 97,  345 => 96,  337 => 94,  334 => 93,  330 => 92,  326 => 91,  323 => 90,  317 => 88,  315 => 87,  311 => 86,  307 => 85,  302 => 84,  299 => 82,  295 => 80,  290 => 78,  286 => 77,  282 => 76,  279 => 75,  274 => 72,  270 => 71,  266 => 70,  263 => 69,  259 => 66,  253 => 65,  245 => 63,  242 => 62,  238 => 61,  234 => 60,  229 => 58,  225 => 57,  220 => 56,  218 => 55,  215 => 54,  211 => 52,  205 => 50,  203 => 49,  199 => 48,  195 => 47,  191 => 46,  188 => 45,  185 => 43,  181 => 41,  175 => 39,  173 => 38,  169 => 37,  165 => 36,  161 => 35,  158 => 34,  154 => 31,  119 => 29,  116 => 28,  113 => 26,  107 => 25,  99 => 23,  96 => 22,  92 => 21,  87 => 20,  81 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  62 => 12,  60 => 11,  57 => 10,  55 => 9,  52 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link rel=\"preconnect\" href=\"https://www.googletagmanager.com\" />

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
<meta name=\"turbo-visit-control\" content=\"disable\" />

{% if section is empty  %}

    {% if this.page.url == '/' %}

        {% set section = settings.homepage %}
        {# Primary Meta Tags #}
        <title>
          {{ section.meta_title ~ ' - ' ~ settings.website_name }}</title>
        <meta name=\"title\" content=\"{{ section.meta_title ~ ' - ' ~ settings.website_name }}\">
        <meta name=\"description\" content=\"{{ section.meta_description }}\">
        {% if section.meta_keywords|length %}
            <meta name=\"keywords\" content=\"{{ section.meta_keywords }}\">
        {% endif %}
        <link rel=\"canonical\" href=\"{{ ''| app }}\">
        {% for site in sites %}
            {% if this.site.id != site.id %}
                <link rel=\"alternate\" href=\"{{ site.url }}\" hreflang=\"{{ site.route_prefix|replace({'/' : ''}) }}\">
            {% endif %}
        {% endfor %}

        {# Robot Info #}
        {% if section.robots|length %}
            <meta name=\"robots\" content=\"{% for item in section.robots %}{{ item }}{{ not loop.last ? ', ' }}{% endfor %}\">
        {% endif %}


        {# Open Graph / Facebook #}
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"{{ ''|app }}\">
        <meta property=\"og:title\" content=\"{{ section.meta_title ~ ' - ' ~ settings.website_name }}\">
        <meta property=\"og:description\" content=\"{{ section.meta_description }}\">
        {% if section.sharing_image|length %}
            <meta property=\"og:image\" content=\"{{ section.sharing_image|media|resize(1200, 627, {mode: 'crop'}) }}\">
        {% else %}
             <meta property=\"og:image\" content=\"https://myrent.hr/storage/app/media/myrent/myrent-app-sastanak.webp\">
        {% endif %}

        {# Twitter #}
        <meta property=\"twitter:card\" content=\"summary_large_image\">
        <meta property=\"twitter:url\" content=\"{{ ''|app }}\">
        <meta property=\"twitter:title\" content=\"{{ section.meta_title ~ ' - ' ~ settings.website_name }}\">
        <meta property=\"twitter:description\" content=\"{{ section.meta_description }}\">
        {% if section.sharing_image|length %}
            <meta property=\"twitter:image\" content=\"{{ section.sharing_image|media|resize(1200, 627, {mode: 'crop'}) }}\">
        {% else %}
             <meta property=\"twitter:image\" content=\"https://myrent.hr/storage/app/media/myrent/myrent-app-sastanak.webp\">
        {% endif %}
    {% else %}
        {# Primary Meta Tags #}
        <title>{{ this.page.meta_title ~ ' - ' ~ settings.website_name }}</title>
        <meta name=\"title\" content=\"{{ this.page.meta_title ~ ' - ' ~ settings.website_name }}\">
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">

        <link rel=\"canonical\" href=\"{{ ''| page }}\">
        {% for site in sites %}
            {% if this.site.id != site.id %}
                <link rel=\"alternate\" href=\"{{ site.url }}\" hreflang=\"{{ site.route_prefix|replace({'/' : ''}) }}\">
            {% endif %}
        {% endfor %}


        {# Open Graph / Facebook #}
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"{{ ''|page }}\">
        <meta property=\"og:title\" content=\"{{ this.page.meta_title ~ ' - ' ~ settings.website_name }}\">
        <meta property=\"og:description\" content=\"{{ this.page.meta_description }}\">

        {# Twitter #}
        <meta property=\"twitter:card\" content=\"summary_large_image\">
        <meta property=\"twitter:url\" content=\"{{ ''|page }}\">
        <meta property=\"twitter:title\" content=\"{{ this.page.meta_title ~ ' - ' ~ settings.website_name }}\">
        <meta property=\"twitter:description\" content=\"{{ this.page.meta_description }}\">
    {% endif %}

{% else %}

    {# Primary Meta Tags #}
    <title>{{ section.meta_title ~ ' - ' ~ settings.website_name }}</title>
    <meta name=\"title\" content=\"{{ section.meta_title ~ ' - ' ~ settings.website_name }}\">
    <meta name=\"description\" content=\"{{ section.meta_description }}\">
    {% if section.meta_keywords|length %}
        <meta name=\"keywords\" content=\"{{ section.meta_keywords }}\">
    {% endif %}

    <link rel=\"canonical\" href=\"{{ ''| page }}\">
    {% for site in sites %}
        {% if this.site.id != site.id %}
            <link rel=\"alternate\" href=\"{{ site.url }}\" hreflang=\"{{ site.route_prefix|replace({'/' : ''}) }}\">
        {% endif %}
    {% endfor %}

    {# Robot Info #}
    {% if section.robots|length %}
        <meta name=\"robots\" content=\"{% for item in section.robots %}{{ item }}{{ not loop.last ? ', ' }}{% endfor %}\">
    {% endif %}

    {# Open Graph / Facebook #}
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{{ ''|page }}\">
    <meta property=\"og:title\" content=\"{{ section.meta_title ~ ' - ' ~ settings.website_name }}\">
    <meta property=\"og:description\" content=\"{{ section.meta_description }}\">
    {% if section.sharing_image|length %}
        <meta property=\"og:image\" content=\"{{ section.sharing_image|media|resize(1200, 627, {mode: 'crop'}) }}\">
    {% else %}
         <meta property=\"og:image\" content=\"https://myrent.hr/storage/app/media/myrent/myrent-app-sastanak.webp\">
     {% endif %}

    {# Twitter #}
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"{{ ''|page }}\">
    <meta property=\"twitter:title\" content=\"{{ section.meta_title ~ ' - ' ~ settings.website_name }}\">
    <meta property=\"twitter:description\" content=\"{{ section.meta_description }}\">
    {% if section.sharing_image|length %}
        <meta property=\"twitter:image\" content=\"{{ section.sharing_image|media|resize(1200, 627, {mode: 'crop'}) }}\">
    {% else %}
        <meta property=\"twitter:image\" content=\"https://myrent.hr/storage/app/media/myrent/myrent-app-sastanak.webp\">
    {% endif %}

{% endif  %}


{# Header Code Placeholders #}
  {{ sitemap.header_code|raw }}
{% placeholder header_code %}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/meta.htm", "");
    }
}
