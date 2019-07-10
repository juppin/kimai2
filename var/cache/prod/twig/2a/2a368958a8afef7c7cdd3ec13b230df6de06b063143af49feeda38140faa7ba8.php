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

/* macros/actions.html.twig */
class __TwigTemplate_1a0c6d643e287e9a0522d5cead532e9b7c15b1a8abbde3e1dcb57aa241f2269b extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
        // line 51
        echo "
";
        // line 79
        echo "
";
        // line 90
        echo "
";
        // line 120
        echo "
";
        // line 132
        echo "
";
        // line 173
        echo "
";
        // line 185
        echo "
";
        // line 229
        echo "
";
        // line 241
        echo "
";
        // line 257
        echo "
";
        // line 297
        echo "
";
        // line 313
        echo "
";
        // line 351
        echo "
";
        // line 360
        echo "
";
        // line 373
        echo "
";
        // line 385
        echo "
";
        // line 393
        echo "
";
        // line 410
        echo "
";
        // line 427
        echo "
";
        // line 445
        echo "
";
    }

    // line 2
    public function macro_activities($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 3)->unwrap();
            // line 4
            echo "    ";
            $context["actions"] = ["filter" => "#collapseActivityAdmin", "visibility" => "#modal_activity_admin"];
            // line 5
            echo "
    ";
            // line 6
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_activity")) {
                // line 7
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity_create")]);
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    ";
            // line 10
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.activities", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 11
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 11), "actions", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 14
    public function macro_activity($__activity__ = null, $__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "activity" => $__activity__,
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 15
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 15)->unwrap();
            // line 16
            echo "    ";
            $context["actions"] = [];
            // line 17
            echo "
    ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "id", [], "any", false, false, false, 18))) {
                // line 19
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", ($context["activity"] ?? null))) {
                    // line 20
                    echo "            ";
                    $context["class"] = "";
                    // line 21
                    echo "            ";
                    if ((($context["view"] ?? null) != "edit")) {
                        // line 22
                        echo "                ";
                        $context["class"] = "modal-ajax-form";
                        // line 23
                        echo "            ";
                    }
                    // line 24
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "id", [], "any", false, false, false, 24)]), "class" => ($context["class"] ?? null)]]);
                    // line 25
                    echo "        ";
                }
                // line 26
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("budget", ($context["activity"] ?? null))) {
                    // line 27
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["report" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity_budget", ["id" => twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "id", [], "any", false, false, false, 27)])]]);
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_other_timesheet")) {
                    // line 30
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["timesheet" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet", ["customer" => ((twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 30)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 30), "customer", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)) : (null)), "project" => ((twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 30)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)) : (null)), "activity" => twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "id", [], "any", false, false, false, 30)])]);
                    // line 31
                    echo "        ";
                }
                // line 32
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_other_timesheet")) {
                    // line 33
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create-timesheet" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet_create", ["project" => ((twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 33)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)) : (null)), "activity" => twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "id", [], "any", false, false, false, 33)]), "class" => "modal-ajax-form"]]);
                    // line 34
                    echo "        ";
                }
                // line 35
                echo "        ";
                if (((($context["view"] ?? null) == "index") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", ($context["activity"] ?? null)))) {
                    // line 36
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["trash" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "id", [], "any", false, false, false, 36)]), "class" => "modal-ajax-form"]]);
                    // line 37
                    echo "        ";
                }
                // line 38
                echo "    ";
            }
            // line 39
            echo "
    ";
            // line 40
            if ((($context["view"] ?? null) != "index")) {
                // line 41
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity")]);
                // line 42
                echo "    ";
            }
            // line 43
            echo "
    ";
            // line 44
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.activity", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null), "activity" => ($context["activity"] ?? null)]);
            // line 45
            echo "    ";
            if ((($context["view"] ?? null) == "index")) {
                // line 46
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_table_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 46), "actions", [], "any", false, false, false, 46)], 46, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 48
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_entity_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 48), "actions", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_users($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 53
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 53)->unwrap();
            // line 54
            echo "    ";
            $context["actions"] = [];
            // line 55
            echo "
    ";
            // line 56
            if ((($context["view"] ?? null) == "index")) {
                // line 57
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["filter" => "#collapseUserAdmin", "visibility" => "#modal_user_admin"]);
                // line 58
                echo "    ";
            } else {
                // line 59
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user")]);
                // line 60
                echo "    ";
            }
            // line 61
            echo "
    ";
            // line 62
            if (((($context["view"] ?? null) != "permissions") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("role_permissions"))) {
                // line 63
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["permissions" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_permissions")]);
                // line 64
                echo "    ";
            }
            // line 65
            echo "
    ";
            // line 66
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_user")) {
                // line 67
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_create")]);
                // line 68
                echo "    ";
            }
            // line 69
            echo "
    ";
            // line 70
            if ((($context["view"] ?? null) == "index")) {
                // line 71
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["help" => ["url" => $this->extensions['App\Twig\Extensions']->documentationLink("users.html"), "target" => "_blank"]]);
                // line 72
                echo "    ";
            } elseif ((($context["view"] ?? null) == "permissions")) {
                // line 73
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["help" => ["url" => $this->extensions['App\Twig\Extensions']->documentationLink("permissions.html"), "target" => "_blank"]]);
                // line 74
                echo "    ";
            }
            // line 75
            echo "
    ";
            // line 76
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.users", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 77
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 77), "actions", [], "any", false, false, false, 77)], 77, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 80
    public function macro_user_permissions($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 81
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 81)->unwrap();
            // line 82
            echo "    ";
            $context["actions"] = [];
            // line 83
            echo "
    ";
            // line 84
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user")]);
            // line 85
            echo "    ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["help" => ["url" => $this->extensions['App\Twig\Extensions']->documentationLink("permissions.html"), "target" => "_blank"]]);
            // line 86
            echo "
    ";
            // line 87
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.user_permissions", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 88
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 88), "actions", [], "any", false, false, false, 88)], 88, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 91
    public function macro_user($__user__ = null, $__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 92
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 92)->unwrap();
            // line 93
            echo "    ";
            $context["actions"] = [];
            // line 94
            echo "
    ";
            // line 95
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 95))) {
                // line 96
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view", ($context["user"] ?? null))) {
                    // line 97
                    echo "            ";
                    $context["actions"] = ["profile-stats" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["username" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 97)])]];
                    // line 98
                    echo "        ";
                }
                // line 99
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", ($context["user"] ?? null))) {
                    // line 100
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_edit", ["username" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 100)])]);
                    // line 101
                    echo "        ";
                }
                // line 102
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("preferences", ($context["user"] ?? null))) {
                    // line 103
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["settings" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_preferences", ["username" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 103)])]]);
                    // line 104
                    echo "        ";
                }
                // line 105
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_other_timesheet")) {
                    // line 106
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["timesheet" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet", ["user" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 106)])]);
                    // line 107
                    echo "        ";
                }
                // line 108
                echo "        ";
                if (((($context["view"] ?? null) == "index") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", ($context["user"] ?? null)))) {
                    // line 109
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["trash" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 109)]), "class" => "modal-ajax-form"]]);
                    // line 110
                    echo "        ";
                }
                // line 111
                echo "    ";
            }
            // line 112
            echo "
    ";
            // line 113
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.user", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null), "user" => ($context["user"] ?? null)]);
            // line 114
            echo "    ";
            if ((($context["view"] ?? null) == "index")) {
                // line 115
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_table_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 115), "actions", [], "any", false, false, false, 115)], 115, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 117
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_entity_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 117), "actions", [], "any", false, false, false, 117)], 117, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 121
    public function macro_projects($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 122
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 122)->unwrap();
            // line 123
            echo "    ";
            $context["actions"] = ["filter" => "#collapseProjectAdmin", "visibility" => "#modal_project_admin"];
            // line 124
            echo "
    ";
            // line 125
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_project")) {
                // line 126
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_create")]);
                // line 127
                echo "    ";
            }
            // line 128
            echo "
    ";
            // line 129
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.projects", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 130
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 130), "actions", [], "any", false, false, false, 130)], 130, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 133
    public function macro_project($__project__ = null, $__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "project" => $__project__,
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 134
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 134)->unwrap();
            // line 135
            echo "    ";
            $context["actions"] = [];
            // line 136
            echo "
    ";
            // line 137
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 137))) {
                // line 138
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", ($context["project"] ?? null))) {
                    // line 139
                    echo "            ";
                    $context["class"] = "";
                    // line 140
                    echo "            ";
                    if ((($context["view"] ?? null) != "edit")) {
                        // line 141
                        echo "                ";
                        $context["class"] = "modal-ajax-form";
                        // line 142
                        echo "            ";
                    }
                    // line 143
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 143)]), "class" => ($context["class"] ?? null)]]);
                    // line 144
                    echo "        ";
                }
                // line 145
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("budget", ($context["project"] ?? null))) {
                    // line 146
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["report" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_budget", ["id" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 146)])]]);
                    // line 147
                    echo "        ";
                }
                // line 148
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_activity")) {
                    // line 149
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["activity" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity", ["customer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "customer", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149), "project" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 149)])]);
                    // line 150
                    echo "        ";
                }
                // line 151
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_other_timesheet")) {
                    // line 152
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["timesheet" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet", ["customer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "customer", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152), "project" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 152)])]);
                    // line 153
                    echo "        ";
                }
                // line 154
                echo "        ";
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_activity") && twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "visible", [], "any", false, false, false, 154)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "customer", [], "any", false, false, false, 154), "visible", [], "any", false, false, false, 154))) {
                    // line 155
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create-activity" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity_create_with_project", ["project" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 155)])]);
                    // line 156
                    echo "        ";
                }
                // line 157
                echo "        ";
                if (((($context["view"] ?? null) == "index") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", ($context["project"] ?? null)))) {
                    // line 158
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["trash" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 158)]), "class" => "modal-ajax-form"]]);
                    // line 159
                    echo "        ";
                }
                // line 160
                echo "    ";
            }
            // line 161
            echo "
    ";
            // line 162
            if ((($context["view"] ?? null) != "index")) {
                // line 163
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project")]);
                // line 164
                echo "    ";
            }
            // line 165
            echo "
    ";
            // line 166
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.project", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null), "project" => ($context["project"] ?? null)]);
            // line 167
            echo "    ";
            if ((($context["view"] ?? null) == "index")) {
                // line 168
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_table_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 168), "actions", [], "any", false, false, false, 168)], 168, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 170
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_entity_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 170), "actions", [], "any", false, false, false, 170)], 170, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 174
    public function macro_customers($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 175
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 175)->unwrap();
            // line 176
            echo "
    ";
            // line 177
            $context["actions"] = ["filter" => "#collapseCustomerAdmin", "visibility" => "#modal_customer_admin"];
            // line 178
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_customer")) {
                // line 179
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_create")]);
                // line 180
                echo "    ";
            }
            // line 181
            echo "
    ";
            // line 182
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.customers", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 183
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 183), "actions", [], "any", false, false, false, 183)], 183, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 186
    public function macro_customer($__customer__ = null, $__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "customer" => $__customer__,
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 187
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 187)->unwrap();
            // line 188
            echo "    ";
            $context["actions"] = [];
            // line 189
            echo "
    ";
            // line 190
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 190))) {
                // line 191
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", ($context["customer"] ?? null))) {
                    // line 192
                    echo "            ";
                    $context["class"] = "";
                    // line 193
                    echo "            ";
                    if ((($context["view"] ?? null) != "edit")) {
                        // line 194
                        echo "                ";
                        $context["class"] = "modal-ajax-form";
                        // line 195
                        echo "            ";
                    }
                    // line 196
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 196)]), "class" => ($context["class"] ?? null)]]);
                    // line 197
                    echo "        ";
                }
                // line 198
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("budget", ($context["customer"] ?? null))) {
                    // line 199
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["report" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_budget", ["id" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 199)])]]);
                    // line 200
                    echo "        ";
                }
                // line 201
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_project")) {
                    // line 202
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["project" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project", ["customer" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 202)])]);
                    // line 203
                    echo "        ";
                }
                // line 204
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_activity")) {
                    // line 205
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["activity" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity", ["customer" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 205)])]);
                    // line 206
                    echo "        ";
                }
                // line 207
                echo "        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_other_timesheet")) {
                    // line 208
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["timesheet" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet", ["customer" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 208)])]);
                    // line 209
                    echo "        ";
                }
                // line 210
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "visible", [], "any", false, false, false, 210) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_project"))) {
                    // line 211
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create-project" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_create_with_customer", ["customer" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 211)])]);
                    // line 212
                    echo "        ";
                }
                // line 213
                echo "        ";
                if (((($context["view"] ?? null) == "index") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", ($context["customer"] ?? null)))) {
                    // line 214
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["trash" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 214)]), "class" => "modal-ajax-form"]]);
                    // line 215
                    echo "        ";
                }
                // line 216
                echo "    ";
            }
            // line 217
            echo "
    ";
            // line 218
            if ((($context["view"] ?? null) != "index")) {
                // line 219
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer")]);
                // line 220
                echo "    ";
            }
            // line 221
            echo "
    ";
            // line 222
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.customer", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null), "customer" => ($context["customer"] ?? null)]);
            // line 223
            echo "    ";
            if ((($context["view"] ?? null) == "index")) {
                // line 224
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_table_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 224), "actions", [], "any", false, false, false, 224)], 224, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 226
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_entity_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 226), "actions", [], "any", false, false, false, 226)], 226, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 230
    public function macro_calendar($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 231
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 231)->unwrap();
            // line 232
            echo "
    ";
            // line 233
            $context["actions"] = [];
            // line 234
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_own_timesheet")) {
                // line 235
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_create"), "class" => "modal-ajax-form"]]);
                // line 236
                echo "    ";
            }
            // line 237
            echo "
    ";
            // line 238
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.calendar", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 239
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 239), "actions", [], "any", false, false, false, 239)], 239, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 242
    public function macro_timesheets($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 243
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 243)->unwrap();
            // line 244
            echo "
    ";
            // line 245
            $context["actions"] = ["filter" => "#collapseTimesheet"];
            // line 246
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("export_own_timesheet")) {
                // line 247
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["download" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_export"), "class" => "toolbar-action"]]);
                // line 248
                echo "    ";
            }
            // line 249
            echo "    ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["visibility" => "#modal_timesheet"]);
            // line 250
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_own_timesheet")) {
                // line 251
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_create"), "class" => "modal-ajax-form"]]);
                // line 252
                echo "    ";
            }
            // line 253
            echo "
    ";
            // line 254
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.timesheets", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 255
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 255), "actions", [], "any", false, false, false, 255)], 255, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 258
    public function macro_timesheet($__timesheet__ = null, $__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "timesheet" => $__timesheet__,
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 259
            ob_start(function () { return ''; });
            // line 260
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 260)->unwrap();
            // line 261
            echo "    ";
            $context["actions"] = [];
            // line 262
            echo "
    ";
            // line 263
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 263))) {
                // line 264
                echo "        ";
                if (( !twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "end", [], "any", false, false, false, 264) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("stop", ($context["timesheet"] ?? null)))) {
                    // line 265
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["stop" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stop_timesheet", ["id" => twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 265)]), "class" => "api-link", "attr" => ["data-event" => "kimai.timesheetStop kimai.timesheetUpdate", "data-method" => "PATCH", "data-msg-error" => "timesheet.stop.error", "data-msg-success" => "timesheet.stop.success"]]]);
                    // line 266
                    echo "        ";
                }
                // line 267
                echo "
        ";
                // line 268
                if ((twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "end", [], "any", false, false, false, 268) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("start", ($context["timesheet"] ?? null)))) {
                    // line 269
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["repeat" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restart_timesheet", ["id" => twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 269)]), "class" => "api-link", "attr" => ["data-payload" => "{\"copy\": \"all\"}", "data-event" => "kimai.timesheetStart kimai.timesheetUpdate", "data-method" => "PATCH", "data-msg-error" => "timesheet.start.error", "data-msg-success" => "timesheet.start.success"]]]);
                    // line 270
                    echo "        ";
                }
                // line 271
                echo "
        ";
                // line 272
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", ($context["timesheet"] ?? null))) {
                    // line 273
                    echo "            ";
                    $context["class"] = "";
                    // line 274
                    echo "            ";
                    if ((($context["view"] ?? null) != "edit")) {
                        // line 275
                        echo "                ";
                        $context["class"] = "modal-ajax-form";
                        // line 276
                        echo "            ";
                    }
                    // line 277
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 277)]), "class" => ($context["class"] ?? null)]]);
                    // line 278
                    echo "        ";
                }
                // line 279
                echo "
        ";
                // line 280
                if (((($context["view"] ?? null) == "index") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", ($context["timesheet"] ?? null)))) {
                    // line 281
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["trash" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_timesheet", ["id" => twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 281)]), "class" => "api-link", "attr" => ["data-event" => "kimai.timesheetDelete kimai.timesheetUpdate", "data-method" => "DELETE", "data-question" => "confirm.delete", "data-msg-error" => "action.delete.error", "data-msg-success" => "action.delete.success"]]]);
                    // line 282
                    echo "        ";
                }
                // line 283
                echo "    ";
            }
            // line 284
            echo "
    ";
            // line 285
            if ((($context["view"] ?? null) != "index")) {
                // line 286
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet")]);
                // line 287
                echo "    ";
            }
            // line 288
            echo "
    ";
            // line 289
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.timesheet", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null), "timesheet" => ($context["timesheet"] ?? null)]);
            // line 290
            echo "    ";
            if ((($context["view"] ?? null) == "index")) {
                // line 291
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_table_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 291), "actions", [], "any", false, false, false, 291)], 291, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 293
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_entity_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 293), "actions", [], "any", false, false, false, 293)], 293, $context, $this->getSourceContext());
                echo "
    ";
            }
            $___internal_4ff152358d5ee479fee29a4f25f67fd1a42bf9ccdb613792ef47509d8306a716_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 259
            echo twig_spaceless($___internal_4ff152358d5ee479fee29a4f25f67fd1a42bf9ccdb613792ef47509d8306a716_);

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 298
    public function macro_timesheets_team($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 299
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 299)->unwrap();
            // line 300
            echo "
    ";
            // line 301
            $context["actions"] = ["filter" => "#collapseTimesheetAdmin"];
            // line 302
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("export_own_timesheet")) {
                // line 303
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["download" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet_export"), "class" => "toolbar-action"]]);
                // line 304
                echo "    ";
            }
            // line 305
            echo "    ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["visibility" => "#modal_timesheet_admin"]);
            // line 306
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_other_timesheet")) {
                // line 307
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet_create"), "class" => "modal-ajax-form"]]);
                // line 308
                echo "    ";
            }
            // line 309
            echo "
    ";
            // line 310
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.timesheets_team", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 311
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 311), "actions", [], "any", false, false, false, 311)], 311, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 314
    public function macro_timesheet_team($__timesheet__ = null, $__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "timesheet" => $__timesheet__,
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 315
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 315)->unwrap();
            // line 316
            echo "    ";
            $context["actions"] = [];
            // line 317
            echo "
    ";
            // line 318
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 318))) {
                // line 319
                echo "        ";
                if (( !twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "end", [], "any", false, false, false, 319) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("stop", ($context["timesheet"] ?? null)))) {
                    // line 320
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["stop" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stop_timesheet", ["id" => twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 320)]), "class" => "api-link", "attr" => ["data-event" => "kimai.timesheetStop kimai.timesheetUpdate", "data-method" => "PATCH", "data-msg-error" => "timesheet.stop.error", "data-msg-success" => "timesheet.stop.success"]]]);
                    // line 321
                    echo "        ";
                }
                // line 322
                echo "
        ";
                // line 323
                if ((twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "end", [], "any", false, false, false, 323) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("start", ($context["timesheet"] ?? null)))) {
                    // line 324
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["repeat" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restart_timesheet", ["id" => twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 324)]), "class" => "api-link", "attr" => ["data-payload" => "{\"copy\": \"all\"}", "data-event" => "kimai.timesheetStart kimai.timesheetUpdate", "data-method" => "PATCH", "data-msg-error" => "timesheet.start.error", "data-msg-success" => "timesheet.start.success"]]]);
                    // line 325
                    echo "        ";
                }
                // line 326
                echo "
        ";
                // line 327
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", ($context["timesheet"] ?? null))) {
                    // line 328
                    echo "            ";
                    $context["class"] = "";
                    // line 329
                    echo "            ";
                    if ((($context["view"] ?? null) != "edit")) {
                        // line 330
                        echo "                ";
                        $context["class"] = "modal-ajax-form";
                        // line 331
                        echo "            ";
                    }
                    // line 332
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 332)]), "class" => ($context["class"] ?? null)]]);
                    // line 333
                    echo "        ";
                }
                // line 334
                echo "
        ";
                // line 335
                if (((($context["view"] ?? null) == "index") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", ($context["timesheet"] ?? null)))) {
                    // line 336
                    echo "            ";
                    $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["trash" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_timesheet", ["id" => twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "id", [], "any", false, false, false, 336)]), "class" => "api-link", "attr" => ["data-event" => "kimai.timesheetDelete kimai.timesheetUpdate", "data-method" => "DELETE", "data-question" => "confirm.delete", "data-msg-error" => "action.delete.error", "data-msg-success" => "action.delete.success"]]]);
                    // line 337
                    echo "        ";
                }
                // line 338
                echo "    ";
            }
            // line 339
            echo "
    ";
            // line 340
            if ((($context["view"] ?? null) != "index")) {
                // line 341
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet")]);
                // line 342
                echo "    ";
            }
            // line 343
            echo "
    ";
            // line 344
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.timesheet_team", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null), "timesheet" => ($context["timesheet"] ?? null)]);
            // line 345
            echo "    ";
            if ((($context["view"] ?? null) == "index")) {
                // line 346
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_table_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 346), "actions", [], "any", false, false, false, 346)], 346, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 348
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_entity_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 348), "actions", [], "any", false, false, false, 348)], 348, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 352
    public function macro_plugins($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 353
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 353)->unwrap();
            // line 354
            echo "
    ";
            // line 355
            $context["actions"] = ["shop" => ["url" => (twig_constant("App\\Constants::HOMEPAGE") . "/store/"), "target" => "_blank"]];
            // line 356
            echo "
    ";
            // line 357
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.plugins", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 358
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 358), "actions", [], "any", false, false, false, 358)], 358, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 361
    public function macro_plugin($__plugin__ = null, $__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "plugin" => $__plugin__,
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 362
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 362)->unwrap();
            // line 363
            echo "
    ";
            // line 364
            $context["actions"] = ["home" => ["url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "metadata", [], "any", false, false, false, 364), "homepage", [], "any", false, false, false, 364), "target" => "_blank"]];
            // line 365
            echo "
    ";
            // line 366
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.plugin", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null), "plugin" => ($context["plugin"] ?? null)]);
            // line 367
            echo "    ";
            if ((($context["view"] ?? null) == "index")) {
                // line 368
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_table_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 368), "actions", [], "any", false, false, false, 368)], 368, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 370
                echo "        ";
                echo twig_call_macro($macros["widgets"], "macro_entity_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 370), "actions", [], "any", false, false, false, 370)], 370, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 374
    public function macro_about($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 375
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 375)->unwrap();
            // line 376
            echo "
    ";
            // line 377
            $context["actions"] = ["about" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about")]];
            // line 378
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("system_information")) {
                // line 379
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["debug" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about_debug")]);
                // line 380
                echo "    ";
            }
            // line 381
            echo "
    ";
            // line 382
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.about", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 383
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 383), "actions", [], "any", false, false, false, 383)], 383, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 386
    public function macro_tags($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 387
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 387)->unwrap();
            // line 388
            echo "    ";
            $context["actions"] = ["filter" => "#collapseTags"];
            // line 389
            echo "
    ";
            // line 390
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.tags", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 391
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 391), "actions", [], "any", false, false, false, 391)], 391, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 394
    public function macro_tag($__tag__ = null, $__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "tag" => $__tag__,
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 395
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 395)->unwrap();
            // line 396
            echo "
    ";
            // line 397
            $context["actions"] = [];
            // line 398
            echo "
    ";
            // line 399
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_other_timesheet")) {
                // line 400
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["timesheet" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet", ["tags" => twig_get_attribute($this->env, $this->source, ($context["tag"] ?? null), "name", [], "any", false, false, false, 400)])]);
                // line 401
                echo "    ";
            }
            // line 402
            echo "
    ";
            // line 403
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete_tag")) {
                // line 404
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["trash" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_tag", ["id" => twig_get_attribute($this->env, $this->source, ($context["tag"] ?? null), "id", [], "any", false, false, false, 404)]), "class" => "api-link", "attr" => ["data-event" => "kimai.tagDelete kimai.tagUpdate", "data-method" => "DELETE", "data-question" => "confirm.delete", "data-msg-error" => "action.delete.error", "data-msg-success" => "action.delete.success"]]]);
                // line 405
                echo "    ";
            }
            // line 406
            echo "
    ";
            // line 407
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.tag", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null), "tag" => ($context["tag"] ?? null)]);
            // line 408
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_table_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 408), "actions", [], "any", false, false, false, 408)], 408, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 411
    public function macro_invoices($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 412
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 412)->unwrap();
            // line 413
            echo "
    ";
            // line 414
            $context["actions"] = ["filter" => "#collapseInvoice", "visibility" => "#modal_invoice"];
            // line 415
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_invoice_template")) {
                // line 416
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_invoice_template_create")]);
                // line 417
                echo "    ";
            }
            // line 418
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_invoice_template")) {
                // line 419
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["list" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_invoice_template")]);
                // line 420
                echo "    ";
            }
            // line 421
            echo "
    ";
            // line 422
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["help" => ["url" => $this->extensions['App\Twig\Extensions']->documentationLink("invoices.html"), "target" => "_blank"]]);
            // line 423
            echo "
    ";
            // line 424
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.invoices", ["actions" => ($context["actions"] ?? null), "view" => ($context["view"] ?? null)]);
            // line 425
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "payload", [], "any", false, false, false, 425), "actions", [], "any", false, false, false, 425)], 425, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 428
    public function macro_invoice_templates($__view__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "view" => $__view__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 429
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "macros/actions.html.twig", 429)->unwrap();
            // line 430
            echo "
    ";
            // line 431
            $context["actions"] = [];
            // line 432
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_invoice")) {
                // line 433
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice")]);
                // line 434
                echo "    ";
            }
            // line 435
            echo "
    ";
            // line 436
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_invoice_template")) {
                // line 437
                echo "        ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["create" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_invoice_template_create")]);
                // line 438
                echo "    ";
            }
            // line 439
            echo "
    ";
            // line 440
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["help" => ["url" => $this->extensions['App\Twig\Extensions']->documentationLink("invoices.html"), "target" => "_blank"]]);
            // line 441
            echo "
    ";
            // line 442
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.invoice_templates", ["actions" => ($context["actions"] ?? null), "view" => "index"]);
            // line 443
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_actions", [($context["actions"] ?? null)], 443, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1627 => 443,  1625 => 442,  1622 => 441,  1620 => 440,  1617 => 439,  1614 => 438,  1611 => 437,  1609 => 436,  1606 => 435,  1603 => 434,  1600 => 433,  1597 => 432,  1595 => 431,  1592 => 430,  1589 => 429,  1576 => 428,  1564 => 425,  1562 => 424,  1559 => 423,  1557 => 422,  1554 => 421,  1551 => 420,  1548 => 419,  1545 => 418,  1542 => 417,  1539 => 416,  1536 => 415,  1534 => 414,  1531 => 413,  1528 => 412,  1515 => 411,  1503 => 408,  1501 => 407,  1498 => 406,  1495 => 405,  1492 => 404,  1490 => 403,  1487 => 402,  1484 => 401,  1481 => 400,  1479 => 399,  1476 => 398,  1474 => 397,  1471 => 396,  1468 => 395,  1454 => 394,  1442 => 391,  1440 => 390,  1437 => 389,  1434 => 388,  1431 => 387,  1418 => 386,  1406 => 383,  1404 => 382,  1401 => 381,  1398 => 380,  1395 => 379,  1392 => 378,  1390 => 377,  1387 => 376,  1384 => 375,  1371 => 374,  1358 => 370,  1352 => 368,  1349 => 367,  1347 => 366,  1344 => 365,  1342 => 364,  1339 => 363,  1336 => 362,  1322 => 361,  1310 => 358,  1308 => 357,  1305 => 356,  1303 => 355,  1300 => 354,  1297 => 353,  1284 => 352,  1271 => 348,  1265 => 346,  1262 => 345,  1260 => 344,  1257 => 343,  1254 => 342,  1251 => 341,  1249 => 340,  1246 => 339,  1243 => 338,  1240 => 337,  1237 => 336,  1235 => 335,  1232 => 334,  1229 => 333,  1226 => 332,  1223 => 331,  1220 => 330,  1217 => 329,  1214 => 328,  1212 => 327,  1209 => 326,  1206 => 325,  1203 => 324,  1201 => 323,  1198 => 322,  1195 => 321,  1192 => 320,  1189 => 319,  1187 => 318,  1184 => 317,  1181 => 316,  1178 => 315,  1164 => 314,  1152 => 311,  1150 => 310,  1147 => 309,  1144 => 308,  1141 => 307,  1138 => 306,  1135 => 305,  1132 => 304,  1129 => 303,  1126 => 302,  1124 => 301,  1121 => 300,  1118 => 299,  1105 => 298,  1096 => 259,  1089 => 293,  1083 => 291,  1080 => 290,  1078 => 289,  1075 => 288,  1072 => 287,  1069 => 286,  1067 => 285,  1064 => 284,  1061 => 283,  1058 => 282,  1055 => 281,  1053 => 280,  1050 => 279,  1047 => 278,  1044 => 277,  1041 => 276,  1038 => 275,  1035 => 274,  1032 => 273,  1030 => 272,  1027 => 271,  1024 => 270,  1021 => 269,  1019 => 268,  1016 => 267,  1013 => 266,  1010 => 265,  1007 => 264,  1005 => 263,  1002 => 262,  999 => 261,  997 => 260,  995 => 259,  981 => 258,  969 => 255,  967 => 254,  964 => 253,  961 => 252,  958 => 251,  955 => 250,  952 => 249,  949 => 248,  946 => 247,  943 => 246,  941 => 245,  938 => 244,  935 => 243,  922 => 242,  910 => 239,  908 => 238,  905 => 237,  902 => 236,  899 => 235,  896 => 234,  894 => 233,  891 => 232,  888 => 231,  875 => 230,  862 => 226,  856 => 224,  853 => 223,  851 => 222,  848 => 221,  845 => 220,  842 => 219,  840 => 218,  837 => 217,  834 => 216,  831 => 215,  828 => 214,  825 => 213,  822 => 212,  819 => 211,  816 => 210,  813 => 209,  810 => 208,  807 => 207,  804 => 206,  801 => 205,  798 => 204,  795 => 203,  792 => 202,  789 => 201,  786 => 200,  783 => 199,  780 => 198,  777 => 197,  774 => 196,  771 => 195,  768 => 194,  765 => 193,  762 => 192,  759 => 191,  757 => 190,  754 => 189,  751 => 188,  748 => 187,  734 => 186,  722 => 183,  720 => 182,  717 => 181,  714 => 180,  711 => 179,  708 => 178,  706 => 177,  703 => 176,  700 => 175,  687 => 174,  674 => 170,  668 => 168,  665 => 167,  663 => 166,  660 => 165,  657 => 164,  654 => 163,  652 => 162,  649 => 161,  646 => 160,  643 => 159,  640 => 158,  637 => 157,  634 => 156,  631 => 155,  628 => 154,  625 => 153,  622 => 152,  619 => 151,  616 => 150,  613 => 149,  610 => 148,  607 => 147,  604 => 146,  601 => 145,  598 => 144,  595 => 143,  592 => 142,  589 => 141,  586 => 140,  583 => 139,  580 => 138,  578 => 137,  575 => 136,  572 => 135,  569 => 134,  555 => 133,  543 => 130,  541 => 129,  538 => 128,  535 => 127,  532 => 126,  530 => 125,  527 => 124,  524 => 123,  521 => 122,  508 => 121,  495 => 117,  489 => 115,  486 => 114,  484 => 113,  481 => 112,  478 => 111,  475 => 110,  472 => 109,  469 => 108,  466 => 107,  463 => 106,  460 => 105,  457 => 104,  454 => 103,  451 => 102,  448 => 101,  445 => 100,  442 => 99,  439 => 98,  436 => 97,  433 => 96,  431 => 95,  428 => 94,  425 => 93,  422 => 92,  408 => 91,  396 => 88,  394 => 87,  391 => 86,  388 => 85,  386 => 84,  383 => 83,  380 => 82,  377 => 81,  364 => 80,  352 => 77,  350 => 76,  347 => 75,  344 => 74,  341 => 73,  338 => 72,  335 => 71,  333 => 70,  330 => 69,  327 => 68,  324 => 67,  322 => 66,  319 => 65,  316 => 64,  313 => 63,  311 => 62,  308 => 61,  305 => 60,  302 => 59,  299 => 58,  296 => 57,  294 => 56,  291 => 55,  288 => 54,  285 => 53,  272 => 52,  259 => 48,  253 => 46,  250 => 45,  248 => 44,  245 => 43,  242 => 42,  239 => 41,  237 => 40,  234 => 39,  231 => 38,  228 => 37,  225 => 36,  222 => 35,  219 => 34,  216 => 33,  213 => 32,  210 => 31,  207 => 30,  204 => 29,  201 => 28,  198 => 27,  195 => 26,  192 => 25,  189 => 24,  186 => 23,  183 => 22,  180 => 21,  177 => 20,  174 => 19,  172 => 18,  169 => 17,  166 => 16,  163 => 15,  149 => 14,  137 => 11,  135 => 10,  132 => 9,  129 => 8,  126 => 7,  124 => 6,  121 => 5,  118 => 4,  115 => 3,  102 => 2,  97 => 445,  94 => 427,  91 => 410,  88 => 393,  85 => 385,  82 => 373,  79 => 360,  76 => 351,  73 => 313,  70 => 297,  67 => 257,  64 => 241,  61 => 229,  58 => 185,  55 => 173,  52 => 132,  49 => 120,  46 => 90,  43 => 79,  40 => 51,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "macros/actions.html.twig", "/var/www/kimai2/templates/macros/actions.html.twig");
    }
}
