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

/* E:\faks\_zavrsni\tailorblueprint\themes/myrent/partials/layout/header.htm */
class __TwigTemplate_cc30e40aa1bbb7ddac88603b32a6ed3f extends Template
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
        yield "    ";
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "top_banner_image", [], "any", false, false, false, 2)) {
            // line 3
            yield "        <div class=\"top-0 w-full bg-secondary flex justify-center ";
            yield "\" style=\"height:100px; background-image: linear-gradient(rgba(255, 70, 71, 0.8), rgba(255, 70, 71, 0.8)), url('";
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "top_banner_background", [], "any", false, false, false, 3));
            yield "'); background-repeat: no-repeat; background-size:cover;\">
            <a href=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "top_banner_url", [], "any", false, false, false, 4), "html", null, true);
            yield "\" target=\"_blank\" class=\"w-full underline font-bold text-white\"><img src=\"";
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "top_banner_image", [], "any", false, false, false, 4));
            yield "\" class=\"h-full mx-auto\"></a>
        </div>
    ";
        }
        // line 7
        yield "    <div class=\"bg-primary px-4 lg:px-16 pb-2 flex justify-center md:justify-end gap-8 pt-2 ";
        yield "\">
        <a class=\"flex items-center gap-2 text-white text-sm md:text-base\" href=\"tel:";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page_settings"] ?? null), "contact_phone", [], "any", false, false, false, 8), "html", null, true);
        yield "\">


            <img class=\"w-5 md:w-6 h-5 md:h-6\" src=\"";
        // line 11
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/phone.svg");
        yield "\" alt=\"Phone icon\"  width=\"24\" height=\"24\"/>

            ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page_settings"] ?? null), "contact_phone", [], "any", false, false, false, 13), "html", null, true);
        yield "
        </a>
        <a class=\"flex items-center gap-2 text-white text-sm md:text-base\" href=\"mailto:";
        // line 15
        yield $this->env->getFunction('html_email')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page_settings"] ?? null), "contact_email", [], "any", false, false, false, 15));
        yield "\">
            <img width=\"24\" height=\"24\" src=\"";
        // line 16
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/mail-2.svg");
        yield "\" alt=\"Email icon\" />
            ";
        // line 17
        yield $this->env->getFunction('html_email')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page_settings"] ?? null), "contact_email", [], "any", false, false, false, 17));
        yield "
        </a>
    </div>


    ";
        // line 23
        yield "    <nav class=\"bg-white px-4 lg:px-16 py-3.5 flex items-center justify-between gap-5 border-b border-silver-alt\">

        ";
        // line 26
        yield "        <a class=\"block\" href=\"";
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        yield "\" aria-label=\"Home page\">

           <img width=\"150\" src=\"";
        // line 28
        yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 28));
        yield "\" alt=\"MyRent logo\" />

        </a>

        ";
        // line 33
        yield "        ";
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu", [], "any", false, false, false, 33)) {
            // line 34
            yield "        <div class=\"hidden xl:flex items-center gap-2\">
          ";
            // line 35
            $cmsPartialParams = [];
            $cmsPartialParams['items'] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu", [], "any", false, false, false, 35), "links", [], "any", false, false, false, 35)            ;
            yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("layout/main-menu"            , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)            , true            );
            // line 36
            yield "        </div>
        ";
        }
        // line 38
        yield "
        <div class=\"flex items-center gap-4 z-30\">

            ";
        // line 42
        yield "            <div class=\"hidden lg:flex items-center\">

                ";
        // line 45
        yield "                ";
        $cmsPartialParams = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("layout/lang-switch"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 46
        yield "
                <a href=\"";
        // line 47
        yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "try_free_button", [], "any", false, false, false, 47));
        yield "\" rel=\"noopener\" class=\"block border border-primary text-primary rounded-full transition ease-out duration-300 px-5 py-2.5 font-bold mr-2 hover:bg-primary hover:text-white\">
                  ";
        // line 48
        yield $this->env->getFilter('_')->getCallable()("Isprobajte besplatno");
        yield "
                </a>

                <a href=\"https://app.my-rent.net/users/login\" target=\"_blank\" rel=\"noopener\" class=\"flex items-center gap-2 bg-primary text-silver-light transition ease-out duration-300 rounded-full px-5 py-2.5 font-bold hover:bg-secondary\">
                    <img width=\"24\" height=\"24\" src=\"";
        // line 52
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/log-in.svg");
        yield "\" alt=\"Login icon\" loading=\"lazy\" />
                    ";
        // line 53
        yield $this->env->getFilter('_')->getCallable()("Prijavi se");
        yield "
                </a>

            </div>

            <button class=\"xl:hidden js-sidemenu-trigger\" type=\"button\">
              <img class=\"menu-icon\" width=\"40\" height=\"40\" src=\"";
        // line 59
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/menu.svg");
        yield "\" alt=\"Menu icon\" loading=\"lazy\" />
              <img class=\"close-icon\" width=\"40\" height=\"40\" src=\"";
        // line 60
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/x-close.svg");
        yield "\" alt=\"Menu icon\" loading=\"lazy\" style=\"display:none\"/>
            </button>

        </div>

    </nav>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\tailorblueprint\\themes/myrent/partials/layout/header.htm";
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
        return array (  170 => 60,  166 => 59,  157 => 53,  153 => 52,  146 => 48,  142 => 47,  139 => 46,  135 => 45,  131 => 42,  126 => 38,  122 => 36,  118 => 35,  115 => 34,  112 => 33,  105 => 28,  99 => 26,  95 => 23,  87 => 17,  83 => 16,  79 => 15,  74 => 13,  69 => 11,  63 => 8,  59 => 7,  51 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Top contact #}
    {% if settings.top_banner_image %}
        <div class=\"top-0 w-full bg-secondary flex justify-center {#py-2#}\" style=\"height:100px; background-image: linear-gradient(rgba(255, 70, 71, 0.8), rgba(255, 70, 71, 0.8)), url('{{ settings.top_banner_background |media }}'); background-repeat: no-repeat; background-size:cover;\">
            <a href=\"{{settings.top_banner_url}}\" target=\"_blank\" class=\"w-full underline font-bold text-white\"><img src=\"{{ settings.top_banner_image |media }}\" class=\"h-full mx-auto\"></a>
        </div>
    {% endif %}
    <div class=\"bg-primary px-4 lg:px-16 pb-2 flex justify-center md:justify-end gap-8 pt-2 {#{ settings.top_banner_text == '' ? 'pt-2' : 'pt-12' }#}\">
        <a class=\"flex items-center gap-2 text-white text-sm md:text-base\" href=\"tel:{{ page_settings.contact_phone }}\">


            <img class=\"w-5 md:w-6 h-5 md:h-6\" src=\"{{ 'assets/icons/phone.svg'|theme }}\" alt=\"Phone icon\"  width=\"24\" height=\"24\"/>

            {{ page_settings.contact_phone }}
        </a>
        <a class=\"flex items-center gap-2 text-white text-sm md:text-base\" href=\"mailto:{{ html_email(page_settings.contact_email) }}\">
            <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/mail-2.svg'| theme }}\" alt=\"Email icon\" />
            {{ html_email(page_settings.contact_email) }}
        </a>
    </div>


    {# Navigation #}
    <nav class=\"bg-white px-4 lg:px-16 py-3.5 flex items-center justify-between gap-5 border-b border-silver-alt\">

        {# Logo #}
        <a class=\"block\" href=\"{{ 'index' | page }}\" aria-label=\"Home page\">

           <img width=\"150\" src=\"{{ settings.logo | media }}\" alt=\"MyRent logo\" />

        </a>

        {# Menu #}
        {% if settings.main_menu %}
        <div class=\"hidden xl:flex items-center gap-2\">
          {% partial 'layout/main-menu' items = settings.main_menu.links %}
        </div>
        {% endif %}

        <div class=\"flex items-center gap-4 z-30\">

            {# Language, Try free & Sign in #}
            <div class=\"hidden lg:flex items-center\">

                {# Languages #}
                {% partial 'layout/lang-switch' %}

                <a href=\"{{ settings.try_free_button | link }}\" rel=\"noopener\" class=\"block border border-primary text-primary rounded-full transition ease-out duration-300 px-5 py-2.5 font-bold mr-2 hover:bg-primary hover:text-white\">
                  {{ 'Isprobajte besplatno'|_ }}
                </a>

                <a href=\"https://app.my-rent.net/users/login\" target=\"_blank\" rel=\"noopener\" class=\"flex items-center gap-2 bg-primary text-silver-light transition ease-out duration-300 rounded-full px-5 py-2.5 font-bold hover:bg-secondary\">
                    <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/log-in.svg'|theme }}\" alt=\"Login icon\" loading=\"lazy\" />
                    {{ 'Prijavi se'|_ }}
                </a>

            </div>

            <button class=\"xl:hidden js-sidemenu-trigger\" type=\"button\">
              <img class=\"menu-icon\" width=\"40\" height=\"40\" src=\"{{ 'assets/icons/menu.svg'|theme }}\" alt=\"Menu icon\" loading=\"lazy\" />
              <img class=\"close-icon\" width=\"40\" height=\"40\" src=\"{{ 'assets/icons/x-close.svg'|theme }}\" alt=\"Menu icon\" loading=\"lazy\" style=\"display:none\"/>
            </button>

        </div>

    </nav>", "E:\\faks\\_zavrsni\\tailorblueprint\\themes/myrent/partials/layout/header.htm", "");
    }
}
