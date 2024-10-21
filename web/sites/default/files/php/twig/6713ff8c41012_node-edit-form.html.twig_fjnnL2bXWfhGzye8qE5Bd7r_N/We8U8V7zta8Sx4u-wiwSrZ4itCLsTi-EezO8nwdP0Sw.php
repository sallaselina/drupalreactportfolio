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

/* themes/contrib/gin/templates/node/node-edit-form.html.twig */
class __TwigTemplate_f441e706bba78f04c8187fc594c886e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'secondary' => [$this, 'block_secondary'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_ajax_request", [], "any", false, false, true, 18)) {
            // line 19
            yield "  ";
            yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
            // line 22
            yield "
  ";
            // line 23
            yield from $this->unwrap()->yieldBlock('secondary', $context, $blocks);
            // line 26
            yield "
  ";
            // line 27
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        } else {
            // line 32
            yield "  <div class=\"layout-node-form clearfix\">
    <div class=\"layout-region layout-region-node-main\">
      ";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 34, $this->source), "advanced", "footer", "actions", "gin_actions", "gin_sidebar", "gin_sidebar_toggle"), "html", null, true);
            yield "
    </div>
    <div class=\"layout-region layout-region-node-secondary\" id=\"gin_sidebar\">
      <span class=\"gin-sidebar-draggable\" id=\"gin-sidebar-draggable\"></span>
      <div class=\"layout-region__content\">
        ";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "advanced", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            yield "
        ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "gin_sidebar_toggle", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </div>
  ";
            // line 44
            if ((($context["gin_layout_paragraphs"] ?? null) == 1)) {
                // line 45
                yield "    <style>
      .layout-node-form {
        --gin-lp-layout: \"";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Layout"));
                yield "\";
        --gin-lp-content: \"";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Content"));
                yield "\";
      }
    </style>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["form", "gin_layout_paragraphs"]);        return; yield '';
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 20, $this->source), "advanced", "footer", "actions"), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    // line 23
    public function block_secondary($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "advanced", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    // line 27
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "footer", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        yield "
    ";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/node/node-edit-form.html.twig";
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
        return array (  137 => 29,  132 => 28,  128 => 27,  120 => 24,  116 => 23,  108 => 20,  104 => 19,  92 => 48,  88 => 47,  84 => 45,  82 => 44,  75 => 40,  71 => 39,  63 => 34,  59 => 32,  56 => 27,  53 => 26,  51 => 23,  48 => 22,  45 => 19,  43 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/node/node-edit-form.html.twig", "/app/web/themes/contrib/gin/templates/node/node-edit-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "block" => 19);
        static $filters = array("escape" => 34, "without" => 34, "t" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 'without', 't'],
                [],
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
