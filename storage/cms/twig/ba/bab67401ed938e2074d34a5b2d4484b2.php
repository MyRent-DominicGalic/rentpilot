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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/page/content.htm */
class __TwigTemplate_31715c99643774b56acbd0da86e43e08 extends Template
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
        yield "<section class=\"c-PageHero container px-4 pt-10\">
    <div class=\"max-w-3xl w-full\">
        <h1 class=\"mb-6\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_title", [], "any", false, false, false, 3), "html", null, true);
        yield "</h1>
        <p class=\"font-medium sm:text-lg\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "meta_description", [], "any", false, false, false, 4), "html", null, true);
        yield "</p>
    </div>
</section>


<section class=\"c-PageContent container px-4 pt-6 lg:pt-10 pb-16 lg:pb-20\">
    <div class=\"grid grid-cols-12 lg:gap-x-12 gap-y-6\">

        <div class=\"order-2 lg:order-1 col-span-12 lg:col-span-8 flex flex-col articleText js-toc-content\">
            ";
        // line 13
        yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 13);
        yield "
        </div>

        <div class=\"order-1 lg:order-2 col-span-12 lg:col-span-4 lg:ml-8\">
            <nav class=\"sticky top-32\">
              <div class=\"js-toc toc-list toc-link\"></div>
            </nav>
        </div>


    </div>
</section>

";
        // line 26
        $context['__cms_component_params'] = [];
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("toc"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 27
        yield "

<style>
  .toc-link::before {
    content: none;
  }

  .toc-list {
    padding-left: 0!important;
  }
   .toc-list-item {
     border-left: 2px solid #eeeeee!important;
    padding: .75rem 1.25rem!important;
  }

   .toc-list-item.is-active-li {
     background-color: #ecf9f8!important;
     border-left-color: #1EBDBD!important;
   }

   .toc-list-item .is-active-link {
     font-weight: 600!important;
   }
</style>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/page/content.htm";
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
        return array (  82 => 27,  78 => 26,  62 => 13,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"c-PageHero container px-4 pt-10\">
    <div class=\"max-w-3xl w-full\">
        <h1 class=\"mb-6\">{{ section.meta_title }}</h1>
        <p class=\"font-medium sm:text-lg\">{{ section.meta_description }}</p>
    </div>
</section>


<section class=\"c-PageContent container px-4 pt-6 lg:pt-10 pb-16 lg:pb-20\">
    <div class=\"grid grid-cols-12 lg:gap-x-12 gap-y-6\">

        <div class=\"order-2 lg:order-1 col-span-12 lg:col-span-8 flex flex-col articleText js-toc-content\">
            {{ page.content|raw }}
        </div>

        <div class=\"order-1 lg:order-2 col-span-12 lg:col-span-4 lg:ml-8\">
            <nav class=\"sticky top-32\">
              <div class=\"js-toc toc-list toc-link\"></div>
            </nav>
        </div>


    </div>
</section>

{% component 'toc' %}


<style>
  .toc-link::before {
    content: none;
  }

  .toc-list {
    padding-left: 0!important;
  }
   .toc-list-item {
     border-left: 2px solid #eeeeee!important;
    padding: .75rem 1.25rem!important;
  }

   .toc-list-item.is-active-li {
     background-color: #ecf9f8!important;
     border-left-color: #1EBDBD!important;
   }

   .toc-list-item .is-active-link {
     font-weight: 600!important;
   }
</style>", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/page/content.htm", "");
    }
}
