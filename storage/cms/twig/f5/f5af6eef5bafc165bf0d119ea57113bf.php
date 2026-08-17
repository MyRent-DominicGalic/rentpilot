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

/* E:\faks\_zavrsni\tailorblueprint\plugins/epic/gdpr/components/partials/run-scripts.htm */
class __TwigTemplate_a4fc8972813693fb328ad7b4eb25d7fc extends Template
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
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies"));
            foreach ($context['_seq'] as $context["_key"] => $context["cookie"]) {
                // line 4
                yield "
        ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "scripts", [], "any", false, false, false, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                    // line 6
                    yield "
          ";
                    // line 7
                    if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["script"], "scripts_disable", [], "any", false, false, false, 7) == 0)) {
                        // line 8
                        yield "
                    ";
                        // line 9
                        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "required", [], "any", false, false, false, 9) || (($_v0 = ($context["epicCookies"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["cookie"], "slug", [], "any", false, false, false, 9)] ?? null) : null))) {
                            // line 10
                            yield "
                        ";
                            // line 11
                            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["script"], "scripts_code", [], "any", false, false, false, 11)) {
                                // line 12
                                yield "
                                ";
                                // line 13
                                yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["script"], "scripts_code", [], "any", false, false, false, 13);
                                yield "

                        ";
                            }
                            // line 16
                            yield "
                        ";
                            // line 17
                            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["script"], "scripts_file", [], "any", false, false, false, 17)) {
                                // line 18
                                yield "
                                <script src=\"";
                                // line 19
                                yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["script"], "scripts_file", [], "any", false, false, false, 19));
                                yield "\"></script>

                        ";
                            }
                            // line 22
                            yield "
                    ";
                        }
                        // line 24
                        yield "
            ";
                    }
                    // line 26
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cookie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\tailorblueprint\\plugins/epic/gdpr/components/partials/run-scripts.htm";
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
        return array (  118 => 30,  111 => 28,  104 => 26,  100 => 24,  96 => 22,  90 => 19,  87 => 18,  85 => 17,  82 => 16,  76 => 13,  73 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if cookiesSettingsGet('cookies',null)|length %}

    {% for cookie in cookiesSettingsGet('cookies') %}

        {% for script in cookie.scripts %}

          {% if script.scripts_disable == 0 %}

                    {% if cookie.required or epicCookies[cookie.slug] %}

                        {% if script.scripts_code %}

                                {{ script.scripts_code|raw }}

                        {% endif %}

                        {% if script.scripts_file %}

                                <script src=\"{{ script.scripts_file|media }}\"></script>

                        {% endif %}

                    {% endif %}

            {% endif %}

        {% endfor %}

    {% endfor %}

{% endif %}
", "E:\\faks\\_zavrsni\\tailorblueprint\\plugins/epic/gdpr/components/partials/run-scripts.htm", "");
    }
}
