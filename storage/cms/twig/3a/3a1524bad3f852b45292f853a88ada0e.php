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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/pages/article.htm */
class __TwigTemplate_a824753ac7d97b0216bd5f6f4aa5149c extends Template
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
        $context["post"] = ($context["section"] ?? null);
        // line 2
        yield "
<section class=\"c-BlogPost container max-w-4xl mx-auto px-4 pt-10 pb-24\">
    <div class=\"max-w-3xl w-full mx-auto text-center\">
        <h1 class=\"text-h2 mb-5\"> ";
        // line 5
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 5);
        yield " </h1>
        ";
        // line 6
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "featured_text", [], "any", false, false, false, 6)) {
            // line 7
            yield "        <p class=\"rich-em font-medium text-lg text-gray-dark mb-5\">
          ";
            // line 8
            yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "featured_text", [], "any", false, false, false, 8);
            yield "
        </p>
        ";
        }
        // line 11
        yield "        <div class=\"flex flex-col md:flex-row items-center justify-center gap-4 mb-10\">
            <div class=\"flex items-center gap-2\">
                <img width=\"20\" height=\"20\" src=\"";
        // line 13
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/calendar.svg");
        yield "\" alt=\"Icon calendar\" />
                <div class=\"text-gray-dark font-medium\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "published_at_date", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
        yield "</div>
            </div>
            <div class=\"hidden md:block text-gray-light font-bold\">•</div>
            <div class=\"flex items-center gap-2\">
                <div>Share</div>
                ";
        // line 19
        $cmsPartialParams = [];
        $cmsPartialParams['item'] = ($context["post"] ?? null)        ;
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("components/share"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 20
        yield "            </div>
        </div>
    </div>
    
    <div class=\"px-6 sm:px-0\">
        <img class=\"w-full h-52 sm:h-72 md:h-96 object-cover rounded-lg\" src=\"";
        // line 25
        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "banner", [], "any", false, false, false, 25)) ? ($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "banner", [], "any", false, false, false, 25))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png")));
        yield "\" alt=\"";
        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "banner", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "banner", [], "any", false, false, false, 25), "/")), ["_" => " ", "/site-images/" => "", ".webp" => "", ".jpg" => "", ".png" => ""]), "html", null, true)) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png")));
        yield "\" fetchpriority=\"high\" />
    </div>

    <div class=\"border-t border-silver w-full my-5 lg:my-10\"></div>

    <div class=\"my-16 articleText max-w-4xl mx-auto\">
      ";
        // line 31
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "content_group", [], "any", false, false, false, 31) == "regular_post")) {
            // line 32
            yield "        ";
            yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 32));
            yield "
      ";
        } else {
            // line 34
            yield "      <div class=\"\">
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "builder", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 36
                yield "            ";
                $cmsPartialParams = [];
                $cmsPartialParams['section'] = $context["section"]                ;
                yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction(("builder/content/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["section"], "content_group", [], "any", false, false, false, 36))                , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)                , true                );
                // line 37
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "      </div>
      ";
        }
        // line 40
        yield "    </div>

      ";
        // line 42
        $cmsPartialParams = [];
        $cmsPartialParams['code'] = "trebate-vise-informacija"        ;
        $cmsPartialParams['class'] = "p-5 lg:p-10 rounded-lg max-w-2xl mx-auto"        ;
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("tailor_modules/form"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 43
        yield "
    ";
        // line 45
        yield "    <div class=\"flex items-center justify-center gap-2 mb-16 -mt-16\">
        <div>Share</div>
        ";
        // line 47
        $cmsPartialParams = [];
        $cmsPartialParams['item'] = ($context["post"] ?? null)        ;
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("components/share"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 48
        yield "    </div>

</section>

<section class=\"c-Blogs py-12\">
  <div class=\"container\">

    <h2 class=\"mb-4\">
      Zadnji članci
    </h2>

    ";
        // line 59
        $context["blog_section"] = ["limit" => 3, "show_category_nav" => true, "reverse_order" => true];
        // line 65
        yield "
    ";
        // line 66
        $cmsPartialParams = [];
        $cmsPartialParams['section'] = ($context["blog_section"] ?? null)        ;
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("builder/sections/articles"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 67
        yield "
  </div>
</section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/pages/article.htm";
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
        return array (  174 => 67,  170 => 66,  167 => 65,  165 => 59,  152 => 48,  148 => 47,  144 => 45,  141 => 43,  136 => 42,  132 => 40,  128 => 38,  122 => 37,  117 => 36,  113 => 35,  110 => 34,  104 => 32,  102 => 31,  91 => 25,  84 => 20,  80 => 19,  72 => 14,  68 => 13,  64 => 11,  58 => 8,  55 => 7,  53 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set post = section %}

<section class=\"c-BlogPost container max-w-4xl mx-auto px-4 pt-10 pb-24\">
    <div class=\"max-w-3xl w-full mx-auto text-center\">
        <h1 class=\"text-h2 mb-5\"> {{ post.title | raw }} </h1>
        {% if post.featured_text %}
        <p class=\"rich-em font-medium text-lg text-gray-dark mb-5\">
          {{ post.featured_text | raw }}
        </p>
        {% endif %}
        <div class=\"flex flex-col md:flex-row items-center justify-center gap-4 mb-10\">
            <div class=\"flex items-center gap-2\">
                <img width=\"20\" height=\"20\" src=\"{{ 'assets/icons/calendar.svg'| theme }}\" alt=\"Icon calendar\" />
                <div class=\"text-gray-dark font-medium\">{{ post.published_at_date | date('d/m/Y') }}</div>
            </div>
            <div class=\"hidden md:block text-gray-light font-bold\">•</div>
            <div class=\"flex items-center gap-2\">
                <div>Share</div>
                {% partial 'components/share' item = post %}
            </div>
        </div>
    </div>
    
    <div class=\"px-6 sm:px-0\">
        <img class=\"w-full h-52 sm:h-72 md:h-96 object-cover rounded-lg\" src=\"{{ post.banner ? post.banner | media : 'assets/images/no-image.png' | theme }}\" alt=\"{{ post.banner ? post.banner | split('/') | last | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '', '.jpg' : '', '.png' : '' }) : 'assets/images/no-image.png' | theme }}\" fetchpriority=\"high\" />
    </div>

    <div class=\"border-t border-silver w-full my-5 lg:my-10\"></div>

    <div class=\"my-16 articleText max-w-4xl mx-auto\">
      {% if post.content_group == 'regular_post' %}
        {{ post.content|content }}
      {% else %}
      <div class=\"\">
        {% for section in post.builder %}
            {% partial 'builder/content/' ~ section.content_group section=section %}
        {% endfor %}
      </div>
      {% endif %}
    </div>

      {% partial 'tailor_modules/form' code = 'trebate-vise-informacija' class='p-5 lg:p-10 rounded-lg max-w-2xl mx-auto' %}

    {# Social #}
    <div class=\"flex items-center justify-center gap-2 mb-16 -mt-16\">
        <div>Share</div>
        {% partial 'components/share' item = post %}
    </div>

</section>

<section class=\"c-Blogs py-12\">
  <div class=\"container\">

    <h2 class=\"mb-4\">
      Zadnji članci
    </h2>

    {% set blog_section = {
        'limit': 3,
        'show_category_nav': true,
        'reverse_order': true
      }
    %}

    {% partial 'builder/sections/articles' section = blog_section %}

  </div>
</section>", "/home/myrent/htdocs/myrent.hr/themes/myrent/pages/article.htm", "");
    }
}
