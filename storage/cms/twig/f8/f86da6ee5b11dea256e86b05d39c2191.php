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

/* E:\faks\_zavrsni\tailorblueprint\themes/myrent/partials/builder/partials/card-slider-grid.htm */
class __TwigTemplate_e0519762131366ca297b761375c76de4 extends Template
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
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 1)) {
            // line 2
            yield "  <h2 class=\"text-lg lg:text-xl font-bold text-center text-white mb-8\">
    ";
            // line 3
            yield Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 3);
            yield "
  </h2>
";
        }
        // line 6
        yield "
<div class=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 7), "html", null, true);
        yield " px-4 relative z-10 mb-4\">

  <div class=\"grid grid-cols-1 lg:grid-cols-3 justify-center gap-3\">

      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "items", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            yield "      <a class=\"card_renter_sm flex flex-1 flex-col shadow-lg rounded-xl overflow-hidden bg-white\" href=\"";
            yield $this->env->getFilter('link')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_page", [], "any", false, false, false, 12));
            yield "\" ";
            yield ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "button_external", [], "any", false, false, false, 12)) ? ("target=\"_blank\" rel=\"noopener\"") : (""));
            yield ">
          <div class=\"card_renter_img h-28 w-full overflow-hidden relative\">
              <img class=\"w-full h-full object-cover\" src=\"";
            // line 14
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 14));
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 14), ["_" => " ", "/site-images/" => "", ".webp" => ""]), "html", null, true);
            yield "\" loading=\"lazy\" />
          </div>
          <div class=\"card_renter_items px-4 py-3 flex justify-between items-center gap-2 flex-1\">
              <div class=\"text-primary text-lg font-bold transition ease-in duration-300\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17), "html", null, true);
            yield "</div>
              <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path class=\"transition ease-in duration-300 fill-primary\" d=\"M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z\" />
              </svg>
          </div>
      </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
  </div>

</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\tailorblueprint\\themes/myrent/partials/builder/partials/card-slider-grid.htm";
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
        return array (  96 => 24,  83 => 17,  75 => 14,  67 => 12,  63 => 11,  56 => 7,  53 => 6,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if section.title %}
  <h2 class=\"text-lg lg:text-xl font-bold text-center text-white mb-8\">
    {{ section.title | raw }}
  </h2>
{% endif %}

<div class=\"{{ section.container_style }} px-4 relative z-10 mb-4\">

  <div class=\"grid grid-cols-1 lg:grid-cols-3 justify-center gap-3\">

      {% for item in section.items %}
      <a class=\"card_renter_sm flex flex-1 flex-col shadow-lg rounded-xl overflow-hidden bg-white\" href=\"{{ item.button_page | link  }}\" {{ item.button_external ? 'target=\"_blank\" rel=\"noopener\"' }}>
          <div class=\"card_renter_img h-28 w-full overflow-hidden relative\">
              <img class=\"w-full h-full object-cover\" src=\"{{ item.image | media }}\" alt=\"{{ item.image | replace({ '_' : ' ', '/site-images/' : '', '.webp' : '' }) }}\" loading=\"lazy\" />
          </div>
          <div class=\"card_renter_items px-4 py-3 flex justify-between items-center gap-2 flex-1\">
              <div class=\"text-primary text-lg font-bold transition ease-in duration-300\">{{ item.title }}</div>
              <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path class=\"transition ease-in duration-300 fill-primary\" d=\"M14.7071 5.29289C14.3166 4.90237 13.6834 4.90237 13.2929 5.29289C12.9024 5.68342 12.9024 6.31658 13.2929 6.70711L17.5858 11H4C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H17.5858L13.2929 17.2929C12.9024 17.6834 12.9024 18.3166 13.2929 18.7071C13.6834 19.0976 14.3166 19.0976 14.7071 18.7071L20.7071 12.7071C21.0976 12.3166 21.0976 11.6834 20.7071 11.2929L14.7071 5.29289Z\" />
              </svg>
          </div>
      </a>
      {% endfor %}

  </div>

</div>", "E:\\faks\\_zavrsni\\tailorblueprint\\themes/myrent/partials/builder/partials/card-slider-grid.htm", "");
    }
}
