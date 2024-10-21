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

/* themes/contrib/gin/templates/form/details.html.twig */
class __TwigTemplate_010ab6954f0b79f1dfe72ad6d08d953b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $context["show_description_toggle"] = (($context["description_toggle"] ?? null) && ($context["description"] ?? null));
        // line 29
        $context["classes"] = ["claro-details", ((        // line 31
($context["accordion"] ?? null)) ? ("claro-details--accordion") : ("")), ((        // line 32
($context["accordion_item"] ?? null)) ? ("claro-details--accordion-item") : ("")), ((        // line 33
($context["show_description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 37
        $context["content_wrapper_classes"] = ["claro-details__wrapper", "details-wrapper", ((        // line 40
($context["accordion"] ?? null)) ? ("claro-details__wrapper--accordion") : ("")), ((        // line 41
($context["accordion_item"] ?? null)) ? ("claro-details__wrapper--accordion-item") : (""))];
        // line 45
        $context["inner_wrapper_classes"] = ["claro-details__content", ((        // line 47
($context["accordion"] ?? null)) ? ("claro-details__content--accordion") : ("")), ((        // line 48
($context["accordion_item"] ?? null)) ? ("claro-details__content--accordion-item") : (""))];
        // line 52
        $context["description_classes"] = ["claro-details__description", ((        // line 54
($context["disabled"] ?? null)) ? ("is-disabled") : ("")), (((        // line 55
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 58
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        yield ">";
        // line 59
        if (($context["title"] ?? null)) {
            // line 61
            $context["summary_classes"] = ["claro-details__summary", ((            // line 63
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 64
($context["required"] ?? null)) ? ("form-required") : ("")), ((            // line 65
($context["accordion"] ?? null)) ? ("claro-details__summary--accordion") : ("")), ((            // line 66
($context["accordion_item"] ?? null)) ? ("claro-details__summary--accordion-item") : (""))];
            // line 69
            yield "    <summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            yield ">";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 70, $this->source), "html", null, true);
            // line 71
            yield "<span class=\"required-mark\"></span>
      ";
            // line 72
            if (($context["show_description_toggle"] ?? null)) {
                // line 73
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
                yield "
        <button class=\"help-icon__description-toggle\"></button>
      ";
            }
            // line 76
            yield "    </summary>";
        }
        // line 78
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        yield ">
    ";
        // line 79
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 80
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["inner_wrapper_classes"] ?? null)]), "html", null, true);
            yield ">
    ";
        }
        // line 82
        yield "
      ";
        // line 83
        if (($context["errors"] ?? null)) {
            // line 84
            yield "        <div class=\"form-item form-item--error-message\">
          ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 85, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 88
        if (($context["description"] ?? null)) {
            // line 89
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 89), 89, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 89, $this->source), "html", null, true);
            yield "</div>";
        }
        // line 91
        if (($context["children"] ?? null)) {
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 92, $this->source), "html", null, true);
        }
        // line 94
        if (($context["value"] ?? null)) {
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 95, $this->source), "html", null, true);
        }
        // line 98
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 99
            yield "    </div>
    ";
        }
        // line 101
        yield "  </div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["description_toggle", "description", "accordion", "accordion_item", "disabled", "description_display", "attributes", "title", "required", "summary_attributes", "content_attributes", "errors", "children", "value"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/form/details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  144 => 101,  140 => 99,  138 => 98,  135 => 95,  133 => 94,  130 => 92,  128 => 91,  121 => 89,  119 => 88,  113 => 85,  110 => 84,  108 => 83,  105 => 82,  99 => 80,  97 => 79,  92 => 78,  89 => 76,  82 => 73,  80 => 72,  77 => 71,  75 => 70,  71 => 69,  69 => 66,  68 => 65,  67 => 64,  66 => 63,  65 => 61,  63 => 59,  59 => 58,  57 => 55,  56 => 54,  55 => 52,  53 => 48,  52 => 47,  51 => 45,  49 => 41,  48 => 40,  47 => 37,  45 => 33,  44 => 32,  43 => 31,  42 => 29,  40 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/form/details.html.twig", "/app/web/themes/contrib/gin/templates/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 59);
        static $filters = array("escape" => 58);
        static $functions = array("attach_library" => 73, "create_attribute" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['attach_library', 'create_attribute'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
