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

/* themes/bulma/templates/elements/form-element.html.twig */
class __TwigTemplate_1bee611d04b10133ab68fce7b8f28c36 extends \Twig\Template
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
        // line 50
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["type"] ?? null), 53, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null), 54, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null), 55, $this->source))), 5 => ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 6 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 58
($context["errors"] ?? null)) ? ("is-danger is-outlined") : (""))];
        // line 62
        $context["description_classes"] = [0 => "help", 1 => "description", 2 => (((        // line 65
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 68
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 68), 68, $this->source), "html", null, true);
        echo ">
    ";
        // line 69
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 70
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 72
        echo "    ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 73
            echo "        <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 73, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 75
        echo "    ";
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 75))) {
            // line 76
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo ">
            ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 80
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 80, $this->source), "html", null, true);
        echo "
    ";
        // line 81
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 82
            echo "        <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 82, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 84
        echo "    ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 85
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 85, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 87
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 88
            echo "        <div class=\"form-item--error-message\">
            ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 89, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 92
        echo "    ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 92))) {
            // line 93
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 93), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 93), 93, $this->source), "html", null, true);
            echo ">
            ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 97
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/elements/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 97,  128 => 94,  123 => 93,  120 => 92,  114 => 89,  111 => 88,  108 => 87,  102 => 85,  99 => 84,  93 => 82,  91 => 81,  86 => 80,  80 => 77,  75 => 76,  72 => 75,  66 => 73,  63 => 72,  57 => 70,  55 => 69,  50 => 68,  48 => 65,  47 => 62,  45 => 58,  44 => 57,  43 => 56,  42 => 55,  41 => 54,  40 => 53,  39 => 50,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/elements/form-element.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\elements\\form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 50, "if" => 69);
        static $filters = array("clean_class" => 53, "escape" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
