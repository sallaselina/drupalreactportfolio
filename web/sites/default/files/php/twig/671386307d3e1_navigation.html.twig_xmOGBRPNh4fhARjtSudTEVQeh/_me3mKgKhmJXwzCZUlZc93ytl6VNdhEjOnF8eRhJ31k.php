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

/* @gin/navigation/navigation.html.twig */
class __TwigTemplate_25ae30707cd4210962ae7153726c598e extends Template
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
        // line 2
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@navigation/navigation.html.twig", "@gin/navigation/navigation.html.twig", 2);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield(CoreExtension::merge($context, ["logo_path" => ($context["icon_path"] ?? null)]));
        }
        // line 3
        yield "
";
        // line 5
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             $this->loadTemplate("@navigation/layouts/navigation.html.twig", "@gin/navigation/navigation.html.twig", 5);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            yield from $__internal_compile_1->unwrap()->yield(CoreExtension::merge($context, ["logo_path" => ($context["icon_path"] ?? null)]));
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon_path"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@gin/navigation/navigation.html.twig";
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
        return array (  53 => 5,  50 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gin/navigation/navigation.html.twig", "/app/web/themes/contrib/gin/templates/navigation/navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
