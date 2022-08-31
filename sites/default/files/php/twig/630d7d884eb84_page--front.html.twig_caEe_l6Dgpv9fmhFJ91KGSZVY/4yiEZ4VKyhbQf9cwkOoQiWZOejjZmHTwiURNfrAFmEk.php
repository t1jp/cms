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

/* themes/yg_business_plus/templates/page--front.html.twig */
class __TwigTemplate_9035ee1953ae968b323b9beb620b60e2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'slider' => [$this, 'block_slider'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<!-- Header --> 
";
        // line 60
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "fluid_container", [], "any", false, false, true, 60)) ? ("container-fluid") : (""));
        // line 61
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 61) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 61))) {
            // line 62
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 62)) {
                // line 63
                echo "    <header id=\"header\">
     <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <i class=\"fa fa-bars\"></i>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
           ";
                // line 72
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "
        </div>
      </div>  
      </nav>
    </header>
    ";
            }
            // line 77
            echo "  
  ";
        }
        // line 78
        echo "  
";
        // line 80
        $this->displayBlock('main', $context, $blocks);
        // line 137
        echo "<!-- Call to action section -->
  <section id=\"call-to-action\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-9 wow fadeInLeft\">
          <h3>";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buy_now_text"] ?? null), 142, $this->source), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"col-md-3 wow fadeInRight\">
          <a href=\"";
        // line 145
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_link"] ?? null), 145, $this->source), "html", null, true);
        echo "\" class=\"btn btn-infos\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_text"] ?? null), 145, $this->source), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </section>
<!-- End Call to action section -->

<!-- Footer Section -->
  ";
        // line 153
        $this->displayBlock('footer', $context, $blocks);
        // line 187
        echo "
";
    }

    // line 80
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "<div role=\"main\" class=\"js-quickedit-main-content\">
  <div class=\"\">
    ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 83)) {
            // line 84
            echo "      ";
            $this->displayBlock('slider', $context, $blocks);
            // line 87
            echo "    ";
        }
        // line 88
        echo "    ";
        // line 89
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 89)) {
            // line 90
            echo "      ";
            $this->displayBlock('header', $context, $blocks);
            // line 93
            echo "    ";
        }
        // line 94
        echo "    ";
        // line 95
        echo "    ";
        // line 96
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 97
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 97) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97))) ? ("") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 98
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 98) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 98)))) ? ("") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 99
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 99) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 99)))) ? ("") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 100
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 100)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 100)))) ? ("") : (""))];
        // line 103
        echo "    <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 103), 103, $this->source), "html", null, true);
        echo ">   
      ";
        // line 105
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 105)) {
            // line 106
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 109
            echo "      ";
        }
        // line 110
        echo "      ";
        // line 111
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 112
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 115
            echo "        ";
        }
        // line 116
        echo "      ";
        // line 117
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 118
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 121
            echo "        ";
        }
        // line 122
        echo "      ";
        // line 123
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 123)) {
            // line 124
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 127
            echo "        ";
        }
        // line 128
        echo "      ";
        // line 129
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "      </section>
   </div>
   </div>
";
    }

    // line 84
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "    
      ";
    }

    // line 90
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "        <div class=\"col-sm-12\" role=\"heading\"></div>
      ";
    }

    // line 106
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "          <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "</div>
        ";
    }

    // line 112
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 113, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 118
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 119, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 124
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 129
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "          <a id=\"main-content\"></a>
          ";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 153
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "<!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container wow fadeInUp\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-12 footer-columns\">
            ";
        // line 159
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
        echo "
            <p>";
        // line 160
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 160, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "  
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 166
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_service", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
        echo "
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_blog", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo "  
          </div>
          <div class=\"col-md-2 col-sm-12 footer-columns\">
            <h6>Connect With Us</h6>
            <div class=\"social\">
                <a href=\"";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 174, $this->source), "html", null, true);
        echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 175, $this->source), "html", null, true);
        echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>                
                <a href=\"";
        // line 176
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["google"] ?? null) - ($context["plus"] ?? null)), "html", null, true);
        echo "\" class=\"google-plus\"><i class=\"fa fa-google-plus\"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class=\"copyright text-center\">
          <p>&copy;2018. <a href=\"#\">YG Business Plus</a>. All Rights Reserved.<br></p>
          <p>Theme By <a href=\"";
        // line 184
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_url"] ?? null), 184, $this->source), "html", null, true);
        echo "\" target=\"_blank\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_name"] ?? null), 184, $this->source), "html", null, true);
        echo "</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/yg_business_plus/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 184,  346 => 176,  342 => 175,  338 => 174,  330 => 169,  324 => 166,  318 => 163,  312 => 160,  308 => 159,  301 => 154,  297 => 153,  291 => 131,  288 => 130,  284 => 129,  277 => 125,  273 => 124,  266 => 119,  262 => 118,  255 => 113,  251 => 112,  244 => 107,  240 => 106,  235 => 91,  231 => 90,  224 => 85,  220 => 84,  213 => 133,  210 => 129,  208 => 128,  205 => 127,  202 => 124,  199 => 123,  197 => 122,  194 => 121,  191 => 118,  188 => 117,  186 => 116,  183 => 115,  180 => 112,  177 => 111,  175 => 110,  172 => 109,  169 => 106,  166 => 105,  161 => 103,  159 => 100,  158 => 99,  157 => 98,  156 => 97,  155 => 96,  153 => 95,  151 => 94,  148 => 93,  145 => 90,  142 => 89,  140 => 88,  137 => 87,  134 => 84,  132 => 83,  128 => 81,  124 => 80,  119 => 187,  117 => 153,  104 => 145,  98 => 142,  91 => 137,  89 => 80,  86 => 78,  82 => 77,  73 => 72,  64 => 66,  59 => 63,  56 => 62,  53 => 61,  51 => 60,  48 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_business_plus/templates/page--front.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\yg_business_plus\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 60, "if" => 61, "block" => 80);
        static $filters = array("escape" => 66);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
