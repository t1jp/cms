<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bulma/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_ca8c173a1fecba136b72f7426504bd5d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@stable/block/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = (($context["classes"]) ?? ([0 => "menu"]));
        // line 4
        if ((($context["region"] ?? null) == "footer")) {
            // line 6
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 6, $this->source), [0 => "column", 1 => "is-narrow"]);
        }
        // line 12
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 12);
        // line 13
        $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "menu-label"], "method", false, false, true, 13);
        // line 1
        $this->parent = $this->loadTemplate("@stable/block/block--system-menu-block.html.twig", "themes/bulma/templates/block/block--system-menu-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 1,  52 => 13,  50 => 12,  47 => 6,  45 => 4,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/block/block--system-menu-block.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\block\\block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 4);
        static $filters = array("merge" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge'],
                []
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
