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

/* themes/contrib/gin/templates/form/fieldset.html.twig */
class __TwigTemplate_78596b9d1f3e975dd82b41ced318a467 extends Template
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
        // line 29
        $context["show_description_toggle"] = (($context["description_toggle"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 29));
        // line 31
        $context["classes"] = ["fieldset", ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 33)) ? ("fieldset--group") : ("")), "js-form-item", "form-item", "js-form-wrapper", "form-wrapper", ((        // line 38
($context["show_description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 42
        $context["wrapper_classes"] = ["fieldset__wrapper", ((CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 44)) ? ("fieldset__wrapper--group") : (""))];
        // line 48
        $context["legend_span_classes"] = ["fieldset__label", ((CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 50)) ? ("fieldset__label--group") : ("")), ((        // line 51
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 52
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 56
        $context["legend_classes"] = ["fieldset__legend", (((CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 58) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["form-composite"], "method", false, false, true, 58))) ? ("fieldset__legend--group") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["attributes"] ?? null), "hasClass", ["form-composite"], "method", false, false, true, 59)) ? ("fieldset__legend--composite") : ("")), (((        // line 60
($context["title_display"] ?? null) == "invisible")) ? ("fieldset__legend--invisible") : ("fieldset__legend--visible"))];
        // line 64
        $context["description_classes"] = ["fieldset__description", (((        // line 66
($context["show_description_toggle"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 69
        yield "<fieldset";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
        yield ">
  ";
        // line 70
        if (($context["show_description_toggle"] ?? null)) {
            // line 71
            yield "    <div class=\"help-icon\">
  ";
        }
        // line 73
        yield "  ";
        // line 74
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 74)) {
            // line 75
            yield "    <legend";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 75), "addClass", [($context["legend_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
            yield ">
      <span";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 76), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            yield "</span>
    </legend>
  ";
        }
        // line 79
        yield "  ";
        if (($context["show_description_toggle"] ?? null)) {
            // line 80
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
            yield "
      <button class=\"help-icon__description-toggle\"></button>
    </div>
  ";
        }
        // line 84
        yield "  <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["wrapper_classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
        yield ">
    ";
        // line 85
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 85))) {
            // line 86
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 86), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 86), 86, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            yield "</div>
    ";
        }
        // line 88
        yield "    ";
        if (($context["inline_items"] ?? null)) {
            // line 89
            yield "    <div class=\"container-inline\">
      ";
        }
        // line 91
        yield "
      ";
        // line 92
        if (($context["prefix"] ?? null)) {
            // line 93
            yield "        <span class=\"fieldset__prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 93, $this->source), "html", null, true);
            yield "</span>
      ";
        }
        // line 95
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 95, $this->source), "html", null, true);
        yield "
      ";
        // line 96
        if (($context["suffix"] ?? null)) {
            // line 97
            yield "        <span class=\"fieldset__suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 97, $this->source), "html", null, true);
            yield "</span>
      ";
        }
        // line 99
        yield "      ";
        if (($context["errors"] ?? null)) {
            // line 100
            yield "        <div class=\"fieldset__error-message\">
          ";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 101, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 104
        yield "      ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 104))) {
            // line 105
            yield "        <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 105), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 105), 105, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            yield "</div>
      ";
        }
        // line 107
        yield "
      ";
        // line 108
        if (($context["inline_items"] ?? null)) {
            // line 109
            yield "    </div>
    ";
        }
        // line 111
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["description_toggle", "description", "attributes", "required", "title_display", "legend", "legend_span", "content_attributes", "description_display", "inline_items", "prefix", "children", "suffix", "errors"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/form/fieldset.html.twig";
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
        return array (  180 => 111,  176 => 109,  174 => 108,  171 => 107,  163 => 105,  160 => 104,  154 => 101,  151 => 100,  148 => 99,  142 => 97,  140 => 96,  135 => 95,  129 => 93,  127 => 92,  124 => 91,  120 => 89,  117 => 88,  109 => 86,  107 => 85,  102 => 84,  94 => 80,  91 => 79,  83 => 76,  78 => 75,  75 => 74,  73 => 73,  69 => 71,  67 => 70,  62 => 69,  60 => 66,  59 => 64,  57 => 60,  56 => 59,  55 => 58,  54 => 56,  52 => 52,  51 => 51,  50 => 50,  49 => 48,  47 => 44,  46 => 42,  44 => 38,  43 => 33,  42 => 31,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/form/fieldset.html.twig", "/app/web/themes/contrib/gin/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 70);
        static $filters = array("escape" => 69);
        static $functions = array("attach_library" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['attach_library'],
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
