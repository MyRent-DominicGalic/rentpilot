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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/articles/_article.htm */
class __TwigTemplate_e712f2554acad22ae659b75fe4fe354d extends Template
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
        yield "<article class=\"card shrink-0 w-full sm:w-96  flex flex-col bg-white rounded-xl shadow-lg overflow-hidden transition ease-out duration-300\">
   <a href=\"";
        // line 2
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("article", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 2)]);
        yield "\" class=\"card_img h-44 w-full overflow-hidden relative\">
       <img width=\"384\" height=\"256\" class=\"w-full h-full object-cover\" src=\"";
        // line 3
        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "banner", [], "any", false, false, false, 3)) ? ($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "banner", [], "any", false, false, false, 3))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png")));
        yield "\" alt=\"";
        yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "banner", [], "any", false, false, false, 3)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "banner", [], "any", false, false, false, 3), "/")), ["_" => " ", "/site-images/" => "", ".webp" => "", ".jpg" => "", ".png" => ""]), "html", null, true)) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png")));
        yield "\" loading=\"lazy\" />
   </a>
   <div class=\"p-4 flex-1 flex flex-col\">
       <h3 class=\"text-xl font-bold mb-2\">
         ";
        // line 7
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 7);
        yield "
       </h3>
       <div class=\"rich-em mb-4 text-gray text-sm lg:text-base h-24\">
         ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->env->getFilter('str_*')->getCallable()("limit", Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "featured_text", [], "any", false, false, false, 10), 200)), "html", null, true);
        yield "
       </div>
       <div class=\"mt-6\">
           <a class=\"inline-flex items-center gap-2 font-bold bg-secondary bg-opacity-5 text-primary transition ease-out duration-300 hover:!bg-secondary hover:!text-white rounded-full px-5 py-2.5\" href=\"";
        // line 13
        yield $this->extensions['Cms\Twig\Extension']->pageFilter("article", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 13)]);
        yield "\">
               Pročitaj više
               <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                   <path class=\"transition ease-out duration-300 fill-primary\" d=\"M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z\" />
               </svg>
           </a>
       </div>
   </div>
</article>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/articles/_article.htm";
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
        return array (  70 => 13,  64 => 10,  58 => 7,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<article class=\"card shrink-0 w-full sm:w-96  flex flex-col bg-white rounded-xl shadow-lg overflow-hidden transition ease-out duration-300\">
   <a href=\"{{ 'article' | page({ slug: item.slug }) }}\" class=\"card_img h-44 w-full overflow-hidden relative\">
       <img width=\"384\" height=\"256\" class=\"w-full h-full object-cover\" src=\"{{ item.banner ? item.banner | media : 'assets/images/no-image.png' | theme }}\" alt=\"{{ item.banner ? item.banner | split('/') | last | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '', '.jpg' : '', '.png' : '' }) : 'assets/images/no-image.png' | theme }}\" loading=\"lazy\" />
   </a>
   <div class=\"p-4 flex-1 flex flex-col\">
       <h3 class=\"text-xl font-bold mb-2\">
         {{ item.title | raw }}
       </h3>
       <div class=\"rich-em mb-4 text-gray text-sm lg:text-base h-24\">
         {{ item.featured_text | str_limit(200) | striptags }}
       </div>
       <div class=\"mt-6\">
           <a class=\"inline-flex items-center gap-2 font-bold bg-secondary bg-opacity-5 text-primary transition ease-out duration-300 hover:!bg-secondary hover:!text-white rounded-full px-5 py-2.5\" href=\"{{ 'article' | page({ slug: item.slug }) }}\">
               Pročitaj više
               <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                   <path class=\"transition ease-out duration-300 fill-primary\" d=\"M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z\" />
               </svg>
           </a>
       </div>
   </div>
</article>", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/articles/_article.htm", "");
    }
}
