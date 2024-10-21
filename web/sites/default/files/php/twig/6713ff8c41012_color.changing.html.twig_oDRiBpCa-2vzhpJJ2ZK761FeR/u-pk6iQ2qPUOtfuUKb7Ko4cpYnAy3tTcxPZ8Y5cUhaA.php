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

/* @help_topics/color.changing.html.twig */
class __TwigTemplate_37cadc99c3890797516a4680ae91d801 extends Template
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
        // line 6
        $context["appearance"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("system.themes_page"));
        // line 7
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 8
        yield t("Change the colors for links, backgrounds, and text in a theme that supports the Color module. Color-specific stylesheets will be generated and saved; you will need to follow these steps again to regenerate the stylesheets if you make any changes to the base stylesheets of your theme.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 11
        yield t("In the Manage administrative menu, navigate to <a href=\"@appearance\">Appearance</a>.", array("@appearance" => ($context["appearance"] ?? null), ));
        yield "</li>
  <li>";
        // line 12
        yield t("Click the <em>Settings</em> link for the theme you want to change the colors of.", array());
        yield "</li>
  <li>";
        // line 13
        yield t("In the <em>Color scheme</em> section, choose new colors for the backgrounds, text, and links that your theme defines colors for. However, if you do not see color settings, then your theme does not support the Color module.", array());
        yield "</li>
  <li>";
        // line 14
        yield t("Click <em>Save configuration</em>. Color-specific stylesheets will be generated and saved in the file system.", array());
        yield "</li>
</ol>

<h2>";
        // line 17
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/color/overview\">";
        // line 19
        yield t("Color module overview", array());
        yield "</a></li>
</ul>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/color.changing.html.twig";
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
        return array (  79 => 19,  74 => 17,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  51 => 9,  47 => 8,  42 => 7,  40 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/color.changing.html.twig", "/app/web/modules/contrib/color/help_topics/color.changing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 7);
        static $filters = array("escape" => 11);
        static $functions = array("render_var" => 6, "url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'url'],
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
