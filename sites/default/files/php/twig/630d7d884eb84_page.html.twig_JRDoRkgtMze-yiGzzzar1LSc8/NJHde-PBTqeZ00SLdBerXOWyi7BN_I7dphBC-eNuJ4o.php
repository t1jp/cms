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

/* themes/bulma/templates/system/page.html.twig */
class __TwigTemplate_5876e44f83cf9818c3b0c2000ec8b927 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'navbar_branding' => [$this, 'block_navbar_branding'],
            'navbar_social' => [$this, 'block_navbar_social'],
            'primary_menu' => [$this, 'block_primary_menu'],
            'header' => [$this, 'block_header'],
            'header_and_search' => [$this, 'block_header_and_search'],
            'tabs' => [$this, 'block_tabs'],
            'secondary_menu' => [$this, 'block_secondary_menu'],
            'tiles' => [$this, 'block_tiles'],
            'main' => [$this, 'block_main'],
            'main_content' => [$this, 'block_main_content'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'bottom' => [$this, 'block_bottom'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        $this->displayBlock('navbar', $context, $blocks);
        // line 91
        $this->displayBlock('header', $context, $blocks);
        // line 125
        $this->displayBlock('secondary_menu', $context, $blocks);
        // line 135
        $this->displayBlock('tiles', $context, $blocks);
        // line 186
        $this->displayBlock('main', $context, $blocks);
        // line 257
        $this->displayBlock('bottom', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 56
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 57) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_social", [], "any", false, false, true, 57)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 57))) {
            // line 59
            echo "<nav class=\"navbar has-shadow\">
  <div class=\"container\">
    <div class=\"navbar-brand\">
      ";
            // line 62
            $this->displayBlock('navbar_branding', $context, $blocks);
            // line 67
            echo "      <div id=\"js-navbar-burger\" class=\"navbar-burger burger\" data-target=\"navbar-menu\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id=\"js-navbar-menu\" class=\"navbar-menu\">
      ";
            // line 74
            $this->displayBlock('navbar_social', $context, $blocks);
            // line 81
            echo "      ";
            $this->displayBlock('primary_menu', $context, $blocks);
            // line 86
            echo "    </div>
  </div>
</nav>
";
        }
    }

    // line 62
    public function block_navbar_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 63)) {
            // line 64
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 66
        echo "      ";
    }

    // line 74
    public function block_navbar_social($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_social", [], "any", false, false, true, 75)) {
            // line 76
            echo "      <div class=\"navbar-start\">
      ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_social", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 80
        echo "      ";
    }

    // line 81
    public function block_primary_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 82)) {
            // line 83
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 85
        echo "      ";
    }

    // line 91
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "<section class=\"hero is-primary\">
  ";
        // line 93
        $this->displayBlock('header_and_search', $context, $blocks);
        // line 113
        echo "  ";
        $this->displayBlock('tabs', $context, $blocks);
        // line 123
        echo "</section>
";
    }

    // line 93
    public function block_header_and_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 94) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 94))) {
            // line 95
            echo "  ";
            // line 96
            echo "  <div class=\"hero-body is-primary\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
          ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
          ";
            // line 101
            if ((($context["is_front"] ?? null) && ($context["site_slogan"] ?? null))) {
                // line 102
                echo "            <h1 class=\"title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 102, $this->source), "html", null, true);
                echo "</h1>
          ";
            }
            // line 104
            echo "        </div>
        <div class=\"column is-narrow\">
          ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 112
        echo "  ";
    }

    // line 113
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "  ";
        // line 115
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_tabs", [], "any", false, false, true, 115)) {
            // line 116
            echo "    <div class=\"hero-footer\">
      <div class=\"container\">
        ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_tabs", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 122
        echo "  ";
    }

    // line 125
    public function block_secondary_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 127)) {
            // line 128
            echo "<nav class=\"nav has-shadow\">
  <div class=\"container\">
    ";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
  </div>
</nav>
";
        }
    }

    // line 135
    public function block_tiles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_one", [], "any", false, false, true, 137)) {
            // line 138
            echo "<div class=\"blocks tiles\">
  <div class=\"container\">
    <div class=\"tile is-ancestor\">
      <div class=\"tile is-vertical is-8\">
        <div class=\"tile\">
          ";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_one", [], "any", false, false, true, 143) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_two", [], "any", false, false, true, 143))) {
                // line 144
                echo "            <div class=\"tile is-parent is-vertical\">
              <div class=\"tile is-child notification is-primary\">
                ";
                // line 146
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_one", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
                echo "
              </div>
              <div class=\"tile is-child notification is-warning\">
                ";
                // line 149
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_two", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 153
            echo "
          ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_three", [], "any", false, false, true, 154)) {
                // line 155
                echo "            <div class=\"tile is-parent\">
              <div class=\"tile is-child notification is-info\">
                ";
                // line 157
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_three", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 161
            echo "
        </div>

        ";
            // line 164
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_four", [], "any", false, false, true, 164)) {
                // line 165
                echo "          <div class=\"tile is-parent\">
            <div class=\"tile is-child notification is-danger\">
              ";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_four", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 171
            echo "
      </div>

      ";
            // line 174
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_five", [], "any", false, false, true, 174)) {
                // line 175
                echo "        <div class=\"tile is-parent\">
          <div class=\"tile is-child notification is-success\">
            ";
                // line 177
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tile_five", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 181
            echo "    </div>
  </div>
</div>
";
        }
    }

    // line 186
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "<section class=\"section\">
  <main role=\"main\" class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 191
        echo "
    ";
        // line 192
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
        echo "
    ";
        // line 193
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
        echo "

    <div class=\"columns is-centered\">
      ";
        // line 196
        $this->displayBlock('main_content', $context, $blocks);
        // line 213
        echo "      ";
        $this->displayBlock('sidebar_first', $context, $blocks);
        // line 233
        echo "      ";
        $this->displayBlock('sidebar_second', $context, $blocks);
        // line 252
        echo "    </div>

  </main>
</section>
";
    }

    // line 196
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "      ";
        // line 198
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_attributes", [], "any", false, false, true, 198)) {
            // line 199
            echo "      ";
            // line 200
            $context["page"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 200, $this->source), ["content_attributes" => twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [0 => [0 => "main-content", 1 => "column"]], "method", false, false, true, 201)]);
            // line 207
            echo "      ";
        }
        // line 208
        echo "      ";
        // line 209
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_attributes", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
        echo ">
        ";
        // line 210
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
        echo "
      </div>
      ";
    }

    // line 213
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "      ";
        // line 215
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 215)) {
            // line 216
            echo "      ";
            // line 217
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first_attributes", [], "any", false, false, true, 217)) {
                // line 218
                echo "        ";
                // line 219
                $context["page"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 219, $this->source), ["sidebar_first_attributes" => twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [0 => [0 => "sidebar-first", 1 => "column", 2 => "is-2"]], "method", false, false, true, 220)]);
                // line 227
                echo "        ";
            }
            // line 228
            echo "        <aside";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first_attributes", [], "any", false, false, true, 228), 228, $this->source), "role"), "html", null, true);
            echo " role=\"complementary\">
          ";
            // line 229
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 232
        echo "      ";
    }

    // line 233
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "      ";
        // line 235
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 235)) {
            // line 236
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second_attributes", [], "any", false, false, true, 236)) {
                // line 237
                echo "        ";
                // line 238
                $context["page"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 238, $this->source), ["sidebar_second_attributes" => twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [0 => [0 => "sidebar-second", 1 => "column", 2 => "is-2"]], "method", false, false, true, 239)]);
                // line 246
                echo "        ";
            }
            // line 247
            echo "        <aside";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second_attributes", [], "any", false, false, true, 247), 247, $this->source), "role"), "html", null, true);
            echo " role=\"complementary\">
          ";
            // line 248
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 251
        echo "      ";
    }

    // line 257
    public function block_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 259
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 259)) {
            // line 260
            echo "<section class=\"hero is-info\">
  <div class=\"container\">
    ";
            // line 262
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 262), 262, $this->source), "html", null, true);
            echo "
  </div>
</section>
";
        }
    }

    // line 268
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 269
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 269)) {
            // line 270
            echo "  <footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
      ";
            // line 272
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
            echo "
    </div>
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/system/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  524 => 272,  520 => 270,  518 => 269,  514 => 268,  505 => 262,  501 => 260,  499 => 259,  495 => 257,  491 => 251,  485 => 248,  480 => 247,  477 => 246,  475 => 238,  473 => 237,  470 => 236,  467 => 235,  465 => 234,  461 => 233,  457 => 232,  451 => 229,  446 => 228,  443 => 227,  441 => 219,  439 => 218,  436 => 217,  434 => 216,  431 => 215,  429 => 214,  425 => 213,  418 => 210,  413 => 209,  411 => 208,  408 => 207,  406 => 200,  404 => 199,  401 => 198,  399 => 197,  395 => 196,  387 => 252,  384 => 233,  381 => 213,  379 => 196,  373 => 193,  369 => 192,  366 => 191,  362 => 188,  358 => 186,  350 => 181,  343 => 177,  339 => 175,  337 => 174,  332 => 171,  325 => 167,  321 => 165,  319 => 164,  314 => 161,  307 => 157,  303 => 155,  301 => 154,  298 => 153,  291 => 149,  285 => 146,  281 => 144,  279 => 143,  272 => 138,  270 => 137,  266 => 135,  257 => 130,  253 => 128,  251 => 127,  247 => 125,  243 => 122,  236 => 118,  232 => 116,  229 => 115,  227 => 114,  223 => 113,  219 => 112,  210 => 106,  206 => 104,  200 => 102,  198 => 101,  194 => 100,  188 => 96,  186 => 95,  183 => 94,  179 => 93,  174 => 123,  171 => 113,  169 => 93,  166 => 92,  162 => 91,  158 => 85,  152 => 83,  149 => 82,  145 => 81,  141 => 80,  135 => 77,  132 => 76,  129 => 75,  125 => 74,  121 => 66,  115 => 64,  112 => 63,  108 => 62,  100 => 86,  97 => 81,  95 => 74,  86 => 67,  84 => 62,  79 => 59,  77 => 57,  73 => 56,  69 => 268,  66 => 267,  64 => 257,  62 => 186,  60 => 135,  58 => 125,  56 => 91,  54 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bulma/templates/system/page.html.twig", "C:\\xampp\\htdocs\\cms\\themes\\bulma\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 56, "if" => 57, "set" => 200);
        static $filters = array("escape" => 64, "merge" => 200, "without" => 228);
        static $functions = array("create_attribute" => 201);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set'],
                ['escape', 'merge', 'without'],
                ['create_attribute']
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
