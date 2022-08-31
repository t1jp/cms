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

/* themes/bulma/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_c23b17223e09095ff6b7492a8059bbd7 extends \Twig\Template
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
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["classes"] = (($context["classes"]) ?? ([]));
        // line 20
        $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 20, $this->source), [0 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 21
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 21), 21, $this->source))), 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 22
($context["plugin_id"] ?? null), 22, $this->source))), 2 => "navbar-item"]);
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/bulma/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 28
            echo "    <figure class=\"is-pulled-left\">
      <a href=\"";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 30, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\"/>
      </a>
    </figure>
  ";
        }
        // line 34
        echo "  ";
        if (($context["site_name"] ?? null)) {
            // line 35
            echo "    <a class=\"title is-size-3-desktop is-size-4-touch\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 35, $this->source), "html", null, true);
            echo "</a>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  80 => 34,  71 => 30,  65 => 29,  62 => 28,  59 => 27,  55 => 26,  50 => 1,  48 => 22,  47 => 21,  46 => 20,  44 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/block/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\block\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 27);
        static $filters = array("merge" => 20, "clean_class" => 21, "t" => 29, "escape" => 30);
        static $functions = array("path" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'clean_class', 't', 'escape'],
                ['path']
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
