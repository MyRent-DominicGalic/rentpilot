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

/* E:\faks\_zavrsni\tailorblueprint\plugins/epic/gdpr/components/partials/modal-scripts.htm */
class __TwigTemplate_df752d19b238e8a563fd0e8d4dcbcd34 extends Template
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
        yield "<script type=\"text/javascript\" defer async>
    // Modal
    var modal = document.getElementById(\"js--CookiesModal\");

    // When the user clicks the button, open the modal
    var modalTrigger = document.querySelector('.js--modal-trigger');

    if(modalTrigger) {
       modalTrigger.addEventListener(\"click\", function(event) {
          event.preventDefault();
          modal.style.display = \"block\";
      }, false);
    }

    // When the user clicks on <span> (x), close the modal
    document.querySelectorAll('.js--modal-close').forEach(item => {
        item.addEventListener('click', event => {
            modal.style.display = \"none\";
        })
    });

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = \"none\";
        }
    }
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\tailorblueprint\\plugins/epic/gdpr/components/partials/modal-scripts.htm";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script type=\"text/javascript\" defer async>
    // Modal
    var modal = document.getElementById(\"js--CookiesModal\");

    // When the user clicks the button, open the modal
    var modalTrigger = document.querySelector('.js--modal-trigger');

    if(modalTrigger) {
       modalTrigger.addEventListener(\"click\", function(event) {
          event.preventDefault();
          modal.style.display = \"block\";
      }, false);
    }

    // When the user clicks on <span> (x), close the modal
    document.querySelectorAll('.js--modal-close').forEach(item => {
        item.addEventListener('click', event => {
            modal.style.display = \"none\";
        })
    });

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = \"none\";
        }
    }
</script>
", "E:\\faks\\_zavrsni\\tailorblueprint\\plugins/epic/gdpr/components/partials/modal-scripts.htm", "");
    }
}
