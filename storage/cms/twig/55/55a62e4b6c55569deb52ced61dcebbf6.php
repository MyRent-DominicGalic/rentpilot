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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\plugins/epic/gdpr/components/partials/list-cookies-default.htm */
class __TwigTemplate_8c37f253a9a6c80d2b1e6153574f9670 extends Template
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
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies", null))) {
            // line 2
            yield "
<form class=\"list-cookies\">

    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies"));
            foreach ($context['_seq'] as $context["_key"] => $context["cookie"]) {
                // line 6
                yield "
    <div class=\"single-cookie\">

        ";
                // line 9
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "description", [], "any", false, false, false, 9)) {
                    // line 10
                    yield "        <div class=\"single-cookie__description\">";
                    yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "description", [], "any", false, false, false, 10);
                    yield "</div>
        ";
                }
                // line 12
                yield "
        <div class=\"flex justify-between items-center gap-4\">
            <div class=\"text-xl font-medium\">";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "title", [], "any", false, false, false, 14), "html", null, true);
                yield "</div>
            <label for=\"epic-cookies-";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 15), "html", null, true);
                yield "\" class=\"switch\">
                <input class=\"checkbox ";
                // line 16
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "required", [], "any", false, false, false, 16)) ? ("disabled") : (""));
                yield "\" type=\"checkbox\" id=\"epic-cookies-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 16), "html", null, true);
                yield "\" ";
                yield ((((($_v0 = ($context["epicCookies"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 16)] ?? null) : null) || Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "required", [], "any", false, false, false, 16))) ? ("checked") : (""));
                yield " ";
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "default_enabled", [], "any", false, false, false, 16)) ? ("checked") : (""));
                yield " ";
                yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "required", [], "any", false, false, false, 16)) ? ("disabled") : (""));
                yield ">
                <span class=\"slider round\"></span>
            </label>
        </div>

    </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cookie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "
    <footer class=\"list-cookies__actions\">
      <button type=\"button\" class=\"px-6 py-3 text-sm md:text-base border font-medium border-secondary rounded-md text-secondary hover:bg-secondary hover:text-white transition-all js--modal-close\">
        <span>";
            // line 27
            yield $this->env->getFilter('_')->getCallable()("Zatvori");
            yield "</span>
      </button>
      <button type=\"button\" class=\"px-6 py-3  text-sm md:text-base btn font-medium bg-secondary hover:bg-accent rounded-md text-white transition-all js--cookies-save-settings\">
        <span>";
            // line 30
            yield $this->env->getFilter('_')->getCallable()("Spremi postavke");
            yield "</span>
      </button>
    </footer>



</form>

";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\plugins/epic/gdpr/components/partials/list-cookies-default.htm";
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
        return array (  111 => 30,  105 => 27,  100 => 24,  78 => 16,  74 => 15,  70 => 14,  66 => 12,  60 => 10,  58 => 9,  53 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if cookiesSettingsGet('cookies', null)|length %}

<form class=\"list-cookies\">

    {% for cookie in cookiesSettingsGet('cookies') %}

    <div class=\"single-cookie\">

        {% if cookie.description %}
        <div class=\"single-cookie__description\">{{ cookie.description|raw }}</div>
        {% endif %}

        <div class=\"flex justify-between items-center gap-4\">
            <div class=\"text-xl font-medium\">{{ cookie.title }}</div>
            <label for=\"epic-cookies-{{cookie.slug}}\" class=\"switch\">
                <input class=\"checkbox {{ cookie.required ? 'disabled' : ''  }}\" type=\"checkbox\" id=\"epic-cookies-{{cookie.slug}}\" {{ epicCookies[cookie.slug] or (cookie.required) ? 'checked' : '' }} {{ cookie.default_enabled ? 'checked' : '' }} {{ cookie.required ? 'disabled' : ''  }}>
                <span class=\"slider round\"></span>
            </label>
        </div>

    </div>

    {% endfor %}

    <footer class=\"list-cookies__actions\">
      <button type=\"button\" class=\"px-6 py-3 text-sm md:text-base border font-medium border-secondary rounded-md text-secondary hover:bg-secondary hover:text-white transition-all js--modal-close\">
        <span>{{ 'Zatvori'|_ }}</span>
      </button>
      <button type=\"button\" class=\"px-6 py-3  text-sm md:text-base btn font-medium bg-secondary hover:bg-accent rounded-md text-white transition-all js--cookies-save-settings\">
        <span>{{ 'Spremi postavke'|_ }}</span>
      </button>
    </footer>



</form>

{% endif %}
", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\plugins/epic/gdpr/components/partials/list-cookies-default.htm", "");
    }
}
