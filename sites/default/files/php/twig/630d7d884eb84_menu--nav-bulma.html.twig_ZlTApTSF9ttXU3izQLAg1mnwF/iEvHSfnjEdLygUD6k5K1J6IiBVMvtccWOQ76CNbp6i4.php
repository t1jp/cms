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

/* themes/bulma/templates/navigation/menu--nav-bulma.html.twig */
class __TwigTemplate_31bd9507e6ac659ae25a6814d0a4cd37 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["link_classes"] ?? null)], 29, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__link_classes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "link_classes" => $__link_classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "      ";
                    // line 39
                    echo "      ";
                    // line 40
                    $context["item_classes"] = twig_array_merge((($context["link_classes"]) ?? ([])), [0 => ((twig_get_attribute($this->env, $this->source,                     // line 41
$context["item"], "in_active_trail", [], "any", false, false, true, 41)) ? ("is-in-active-trail") : (""))]);
                    // line 44
                    echo "      ";
                    // line 45
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 45) && (($context["menu_level"] ?? null) == 0))) {
                        // line 46
                        echo "        <div class=\"navbar-item has-dropdown is-hoverable\">
        ";
                        // line 48
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null), 48, $this->source), [0 => "navbar-link"]);
                        // line 52
                        echo "      ";
                    } else {
                        // line 53
                        echo "        ";
                        if ( !($context["link_classes"] ?? null)) {
                            // line 54
                            echo "          ";
                            // line 55
                            $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null), 55, $this->source), [0 => "navbar-item"]);
                            // line 59
                            echo "        ";
                        }
                        // line 60
                        echo "      ";
                    }
                    // line 61
                    echo "      ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 62
$context["item"], "title", [], "any", false, false, true, 62), 62, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 63
$context["item"], "url", [], "any", false, false, true, 63), 63, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 64
$context["item"], "attributes", [], "any", false, false, true, 64), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 64), 64, $this->source)), "html", null, true);
                    // line 65
                    echo "
      ";
                    // line 66
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 66) && (($context["menu_level"] ?? null) == 0))) {
                        // line 67
                        echo "        <div class=\"navbar-dropdown\">
        ";
                        // line 68
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 68), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["link_classes"] ?? null)], 68, $context, $this->getSourceContext()));
                        echo "
        </div>
      </div>
      ";
                    }
                    // line 72
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/navigation/menu--nav-bulma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 73,  132 => 72,  125 => 68,  122 => 67,  120 => 66,  117 => 65,  115 => 64,  114 => 63,  113 => 62,  111 => 61,  108 => 60,  105 => 59,  103 => 55,  101 => 54,  98 => 53,  95 => 52,  93 => 48,  90 => 46,  87 => 45,  85 => 44,  83 => 41,  82 => 40,  80 => 39,  78 => 35,  73 => 34,  70 => 33,  67 => 32,  51 => 31,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/navigation/menu--nav-bulma.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\navigation\\menu--nav-bulma.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 34, "set" => 40);
        static $filters = array("merge" => 40, "escape" => 61);
        static $functions = array("link" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['merge', 'escape'],
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
