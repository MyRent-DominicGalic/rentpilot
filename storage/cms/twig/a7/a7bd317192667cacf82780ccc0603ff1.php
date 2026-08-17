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

/* E:\faks\_zavrsni\zavrsni tailorblueprint\themes/myrent/partials/builder/sections/video_section.htm */
class __TwigTemplate_ce7b89932a1da8cd7dff7ace78fe810a extends Template
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
        yield "<";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 1), "html", null, true);
        yield " id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_anchor", [], "any", false, false, false, 1), "html", null, true);
        yield "\" class=\"c-Video__wrap ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "css_classes", [], "any", false, false, false, 1), " "), "html", null, true);
        yield "\">

  <div class=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "container_style", [], "any", false, false, false, 3), "html", null, true);
        yield "\">

      <div class=\"c-Video__inner max-w-5xl mx-auto articleText\">
        ";
        // line 6
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "youtube_video", [], "any", false, false, false, 6)) {
            // line 7
            yield "        <iframe width=\"560\"
         height=\"315\"
         src=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "youtube_video", [], "any", false, false, false, 9), "html", null, true);
            yield "\"
         title=\"YouTube video player\"
         frameborder=\"0\"
         allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
         loading=\"lazy\"
         allowfullscreen>
       </iframe>
        ";
        } else {
            // line 17
            yield "        <video class=\"c-Video\" playsinline=\"\" loop=\"\" preload=\"none\" poster=\"";
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 17));
            yield "\">
          <source src=\"";
            // line 18
            yield $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "video", [], "any", false, false, false, 18));
            yield "\" preload=\"none\" type=\"video/mp4\">
        </video>
        <div class=\"c-Video__caption\">
          <div class=\"c-Video__toggle\">
            <div class=\"text-white bg-black backdrop-blur-2xl\tbg-opacity-70 rounded-full w-28 h-28 flex items-center justify-center\">
              <svg class=\"w-24 md:w-32\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"/>
                <polygon points=\"172 128 108 88 108 168 172 128\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"8\"/>
              </svg>
            </div>
          </div>
        </div>

        ";
            // line 30
            $this->env->getExtension(\Cms\Twig\Extension::class)->yieldBlock('scripts'            , function() use ($context, $blocks, $macros) {
            // line 31
            yield "        <script type=\"text/javascript\">

          document.querySelectorAll('.c-Video').forEach(function(videoElement) {
            
            videoElement.parentElement.addEventListener('click', function() {

                const video = this.querySelector('.c-Video');
                const caption = this.querySelector('.c-Video__caption');

                if (video.paused) {
                    video.play();
                    if (caption) caption.style.display = 'none';
                } else {
                    video.pause();
                    if (caption) caption.style.display = '';
                }
            });
        });

          </script>
        ";
            // line 30
            return; yield '';}, true            );
            // line 52
            yield "
        ";
        }
        // line 54
        yield "      </div>

  </div>
  </";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["section"] ?? null), "html_tag", [], "any", false, false, false, 57), "html", null, true);
        yield ">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/video_section.htm";
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
        return array (  130 => 57,  125 => 54,  121 => 52,  119 => 30,  97 => 31,  95 => 30,  80 => 18,  75 => 17,  64 => 9,  60 => 7,  58 => 6,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<{{ section.html_tag }} id=\"{{ section.html_anchor }}\" class=\"c-Video__wrap {{ section.css_classes |join(' ') }}\">

  <div class=\"{{ section.container_style }}\">

      <div class=\"c-Video__inner max-w-5xl mx-auto articleText\">
        {% if section.youtube_video %}
        <iframe width=\"560\"
         height=\"315\"
         src=\"{{ section.youtube_video }}\"
         title=\"YouTube video player\"
         frameborder=\"0\"
         allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
         loading=\"lazy\"
         allowfullscreen>
       </iframe>
        {% else %}
        <video class=\"c-Video\" playsinline=\"\" loop=\"\" preload=\"none\" poster=\"{{ section.image | media }}\">
          <source src=\"{{ section.video | media }}\" preload=\"none\" type=\"video/mp4\">
        </video>
        <div class=\"c-Video__caption\">
          <div class=\"c-Video__toggle\">
            <div class=\"text-white bg-black backdrop-blur-2xl\tbg-opacity-70 rounded-full w-28 h-28 flex items-center justify-center\">
              <svg class=\"w-24 md:w-32\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"/>
                <polygon points=\"172 128 108 88 108 168 172 128\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"8\"/>
              </svg>
            </div>
          </div>
        </div>

        {% put scripts %}
        <script type=\"text/javascript\">

          document.querySelectorAll('.c-Video').forEach(function(videoElement) {
            
            videoElement.parentElement.addEventListener('click', function() {

                const video = this.querySelector('.c-Video');
                const caption = this.querySelector('.c-Video__caption');

                if (video.paused) {
                    video.play();
                    if (caption) caption.style.display = 'none';
                } else {
                    video.pause();
                    if (caption) caption.style.display = '';
                }
            });
        });

          </script>
        {% endput %}

        {% endif %}
      </div>

  </div>
  </{{ section.html_tag }}>", "E:\\faks\\_zavrsni\\zavrsni tailorblueprint\\themes/myrent/partials/builder/sections/video_section.htm", "");
    }
}
