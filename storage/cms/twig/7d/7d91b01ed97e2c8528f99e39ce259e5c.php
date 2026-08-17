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

/* /home/myrent/htdocs/myrent.hr/plugins/epic/gdpr/components/partials/set-cookies.htm */
class __TwigTemplate_b410a85698a2b4fcca029990c13ed779 extends Template
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
        yield "var date = new Date();

date.setFullYear(date.getFullYear() + ";
        // line 3
        yield (($this->env->getFunction('cookiesSettingsGet')->getCallable()("set_cookies_lifetime_days")) ? ($this->env->getFunction('cookiesSettingsGet')->getCallable()("set_cookies_lifetime_days")) : (365));
        yield ");

document.cookie = \"";
        // line 5
        yield "epic-cookies-consent=1; path=/; expires=";
        yield "\" + date.toGMTString();

function grantAll()
{
  gtag('consent', 'update', {
    'ad_storage': 'granted',
    'ad_user_data': 'granted',
    'ad_personalization': 'granted',
    'analytics_storage': 'granted'
  });
}

function grantAds()
{
  gtag('consent', 'update', {
    'ad_storage': 'granted',
    'ad_user_data': 'granted',
    'ad_personalization': 'granted',
  });
}

function grantAnalytics()
{
  gtag('consent', 'update', {
    'analytics_storage': 'granted'
  });
}

";
        // line 33
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies", null))) {
            // line 34
            yield "
    ";
            // line 35
            if (($context["setOnlyManageCookies"] ?? null)) {
                // line 36
                yield "
    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies"));
                foreach ($context['_seq'] as $context["_key"] => $context["cookie"]) {
                    // line 38
                    yield "
            var item = document.getElementById('epic-cookies-";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 39), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["customId"] ?? null), "html", null, true);
                    yield "');

            if( item.checked == true ) {
                document.cookie = 'epic-cookies-";
                    // line 42
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 42), "html", null, true);
                    yield "=1; path=/; expires=' + date.toGMTString();

                ";
                    // line 44
                    if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 44) == "analytics")) {
                        // line 45
                        yield "                //  grantAnalytics();
                ";
                    }
                    // line 47
                    yield "
                ";
                    // line 48
                    if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 48) == "ads")) {
                        // line 49
                        yield "                //  grantAds();
                ";
                    }
                    // line 51
                    yield "
            } else {
                document.cookie = 'epic-cookies-";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 53), "html", null, true);
                    yield "=0; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cookie'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "
    ";
            } else {
                // line 59
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["cookie"]) {
                    // line 60
                    yield "        document.cookie = \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("epic-cookies-" . ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 60)) ? (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 60)) : (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60)))) . "=1; path=/; expires="), "html", null, true);
                    yield "\" + date.toGMTString();
      ";
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
                unset($context['_seq'], $context['_key'], $context['cookie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "      //  grantAll();
    ";
            }
            // line 64
            yield "
";
        }
        // line 66
        yield "
document.querySelector('.c-CookiesBar').style.display = \"none\";
document.querySelector('#js--CookiesModal').style.display = \"none\";
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/plugins/epic/gdpr/components/partials/set-cookies.htm";
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
        return array (  187 => 66,  183 => 64,  179 => 62,  162 => 60,  144 => 59,  140 => 57,  130 => 53,  126 => 51,  122 => 49,  120 => 48,  117 => 47,  113 => 45,  111 => 44,  106 => 42,  99 => 39,  96 => 38,  92 => 37,  89 => 36,  87 => 35,  84 => 34,  82 => 33,  51 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("var date = new Date();

date.setFullYear(date.getFullYear() + {{ cookiesSettingsGet('set_cookies_lifetime_days') ? cookiesSettingsGet('set_cookies_lifetime_days') : 365 }});

document.cookie = \"{{ 'epic-cookies-consent=1; path=/; expires='}}\" + date.toGMTString();

function grantAll()
{
  gtag('consent', 'update', {
    'ad_storage': 'granted',
    'ad_user_data': 'granted',
    'ad_personalization': 'granted',
    'analytics_storage': 'granted'
  });
}

function grantAds()
{
  gtag('consent', 'update', {
    'ad_storage': 'granted',
    'ad_user_data': 'granted',
    'ad_personalization': 'granted',
  });
}

function grantAnalytics()
{
  gtag('consent', 'update', {
    'analytics_storage': 'granted'
  });
}

{% if cookiesSettingsGet('cookies',null)|length %}

    {% if setOnlyManageCookies %}

    {% for cookie in cookiesSettingsGet('cookies') %}

            var item = document.getElementById('epic-cookies-{{cookie.slug}}{{customId}}');

            if( item.checked == true ) {
                document.cookie = 'epic-cookies-{{cookie.slug}}=1; path=/; expires=' + date.toGMTString();

                {% if cookie.slug == 'analytics' %}
                //  grantAnalytics();
                {% endif %}

                {% if cookie.slug == 'ads' %}
                //  grantAds();
                {% endif %}

            } else {
                document.cookie = 'epic-cookies-{{cookie.slug}}=0; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }

    {% endfor %}

    {% else %}
      {% for cookie in cookiesSettingsGet('cookies') %}
        document.cookie = \"{{ 'epic-cookies-'~( cookie.slug ? cookie.slug : loop.index)~'=1; path=/; expires='}}\" + date.toGMTString();
      {% endfor %}
      //  grantAll();
    {% endif %}

{% endif %}

document.querySelector('.c-CookiesBar').style.display = \"none\";
document.querySelector('#js--CookiesModal').style.display = \"none\";
", "/home/myrent/htdocs/myrent.hr/plugins/epic/gdpr/components/partials/set-cookies.htm", "");
    }
}
