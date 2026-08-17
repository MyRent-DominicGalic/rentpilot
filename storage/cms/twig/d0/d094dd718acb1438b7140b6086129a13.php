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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/site/recaptcha.htm */
class __TwigTemplate_998ae7c3d9c9fe51c87e9e85c118c627 extends Template
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
        yield "<script src=\"https://challenges.cloudflare.com/turnstile/v0/api.js\" async defer></script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/recaptcha.htm";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# <script src=\"https://www.google.com/recaptcha/api.js?render={{ settings.recaptcha_site_key }}\"></script> #}
<script src=\"https://challenges.cloudflare.com/turnstile/v0/api.js\" async defer></script>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/site/recaptcha.htm", "");
    }
}
