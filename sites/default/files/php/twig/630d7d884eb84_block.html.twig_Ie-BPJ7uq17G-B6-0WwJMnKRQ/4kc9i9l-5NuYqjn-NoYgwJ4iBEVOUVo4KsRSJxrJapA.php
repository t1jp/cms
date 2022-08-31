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

/* themes/bulma/templates/block/block.html.twig */
class __TwigTemplate_cf1946525ad34ac3662392f0edf61f4f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@stable/block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["classes"] = (($context["classes"]) ?? ([0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 6
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 6), 6, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 7
($context["plugin_id"] ?? null), 7, $this->source))), 3 => "clearfix"]));
        // line 12
        if ((($context["region"] ?? null) == "footer")) {
            // line 14
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 14, $this->source), [0 => "column", 1 => "is-narrow"]);
        }
        // line 20
        if (($context["block_panel_style"] ?? null)) {
            // line 21
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 21, $this->source), [0 => "panel"]);
            // line 23
            $context["title_classes"] = (($context["title_classes"]) ?? ([]));
            // line 26
            $context["title_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["title_classes"] ?? null), 26, $this->source), [0 => "panel-heading"]);
        } elseif ( !        // line 30
($context["title_classes"] ?? null)) {
            // line 32
            $context["title_classes"] = [0 => "subtitle", 1 => "is-4", 2 => "is-uppercase"];
        }
        // line 39
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39);
        // line 40
        $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 40);
        // line 1
        $this->parent = $this->loadTemplate("@stable/block/block.html.twig", "themes/bulma/templates/block/block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "  ";
        if (($context["block_panel_style"] ?? null)) {
            // line 44
            echo "    <div class=\"panel-block\">
  ";
        }
        // line 46
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 46, $this->source), "html", null, true);
        echo "
  ";
        // line 47
        if (($context["block_panel_style"] ?? null)) {
            // line 48
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 48,  91 => 47,  86 => 46,  82 => 44,  79 => 43,  75 => 42,  70 => 1,  68 => 40,  66 => 39,  63 => 32,  61 => 30,  59 => 26,  57 => 23,  55 => 21,  53 => 20,  50 => 14,  48 => 12,  46 => 7,  45 => 6,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/block/block.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\block\\block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 12);
        static $filters = array("clean_class" => 6, "merge" => 14, "escape" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'merge', 'escape'],
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
