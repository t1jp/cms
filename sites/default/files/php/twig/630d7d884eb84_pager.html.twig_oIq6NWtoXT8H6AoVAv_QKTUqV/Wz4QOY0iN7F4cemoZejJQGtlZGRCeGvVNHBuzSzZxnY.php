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

/* themes/bulma/templates/system/pager.html.twig */
class __TwigTemplate_181b0e46e623a2d5fcd1e3985dd0ce3b extends \Twig\Template
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
        // line 34
        if (($context["items"] ?? null)) {
            // line 35
            echo "  <nav class=\"pager pagination is-centered\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items pagination-list\">
      ";
            // line 39
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39)) {
                // line 40
                echo "        <li class=\"pager__item pager__item--first\">
          <a class=\"pagination-previous\" href=\"";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "href", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), 41, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 43), "text", [], "any", true, true, true, 43)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 43), "text", [], "any", false, false, true, 43), 43, $this->source), t("« First"))) : (t("« First"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 47
            echo "      ";
            // line 48
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 48)) {
                // line 49
                echo "        <li class=\"pager__item pager__item--previous\">
          <a class=\"pagination-previous\" href=\"";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "href", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "attributes", [], "any", false, false, true, 50), 50, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 52), "text", [], "any", true, true, true, 52)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 52), "text", [], "any", false, false, true, 52), 52, $this->source), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 56
            echo "      ";
            // line 57
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 57)) {
                // line 58
                echo "        <li class=\"pager__item pagination-ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 60
            echo "
      ";
            // line 62
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 62));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 63
                echo "          ";
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 64
                    echo "              <li class=\"pager__item is-active\">
                  ";
                    // line 65
                    $context["title"] = t("Current page");
                    // line 66
                    echo "                  <a class=\"pagination-link is-current\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 66, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66), 66, $this->source), "href", "title"), "html", null, true);
                    echo ">
                      <span class=\"visually-hidden\">
                          ";
                    // line 68
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current page"));
                    echo "
                      </span>";
                    // line 70
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 70, $this->source), "html", null, true);
                    // line 71
                    echo "</a>
              </li>
        ";
                } else {
                    // line 74
                    echo "            <li class=\"pager__item is-active\">
                ";
                    // line 75
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 76
                    echo "                <a class=\"pagination-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 76, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 76), 76, $this->source), "href", "title"), "html", null, true);
                    echo ">
                      <span class=\"visually-hidden\">
                          ";
                    // line 78
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
                    echo "
                      </span>";
                    // line 80
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 80, $this->source), "html", null, true);
                    // line 81
                    echo "</a>
            </li>
        ";
                }
                // line 84
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "      ";
            // line 87
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 87)) {
                // line 88
                echo "        <li class=\"pager__item pagination-ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 90
            echo "      ";
            // line 91
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 91)) {
                // line 92
                echo "        <li class=\"pager__item pager__item--next\">
          <a class=\"pagination-next\" href=\"";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 93), "href", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 93), "attributes", [], "any", false, false, true, 93), 93, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 95), "text", [], "any", true, true, true, 95)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 95), "text", [], "any", false, false, true, 95), 95, $this->source), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 99
            echo "      ";
            // line 100
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 100)) {
                // line 101
                echo "        <li class=\"pager__item pager__item--last\">
          <a class=\"pagination-next\" href=\"";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 102), "href", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 102), "attributes", [], "any", false, false, true, 102), 102, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 104), "text", [], "any", true, true, true, 104)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 104), "text", [], "any", false, false, true, 104), 104, $this->source), t("Last »"))) : (t("Last »"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 108
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/system/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 108,  236 => 104,  232 => 103,  224 => 102,  221 => 101,  218 => 100,  216 => 99,  209 => 95,  205 => 94,  197 => 93,  194 => 92,  191 => 91,  189 => 90,  185 => 88,  182 => 87,  180 => 86,  173 => 84,  168 => 81,  166 => 80,  162 => 78,  152 => 76,  150 => 75,  147 => 74,  142 => 71,  140 => 70,  136 => 68,  126 => 66,  124 => 65,  121 => 64,  118 => 63,  113 => 62,  110 => 60,  106 => 58,  103 => 57,  101 => 56,  94 => 52,  90 => 51,  82 => 50,  79 => 49,  76 => 48,  74 => 47,  67 => 43,  63 => 42,  55 => 41,  52 => 40,  49 => 39,  44 => 36,  41 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/system/pager.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\system\\pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "for" => 62, "set" => 65);
        static $filters = array("t" => 36, "escape" => 41, "without" => 41, "default" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'escape', 'without', 'default'],
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
