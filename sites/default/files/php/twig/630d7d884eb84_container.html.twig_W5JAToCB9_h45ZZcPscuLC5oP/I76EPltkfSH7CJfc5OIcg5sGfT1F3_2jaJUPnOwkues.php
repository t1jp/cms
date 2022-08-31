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

/* themes/bulma/templates/form/container.html.twig */
class __TwigTemplate_d31af1aef7660fe36f6d0f9ab6c9819d extends \Twig\Template
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
        // line 22
        return "@stable/form/container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if (($context["has_parent"] ?? null)) {
            // line 25
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "field"], "method", false, false, true, 25);
        }
        // line 22
        $this->parent = $this->loadTemplate("@stable/form/container.html.twig", "themes/bulma/templates/form/container.html.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/form/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  45 => 25,  43 => 24,  36 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/form/container.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\form\\container.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "set" => 25);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
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
