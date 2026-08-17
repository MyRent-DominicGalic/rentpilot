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

/* /home/myrent/htdocs/myrent.hr/plugins/epic/gdpr/components/cookiesbar/cookiesbar.htm */
class __TwigTemplate_fe8c1dad8053c214f5aa0fb4fd54422f extends Template
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
        yield "<div class=\"c-CookiesBar transition-all\" style=\"transform: translateY(150%);\">

  <div class=\"c-CookiesBar__note\">
    ";
        // line 4
        if ($this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies_bar_title")) {
            // line 5
            yield "      <h5 class=\"c-CookiesBar__title\">";
            yield $this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies_bar_title");
            yield "</h5>
    ";
        }
        // line 6
        yield "    <div class=\"c-CookiesBar__description\">
      <p>";
        // line 7
        yield $this->env->getFunction('cookiesSettingsGet')->getCallable()("cookies_bar_content");
        yield "</p>
    </div>
  </div>

  <div class=\"c-CookiesBar__btns\">

    <button type=\"button\" class=\"c-CookiesBar__btn c-CookiesBar__btn--settings js--modal-trigger text-sm md:text-base px-6 py-3 btn border border-secondary text-secondary hover:bg-secondary hover:text-white transition-all\">
      <span>";
        // line 14
        yield $this->env->getFilter('_')->getCallable()("Postavke");
        yield "</span>
    </button>

    <button type=\"button\" class=\"c-CookiesBar__btn c-CookiesBar__btn--accept js--cookies-accept-all text-sm md:text-base px-6 py-3 btn border border-secondary bg-secondary text-white hover:bg-accent hover:text-white hover:border-accent transition-all\">
      <span>";
        // line 18
        yield $this->env->getFilter('_')->getCallable()("Prihvaćam");
        yield "</span>
    </button>

  </div>

</div>



<script type=\"text/javascript\">

  document.querySelector('.js--cookies-accept-all').addEventListener('click', function() {
    ";
        // line 30
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("@set-cookies"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 31
        yield "  }, false);

  var element = document.querySelector('.c-CookiesBar');

  setTimeout(() => {
    element.style.removeProperty(\"transform\");
  }, \"3500\")

</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/plugins/epic/gdpr/components/cookiesbar/cookiesbar.htm";
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
        return array (  93 => 31,  90 => 30,  75 => 18,  68 => 14,  58 => 7,  55 => 6,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"c-CookiesBar transition-all\" style=\"transform: translateY(150%);\">

  <div class=\"c-CookiesBar__note\">
    {% if cookiesSettingsGet('cookies_bar_title') %}
      <h5 class=\"c-CookiesBar__title\">{{ cookiesSettingsGet('cookies_bar_title') }}</h5>
    {% endif %}    <div class=\"c-CookiesBar__description\">
      <p>{{ cookiesSettingsGet('cookies_bar_content') }}</p>
    </div>
  </div>

  <div class=\"c-CookiesBar__btns\">

    <button type=\"button\" class=\"c-CookiesBar__btn c-CookiesBar__btn--settings js--modal-trigger text-sm md:text-base px-6 py-3 btn border border-secondary text-secondary hover:bg-secondary hover:text-white transition-all\">
      <span>{{ 'Postavke'|_ }}</span>
    </button>

    <button type=\"button\" class=\"c-CookiesBar__btn c-CookiesBar__btn--accept js--cookies-accept-all text-sm md:text-base px-6 py-3 btn border border-secondary bg-secondary text-white hover:bg-accent hover:text-white hover:border-accent transition-all\">
      <span>{{ 'Prihvaćam'|_ }}</span>
    </button>

  </div>

</div>



<script type=\"text/javascript\">

  document.querySelector('.js--cookies-accept-all').addEventListener('click', function() {
    {% partial '@set-cookies' %}
  }, false);

  var element = document.querySelector('.c-CookiesBar');

  setTimeout(() => {
    element.style.removeProperty(\"transform\");
  }, \"3500\")

</script>
", "/home/myrent/htdocs/myrent.hr/plugins/epic/gdpr/components/cookiesbar/cookiesbar.htm", "");
    }
}
