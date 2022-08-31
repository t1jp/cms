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

/* themes/bulma/templates/elements/input--button--bulma.html.twig */
class __TwigTemplate_c50e791993987b5be2af15fc8fe49c27 extends \Twig\Template
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
        $context["classes"] = ($context["bulma_button_classes"] ?? null);
        // line 16
        echo "
<div class=\"control\">
  <button";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
    ";
        // line 19
        if (($context["icon"] ?? null)) {
            // line 20
            echo "      <span class=\"icon\">
      <i class=\"fa fa-";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 21, $this->source), "html", null, true);
            echo "\"></i>
    </span>
    ";
        }
        // line 24
        echo "    ";
        if ( !twig_test_empty(($context["label"] ?? null))) {
            // line 25
            echo "      <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 25, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 27
        echo "  </button>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 27, $this->source), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/elements/input--button--bulma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 27,  63 => 25,  60 => 24,  54 => 21,  51 => 20,  49 => 19,  45 => 18,  41 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/elements/input--button--bulma.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\elements\\input--button--bulma.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 19);
        static $filters = array("escape" => 18);
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
