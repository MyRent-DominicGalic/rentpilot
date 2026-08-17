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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/articles/_sidebar.htm */
class __TwigTemplate_e5418470955d2aa7630251bbc9512c32 extends Template
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
        yield "<aside class=\"px-4 pt-6 lg:pt-10 pb-16 lg:pb-10\">

  <form id=\"blog-filter-form\" data-request=\"onAjax\"
      data-request-update=\"'builder/articles/_ajaxlist': '#posts-ajax'\"
      data-attach-loading>
      <div class=\"flex items-center gap-2 mb-6\">
        <div class=\"flex items-center gap-1 border border-silver rounded-full overflow-hidden pl-4 sm:max-w-xs w-full\">
            <img width=\"24\" height=\"24\" src=\"";
        // line 8
        yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/search-sm.svg");
        yield "\" alt=\"Icon search\" />
            <input class=\"px-3 py-2.5 placeholder-gray-light text-sm w-full\" type=\"text\" name=\"q\" placeholder=\"Pretraži članke...\" />
        </div>
        <button class=\"text-base bg-primary text-silver-light transition ease-out duration-300 rounded-full px-4 lg:px-5 py-2 lg:py-2.5 font-bold hover:bg-secondary hidden sm:block\" type=\"submit\">Traži</button>
      </div>

      <div class=\"flex flex-wrap gap-2\">
          <label class=\"checkbox_items\" for=\"blog_checkbox-all_news\">
              <input class=\"hidden\" type=\"radio\" value=\"\" name=\"categories\" id=\"blog_checkbox-all_news\" checked/>
              <span class=\"check_outline relative block px-4 py-2 border border-primary border-opacity-40 text-gray rounded-full font-medium select-none cursor-pointer\">
                Svi članci
              </span>
          </label>
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            yield "          <label class=\"checkbox_items\" for=\"blog_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 22), "html", null, true);
            yield "\">
              <input class=\"hidden\" type=\"radio\" name=\"categories\" value=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "\" id=\"blog_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 23), "html", null, true);
            yield "\" />
              <span class=\"check_outline relative block px-4 py-2 border border-primary border-opacity-40 text-gray rounded-full font-medium select-none cursor-pointer\">
                ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25), "html", null, true);
            yield "
              </span>
          </label>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "      </div>

  </form>

</aside>

<script type=\"text/javascript\">
  document.querySelectorAll('#blog-filter-form input').forEach((el) => {
      el.addEventListener('change', (e) => {
        document.querySelector('#blog-filter-form button').click();
      })
  })
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/articles/_sidebar.htm";
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
        return array (  93 => 29,  83 => 25,  76 => 23,  71 => 22,  67 => 21,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"px-4 pt-6 lg:pt-10 pb-16 lg:pb-10\">

  <form id=\"blog-filter-form\" data-request=\"onAjax\"
      data-request-update=\"'builder/articles/_ajaxlist': '#posts-ajax'\"
      data-attach-loading>
      <div class=\"flex items-center gap-2 mb-6\">
        <div class=\"flex items-center gap-1 border border-silver rounded-full overflow-hidden pl-4 sm:max-w-xs w-full\">
            <img width=\"24\" height=\"24\" src=\"{{ 'assets/icons/search-sm.svg'| theme }}\" alt=\"Icon search\" />
            <input class=\"px-3 py-2.5 placeholder-gray-light text-sm w-full\" type=\"text\" name=\"q\" placeholder=\"Pretraži članke...\" />
        </div>
        <button class=\"text-base bg-primary text-silver-light transition ease-out duration-300 rounded-full px-4 lg:px-5 py-2 lg:py-2.5 font-bold hover:bg-secondary hidden sm:block\" type=\"submit\">Traži</button>
      </div>

      <div class=\"flex flex-wrap gap-2\">
          <label class=\"checkbox_items\" for=\"blog_checkbox-all_news\">
              <input class=\"hidden\" type=\"radio\" value=\"\" name=\"categories\" id=\"blog_checkbox-all_news\" checked/>
              <span class=\"check_outline relative block px-4 py-2 border border-primary border-opacity-40 text-gray rounded-full font-medium select-none cursor-pointer\">
                Svi članci
              </span>
          </label>
          {% for item in categories %}
          <label class=\"checkbox_items\" for=\"blog_{{ item.slug }}\">
              <input class=\"hidden\" type=\"radio\" name=\"categories\" value=\"{{ item.id }}\" id=\"blog_{{ item.slug }}\" />
              <span class=\"check_outline relative block px-4 py-2 border border-primary border-opacity-40 text-gray rounded-full font-medium select-none cursor-pointer\">
                {{ item.title }}
              </span>
          </label>
          {% endfor %}
      </div>

  </form>

</aside>

<script type=\"text/javascript\">
  document.querySelectorAll('#blog-filter-form input').forEach((el) => {
      el.addEventListener('change', (e) => {
        document.querySelector('#blog-filter-form button').click();
      })
  })
</script>", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/articles/_sidebar.htm", "");
    }
}
