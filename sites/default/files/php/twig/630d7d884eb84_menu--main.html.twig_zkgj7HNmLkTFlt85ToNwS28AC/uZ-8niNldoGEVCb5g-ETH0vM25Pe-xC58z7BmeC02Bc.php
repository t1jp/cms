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

/* themes/yg_business_plus/templates/menu--main.html.twig */
class __TwigTemplate_6eefbfad241fb8633afc755a4b32bccb extends \Twig\Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo "
";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 30, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 32
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo " ";
            $macros["menus"] = $this;
            // line 34
            echo " ";
            if (($context["items"] ?? null)) {
                // line 35
                echo "   ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 36
                    echo "     <ul class=\"navbar-nav ml-auto\">
   ";
                } else {
                    // line 38
                    echo "     <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo ">
   ";
                }
                // line 40
                echo "   ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    echo "       ";
                    // line 42
                    $context["classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "is_expanded", [], "any", false, false, true, 44)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "is_expanded", [], "any", false, false, true, 45)) ? ("dropdown") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "is_collapsed", [], "any", false, false, true, 46)) ? ("menu-item--collapsed") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "in_active_trail", [], "any", false, false, true, 47)) ? ("menu-item--active-trail") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,                     // line 48
$context["item"], "in_active_trail", [], "any", false, false, true, 48)) ? ("active") : (""))];
                    // line 51
                    echo "     ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 51))) {
                        // line 52
                        echo "       <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 52), "addClass", [0 => ($context["classes"] ?? null), 1 => "expanded", 2 => "dropdown"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                        echo ">
       <a href=\"";
                        // line 53
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "\" class=\"navbar-link dropdown-toggle\" data-target=\"#\" data-toggle=\"dropdown\"> ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "</a>
     ";
                    } else {
                        // line 55
                        echo "       <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 55), "addClass", [0 => ($context["classes"] ?? null), 1 => "item"], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo ">
       ";
                        // line 57
                        echo "       ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), 57, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), 57, $this->source), ["class" => [0 => "nav-link"]]), "html", null, true);
                        echo "
     ";
                    }
                    // line 59
                    echo "     ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 59)) {
                        // line 60
                        echo "       ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 60), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "nav", 1 => "navbar-nav"], "method", false, false, true, 60), (($context["menu_level"] ?? null) + 1)], 60, $context, $this->getSourceContext()));
                        echo "
     ";
                    }
                    // line 62
                    echo "     </li>
   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "   </ul>
 ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/yg_business_plus/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 64,  137 => 62,  131 => 60,  128 => 59,  122 => 57,  117 => 55,  110 => 53,  105 => 52,  102 => 51,  100 => 48,  99 => 47,  98 => 46,  97 => 45,  96 => 44,  95 => 42,  93 => 41,  88 => 40,  82 => 38,  78 => 36,  75 => 35,  72 => 34,  69 => 33,  54 => 32,  47 => 30,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_business_plus/templates/menu--main.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\yg_business_plus\\templates\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 32, "if" => 34, "for" => 40, "set" => 42);
        static $filters = array("escape" => 38);
        static $functions = array("link" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
