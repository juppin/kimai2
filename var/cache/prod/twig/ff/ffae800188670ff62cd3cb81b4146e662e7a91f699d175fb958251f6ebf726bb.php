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

/* base.html.twig */
class __TwigTemplate_4a30e34070ca7bb8747f76167809cb269df77c17880af3cd07480778f2e650fb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_start' => [$this, 'block_body_start'],
            'after_body_start' => [$this, 'block_after_body_start'],
            'page_content_before' => [$this, 'block_page_content_before'],
            'main_before' => [$this, 'block_main_before'],
            'page_content_after' => [$this, 'block_page_content_after'],
            'main_after' => [$this, 'block_main_after'],
            'page_content' => [$this, 'block_page_content'],
            'main' => [$this, 'block_main'],
            'title' => [$this, 'block_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'logo_mini' => [$this, 'block_logo_mini'],
            'logo_large' => [$this, 'block_logo_large'],
            'footer' => [$this, 'block_footer'],
            'navbar_start' => [$this, 'block_navbar_start'],
            'navbar_extensions' => [$this, 'block_navbar_extensions'],
            'sidebar_user' => [$this, 'block_sidebar_user'],
            'sidebar_search' => [$this, 'block_sidebar_search'],
            'navbar_user' => [$this, 'block_navbar_user'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_actions' => [$this, 'block_page_actions'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@AdminLTE/layout/default-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/layout/default-layout.html.twig", "base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    data-title=\"";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TitleExtension']->generateTitle(), "html", null, true);
        echo "\"
";
    }

    // line 7
    public function block_after_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate("base.html.twig", "base.html.twig", 8, "1712295852")->display($context);
    }

    // line 16
    public function block_page_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent(twig_constant("App\\Event\\ThemeEvent::CONTENT_BEFORE"));
        // line 18
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "content", [], "any", false, false, false, 18);
        echo "
    <div class=\"toolbar-pad no-print\">
        ";
        // line 20
        $this->displayBlock('main_before', $context, $blocks);
        // line 21
        echo "    </div>
";
    }

    // line 20
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_page_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayBlock('main_after', $context, $blocks);
        // line 26
        echo "    ";
        $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent(twig_constant("App\\Event\\ThemeEvent::CONTENT_AFTER"));
        // line 27
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "content", [], "any", false, false, false, 27);
        echo "
";
    }

    // line 25
    public function block_main_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 30
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent(twig_constant("App\\Event\\ThemeEvent::CONTENT_START"));
        // line 32
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "content", [], "any", false, false, false, 32);
        echo "
    ";
        // line 33
        $this->displayBlock('main', $context, $blocks);
        // line 34
        echo "    ";
        $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent(twig_constant("App\\Event\\ThemeEvent::CONTENT_END"));
        // line 35
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "content", [], "any", false, false, false, 35);
        echo "
";
    }

    // line 33
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 38
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TitleExtension']->generateTitle(), "html", null, true);
    }

    // line 42
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 44
    public function block_logo_mini($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "branding", [], "any", false, false, false, 45), "mini", [], "any", false, false, false, 45))) {
            // line 46
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "branding", [], "any", false, false, false, 46), "mini", [], "any", false, false, false, 46);
            echo "
    ";
        } else {
            // line 48
            echo "        <b>K</b>TT
    ";
        }
    }

    // line 52
    public function block_logo_large($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "branding", [], "any", false, false, false, 53), "company", [], "any", false, false, false, 53))) {
            // line 54
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "branding", [], "any", false, false, false, 54), "company", [], "any", false, false, false, 54);
            echo "
    ";
        } else {
            // line 56
            echo "        <b>Kimai</b> - Time Tracking
    ";
        }
    }

    // line 60
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
    }

    // line 64
    public function block_navbar_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 66
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_own_timesheet")) {
                // line 67
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 67), "preferenceValue", [0 => "login.initial_view"], "method", false, false, false, 67) == "calendar")) {
                    // line 68
                    echo "                <li class=\"visible-xs-inline-block\">
                    <a href=\"";
                    // line 69
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar");
                    echo "\" class=\"ddt-large\">
                        <i class=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("calendar"), "html", null, true);
                    echo " fa-2x\"></i>
                    </a>
                </li>
            ";
                } else {
                    // line 74
                    echo "                <li class=\"visible-xs-inline-block\">
                    <a href=\"";
                    // line 75
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet");
                    echo "\" class=\"ddt-large\">
                        <i class=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("timesheet"), "html", null, true);
                    echo " fa-2x\"></i>
                    </a>
                </li>
            ";
                }
                // line 80
                echo "        ";
            }
            // line 81
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_invoice")) {
                // line 82
                echo "            <li class=\"visible-xs-inline-block\">
                <a href=\"";
                // line 83
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice");
                echo "\" class=\"ddt-large\">
                    <i class=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("invoice"), "html", null, true);
                echo " fa-2x\"></i>
                </a>
            </li>
        ";
            }
            // line 88
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_export")) {
                // line 89
                echo "            <li class=\"visible-xs-inline-block\">
                <a href=\"";
                // line 90
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export");
                echo "\" class=\"ddt-large\">
                    <i class=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("export"), "html", null, true);
                echo " fa-2x\"></i>
                </a>
            </li>
        ";
            }
            // line 95
            echo "        ";
            $this->displayBlock('navbar_extensions', $context, $blocks);
            // line 96
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\TimesheetController::activeEntriesAction"));
            echo "
    ";
        }
    }

    // line 95
    public function block_navbar_extensions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 110
    public function block_sidebar_user($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 111
    public function block_sidebar_search($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 113
    public function block_navbar_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 114)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 115
            echo "        ";
            $this->loadTemplate("navbar/recent-activities.html.twig", "base.html.twig", 115)->display($context);
            // line 116
            echo "    ";
        }
        // line 117
        echo "    ";
        $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "base.html.twig", 117)->unwrap();
        // line 118
        echo "    <li class=\"dropdown user-menu\">
        <a href=\"#\" class=\"dropdown-toggle ddt-large\" data-toggle=\"dropdown\">
            <i class=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("avatar"), "html", null, true);
        echo " fa-2x\"></i>
        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 123
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 123))) {
            // line 124
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view", twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 124))) {
                // line 125
                echo "                <li>
                    <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 126), "username", [], "any", false, false, false, 126)]), "html", null, true);
                echo "\">
                        <h4 class=\"control-sidebar-subheading\">
                            <i class=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("profile-stats"), "html", null, true);
                echo "\"></i>
                            ";
                // line 129
                echo twig_call_macro($macros["widgets"], "macro_username", [twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 129)], 129, $context, $this->getSourceContext());
                echo "
                        </h4>
                    </a>
                </li>
                ";
            }
            // line 134
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 134))) {
                // line 135
                echo "                <li>
                    <a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_edit", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 136), "username", [], "any", false, false, false, 136)]), "html", null, true);
                echo "\">
                        <h4 class=\"control-sidebar-subheading\">
                            <i class=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("profile"), "html", null, true);
                echo "\"></i>
                            ";
                // line 139
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.title"), "html", null, true);
                echo "
                        </h4>
                    </a>
                </li>
                ";
            }
            // line 144
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("preferences", twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 144))) {
                // line 145
                echo "                <li>
                    <a href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_preferences", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 146), "username", [], "any", false, false, false, 146)]), "html", null, true);
                echo "\">
                        <h4 class=\"control-sidebar-subheading\">
                            <i class=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("settings"), "html", null, true);
                echo "\"></i>
                            ";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.preferences"), "html", null, true);
                echo "
                        </h4>
                    </a>
                </li>
                ";
            }
            // line 154
            echo "                <li>
                    <a href=\"";
            // line 155
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">
                        <h4 class=\"control-sidebar-subheading\">
                            <i class=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("logout"), "html", null, true);
            echo "\"></i>
                            ";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.logout"), "html", null, true);
            echo "
                        </h4>
                    </a>
                </li>
            ";
        }
        // line 163
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "show_about", [], "any", false, false, false, 163)) {
            // line 164
            echo "            <li class=\"divider\"></li>
            <li>
                <a href=\"";
            // line 166
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            echo "\">
                    <h4 class=\"control-sidebar-subheading\">
                        <i class=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("about"), "html", null, true);
            echo "\"></i>
                        ";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.title", [], "about"), "html", null, true);
            echo "
                    </h4>
                </a>
            </li>
            ";
        }
        // line 174
        echo "        </ul>
    </li>
";
    }

    // line 178
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "    ";
        $this->displayBlock('page_actions', $context, $blocks);
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 182
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "    ";
        // line 184
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        // line 185
        $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent(twig_constant("App\\Event\\ThemeEvent::STYLESHEET"));
        // line 186
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "content", [], "any", false, false, false, 186);
        echo "
";
    }

    // line 189
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 191
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        // line 192
        $this->loadTemplate("partials/head.html.twig", "base.html.twig", 192)->display($context);
        // line 193
        echo "    ";
        $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent(twig_constant("App\\Event\\ThemeEvent::HTML_HEAD"));
        // line 194
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "content", [], "any", false, false, false, 194);
        echo "
";
    }

    // line 197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "    ";
        // line 199
        echo "    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', function() {
            var loader = new KimaiWebLoader(
                {
                    locale: '";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 203), "locale", [], "any", false, false, false, 203), "html", null, true);
        echo "',
                    twentyFourHours: ";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->hour24("true", "false"), "html", null, true);
        echo "
                },
                {
                    'confirm': '";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm"), "html", null, true);
        echo "',
                    'cancel': '";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel"), "html", null, true);
        echo "',
                    'today': '";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("daterangepicker.today", [], "daterangepicker"), "html", null, true);
        echo "',
                    'yesterday': '";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("daterangepicker.yesterday", [], "daterangepicker"), "html", null, true);
        echo "',
                    'lastWeek': '";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("daterangepicker.lastWeek", [], "daterangepicker"), "html", null, true);
        echo "',
                    'thisWeek': '";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("daterangepicker.thisWeek", [], "daterangepicker"), "html", null, true);
        echo "',
                    'lastMonth': '";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("daterangepicker.lastMonth", [], "daterangepicker"), "html", null, true);
        echo "',
                    'thisMonth': '";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("daterangepicker.thisMonth", [], "daterangepicker"), "html", null, true);
        echo "',
                    'lastYear': '";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("daterangepicker.lastYear", [], "daterangepicker"), "html", null, true);
        echo "',
                    'thisYear': '";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("daterangepicker.thisYear", [], "daterangepicker"), "html", null, true);
        echo "',
                    'customRange': '";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("daterangepicker.customRange", [], "daterangepicker"), "html", null, true);
        echo "',
                    'timesheet.start.success': '";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.start.success", [], "flashmessages"), "html", null, true);
        echo "',
                    'timesheet.start.error': '";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.start.error", [], "flashmessages"), "html", null, true);
        echo "',
                    'timesheet.start.exceeded_limit': '";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.start.exceeded_limit", [], "flashmessages"), "html", null, true);
        echo "',
                    'timesheet.stop.success': '";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.stop.success", [], "flashmessages"), "html", null, true);
        echo "',
                    'timesheet.stop.error': '";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.stop.error", [], "flashmessages"), "html", null, true);
        echo "',
                    'action.update.success': '";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.update.success", [], "flashmessages"), "html", null, true);
        echo "',
                    'action.update.error': '";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.update.error", [], "flashmessages"), "html", null, true);
        echo "',
                    'action.delete.success': '";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete.success", [], "flashmessages"), "html", null, true);
        echo "',
                    'action.delete.error': '";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete.error", [], "flashmessages"), "html", null, true);
        echo "',
                    'confirm.delete': '";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.delete"), "html", null, true);
        echo "',
                    'delete': '";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
        echo "'
                }
            );
            window.kimai = loader.getKimai();
        });
    </script>
    ";
        // line 234
        $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent(twig_constant("App\\Event\\ThemeEvent::JAVASCRIPT"));
        // line 235
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "content", [], "any", false, false, false, 235);
        echo "
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  660 => 235,  658 => 234,  649 => 228,  645 => 227,  641 => 226,  637 => 225,  633 => 224,  629 => 223,  625 => 222,  621 => 221,  617 => 220,  613 => 219,  609 => 218,  605 => 217,  601 => 216,  597 => 215,  593 => 214,  589 => 213,  585 => 212,  581 => 211,  577 => 210,  573 => 209,  569 => 208,  565 => 207,  559 => 204,  555 => 203,  549 => 199,  547 => 198,  543 => 197,  536 => 194,  533 => 193,  531 => 192,  527 => 191,  522 => 190,  518 => 189,  511 => 186,  509 => 185,  504 => 184,  502 => 183,  498 => 182,  488 => 179,  484 => 178,  478 => 174,  470 => 169,  466 => 168,  461 => 166,  457 => 164,  454 => 163,  446 => 158,  442 => 157,  437 => 155,  434 => 154,  426 => 149,  422 => 148,  417 => 146,  414 => 145,  411 => 144,  403 => 139,  399 => 138,  394 => 136,  391 => 135,  388 => 134,  380 => 129,  376 => 128,  371 => 126,  368 => 125,  365 => 124,  363 => 123,  357 => 120,  353 => 118,  350 => 117,  347 => 116,  344 => 115,  341 => 114,  337 => 113,  331 => 111,  325 => 110,  319 => 95,  311 => 96,  308 => 95,  301 => 91,  297 => 90,  294 => 89,  291 => 88,  284 => 84,  280 => 83,  277 => 82,  274 => 81,  271 => 80,  264 => 76,  260 => 75,  257 => 74,  250 => 70,  246 => 69,  243 => 68,  240 => 67,  237 => 66,  234 => 65,  230 => 64,  223 => 61,  219 => 60,  213 => 56,  207 => 54,  204 => 53,  200 => 52,  194 => 48,  188 => 46,  185 => 45,  181 => 44,  175 => 42,  171 => 39,  167 => 38,  161 => 33,  154 => 35,  151 => 34,  149 => 33,  144 => 32,  141 => 31,  137 => 30,  131 => 25,  124 => 27,  121 => 26,  118 => 25,  114 => 24,  108 => 20,  103 => 21,  101 => 20,  95 => 18,  92 => 17,  88 => 16,  83 => 8,  79 => 7,  72 => 4,  68 => 3,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/kimai2/templates/base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_4a30e34070ca7bb8747f76167809cb269df77c17880af3cd07480778f2e650fb___1712295852 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'modal_id' => [$this, 'block_modal_id'],
            'modal_title' => [$this, 'block_modal_title'],
            'modal_body' => [$this, 'block_modal_body'],
            'modal_footer' => [$this, 'block_modal_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "embeds/modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("embeds/modal.html.twig", "base.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_modal_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "remote_form_modal";
    }

    // line 10
    public function block_modal_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  741 => 12,  735 => 11,  729 => 10,  722 => 9,  711 => 8,  660 => 235,  658 => 234,  649 => 228,  645 => 227,  641 => 226,  637 => 225,  633 => 224,  629 => 223,  625 => 222,  621 => 221,  617 => 220,  613 => 219,  609 => 218,  605 => 217,  601 => 216,  597 => 215,  593 => 214,  589 => 213,  585 => 212,  581 => 211,  577 => 210,  573 => 209,  569 => 208,  565 => 207,  559 => 204,  555 => 203,  549 => 199,  547 => 198,  543 => 197,  536 => 194,  533 => 193,  531 => 192,  527 => 191,  522 => 190,  518 => 189,  511 => 186,  509 => 185,  504 => 184,  502 => 183,  498 => 182,  488 => 179,  484 => 178,  478 => 174,  470 => 169,  466 => 168,  461 => 166,  457 => 164,  454 => 163,  446 => 158,  442 => 157,  437 => 155,  434 => 154,  426 => 149,  422 => 148,  417 => 146,  414 => 145,  411 => 144,  403 => 139,  399 => 138,  394 => 136,  391 => 135,  388 => 134,  380 => 129,  376 => 128,  371 => 126,  368 => 125,  365 => 124,  363 => 123,  357 => 120,  353 => 118,  350 => 117,  347 => 116,  344 => 115,  341 => 114,  337 => 113,  331 => 111,  325 => 110,  319 => 95,  311 => 96,  308 => 95,  301 => 91,  297 => 90,  294 => 89,  291 => 88,  284 => 84,  280 => 83,  277 => 82,  274 => 81,  271 => 80,  264 => 76,  260 => 75,  257 => 74,  250 => 70,  246 => 69,  243 => 68,  240 => 67,  237 => 66,  234 => 65,  230 => 64,  223 => 61,  219 => 60,  213 => 56,  207 => 54,  204 => 53,  200 => 52,  194 => 48,  188 => 46,  185 => 45,  181 => 44,  175 => 42,  171 => 39,  167 => 38,  161 => 33,  154 => 35,  151 => 34,  149 => 33,  144 => 32,  141 => 31,  137 => 30,  131 => 25,  124 => 27,  121 => 26,  118 => 25,  114 => 24,  108 => 20,  103 => 21,  101 => 20,  95 => 18,  92 => 17,  88 => 16,  83 => 8,  79 => 7,  72 => 4,  68 => 3,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/kimai2/templates/base.html.twig");
    }
}
