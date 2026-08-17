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

/* /home/myrent/htdocs/myrent.hr/themes/myrent/partials/tailor_modules/form.htm */
class __TwigTemplate_16abc2b89a0d1cca7add3d28fa7fe62e extends Template
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
        $context["form"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["collection"] ?? null), "where", ["slug", ($context["code"] ?? null)], "method", false, false, false, 1), "first", [], "method", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        $context["fields"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 3);
        // line 4
        $context["form"] = ($context["form"] ?? null);
        // line 5
        $context["form_id"] = ((Twig\Extension\CoreExtension::replace(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["form"] ?? null), "slug", [], "any", false, false, false, 5), ["-" => "_"]) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 6
        yield "<form
        id=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "\"
        class=\"flex flex-col items-start gap-6 bg-secondary bg-opacity-5 rounded-lg px-4 lg:px-6 py-6 ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
        yield "\"
        data-request=\"onFormSubmit\"
        data-request-validate
        data-request-data=\"form_id: ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        yield ", success_message: '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["form"] ?? null), "success_message", [], "any", false, false, false, 11), "js"), "html", null, true);
        yield "', submitted: true\"
        data-request-update=\"'tailor_modules/form': '#";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "'\"
        ";
        // line 13
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["form"] ?? null), "enable_recaptcha", [], "any", false, false, false, 13)) {
            // line 14
            yield "            data-request-error=\"recaptcha_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
            yield "_error()\"
        ";
        }
        // line 16
        yield "        data-request-files
>

      <h2 class=\"text-lg lg:text-xl font-bold\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        yield "</h2>

      ";
        // line 21
        if (($context["submitted"] ?? null)) {
            // line 22
            yield "          ";
            $_type = isset($context["type"]) ? $context["type"] : null;            $_message = isset($context["message"]) ? $context["message"] : null;            foreach (Flash::messages() as $type => $messages) {
                foreach ($messages as $message) {
                    $context["type"] = $type;                    $context["message"] = $message;                    // line 23
                    yield "              <div class=\"max-w-xl alert alert-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
                    yield " mb-0\" role=\"alert\">
                  ";
                    // line 24
                    yield ($context["message"] ?? null);
                    yield "
              </div>
          ";
                }
            }
            $context["type"] = $_type;            $context["message"] = $_message;            // line 27
            yield "      ";
        }
        // line 28
        yield "
      <div class=\"grid grid-cols-12 gap-y-4 gap-x-8 w-full\">

        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 32
            yield "          ";
            $context["validation_rules"] = $this->extensions['System\Twig\Extension']->collectFunction(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "validation_rules", [], "any", false, false, false, 32));
            // line 33
            yield "          ";
            $context["is_required"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["validation_rules"] ?? null), "firstWhere", ["validation_type", "required"], "method", false, false, false, 33);
            // line 34
            yield "            <div class=\"form-field col-span-12 sm:col-span-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "attributes", [], "any", false, false, false, 34), "width", [], "any", false, false, false, 34), "html", null, true);
            yield " mb-2\">


                ";
            // line 37
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "attributes", [], "any", false, false, false, 37), "field_type", [], "any", false, false, false, 37) == "text")) {
                // line 38
                yield "                    <label class=\"block text-sm font-bold mb-2\" for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 38), "html", null, true);
                yield "\">
                        ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 39), "html", null, true);
                yield "

                    </label>
                    <input
                            type=\"text\"
                            id=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 44), "html", null, true);
                yield "\"
                            name=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 45), "html", null, true);
                yield "\"
                            class=\"px-4 py-2 rounded-full bg-white placeholder-gray font-medium text-sm w-full\"
                            placeholder=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "placeholder", [], "any", false, false, false, 47), "html", null, true);
                yield "\"
                    >
                ";
            }
            // line 50
            yield "

                ";
            // line 52
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "attributes", [], "any", false, false, false, 52), "field_type", [], "any", false, false, false, 52) == "textarea")) {
                // line 53
                yield "                    <label class=\"block text-sm font-bold mb-2\" for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 53), "html", null, true);
                yield "\">
                        ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 54), "html", null, true);
                yield "

                    </label>
                    <textarea
                            name=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 58), "html", null, true);
                yield "\"
                            class=\"px-4 py-2 rounded-2xl bg-white placeholder-gray font-medium text-sm w-full resize-none\"
                            placeholder=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "placeholder", [], "any", false, false, false, 60), "html", null, true);
                yield "\"
                            rows=\"8\"
                            id=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 62), "html", null, true);
                yield "\"
                    ></textarea>
                ";
            }
            // line 65
            yield "

                ";
            // line 67
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "attributes", [], "any", false, false, false, 67), "field_type", [], "any", false, false, false, 67) == "checkbox")) {
                // line 68
                yield "                    <div class=\"flex items-start\">
                      <div class=\"bg-transparent rounded-sm border border-gray-light w-5 h-5 mt-1 shrink-0 flex justify-center items-center relative\">
                        <input id=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 70), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 70), "html", null, true);
                yield "\" value=\"1\" type=\"checkbox\" class=\"checkbox opacity-0 absolute cursor-pointer w-full h-full\">
                        <div class=\"check-icon hidden rounded-sm h-3 w-3 bg-primary-light\">
                        </div>
                      </div>
                        <label class=\"ml-4 cursor-pointer\" for=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 74), "html", null, true);
                yield "\">
                          ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 75), "html", null, true);
                yield "
                        </label>
                    </div>
                ";
            }
            // line 79
            yield "

                ";
            // line 81
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "attributes", [], "any", false, false, false, 81), "field_type", [], "any", false, false, false, 81) == "select")) {
                // line 82
                yield "                    <label class=\"block text-sm font-bold mb-2\" for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 82), "html", null, true);
                yield "\">
                        ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 83), "html", null, true);
                yield "
                    </label>
                    <div class=\"px-4 py-2 rounded-full bg-white placeholder-gray font-medium text-sm w-full form-field__select\">
                    <select required
                            name=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 87), "html", null, true);
                yield "\"
                            aria-label=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 88), "html", null, true);
                yield "\"
                            id=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 89), "html", null, true);
                yield "\"
                    >
                        <option selected disabled value=\"\">";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "placeholder", [], "any", false, false, false, 91), "html", null, true);
                yield "</option>
                        ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "options", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 93
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["option"], "slug", [], "any", false, false, false, 93), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 93), "html", null, true);
                    yield "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                yield "                    </select>
                    </div>
                ";
            }
            // line 98
            yield "

                ";
            // line 100
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "attributes", [], "any", false, false, false, 100), "field_type", [], "any", false, false, false, 100) == "file")) {
                // line 101
                yield "
                    <label class=\"block text-sm font-bold mb-2 mt-8\" for=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 102), "html", null, true);
                yield "\">
                        ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 103), "html", null, true);
                yield "
                    </label>

                    <input
                            type=\"file\"
                            multiple
                            id=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 109), "html", null, true);
                yield "\"
                            name=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 110), "html", null, true);
                yield "\"
                            class=\"form-field__file\"
                            placeholder=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "placeholder", [], "any", false, false, false, 112), "html", null, true);
                yield "\"
                    >

                    ";
                // line 115
                $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('styles'                , function() use ($context, $blocks, $macros) {
                // line 116
                yield "                    <link href=\"";
                yield $this->extensions['Cms\Twig\Extension']->themeFilter(["assets/vendor/fileuploader/font/font-fileuploader.css", "assets/vendor/fileuploader/jquery.fileuploader.min.css"]);
                // line 119
                yield "\" rel=\"stylesheet\">
                    ";
                // line 115
                return; yield '';}, true                );
                // line 121
                yield "
                    ";
                // line 122
                $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('scripts'                , function() use ($context, $blocks, $macros) {
                // line 123
                yield "                    <script type=\"text/javascript\" src=\"";
                yield $this->extensions['Cms\Twig\Extension']->themeFilter(["@jquery", "assets/vendor/fileuploader/jquery.fileuploader.min.js"]);
                // line 126
                yield "\">
                    </script>
                    <script type=\"text/javascript\">
                    \$('input[name=\"dokumenti\"]').fileuploader({
                          changeInput: '<div class=\"fileuploader-input\">' +
                                  '<div class=\"fileuploader-input-inner\">' +
                                    '<div class=\"icon-upload text-7xl text-gray-light pb-4\"></div>' +
                                  '<h3 class=\"fileuploader-input-caption\"><span>\${captions.feedback}</span></h3>' +
                                  '<p>\${captions.or}</p>' +
                                  '<button type=\"button\" class=\"fileuploader-input-button\"><span>\${captions.button}</span></button>' +
                                  '<h3 class=\"fileuploader-caption margin-t6 uppercase\"><span>\${captions.filetype}</span></h3>' +
                                  '<h3 class=\"fileuploader-caption\"><span>\${captions.filesize}</span></h3>' +
                                '</div>' +
                              '</div>',
                          theme: 'dragdrop',
                          addMore: true,
                      captions: \$.extend(true, {}, \$.fn.fileuploader.languages['hr'], {
                              feedback: 'Ovdje povucite i ispustite datoteke',
                              feedback2: 'Ovdje povucite i ispustite datoteke',
                              feedback3: 'Doc, Docx, PDF',
                              drop: 'Ovdje povucite i ispustite datoteke',
                              or: 'ili',
                              button: 'Pronađi datoteku',
                              filetype: 'Doc / Docx / PDF',
                              filesize: 'maks veličina datoteke 2.0 MB',
                          }),
                    });
                    </script>
                    ";
                // line 122
                return; yield '';}, true                );
                // line 155
                yield "
                ";
            }
            // line 157
            yield "

                ";
            // line 159
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "validation_rules", [], "any", false, false, false, 159))) {
                // line 160
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "validation_rules", [], "any", false, false, false, 160));
                foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                    // line 161
                    yield "                  <small class=\"flex items-center gap-1 text-red pt-2 validate-message\" data-validate-for=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "slug", [], "any", false, false, false, 161), "html", null, true);
                    yield "\">
                    <img width=\"16\" height=\"20\" src=\"";
                    // line 162
                    yield $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/alert.svg");
                    yield "\" alt=\"Alert icon\" />
                    ";
                    // line 163
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["rule"], "error_message", [], "any", false, false, false, 163), "html", null, true);
                    yield "
                  </small>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['rule'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                yield "                ";
            }
            // line 167
            yield "

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "      </div>

        ";
        // line 173
        yield $this->env->getFunction('form_*')->getCallable()("token");
        yield "

        ";
        // line 176
        yield "        ";
        // line 190
        yield "        ";
        // line 191
        yield "        ";
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["form"] ?? null), "enable_recaptcha", [], "any", false, false, false, 191) == true)) {
            // line 192
            yield "            <div class=\"cf-turnstile\" data-sitekey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "recaptcha_site_key", [], "any", false, false, false, 192), "html", null, true);
            yield "\" data-theme=\"light\" data-size=\"flexible\" data-appearance=\"always\"></div>
        ";
        }
        // line 194
        yield "
        ";
        // line 195
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["fields"] ?? null))) {
            // line 196
            yield "            <div class=\"\">
                <button type=\"submit\" class=\"bg-primary text-silver-light transition ease-out duration-300 rounded-full px-5 py-2.5 font-bold hover:bg-secondary w-full lg:w-auto\" data-attach-loading onclick=\"getRecaptchaToken()\">
                  ";
            // line 198
            yield $this->env->getFilter('_')->getCallable()("Pošalji");
            yield "
                </button>
            </div>
        ";
        }
        // line 202
        yield "
    </div>
</form>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/tailor_modules/form.htm";
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
        return array (  456 => 202,  449 => 198,  445 => 196,  443 => 195,  440 => 194,  434 => 192,  431 => 191,  429 => 190,  427 => 176,  422 => 173,  418 => 171,  409 => 167,  406 => 166,  397 => 163,  393 => 162,  388 => 161,  383 => 160,  381 => 159,  377 => 157,  373 => 155,  371 => 122,  341 => 126,  338 => 123,  336 => 122,  333 => 121,  331 => 115,  328 => 119,  325 => 116,  323 => 115,  317 => 112,  312 => 110,  308 => 109,  299 => 103,  295 => 102,  292 => 101,  290 => 100,  286 => 98,  281 => 95,  270 => 93,  266 => 92,  262 => 91,  257 => 89,  253 => 88,  249 => 87,  242 => 83,  237 => 82,  235 => 81,  231 => 79,  224 => 75,  220 => 74,  211 => 70,  207 => 68,  205 => 67,  201 => 65,  195 => 62,  190 => 60,  185 => 58,  178 => 54,  173 => 53,  171 => 52,  167 => 50,  161 => 47,  156 => 45,  152 => 44,  144 => 39,  139 => 38,  137 => 37,  130 => 34,  127 => 33,  124 => 32,  120 => 31,  115 => 28,  112 => 27,  105 => 24,  100 => 23,  96 => 22,  94 => 21,  89 => 19,  84 => 16,  78 => 14,  76 => 13,  72 => 12,  66 => 11,  60 => 8,  56 => 7,  53 => 6,  51 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set form = collection.where('slug', code).first() %}

{% set fields = form.fields %}
{% set form = form %}
{% set form_id = form.slug|replace({\"-\" : '_'}) ~ '_' ~ random() %}
<form
        id=\"{{ form_id }}\"
        class=\"flex flex-col items-start gap-6 bg-secondary bg-opacity-5 rounded-lg px-4 lg:px-6 py-6 {{ class }}\"
        data-request=\"onFormSubmit\"
        data-request-validate
        data-request-data=\"form_id: {{ form.id }}, success_message: '{{ form.success_message|escape('js') }}', submitted: true\"
        data-request-update=\"'tailor_modules/form': '#{{ form_id }}'\"
        {% if form.enable_recaptcha %}
            data-request-error=\"recaptcha_{{ form_id }}_error()\"
        {% endif %}
        data-request-files
>

      <h2 class=\"text-lg lg:text-xl font-bold\">{{ form.title }}</h2>

      {% if submitted %}
          {% flash %}
              <div class=\"max-w-xl alert alert-{{ type }} mb-0\" role=\"alert\">
                  {{ message | raw }}
              </div>
          {% endflash %}
      {% endif %}

      <div class=\"grid grid-cols-12 gap-y-4 gap-x-8 w-full\">

        {% for field in fields %}
          {% set validation_rules = collect(field.validation_rules) %}
          {% set is_required = validation_rules.firstWhere('validation_type', 'required') %}
            <div class=\"form-field col-span-12 sm:col-span-{{ field.attributes.width }} mb-2\">


                {% if field.attributes.field_type == 'text' %}
                    <label class=\"block text-sm font-bold mb-2\" for=\"{{ field.slug }}\">
                        {{ field.label }}

                    </label>
                    <input
                            type=\"text\"
                            id=\"{{ field.slug }}\"
                            name=\"{{ field.slug }}\"
                            class=\"px-4 py-2 rounded-full bg-white placeholder-gray font-medium text-sm w-full\"
                            placeholder=\"{{ field.placeholder }}\"
                    >
                {% endif %}


                {% if field.attributes.field_type == 'textarea' %}
                    <label class=\"block text-sm font-bold mb-2\" for=\"{{ field.slug }}\">
                        {{ field.label }}

                    </label>
                    <textarea
                            name=\"{{ field.slug }}\"
                            class=\"px-4 py-2 rounded-2xl bg-white placeholder-gray font-medium text-sm w-full resize-none\"
                            placeholder=\"{{ field.placeholder }}\"
                            rows=\"8\"
                            id=\"{{ field.slug }}\"
                    ></textarea>
                {% endif %}


                {% if field.attributes.field_type == 'checkbox' %}
                    <div class=\"flex items-start\">
                      <div class=\"bg-transparent rounded-sm border border-gray-light w-5 h-5 mt-1 shrink-0 flex justify-center items-center relative\">
                        <input id=\"{{ field.slug }}\" name=\"{{ field.slug }}\" value=\"1\" type=\"checkbox\" class=\"checkbox opacity-0 absolute cursor-pointer w-full h-full\">
                        <div class=\"check-icon hidden rounded-sm h-3 w-3 bg-primary-light\">
                        </div>
                      </div>
                        <label class=\"ml-4 cursor-pointer\" for=\"{{ field.slug }}\">
                          {{ field.label }}
                        </label>
                    </div>
                {% endif %}


                {% if field.attributes.field_type == 'select' %}
                    <label class=\"block text-sm font-bold mb-2\" for=\"{{ field.slug }}\">
                        {{ field.label }}
                    </label>
                    <div class=\"px-4 py-2 rounded-full bg-white placeholder-gray font-medium text-sm w-full form-field__select\">
                    <select required
                            name=\"{{ field.slug }}\"
                            aria-label=\"{{ field.label }}\"
                            id=\"{{ field.slug }}\"
                    >
                        <option selected disabled value=\"\">{{ field.placeholder }}</option>
                        {% for option in field.options %}
                            <option value=\"{{ option.slug }}\">{{ option.label }}</option>
                        {% endfor %}
                    </select>
                    </div>
                {% endif %}


                {% if field.attributes.field_type == 'file' %}

                    <label class=\"block text-sm font-bold mb-2 mt-8\" for=\"{{ field.slug }}\">
                        {{ field.label }}
                    </label>

                    <input
                            type=\"file\"
                            multiple
                            id=\"{{ field.slug }}\"
                            name=\"{{ field.slug }}\"
                            class=\"form-field__file\"
                            placeholder=\"{{ field.placeholder }}\"
                    >

                    {% put styles %}
                    <link href=\"{{ [
                      'assets/vendor/fileuploader/font/font-fileuploader.css',
                      'assets/vendor/fileuploader/jquery.fileuploader.min.css'
                      ] | theme }}\" rel=\"stylesheet\">
                    {% endput %}

                    {% put scripts %}
                    <script type=\"text/javascript\" src=\"{{ [
                      '@jquery',
                      'assets/vendor/fileuploader/jquery.fileuploader.min.js'
                      ] | theme }}\">
                    </script>
                    <script type=\"text/javascript\">
                    \$('input[name=\"dokumenti\"]').fileuploader({
                          changeInput: '<div class=\"fileuploader-input\">' +
                                  '<div class=\"fileuploader-input-inner\">' +
                                    '<div class=\"icon-upload text-7xl text-gray-light pb-4\"></div>' +
                                  '<h3 class=\"fileuploader-input-caption\"><span>\${captions.feedback}</span></h3>' +
                                  '<p>\${captions.or}</p>' +
                                  '<button type=\"button\" class=\"fileuploader-input-button\"><span>\${captions.button}</span></button>' +
                                  '<h3 class=\"fileuploader-caption margin-t6 uppercase\"><span>\${captions.filetype}</span></h3>' +
                                  '<h3 class=\"fileuploader-caption\"><span>\${captions.filesize}</span></h3>' +
                                '</div>' +
                              '</div>',
                          theme: 'dragdrop',
                          addMore: true,
                      captions: \$.extend(true, {}, \$.fn.fileuploader.languages['hr'], {
                              feedback: 'Ovdje povucite i ispustite datoteke',
                              feedback2: 'Ovdje povucite i ispustite datoteke',
                              feedback3: 'Doc, Docx, PDF',
                              drop: 'Ovdje povucite i ispustite datoteke',
                              or: 'ili',
                              button: 'Pronađi datoteku',
                              filetype: 'Doc / Docx / PDF',
                              filesize: 'maks veličina datoteke 2.0 MB',
                          }),
                    });
                    </script>
                    {% endput %}

                {% endif %}


                {% if field.validation_rules | length %}
                  {% for rule in field.validation_rules %}
                  <small class=\"flex items-center gap-1 text-red pt-2 validate-message\" data-validate-for=\"{{ field.slug }}\">
                    <img width=\"16\" height=\"20\" src=\"{{ 'assets/icons/alert.svg'| theme }}\" alt=\"Alert icon\" />
                    {{ rule.error_message }}
                  </small>
                  {% endfor %}
                {% endif %}


            </div>
        {% endfor %}
      </div>

        {{ form_token() }}

        {# Google reCAPTCHA #}
        {#
            {% if form.enable_recaptcha == true %}
                {% if (settings.recaptcha_site_key|length and settings.recaptcha_secret_key|length) %}
                    <input type=\"hidden\" name=\"g-recaptcha-response\" id=\"g-recaptcha-response\">
                {% else %}
                    <div class=\"col-span-\">
                        <div class=\"alert alert-warning\">
                            You have reCAPTCHA enabled, but you haven't set your keys.
                            Please set them in the forms settings.</a>
                        </div>
                    </div>
                {% endif %}
            {% endif %}
        #}
        {# CloudFlare reCAPTCHA #}
        {% if form.enable_recaptcha == true %}
            <div class=\"cf-turnstile\" data-sitekey=\"{{ settings.recaptcha_site_key }}\" data-theme=\"light\" data-size=\"flexible\" data-appearance=\"always\"></div>
        {% endif %}

        {% if fields is not empty %}
            <div class=\"\">
                <button type=\"submit\" class=\"bg-primary text-silver-light transition ease-out duration-300 rounded-full px-5 py-2.5 font-bold hover:bg-secondary w-full lg:w-auto\" data-attach-loading onclick=\"getRecaptchaToken()\">
                  {{ 'Pošalji' |_ }}
                </button>
            </div>
        {% endif %}

    </div>
</form>

{#
    {% if form.enable_recaptcha == true %}
        {% if (settings.recaptcha_site_key|length and settings.recaptcha_secret_key|length) %}
            {% put scripts %}
                <script>
                    function getRecaptchaToken() {
                        grecaptcha.ready(function() {
                            grecaptcha.execute('{{ settings.recaptcha_site_key }}', {action: 'submit'}).then(function(token) {
                            document.getElementById('g-recaptcha-response').value = token;
                            });
                        });
                    }
                </script>
            {% endput %}
        {% endif %}
    {% endif %}
#}", "/home/myrent/htdocs/myrent.hr/themes/myrent/partials/tailor_modules/form.htm", "");
    }
}
