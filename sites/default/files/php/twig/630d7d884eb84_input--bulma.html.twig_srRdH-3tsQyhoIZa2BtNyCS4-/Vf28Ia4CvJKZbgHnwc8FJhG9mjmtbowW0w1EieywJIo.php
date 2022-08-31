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

/* themes/bulma/templates/elements/input--bulma.html.twig */
class __TwigTemplate_cc2e29f09be5c91f8e7bda523dd45f0f extends \Twig\Template
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
        // line 15
        echo "  ";
        // line 16
        $context["classes"] = [0 => "input"];
        // line 20
        echo "
<div class=\"control";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["icon"] ?? null)) ? (" has-icons-left") : ("")));
        echo "\">
    <input";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo " />";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 22, $this->source), "html", null, true);
        echo "
    ";
        // line 23
        if (($context["icon"] ?? null)) {
            // line 24
            echo "        <span class=\"icon is-left\">
            <i class=\"fa fa-";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 25, $this->source), "html", null, true);
            echo "\"></i>
        </span>
    ";
        }
        // line 28
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/elements/input--bulma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 28,  61 => 25,  58 => 24,  56 => 23,  50 => 22,  46 => 21,  43 => 20,  41 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/elements/input--bulma.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\elements\\input--bulma.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 23);
        static $filters = array("escape" => 22);
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
