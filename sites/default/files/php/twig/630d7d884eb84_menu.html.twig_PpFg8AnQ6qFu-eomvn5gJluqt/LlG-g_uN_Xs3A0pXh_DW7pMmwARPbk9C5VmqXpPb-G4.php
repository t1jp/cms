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

/* themes/bulma/templates/navigation/menu.html.twig */
class __TwigTemplate_bfcf79a3176874deee06c62f3bf1ef09 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 29, $context, $this->getSourceContext()));
        echo " ";
        // line 30
        echo "
";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            echo " ";
            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            // line 34
            echo "  ";
            $context["menu_classes"] = [0 => "menu-list", 1 => (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 36
($context["menu_name"] ?? null), 36, $this->source)) . "-menu")];
            // line 38
            echo "  ";
            // line 39
            echo "  ";
            $context["submenu_classes"] = [0 => "submenu"];
            // line 42
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 43
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 44
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "> ";
                    // line 45
                    echo "    ";
                } else {
                    // line 46
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 46), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "> ";
                    // line 47
                    echo "    ";
                }
                // line 48
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 49
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo ">";
                    // line 50
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 50), 50, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
                    echo "
        ";
                    // line 51
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 51)) {
                        // line 52
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 52, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 54
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 56,  125 => 54,  119 => 52,  117 => 51,  112 => 50,  108 => 49,  103 => 48,  100 => 47,  96 => 46,  93 => 45,  89 => 44,  86 => 43,  83 => 42,  80 => 39,  78 => 38,  76 => 36,  74 => 34,  72 => 33,  69 => 32,  52 => 31,  47 => 30,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/navigation/menu.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\navigation\\menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "set" => 34, "if" => 42, "for" => 48);
        static $filters = array("clean_class" => 36, "escape" => 44);
        static $functions = array("link" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape'],
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
