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

/* themes/yg_business_plus/templates/block--system-branding-block.html.twig */
class __TwigTemplate_5687c22cba4a057c4ecbdf5c550df596 extends \Twig\Template
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
        // line 16
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method", false, false, true, 16);
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/yg_business_plus/templates/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        if (($context["site_name"] ?? null)) {
            // line 19
            echo "  <h1><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 19, $this->source), "html", null, true);
            echo "</a></h1>
";
        } elseif (        // line 20
($context["site_logo"] ?? null)) {
            // line 21
            echo " <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 21, $this->source), "html", null, true);
            echo "\" alt=\"Logo\" title=\"Logo\" /></a>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/yg_business_plus/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  66 => 20,  57 => 19,  55 => 18,  51 => 17,  46 => 1,  44 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_business_plus/templates/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\yg_business_plus\\templates\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 18);
        static $filters = array("t" => 19, "escape" => 19);
        static $functions = array("path" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape'],
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
