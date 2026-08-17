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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\plugins/epic/gdpr/components/cookiesmanage/cookiesmanage-default.htm */
class __TwigTemplate_3677f75ebf68844ec3f51fca632c9ed5 extends Template
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
        yield "<div class=\"c-Modal\" id=\"js--CookiesModal\" tabindex=\"-1\" role=\"dialog\">

    <div class=\"c-Modal__inner\">

        <header class=\"c-Modal__header mt-4 sm:mt-0\">

            <h2 class=\"font-medium text-h3\">";
        // line 7
        yield $this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies_manage_title");
        yield "</h2>

        </header>

        <div class=\"c-Modal__content\">

            ";
        // line 13
        if ($this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies_manage_content", null)) {
            // line 14
            yield "
            <div class=\"c-Modal__text hidden\">";
            // line 15
            yield $this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies_manage_content");
            yield "</div>

            ";
        }
        // line 18
        yield "
            ";
        // line 19
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("@list-cookies-default"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 20
        yield "
        </div>

    </div>

</div>


    <script type=\"text/javascript\">

    document.querySelector('.js--cookies-save-settings').addEventListener('click', function() {

      ";
        // line 32
        $cmsPartialParams = [];
        $cmsPartialParams['setOnlyManageCookies'] = true        ;
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("@set-cookies"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 33
        yield "
    }, false);

    </script>

    ";
        // line 38
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("@modal-scripts"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\plugins/epic/gdpr/components/cookiesmanage/cookiesmanage-default.htm";
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
        return array (  101 => 38,  94 => 33,  90 => 32,  76 => 20,  73 => 19,  70 => 18,  64 => 15,  61 => 14,  59 => 13,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"c-Modal\" id=\"js--CookiesModal\" tabindex=\"-1\" role=\"dialog\">

    <div class=\"c-Modal__inner\">

        <header class=\"c-Modal__header mt-4 sm:mt-0\">

            <h2 class=\"font-medium text-h3\">{{ cookiesSettingsGet('cookies_manage_title') }}</h2>

        </header>

        <div class=\"c-Modal__content\">

            {% if cookiesSettingsGet('cookies_manage_content', null) %}

            <div class=\"c-Modal__text hidden\">{{ cookiesSettingsGet('cookies_manage_content')| raw }}</div>

            {% endif %}

            {% partial '@list-cookies-default' %}

        </div>

    </div>

</div>


    <script type=\"text/javascript\">

    document.querySelector('.js--cookies-save-settings').addEventListener('click', function() {

      {% partial '@set-cookies' setOnlyManageCookies = true %}

    }, false);

    </script>

    {% partial '@modal-scripts' %}
", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\plugins/epic/gdpr/components/cookiesmanage/cookiesmanage-default.htm", "");
    }
}
