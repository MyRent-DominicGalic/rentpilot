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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/contact_section.htm */
class __TwigTemplate_7aad77753222fc6c93977059e8207f75 extends Template
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
        yield "<";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 1), "html", null, true);
        yield " id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_anchor", [], "any", false, false, false, 1), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "css_classes", [], "any", false, false, false, 1), " "), "html", null, true);
        yield "\">

    <div class=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 3), "html", null, true);
        yield "\">

      <section class=\"container px-4 py-10\">
          <div class=\"flex flex-col lg:flex-row lg:items-center justify-between gap-8\">
              <div>
                  <h1 class=\"mb-2\">
                    ";
        // line 9
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 9);
        yield "
                  </h1>
                  <p class=\"font-medium text-gray max-w-xl w-full\">
                    ";
        // line 12
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "content", [], "any", false, false, false, 12);
        yield "
                  </p>
              </div>
              <div class=\"rounded-lg shadow-lg px-5 lg:px-8 py-5\">
                  <h2 class=\"text-xl font-bold mb-4\">";
        // line 16
        yield $this->env->getFilter('_')->getCallable()("Primarni kontakt");
        yield "</h2>
                  <div class=\"flex flex-wrap gap-4\">
                      <a class=\"flex items-center gap-2\" href=\"tel:";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page_settings"] ?? null), "contact_phone", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
                          <img width=\"24\" height=\"24\" src=\"";
        // line 19
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/phone-3.svg");
        yield "\" alt=\"Phone icon\" />
                          <span class=\"text-gray-dark text-lg font-medium\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page_settings"] ?? null), "contact_phone", [], "any", false, false, false, 20), "html", null, true);
        yield "</span>
                      </a>
                      <a class=\"flex items-center gap-2\" href=\"mailto:";
        // line 22
        yield $this->env->getFunction('html_email')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page_settings"] ?? null), "contact_email", [], "any", false, false, false, 22));
        yield "\">
                          <img width=\"24\" height=\"24\" src=\"";
        // line 23
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/mail-4.svg");
        yield "\" alt=\"Email icon\" />
                          <span class=\"text-gray-dark text-lg font-medium\">";
        // line 24
        yield $this->env->getFunction('html_email')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page_settings"] ?? null), "contact_email", [], "any", false, false, false, 24));
        yield "</span>
                      </a>
                  </div>
              </div>
          </div>
      </section>

    </div>


    <section class=\"container px-4 pb-10\">

        <div class=\"grid grid-cols-12 gap-6\">

            <div class=\"order-2 lg:order-1 col-span-12 lg:col-span-7\">

                <div class=\"rounded-lg flex items-center justify-center mb-6\">
                    ";
        // line 41
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "map_embed", [], "any", false, false, false, 41);
        yield "
                </div>

                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">

                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "sectors", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            yield "                    <div class=\"rounded-lg shadow-lg p-4\">
                        <h3 class=\"text-lg lg:text-xl font-bold mb-4\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 48), "html", null, true);
            yield "</h3>
                        <ul class=\"flex flex-col gap-2 font-medium text-gray-dark\">
                            <li>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "company", [], "any", false, false, false, 50), "html", null, true);
            yield "</li>
                            <li>";
            // line 51
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "address", [], "any", false, false, false, 51), "html", null, true));
            yield "</li>
                            <li>OIB: ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "vat", [], "any", false, false, false, 52), "html", null, true);
            yield "</li>
                        </ul>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "
                </div>

            </div>

            <div class=\"order-1 lg:order-2 col-span-12 lg:col-span-5\">

                ";
        // line 63
        $cmsPartialParams = [];
        $cmsPartialParams['code'] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "forms", [], "any", false, false, false, 63), "slug", [], "any", false, false, false, 63)        ;
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("tailor_modules/form"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 64
        yield "
            </div>

        </div>

    </section>

    ";
        // line 71
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "branches", [], "any", false, false, false, 71))) {
            // line 72
            yield "    <section class=\"container px-4 pt-10 pb-20\">
        <h2 class=\"mb-16 text-center\">Kontakti po državama</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-5\">

            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "branches", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 77
                yield "            <div class=\"grid grid-cols-1 lg:grid-cols-2 rounded-lg shadow-lg overflow-hidden\">
                <div class=\"flex\">
                    <img class=\"w-full flex-1 h-44 lg:h-auto object-cover\" src=\"";
                // line 79
                yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 79));
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 79), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
                yield "\" loading=\"lazy\" />
                </div>
                <div class=\"p-5 pl-6\">
                    <div class=\"text-lg lg:text-xl font-bold mb-5\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 82), "html", null, true);
                yield "</div>
                    <a href=\"tel:";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 83), "html", null, true);
                yield "\" class=\"flex items-center gap-1.5 mb-4\">
                        <img width=\"24\" height=\"24\" src=\"";
                // line 84
                yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/phone.svg");
                yield "\" alt=\"Phone icon\" />
                        ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 85), "html", null, true);
                yield "
                    </a>
                    <a href=\"mailto:";
                // line 87
                yield $this->env->getFunction('html_email')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 87));
                yield "\" class=\"flex items-center gap-1.5 mb-4\">
                        <img width=\"24\" height=\"24\" src=\"";
                // line 88
                yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/mail-2.svg");
                yield "\" alt=\"Email icon\" />
                        ";
                // line 89
                yield $this->env->getFunction('html_email')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 89));
                yield "
                    </a>
                    <a href=\"mailto:";
                // line 91
                yield $this->env->getFunction('html_email')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email_alt", [], "any", false, false, false, 91));
                yield "\" class=\"flex items-center gap-1.5\">
                        <img width=\"24\" height=\"24\" src=\"";
                // line 92
                yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/mail-2.svg");
                yield "\" alt=\"Email icon\" />
                        ";
                // line 93
                yield $this->env->getFunction('html_email')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email_alt", [], "any", false, false, false, 93));
                yield "
                    </a>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "
        </div>
    </section>
    ";
        }
        // line 102
        yield "
</";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 103), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/contact_section.htm";
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
        return array (  262 => 103,  259 => 102,  253 => 98,  242 => 93,  238 => 92,  234 => 91,  229 => 89,  225 => 88,  221 => 87,  216 => 85,  212 => 84,  208 => 83,  204 => 82,  196 => 79,  192 => 77,  188 => 76,  182 => 72,  180 => 71,  171 => 64,  167 => 63,  158 => 56,  148 => 52,  144 => 51,  140 => 50,  135 => 48,  132 => 47,  128 => 46,  120 => 41,  100 => 24,  96 => 23,  92 => 22,  87 => 20,  83 => 19,  79 => 18,  74 => 16,  67 => 12,  61 => 9,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"{{ section.css_classes |join(' ') }}\">

    <div class=\"{{ section.container_style }}\">

      <section class=\"container px-4 py-10\">
          <div class=\"flex flex-col lg:flex-row lg:items-center justify-between gap-8\">
              <div>
                  <h1 class=\"mb-2\">
                    {{ section.title | raw }}
                  </h1>
                  <p class=\"font-medium text-gray max-w-xl w-full\">
                    {{ section.content | raw }}
                  </p>
              </div>
              <div class=\"rounded-lg shadow-lg px-5 lg:px-8 py-5\">
                  <h2 class=\"text-xl font-bold mb-4\">{{ 'Primarni kontakt' |_ }}</h2>
                  <div class=\"flex flex-wrap gap-4\">
                      <a class=\"flex items-center gap-2\" href=\"tel:{{ page_settings.contact_phone }}\">
                          <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/phone-3.svg'| theme }}\" alt=\"Phone icon\" />
                          <span class=\"text-gray-dark text-lg font-medium\">{{ page_settings.contact_phone }}</span>
                      </a>
                      <a class=\"flex items-center gap-2\" href=\"mailto:{{ html_email(page_settings.contact_email) }}\">
                          <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/mail-4.svg'| theme }}\" alt=\"Email icon\" />
                          <span class=\"text-gray-dark text-lg font-medium\">{{ html_email(page_settings.contact_email) }}</span>
                      </a>
                  </div>
              </div>
          </div>
      </section>

    </div>


    <section class=\"container px-4 pb-10\">

        <div class=\"grid grid-cols-12 gap-6\">

            <div class=\"order-2 lg:order-1 col-span-12 lg:col-span-7\">

                <div class=\"rounded-lg flex items-center justify-center mb-6\">
                    {{ section.map_embed | raw }}
                </div>

                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">

                    {% for item in section.sectors %}
                    <div class=\"rounded-lg shadow-lg p-4\">
                        <h3 class=\"text-lg lg:text-xl font-bold mb-4\">{{ item.title }}</h3>
                        <ul class=\"flex flex-col gap-2 font-medium text-gray-dark\">
                            <li>{{ item.company }}</li>
                            <li>{{ item.address | nl2br }}</li>
                            <li>OIB: {{ item.vat }}</li>
                        </ul>
                    </div>
                    {% endfor %}

                </div>

            </div>

            <div class=\"order-1 lg:order-2 col-span-12 lg:col-span-5\">

                {% partial 'tailor_modules/form' code = section.forms.slug %}

            </div>

        </div>

    </section>

    {% if section.branches | length %}
    <section class=\"container px-4 pt-10 pb-20\">
        <h2 class=\"mb-16 text-center\">Kontakti po državama</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-5\">

            {% for item in section.branches %}
            <div class=\"grid grid-cols-1 lg:grid-cols-2 rounded-lg shadow-lg overflow-hidden\">
                <div class=\"flex\">
                    <img class=\"w-full flex-1 h-44 lg:h-auto object-cover\" src=\"{{ item.image | media }}\" alt=\"{{ item.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" loading=\"lazy\" />
                </div>
                <div class=\"p-5 pl-6\">
                    <div class=\"text-lg lg:text-xl font-bold mb-5\">{{ item.title }}</div>
                    <a href=\"tel:{{ item.phone }}\" class=\"flex items-center gap-1.5 mb-4\">
                        <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/phone.svg'| theme }}\" alt=\"Phone icon\" />
                        {{ item.phone }}
                    </a>
                    <a href=\"mailto:{{ html_email(item.email) }}\" class=\"flex items-center gap-1.5 mb-4\">
                        <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/mail-2.svg'| theme }}\" alt=\"Email icon\" />
                        {{ html_email(item.email) }}
                    </a>
                    <a href=\"mailto:{{ html_email(item.email_alt) }}\" class=\"flex items-center gap-1.5\">
                        <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/mail-2.svg'| theme }}\" alt=\"Email icon\" />
                        {{ html_email(item.email_alt) }}
                    </a>
                </div>
            </div>
            {% endfor %}

        </div>
    </section>
    {% endif %}

</{{ section.html_tag }}>", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/contact_section.htm", "");
    }
}
