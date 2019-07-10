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

/* @AdminLTE/layout/default-layout.html.twig */
class __TwigTemplate_9fb4fb4831ab58cba304366f23f9404a0006e2c7a9003c768334e73392c432c4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html_start' => [$this, 'block_html_start'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body_start' => [$this, 'block_body_start'],
            'after_body_start' => [$this, 'block_after_body_start'],
            'logo_path' => [$this, 'block_logo_path'],
            'logo_mini' => [$this, 'block_logo_mini'],
            'logo_large' => [$this, 'block_logo_large'],
            'navbar_toggle' => [$this, 'block_navbar_toggle'],
            'navbar_start' => [$this, 'block_navbar_start'],
            'navbar_messages' => [$this, 'block_navbar_messages'],
            'navbar_notifications' => [$this, 'block_navbar_notifications'],
            'navbar_tasks' => [$this, 'block_navbar_tasks'],
            'navbar_user' => [$this, 'block_navbar_user'],
            'navbar_end' => [$this, 'block_navbar_end'],
            'navbar_control_sidebar_toggle' => [$this, 'block_navbar_control_sidebar_toggle'],
            'sidebar_user' => [$this, 'block_sidebar_user'],
            'sidebar_search' => [$this, 'block_sidebar_search'],
            'sidebar_nav' => [$this, 'block_sidebar_nav'],
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_content_before' => [$this, 'block_page_content_before'],
            'page_content_class' => [$this, 'block_page_content_class'],
            'page_content_start' => [$this, 'block_page_content_start'],
            'page_content' => [$this, 'block_page_content'],
            'page_content_end' => [$this, 'block_page_content_end'],
            'page_content_after' => [$this, 'block_page_content_after'],
            'footer' => [$this, 'block_footer'],
            'control_sidebar' => [$this, 'block_control_sidebar'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<!DOCTYPE html";
        $this->displayBlock('html_start', $context, $blocks);
        echo ">
<html lang=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
<head>
    ";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "</head>
";
        // line 29
        echo "<body";
        $this->displayBlock('body_start', $context, $blocks);
        echo " class=\"";
        echo twig_escape_filter($this->env, $this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->bodyClass(((twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "skin", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "skin", [], "any", false, false, false, 29), "")) : (""))), "html", null, true);
        echo "\">
";
        // line 30
        $this->displayBlock('after_body_start', $context, $blocks);
        // line 31
        echo "<div class=\"wrapper\">

    <header class=\"main-header\">
        <a href=\"";
        // line 34
        $this->displayBlock('logo_path', $context, $blocks);
        echo "\" class=\"logo\">
            <span class=\"logo-mini\">
                ";
        // line 36
        $this->displayBlock('logo_mini', $context, $blocks);
        // line 37
        echo "            </span>
            <span class=\"logo-lg\">
               ";
        // line 39
        $this->displayBlock('logo_large', $context, $blocks);
        // line 40
        echo "            </span>
        </a>

        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            ";
        // line 44
        $this->displayBlock('navbar_toggle', $context, $blocks);
        // line 49
        echo "            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    ";
        // line 51
        $this->displayBlock('navbar_start', $context, $blocks);
        // line 52
        echo "                    ";
        $this->displayBlock('navbar_messages', $context, $blocks);
        // line 55
        echo "                    ";
        $this->displayBlock('navbar_notifications', $context, $blocks);
        // line 58
        echo "                    ";
        $this->displayBlock('navbar_tasks', $context, $blocks);
        // line 61
        echo "                    ";
        $this->displayBlock('navbar_user', $context, $blocks);
        // line 64
        echo "                    ";
        $this->displayBlock('navbar_end', $context, $blocks);
        // line 65
        echo "                    ";
        $this->displayBlock('navbar_control_sidebar_toggle', $context, $blocks);
        // line 72
        echo "                </ul>
            </div>
        </nav>
    </header>

    <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
            ";
        // line 79
        $this->displayBlock('sidebar_user', $context, $blocks);
        // line 84
        echo "
            ";
        // line 85
        $this->displayBlock('sidebar_search', $context, $blocks);
        // line 88
        echo "
            ";
        // line 89
        $this->displayBlock('sidebar_nav', $context, $blocks);
        // line 96
        echo "        </section>
    </aside>

    <div class=\"content-wrapper\">
        <section class=\"content-header\">
            <h1>
                ";
        // line 102
        $this->displayBlock('page_title', $context, $blocks);
        // line 103
        echo "                <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
            </h1>

            ";
        // line 106
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 113
        echo "        </section>

        ";
        // line 115
        $this->displayBlock('page_content_before', $context, $blocks);
        // line 116
        echo "
        <section class=\"";
        // line 117
        $this->displayBlock('page_content_class', $context, $blocks);
        echo "\">
            ";
        // line 118
        $this->displayBlock('page_content_start', $context, $blocks);
        // line 119
        echo "            ";
        $this->displayBlock('page_content', $context, $blocks);
        // line 120
        echo "            ";
        $this->displayBlock('page_content_end', $context, $blocks);
        // line 121
        echo "        </section>

        ";
        // line 123
        $this->displayBlock('page_content_after', $context, $blocks);
        // line 124
        echo "    </div>

    ";
        // line 126
        $this->displayBlock('footer', $context, $blocks);
        // line 129
        echo "    ";
        $this->displayBlock('control_sidebar', $context, $blocks);
        // line 134
        echo "
</div>

";
        // line 137
        $this->displayBlock('javascripts', $context, $blocks);
        // line 140
        echo "
</body>
</html>
";
    }

    // line 9
    public function block_html_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("page_title", $context, $blocks);
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/adminlte/adminlte.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 29
    public function block_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 30
    public function block_after_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 34
    public function block_logo_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_welcome"));
    }

    // line 36
    public function block_logo_mini($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<b>A</b>LT";
    }

    // line 39
    public function block_logo_large($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " <b>Admin</b>LTE ";
    }

    // line 44
    public function block_navbar_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle navigation", [], "AdminLTEBundle"), "html", null, true);
        echo "</span>
            </a>
            ";
    }

    // line 51
    public function block_navbar_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_navbar_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AdminLTEBundle:Navbar:messages"));
        echo "
                    ";
    }

    // line 55
    public function block_navbar_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AdminLTEBundle:Navbar:notifications"));
        echo "
                    ";
    }

    // line 58
    public function block_navbar_tasks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AdminLTEBundle:Navbar:tasks"));
        echo "
                    ";
    }

    // line 61
    public function block_navbar_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AdminLTEBundle:Navbar:user"));
        echo "
                    ";
    }

    // line 64
    public function block_navbar_end($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 65
    public function block_navbar_control_sidebar_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", true, true, false, 66) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", false, false, false, 66)))) {
            // line 67
            echo "                        <li>
                            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fas fa-cogs\"></i></a>
                        </li>
                        ";
        }
        // line 71
        echo "                    ";
    }

    // line 79
    public function block_sidebar_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                ";
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 80)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 81
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AdminLTEBundle:Sidebar:userPanel"));
            echo "
                ";
        }
        // line 83
        echo "            ";
    }

    // line 85
    public function block_sidebar_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AdminLTEBundle:Sidebar:searchForm"));
        echo "
            ";
    }

    // line 89
    public function block_sidebar_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "knp_menu", [], "any", false, false, false, 90), "enable", [], "any", false, false, false, 90)) {
            // line 91
            echo "                    ";
            $this->loadTemplate("@AdminLTE/Sidebar/knp-menu.html.twig", "@AdminLTE/layout/default-layout.html.twig", 91)->display($context);
            // line 92
            echo "                ";
        } else {
            // line 93
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AdminLTEBundle:Sidebar:menu", ["request" => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 93)]));
            echo "
                ";
        }
        // line 95
        echo "            ";
    }

    // line 102
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin LTE", [], "AdminLTEBundle"), "html", null, true);
    }

    // line 103
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A short subtitle for your page", [], "AdminLTEBundle"), "html", null, true);
    }

    // line 106
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "knp_menu", [], "any", false, false, false, 107), "enable", [], "any", false, false, false, 107)) {
            // line 108
            echo "                    ";
            $this->loadTemplate("@AdminLTE/Breadcrumb/knp-breadcrumb.html.twig", "@AdminLTE/layout/default-layout.html.twig", 108)->display($context);
            // line 109
            echo "                ";
        } else {
            // line 110
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AdminLTEBundle:Breadcrumb:breadcrumb", ["request" => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 110)]));
            echo "
                ";
        }
        // line 112
        echo "            ";
    }

    // line 115
    public function block_page_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 117
    public function block_page_content_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "content";
    }

    // line 118
    public function block_page_content_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@AdminLTE/Partials/_flash_messages.html.twig");
    }

    // line 119
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 120
    public function block_page_content_end($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 123
    public function block_page_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 126
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "        ";
        $this->loadTemplate("@AdminLTE/Partials/_footer.html.twig", "@AdminLTE/layout/default-layout.html.twig", 127)->display($context);
        // line 128
        echo "    ";
    }

    // line 129
    public function block_control_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", false, false, false, 130)) {
            // line 131
            echo "            ";
            $this->loadTemplate("@AdminLTE/Partials/_control-sidebar.html.twig", "@AdminLTE/layout/default-layout.html.twig", 131)->display($context);
            // line 132
            echo "        ";
        }
        // line 133
        echo "    ";
    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/adminlte/adminlte.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/default-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 138,  549 => 137,  545 => 133,  542 => 132,  539 => 131,  536 => 130,  532 => 129,  528 => 128,  525 => 127,  521 => 126,  515 => 123,  509 => 120,  503 => 119,  496 => 118,  489 => 117,  483 => 115,  479 => 112,  473 => 110,  470 => 109,  467 => 108,  464 => 107,  460 => 106,  453 => 103,  446 => 102,  442 => 95,  436 => 93,  433 => 92,  430 => 91,  427 => 90,  423 => 89,  416 => 86,  412 => 85,  408 => 83,  402 => 81,  399 => 80,  395 => 79,  391 => 71,  385 => 67,  382 => 66,  378 => 65,  372 => 64,  365 => 62,  361 => 61,  354 => 59,  350 => 58,  343 => 56,  339 => 55,  332 => 53,  328 => 52,  322 => 51,  315 => 46,  312 => 45,  308 => 44,  301 => 39,  294 => 36,  287 => 34,  281 => 30,  275 => 29,  268 => 19,  264 => 18,  257 => 17,  250 => 13,  246 => 12,  240 => 9,  233 => 140,  231 => 137,  226 => 134,  223 => 129,  221 => 126,  217 => 124,  215 => 123,  211 => 121,  208 => 120,  205 => 119,  203 => 118,  199 => 117,  196 => 116,  194 => 115,  190 => 113,  188 => 106,  181 => 103,  179 => 102,  171 => 96,  169 => 89,  166 => 88,  164 => 85,  161 => 84,  159 => 79,  150 => 72,  147 => 65,  144 => 64,  141 => 61,  138 => 58,  135 => 55,  132 => 52,  130 => 51,  126 => 49,  124 => 44,  118 => 40,  116 => 39,  112 => 37,  110 => 36,  105 => 34,  100 => 31,  98 => 30,  91 => 29,  88 => 21,  86 => 18,  81 => 17,  79 => 12,  74 => 10,  69 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/default-layout.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/default-layout.html.twig");
    }
}
