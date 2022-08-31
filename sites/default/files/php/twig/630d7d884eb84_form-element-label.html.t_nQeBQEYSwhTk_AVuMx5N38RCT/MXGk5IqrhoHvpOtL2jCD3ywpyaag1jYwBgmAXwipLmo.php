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

/* themes/bulma/templates/elements/form-element-label.html.twig */
class __TwigTemplate_1789ab09974fb737f33ae5a89e7e4efd extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["classes"] = [0 => "label", 1 => "control-label", 2 => (((        // line 25
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 3 => ((((        // line 26
($context["title_display"] ?? null) == "invisible") &&  !(($context["is_checkbox"] ?? null) || ($context["is_radio"] ?? null)))) ? ("sr-only") : ("")), 4 => ((        // line 27
($context["required"] ?? null)) ? ("js-form-required") : ("")), 5 => ((        // line 28
($context["required"] ?? null)) ? ("form-required") : ("")), 6 =>         // line 29
($context["tag"] ?? null), 7 =>         // line 30
($context["color"] ?? null), 8 =>         // line 31
($context["size"] ?? null)];
        // line 34
        if ((( !twig_test_empty(($context["title"] ?? null)) && (($context["title_display"] ?? null) == "invisible")) && (($context["is_checkbox"] ?? null) || ($context["is_radio"] ?? null)))) {
            // line 39
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "title", 1 => ($context["title"] ?? null)], "method", false, false, true, 39);
            // line 40
            $context["title"] = null;
        }
        // line 46
        if ((( !twig_test_empty(($context["title"] ?? null)) || ($context["is_checkbox"] ?? null)) || ($context["is_radio"] ?? null))) {
            // line 47
            echo "<label";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 47, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 47, $this->source), "html", null, true);
            // line 48
            if (($context["description"] ?? null)) {
                // line 49
                echo "<p class=\"help-block\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 49, $this->source), "html", null, true);
                echo "</p>";
            }
            // line 51
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/elements/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 51,  65 => 49,  63 => 48,  57 => 47,  55 => 46,  52 => 40,  50 => 39,  48 => 34,  46 => 31,  45 => 30,  44 => 29,  43 => 28,  42 => 27,  41 => 26,  40 => 25,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/elements/form-element-label.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\elements\\form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "if" => 34);
        static $filters = array("escape" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
