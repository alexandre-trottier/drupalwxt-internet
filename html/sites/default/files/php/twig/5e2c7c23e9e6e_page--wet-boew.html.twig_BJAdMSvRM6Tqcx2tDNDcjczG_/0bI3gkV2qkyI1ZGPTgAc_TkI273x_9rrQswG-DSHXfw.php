<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/wxt_bootstrap/templates/page/page--wet-boew.html.twig */
class __TwigTemplate_0b67ce446066b5e15b0864a8e77fe66164f4df40bc3c7c03f79116d34a02e97f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'highlighted' => [$this, 'block_highlighted'],
            'header' => [$this, 'block_header'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 59, "if" => 62, "block" => 63];
        $filters = ["clean_class" => 69, "escape" => 72, "t" => 82];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 60
        echo "
";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 63
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 116
        echo "
";
        // line 118
        $this->displayBlock('main', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 220
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 63
    public function block_navbar($context, array $blocks = [])
    {
        // line 64
        echo "
    ";
        // line 66
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 68
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 69
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (""))];
        // line 72
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      <div id=\"wb-bnr\">
        <div id=\"wb-bar\">
          <div class=\"container\">
            <div class=\"row\">
              <section id=\"wb-lng\" class=\"visible-md visible-lg\">
                <h2>Language selection</h2>
                ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "language_toggle", [])), "html", null, true);
        echo "
              </section>
              <section class=\"wb-mb-links col-xs-12 visible-sm visible-xs\" id=\"wb-glb-mn\">
                <h2>";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search and menus"));
        echo "</h2>
                <ul class=\"pnl-btn list-inline text-right\">
                <li>
                  <a href=\"#mb-pnl\" title=\"Search and menus\" aria-controls=\"mb-pnl\" class=\"overlay-lnk btn btn-sm btn-default\" role=\"button\">
                    <span class=\"glyphicon glyphicon-search\">
                      <span class=\"glyphicon glyphicon-th-list\">
                        <span class=\"wb-inv\">";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search and menus"));
        echo "</span>
                      </span>
                    </span>
                  </a>
                </li>
                </ul>
                <div id=\"mb-pnl\"></div>
              </section>
            </div>
          </div>
        </div>
        <div class=\"container\">
          <div class=\"row\">
            ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
        echo "
            ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>
      <nav role=\"navigation\" id=\"wb-sm\" class=\"wb-menu visible-md visible-lg\" data-trgt=\"mb-pnl\" data-trgt=\"mb-pnl\">
        <div class=\"pnl-strt ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " nvbar\">
          <h2 class=\"wb-inv\">";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Topics Menu"));
        echo "</h2>
          ";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        </div>
      </nav>
      ";
        // line 112
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
    </header>
  ";
    }

    // line 118
    public function block_main($context, array $blocks = [])
    {
        // line 119
        echo "
  <div class=\"";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"row\">

      ";
        // line 124
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 125
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 128
            echo "      ";
        }
        // line 129
        echo "
      ";
        // line 131
        echo "      ";
        // line 132
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 133
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-md-6 col-md-push-3") : ("")), 1 => ((($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-md-9 col-md-push-3") : ("")), 2 => ((($this->getAttribute(        // line 135
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-md-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 136
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-md-12") : (""))];
        // line 139
        echo "      <main role=\"main\" property=\"mainContentOfPage\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null), 1 => "main-container", 2 => ($context["container"] ?? null), 3 => "js-quickedit-main-content"], "method")), "html", null, true);
        echo ">

      ";
        // line 142
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 143
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 146
            echo "      ";
        }
        // line 147
        echo "
      <section>

        ";
        // line 151
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 152
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 158
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 159
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 162
            echo "        ";
        }
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 166
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 169
            echo "        ";
        }
        // line 170
        echo "
        ";
        // line 172
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 177
        echo "      </section>

      </main>

      ";
        // line 182
        echo "      ";
        // line 183
        $context["sidebar_first_classes"] = [0 => ((($this->getAttribute(        // line 184
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-md-3 col-md-pull-6") : ("")), 1 => ((($this->getAttribute(        // line 185
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-md-3 col-md-pull-9") : ("")), 2 => ((($this->getAttribute(        // line 186
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-md-3 col-md-pull-9") : (""))];
        // line 189
        echo "      ";
        // line 190
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 191
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 196
            echo "      ";
        }
        // line 197
        echo "
      ";
        // line 199
        echo "      ";
        // line 200
        $context["sidebar_second_classes"] = [0 => ((($this->getAttribute(        // line 201
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-md-3") : ("")), 1 => ((($this->getAttribute(        // line 202
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-md-3") : ("")), 2 => ((($this->getAttribute(        // line 203
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-md-3") : (""))];
        // line 206
        echo "      ";
        // line 207
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 208
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 213
            echo "      ";
        }
        // line 214
        echo "    </div>
  </div>

";
    }

    // line 125
    public function block_highlighted($context, array $blocks = [])
    {
        // line 126
        echo "          <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
        ";
    }

    // line 143
    public function block_header($context, array $blocks = [])
    {
        // line 144
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
        ";
    }

    // line 152
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 153
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 159
    public function block_action_links($context, array $blocks = [])
    {
        // line 160
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 166
    public function block_help($context, array $blocks = [])
    {
        // line 167
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 172
    public function block_content($context, array $blocks = [])
    {
        // line 173
        echo "          <a id=\"main-content\"></a>
          ";
        // line 174
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          ";
        // line 175
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_footer", [])), "html", null, true);
        echo "
        ";
    }

    // line 191
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 192
        echo "          <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["sidebar_first_classes"] ?? null)], "method")), "html", null, true);
        echo ">
            ";
        // line 193
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </nav>
        ";
    }

    // line 208
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 209
        echo "          <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["sidebar_first_classes"] ?? null)], "method"), "addClass", [0 => ($context["sidebar_second_classes"] ?? null)], "method")), "html", null, true);
        echo ">
            ";
        // line 210
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </nav>
        ";
    }

    // line 220
    public function block_footer($context, array $blocks = [])
    {
        // line 221
        echo "    <footer class=\"visible-sm visible-md visible-lg wb-navcurr\" id=\"wb-info\" role=\"contentinfo\">
      <div class=\"";
        // line 222
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 223
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/wxt_bootstrap/templates/page/page--wet-boew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 223,  423 => 222,  420 => 221,  417 => 220,  410 => 210,  405 => 209,  402 => 208,  395 => 193,  390 => 192,  387 => 191,  381 => 175,  377 => 174,  374 => 173,  371 => 172,  364 => 167,  361 => 166,  354 => 160,  351 => 159,  344 => 153,  341 => 152,  334 => 144,  331 => 143,  324 => 126,  321 => 125,  314 => 214,  311 => 213,  308 => 208,  305 => 207,  303 => 206,  301 => 203,  300 => 202,  299 => 201,  298 => 200,  296 => 199,  293 => 197,  290 => 196,  287 => 191,  284 => 190,  282 => 189,  280 => 186,  279 => 185,  278 => 184,  277 => 183,  275 => 182,  269 => 177,  266 => 172,  263 => 170,  260 => 169,  257 => 166,  254 => 165,  251 => 163,  248 => 162,  245 => 159,  242 => 158,  239 => 156,  236 => 155,  233 => 152,  230 => 151,  225 => 147,  222 => 146,  219 => 143,  216 => 142,  210 => 139,  208 => 136,  207 => 135,  206 => 134,  205 => 133,  204 => 132,  202 => 131,  199 => 129,  196 => 128,  193 => 125,  190 => 124,  184 => 120,  181 => 119,  178 => 118,  171 => 112,  165 => 109,  161 => 108,  157 => 107,  149 => 102,  145 => 101,  129 => 88,  120 => 82,  114 => 79,  103 => 72,  101 => 69,  100 => 68,  99 => 66,  96 => 64,  93 => 63,  87 => 220,  85 => 219,  82 => 218,  80 => 118,  77 => 116,  73 => 63,  71 => 62,  68 => 60,  66 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/wxt_bootstrap/templates/page/page--wet-boew.html.twig", "/var/www/html/themes/custom/wxt_bootstrap/templates/page/page--wet-boew.html.twig");
    }
}
