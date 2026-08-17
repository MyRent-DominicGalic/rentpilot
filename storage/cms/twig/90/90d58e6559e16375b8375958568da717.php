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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/partials/card-slider-overflow.htm */
class __TwigTemplate_b5ee37031d3105c2a6ad9ea08a778628 extends Template
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
        yield "<div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 1), "html", null, true);
        yield " px-4 py-16\">

  ";
        // line 3
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 3)) {
            // line 4
            yield "    <h2 class=\"mb-12 text-center mx-auto max-w-2xl\">
      ";
            // line 5
            yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 5);
            yield "
    </h2>
  ";
        }
        // line 8
        yield "
  <div class=\"relative js-slider-wrap\">

    <div class=\"js-slider-overflow overflow-scroll gap-6 pb-16 flex flex-nowrap w-screen-2x -ml-96 pl-96 pr-48\">

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "items", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            yield "        <article class=\"js-slide card shrink-0 w-80 sm:w-96  flex flex-col bg-white rounded-xl shadow-lg overflow-hidden transition ease-out duration-300\">
           <a href=\"";
            // line 15
            yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 15));
            yield "\" ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_external", [], "any", false, false, false, 15)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
            yield " class=\"card_img h-44 w-full overflow-hidden relative\">
               <img class=\"w-full h-full object-cover\" src=\"";
            // line 16
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 16));
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 16), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
            yield "\" loading=\"lazy\" />
           </a>
           <div class=\"p-4 flex-1 flex flex-col\">
               <h3 class=\"text-xl font-bold mb-2\">
                 ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20), "html", null, true);
            yield "
               </h3>
               <div class=\"mb-4 text-gray text-sm lg:text-base\">
                 ";
            // line 23
            yield $this->extensions['Cms\Twig\Extension']->contentFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 23));
            yield "
               </div>
               <div class=\"mt-auto\">
                   <a class=\"inline-flex items-center gap-2 font-bold bg-secondary bg-opacity-5 text-primary transition ease-out duration-300 hover:!bg-secondary hover:!text-white rounded-full px-5 py-2.5\" href=\"";
            // line 26
            yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 26));
            yield "\" ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_external", [], "any", false, false, false, 26)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
            yield ">
                       ";
            // line 27
            yield (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_title", [], "any", true, true, false, 27) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_title", [], "any", false, false, false, 27)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_title", [], "any", false, false, false, 27), "html", null, true)) : ("Saznajte više"));
            yield "
                       <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                           <path class=\"transition ease-out duration-300 fill-primary\" d=\"M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z\" />
                       </svg>
                   </a>
               </div>
           </div>
       </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "
    </div>

    <button class=\"hidden lg:flex items-center justify-center text-secondary hover:bg-secondary-lightest bg-white w-16 h-16 text-md shadow-lg rounded-full transition-all absolute -bottom-8 transform left-0 js-goto-prev-slide cursor-pointer\" type=\"button\" name=\"Go to Next Slide\" title=\"Go to Next Slide\">
      <img class=\"inline-block transform origin-center rotate-180\" src=\"";
        // line 40
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/arrow-narrow-right.svg");
        yield "\" alt=\"Arrow right icon\" loading=\"lazy\"/>
    </button>

    <button class=\"hidden lg:flex items-center justify-center text-secondary hover:bg-secondary-lightest bg-white w-16 h-16 text-lg shadow-lg rounded-full transition-all absolute -bottom-8 transform right-0 js-goto-next-slide cursor-pointer\" type=\"button\" name=\"Go to Next Slide\" title=\"Go to Next Slide\">
      <img class=\"inline-block\" src=\"";
        // line 44
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/arrow-narrow-right.svg");
        yield "\" alt=\"Arrow right icon\" loading=\"lazy\"/>
    </button>

  </div>

</div>

";
        // line 51
        $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('scripts'        , function() use ($context, $blocks, $macros) {
        // line 52
        yield "<!-- TODO:  switch slides on click -->
<script type=\"text/javascript\">

  /*
  Click on .js-switch-slide takes href attribute and shows .js-slide with ID attribute matching href atribute
  */

  // console.log(\"page is fully loaded\");

  // window.addEventListener(\"load\", (event) => {
  //      console.log(\"page is fully loaded\");
  //  });


     document.addEventListener('DOMContentLoaded', function () {

        const slider = document.querySelector('.js-slider-overflow');
        const prevButton = document.querySelector('.js-goto-prev-slide');
        const nextButton = document.querySelector('.js-goto-next-slide');
        const scrollAmount = 300; // Adjust scroll amount as needed

        // Scroll to the left
        prevButton.addEventListener('click', function () {

            console.log('prevButton');

          slider.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth',
          });
          
        });

        // Scroll to the right
        nextButton.addEventListener('click', function () {
            console.log('nextButton');

          slider.scrollBy({
            left: scrollAmount,
            behavior: 'smooth',
          });
        });
    });

</script>
";
        // line 51
        return; yield '';}, true        );
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/partials/card-slider-overflow.htm";
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
        return array (  193 => 51,  146 => 52,  144 => 51,  134 => 44,  127 => 40,  121 => 36,  106 => 27,  100 => 26,  94 => 23,  88 => 20,  79 => 16,  73 => 15,  70 => 14,  66 => 13,  59 => 8,  53 => 5,  50 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"{{ section.container_style }} px-4 py-16\">

  {% if section.title %}
    <h2 class=\"mb-12 text-center mx-auto max-w-2xl\">
      {{ section.title | raw }}
    </h2>
  {% endif %}

  <div class=\"relative js-slider-wrap\">

    <div class=\"js-slider-overflow overflow-scroll gap-6 pb-16 flex flex-nowrap w-screen-2x -ml-96 pl-96 pr-48\">

        {% for item in section.items %}
        <article class=\"js-slide card shrink-0 w-80 sm:w-96  flex flex-col bg-white rounded-xl shadow-lg overflow-hidden transition ease-out duration-300\">
           <a href=\"{{ item.button_page | link  }}\" {{ item.button_external ? 'target=\"_blank\" rel=\"noopener\"' }} class=\"card_img h-44 w-full overflow-hidden relative\">
               <img class=\"w-full h-full object-cover\" src=\"{{ item.image | media }}\" alt=\"{{ item.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" loading=\"lazy\" />
           </a>
           <div class=\"p-4 flex-1 flex flex-col\">
               <h3 class=\"text-xl font-bold mb-2\">
                 {{ item.title }}
               </h3>
               <div class=\"mb-4 text-gray text-sm lg:text-base\">
                 {{ item.content | content }}
               </div>
               <div class=\"mt-auto\">
                   <a class=\"inline-flex items-center gap-2 font-bold bg-secondary bg-opacity-5 text-primary transition ease-out duration-300 hover:!bg-secondary hover:!text-white rounded-full px-5 py-2.5\" href=\"{{ item.button_page | link  }}\" {{ item.button_external ? 'target=\"_blank\" rel=\"noopener\"' }}>
                       {{ item.button_title ?? 'Saznajte više' }}
                       <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                           <path class=\"transition ease-out duration-300 fill-primary\" d=\"M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z\" />
                       </svg>
                   </a>
               </div>
           </div>
       </article>
        {% endfor %}

    </div>

    <button class=\"hidden lg:flex items-center justify-center text-secondary hover:bg-secondary-lightest bg-white w-16 h-16 text-md shadow-lg rounded-full transition-all absolute -bottom-8 transform left-0 js-goto-prev-slide cursor-pointer\" type=\"button\" name=\"Go to Next Slide\" title=\"Go to Next Slide\">
      <img class=\"inline-block transform origin-center rotate-180\" src=\"{{ 'assets/icons/arrow-narrow-right.svg' | theme }}\" alt=\"Arrow right icon\" loading=\"lazy\"/>
    </button>

    <button class=\"hidden lg:flex items-center justify-center text-secondary hover:bg-secondary-lightest bg-white w-16 h-16 text-lg shadow-lg rounded-full transition-all absolute -bottom-8 transform right-0 js-goto-next-slide cursor-pointer\" type=\"button\" name=\"Go to Next Slide\" title=\"Go to Next Slide\">
      <img class=\"inline-block\" src=\"{{ 'assets/icons/arrow-narrow-right.svg' | theme }}\" alt=\"Arrow right icon\" loading=\"lazy\"/>
    </button>

  </div>

</div>

{% put scripts %}
<!-- TODO:  switch slides on click -->
<script type=\"text/javascript\">

  /*
  Click on .js-switch-slide takes href attribute and shows .js-slide with ID attribute matching href atribute
  */

  // console.log(\"page is fully loaded\");

  // window.addEventListener(\"load\", (event) => {
  //      console.log(\"page is fully loaded\");
  //  });


     document.addEventListener('DOMContentLoaded', function () {

        const slider = document.querySelector('.js-slider-overflow');
        const prevButton = document.querySelector('.js-goto-prev-slide');
        const nextButton = document.querySelector('.js-goto-next-slide');
        const scrollAmount = 300; // Adjust scroll amount as needed

        // Scroll to the left
        prevButton.addEventListener('click', function () {

            console.log('prevButton');

          slider.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth',
          });
          
        });

        // Scroll to the right
        nextButton.addEventListener('click', function () {
            console.log('nextButton');

          slider.scrollBy({
            left: scrollAmount,
            behavior: 'smooth',
          });
        });
    });

</script>
{% endput %}", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/partials/card-slider-overflow.htm", "");
    }
}
