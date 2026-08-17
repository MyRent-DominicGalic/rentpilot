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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/form.htm */
class __TwigTemplate_18c7969ebe2ccc8f240922571e465152 extends Template
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
        yield "<section class=\"c-Form mb-32\">

    <div class=\"container\">
        <header class=\"text-center mb-6\">
                <h2>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        yield " </h2>
        </header>
         ";
        // line 7
        $cmsPartialParams = [];
        $cmsPartialParams['class'] = "lg:p-10 rounded-lg max-w-2xl mx-auto"        ;
        $cmsPartialParams['code'] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "forms", [], "any", false, false, false, 7), "slug", [], "any", false, false, false, 7)        ;
        yield $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("tailor_modules/form"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 8
        yield "    </div>
</section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/form.htm";
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
        return array (  58 => 8,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"c-Form mb-32\">

    <div class=\"container\">
        <header class=\"text-center mb-6\">
                <h2>{{ section.title }} </h2>
        </header>
         {% partial 'tailor_modules/form' class='lg:p-10 rounded-lg max-w-2xl mx-auto' code = section.forms.slug %}
    </div>
</section>", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/builder/sections/form.htm", "");
    }
}
