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

/* macros/widgets.html.twig */
class __TwigTemplate_03502f3b18d63eca1908cecde6f01c5ef9bd6a19ca3d0a9c6235c33ea8105c2f extends \Twig\Template
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
        // line 26
        echo "
";
        // line 35
        echo "
";
        // line 40
        echo "
";
        // line 49
        echo "
";
        // line 53
        echo "
";
        // line 58
        echo "
";
        // line 74
        echo "
";
        // line 83
        echo "
";
        // line 89
        echo "
";
        // line 102
        echo "
";
        // line 110
        echo "
";
        // line 115
        echo "
";
        // line 120
        echo "
";
        // line 134
        echo "
";
        // line 141
        echo "
";
        // line 160
        echo "
";
        // line 175
        echo "
";
        // line 205
        echo "
";
        // line 271
        echo "
";
        // line 282
        echo "
";
        // line 288
        echo "
";
    }

    // line 1
    public function macro_icon($__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon(($context["icon"] ?? null), ($context["icon"] ?? null)), "html", null, true);
            echo "\"></i>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_page_actions($__tools__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "tools" => $__tools__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 6
            $macros["macro"] = $this;
            // line 7
            echo "    <div class=\"breadcrumb\">
        <div class=\"box-tools\">
            ";
            // line 9
            echo twig_call_macro($macros["macro"], "macro_button_group", [($context["tools"] ?? null)], 9, $context, $this->getSourceContext());
            echo "
        </div>
    </div>";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 14
    public function macro_entity_actions($__tools__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "tools" => $__tools__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 15
            $macros["macro"] = $this;
            // line 16
            echo "    <div class=\"breadcrumb\">
        <div class=\"box-tools\">
            ";
            // line 18
            echo twig_call_macro($macros["macro"], "macro_table_actions", [($context["tools"] ?? null)], 18, $context, $this->getSourceContext());
            echo "
        </div>
    </div>";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 23
    public function macro_page_header($__title__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 24
            echo "    <h2 class=\"page-header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
            echo "</h2>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 27
    public function macro_label_boolean($__visible__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "visible" => $__visible__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 28
            echo "    ";
            $macros["macro"] = $this;
            // line 29
            echo "    ";
            if (($context["visible"] ?? null)) {
                // line 30
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", ["yes", "success"], 30, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 32
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", ["no", "default"], 32, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 36
    public function macro_label_visible($__visible__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "visible" => $__visible__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 37
            echo "    ";
            $macros["macro"] = $this;
            // line 38
            echo "    ";
            echo twig_call_macro($macros["macro"], "macro_label_boolean", [($context["visible"] ?? null)], 38, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 41
    public function macro_label_role($__role__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "role" => $__role__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 42
            echo "    ";
            $macros["macro"] = $this;
            // line 43
            echo "    ";
            if ((($context["role"] ?? null) == "ROLE_SUPER_ADMIN")) {
                // line 44
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [($context["role"] ?? null), "danger"], 44, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 46
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [($context["role"] ?? null), "primary"], 46, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 50
    public function macro_username($__user__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 51
            echo "    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "alias", [], "any", true, true, false, 51)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "alias", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 51))) : (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 51))), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_label_user($__user__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "    ";
            $macros["macro"] = $this;
            // line 56
            echo "    ";
            echo twig_call_macro($macros["macro"], "macro_label", [twig_call_macro($macros["macro"], "macro_username", [($context["user"] ?? null)], 56, $context, $this->getSourceContext()), "primary"], 56, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 59
    public function macro_label_activity($__activity__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "activity" => $__activity__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 60
            echo "    ";
            $macros["macro"] = $this;
            // line 61
            echo "    ";
            $context["isVisible"] = twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "visible", [], "any", false, false, false, 61);
            // line 62
            echo "    ";
            $context["color"] = twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "color", [], "any", false, false, false, 62);
            // line 63
            echo "    ";
            if ((twig_test_empty(($context["color"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 63)))) {
                // line 64
                echo "        ";
                $context["color"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, true, false, 64), "color", [], "any", true, true, false, 64) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, true, false, 64), "color", [], "any", false, false, false, 64)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, true, false, 64), "color", [], "any", false, false, false, 64)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 64), "customer", [], "any", false, false, false, 64), "color", [], "any", false, false, false, 64)));
                // line 65
                echo "    ";
            }
            // line 66
            echo "    ";
            if ((($context["isVisible"] ?? null) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 66)))) {
                // line 67
                echo "        ";
                $context["isVisible"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 67), "visible", [], "any", false, false, false, 67);
                // line 68
                echo "        ";
                if ((($context["isVisible"] ?? null) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 68), "customer", [], "any", false, false, false, 68)))) {
                    // line 69
                    echo "            ";
                    $context["isVisible"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 69), "customer", [], "any", false, false, false, 69), "visible", [], "any", false, false, false, 69);
                    // line 70
                    echo "        ";
                }
                // line 71
                echo "    ";
            }
            // line 72
            echo "    ";
            echo twig_call_macro($macros["macro"], "macro_label_color_dot", ["activity", ($context["isVisible"] ?? null), twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "name", [], "any", false, false, false, 72), ($context["url"] ?? null), ($context["color"] ?? null)], 72, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 75
    public function macro_label_project($__project__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "project" => $__project__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 76
            echo "    ";
            $macros["macro"] = $this;
            // line 77
            echo "    ";
            $context["isVisible"] = false;
            // line 78
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "visible", [], "any", false, false, false, 78) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "customer", [], "any", false, false, false, 78), "visible", [], "any", false, false, false, 78))) {
                // line 79
                echo "        ";
                $context["isVisible"] = true;
                // line 80
                echo "    ";
            }
            // line 81
            echo "    ";
            echo twig_call_macro($macros["macro"], "macro_label_color_dot", ["project", ($context["isVisible"] ?? null), twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "name", [], "any", false, false, false, 81), ($context["url"] ?? null), (((twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "color", [], "any", true, true, false, 81) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "color", [], "any", false, false, false, 81)))) ? (twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "color", [], "any", false, false, false, 81)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "customer", [], "any", false, false, false, 81), "color", [], "any", false, false, false, 81)))], 81, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 84
    public function macro_label_customer($__customer__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "customer" => $__customer__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 85
            echo "    ";
            $macros["macro"] = $this;
            // line 86
            echo "    ";
            $context["isVisible"] = twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "visible", [], "any", false, false, false, 86);
            // line 87
            echo "    ";
            echo twig_call_macro($macros["macro"], "macro_label_color_dot", ["customer", ($context["isVisible"] ?? null), twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "name", [], "any", false, false, false, 87), ($context["url"] ?? null), twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "color", [], "any", false, false, false, 87)], 87, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 90
    public function macro_label_color_dot($__type__ = null, $__isVisible__ = null, $__name__ = null, $__url__ = null, $__color__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "isVisible" => $__isVisible__,
            "name" => $__name__,
            "url" => $__url__,
            "color" => $__color__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 91
            echo "    <span class=\"label-";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo ((($context["isVisible"] ?? null)) ? ("") : (" label-invisible"));
            echo "\">
        <span class=\"dot\"";
            // line 92
            if ( !twig_test_empty(($context["color"] ?? null))) {
                echo " style=\"background-color:";
                echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
                echo "\"";
            }
            echo "></span>
        <span class=\"name\">
            ";
            // line 94
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 95
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 97
                echo "                ";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 99
            echo "        </span>
    </span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 103
    public function macro_badge_counter($__count__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "count" => $__count__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 104
            echo "    ";
            if (($context["url"] ?? null)) {
                // line 105
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"><span class=\"badge bg-blue\">";
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "</span></a>
    ";
            } else {
                // line 107
                echo "        <span class=\"badge bg-blue\">";
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "</span>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 111
    public function macro_label($__title__ = null, $__type__ = null, $__tooltip__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "tooltip" => $__tooltip__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 112
            echo "    ";
            // line 113
            echo "    <span ";
            if (($context["tooltip"] ?? null)) {
                echo "data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, ($context["tooltip"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo "class=\"label label-";
            echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "success")) : ("success")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
            echo "</span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 116
    public function macro_badge($__title__ = null, $__color__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "color" => $__color__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 117
            echo "    ";
            // line 118
            echo "    <span class=\"badge bg-";
            echo twig_escape_filter($this->env, (((isset($context["color"]) || array_key_exists("color", $context))) ? (_twig_default_filter(($context["color"] ?? null), "red")) : ("red")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
            echo "</span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 121
    public function macro_alert($__type__ = null, $__description__ = null, $__title__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "description" => $__description__,
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 122
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "danger")) : ("danger")), "html", null, true);
            echo " alert-dismissible\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 124
            if ((($context["title"] ?? null) && ($context["icon"] ?? null))) {
                // line 125
                echo "            <h4><i class=\"icon ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon(($context["icon"] ?? null), ($context["icon"] ?? null)), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
                echo "</h4>
            ";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["description"] ?? null)), "html", null, true);
                echo "
        ";
            } elseif (            // line 127
($context["icon"] ?? null)) {
                // line 128
                echo "            <h4><i class=\"icon ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon(($context["icon"] ?? null), ($context["icon"] ?? null)), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["description"] ?? null)), "html", null, true);
                echo "</h4>
        ";
            } else {
                // line 130
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["description"] ?? null)), "html", null, true);
                echo "
        ";
            }
            // line 132
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 135
    public function macro_callout($__type__ = null, $__description__ = null, $__title__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "description" => $__description__,
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 136
            echo "    <div class=\"callout callout-";
            echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "danger")) : ("danger")), "html", null, true);
            echo " lead\">
        ";
            // line 137
            if (($context["title"] ?? null)) {
                echo "<h4>";
                if (($context["icon"] ?? null)) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon(($context["icon"] ?? null), ($context["icon"] ?? null)), "html", null, true);
                    echo "\">";
                }
                echo "</i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
                echo "</h4>";
            }
            // line 138
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["description"] ?? null)), "html", null, true);
            echo "</p>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 142
    public function macro_info_box_progress($__title__ = null, $__description__ = null, $__amount__ = null, $__percentage__ = null, $__icon__ = null, $__color__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "description" => $__description__,
            "amount" => $__amount__,
            "percentage" => $__percentage__,
            "icon" => $__icon__,
            "color" => $__color__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 143
            echo "    <div class=\"info-box bg-";
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\">
        <span class=\"info-box-icon\"><i class=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon(($context["icon"] ?? null), ($context["icon"] ?? null)), "html", null, true);
            echo "\"></i></span>

        <div class=\"info-box-content\">
            <span class=\"info-box-text\">";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
            echo "</span>
            <span class=\"info-box-number\">";
            // line 148
            echo twig_escape_filter($this->env, ($context["amount"] ?? null), "html", null, true);
            echo "</span>

            <div class=\"progress\">
                <div class=\"progress-bar\" style=\"width: ";
            // line 151
            echo twig_escape_filter($this->env, ($context["percentage"] ?? null), "html", null, true);
            echo "%\"></div>
            </div>
            <span class=\"progress-description\">
                    ";
            // line 154
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "
            </span>
        </div>
        <!-- /.info-box-content -->
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 161
    public function macro_button_group_dropdown($__title__ = null, $__actions__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 162
            echo "    <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-default\">";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
            echo "</button>
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.toggle_dropdown"), "html", null, true);
            echo "</span>
        </button>
        <ul class=\"dropdown-menu\" role=\"menu\">
            ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["url"] => $context["entry"]) {
                // line 170
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $context["url"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["entry"]), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['url'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "        </ul>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 176
    public function macro_table_actions($__actions__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 177
            $macros["macro"] = $this;
            // line 178
            if ((twig_length_filter($this->env, ($context["actions"] ?? null)) >= 1)) {
                // line 179
                echo "        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
                // line 180
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
                echo "
                <span class=\"fa fa-caret-down\"></span></button>
            <ul class=\"dropdown-menu dropdown-menu-right\">";
                // line 183
                ob_start(function () { return ''; });
                // line 184
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
                foreach ($context['_seq'] as $context["icon"] => $context["values"]) {
                    // line 185
                    echo "                        ";
                    $context["class"] = "";
                    // line 186
                    echo "                        ";
                    if (($context["icon"] == "trash")) {
                        // line 187
                        echo "                            ";
                        $context["class"] = "delete";
                        // line 188
                        echo "                            ";
                        if ((twig_length_filter($this->env, ($context["actions"] ?? null)) > 1)) {
                            // line 189
                            echo "                            <li class=\"divider\"></li>
                            ";
                        }
                        // line 191
                        echo "                        ";
                    }
                    // line 192
                    echo "                        <li class=\"";
                    echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                    echo "\">
                            ";
                    // line 193
                    if (twig_test_iterable($context["values"])) {
                        // line 194
                        echo "                                ";
                        echo twig_call_macro($macros["macro"], "macro_action_button", [$context["icon"], twig_array_merge($context["values"], ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["icon"], [], "actions")]), false], 194, $context, $this->getSourceContext());
                        echo "
                            ";
                    } else {
                        // line 196
                        echo "                                ";
                        echo twig_call_macro($macros["macro"], "macro_action_button", [$context["icon"], ["url" => $context["values"], "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["icon"], [], "actions")], false], 196, $context, $this->getSourceContext());
                        echo "
                            ";
                    }
                    // line 198
                    echo "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['icon'], $context['values'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                $___internal_62e4fd31135415dbb71dc93379a9ad31191e37244c9ec3acb3788a2d6c91612b_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 183
                echo twig_spaceless($___internal_62e4fd31135415dbb71dc93379a9ad31191e37244c9ec3acb3788a2d6c91612b_);
                // line 201
                echo "            </ul>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 206
    public function macro_action_button($__icon__ = null, $__values__ = null, $__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "values" => $__values__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 207
            $macros["macro"] = $this;
            // line 208
            ob_start(function () { return ''; });
            // line 209
            $context["id"] = null;
            // line 210
            echo "        ";
            $context["onclick"] = null;
            // line 211
            echo "        ";
            $context["modal"] = null;
            // line 212
            echo "        ";
            $context["toggle"] = null;
            // line 213
            echo "        ";
            $context["url"] = null;
            // line 214
            echo "        ";
            $context["target"] = null;
            // line 215
            echo "        ";
            $context["title"] = null;
            // line 216
            echo "        ";
            $context["disabled"] = false;
            // line 217
            echo "        ";
            $context["attr"] = [];
            // line 218
            echo "        ";
            if ((($context["type"] ?? null) === false)) {
                // line 219
                echo "            ";
                $context["class"] = "";
                // line 220
                echo "        ";
            } elseif ((null === ($context["type"] ?? null))) {
                // line 221
                echo "            ";
                $context["class"] = (("btn btn-default btn-" . ($context["icon"] ?? null)) . " ");
                // line 222
                echo "        ";
            } else {
                // line 223
                echo "            ";
                $context["class"] = (((("btn btn-" . ($context["type"] ?? null)) . " btn-") . ($context["icon"] ?? null)) . " ");
                // line 224
                echo "        ";
            }
            // line 225
            echo "
        ";
            // line 226
            if ( !twig_test_iterable(($context["values"] ?? null))) {
                // line 227
                echo "            ";
                $context["url"] = ($context["values"] ?? null);
                // line 228
                echo "            ";
                if (twig_in_filter("onclick:", ($context["url"] ?? null))) {
                    // line 229
                    echo "                ";
                    $context["onclick"] = twig_replace_filter(($context["url"] ?? null), ["onclick:" => ""]);
                    // line 230
                    echo "                ";
                    $context["url"] = "#";
                    // line 231
                    echo "            ";
                }
                // line 232
                echo "            ";
                if (twig_in_filter("#collapse", ($context["url"] ?? null))) {
                    // line 233
                    echo "                ";
                    $context["toggle"] = "collapse";
                    // line 234
                    echo "            ";
                }
                // line 235
                echo "            ";
                if (twig_in_filter("#modal", ($context["url"] ?? null))) {
                    // line 236
                    echo "                ";
                    $context["modal"] = ($context["url"] ?? null);
                    // line 237
                    echo "                ";
                    $context["url"] = "#";
                    // line 238
                    echo "            ";
                }
                // line 239
                echo "        ";
            } else {
                // line 240
                echo "            ";
                $context["disabled"] = (((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "disabled", [], "any", true, true, false, 240) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "disabled", [], "any", false, false, false, 240)))) ? (twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "disabled", [], "any", false, false, false, 240)) : (false));
                // line 241
                echo "            ";
                $context["url"] = (((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "url", [], "any", true, true, false, 241) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "url", [], "any", false, false, false, 241)))) ? (twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "url", [], "any", false, false, false, 241)) : ("#"));
                // line 242
                echo "            ";
                $context["onclick"] = (((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "onclick", [], "any", true, true, false, 242) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "onclick", [], "any", false, false, false, 242)))) ? (twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "onclick", [], "any", false, false, false, 242)) : (null));
                // line 243
                echo "            ";
                $context["modal"] = (((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "modal", [], "any", true, true, false, 243) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "modal", [], "any", false, false, false, 243)))) ? (twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "modal", [], "any", false, false, false, 243)) : (null));
                // line 244
                echo "            ";
                $context["toggle"] = (((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "toggle", [], "any", true, true, false, 244) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "toggle", [], "any", false, false, false, 244)))) ? (twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "toggle", [], "any", false, false, false, 244)) : (null));
                // line 245
                echo "            ";
                $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "target", [], "any", true, true, false, 245) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "target", [], "any", false, false, false, 245)))) ? (twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "target", [], "any", false, false, false, 245)) : (null));
                // line 246
                echo "            ";
                $context["id"] = (((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "id", [], "any", true, true, false, 246) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "id", [], "any", false, false, false, 246)))) ? (twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "id", [], "any", false, false, false, 246)) : (null));
                // line 247
                echo "            ";
                $context["title"] = (((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "title", [], "any", true, true, false, 247) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "title", [], "any", false, false, false, 247)))) ? (twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "title", [], "any", false, false, false, 247)) : (null));
                // line 248
                echo "            ";
                $context["class"] = (($context["class"] ?? null) . ((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "class", [], "any", true, true, false, 248)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "class", [], "any", false, false, false, 248), "")) : ("")));
                // line 249
                echo "            ";
                $context["attr"] = (((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "attr", [], "any", true, true, false, 249) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "attr", [], "any", false, false, false, 249)))) ? (twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "attr", [], "any", false, false, false, 249)) : ([]));
                // line 250
                echo "        ";
            }
            // line 251
            echo "
        ";
            // line 252
            if ((($context["disabled"] ?? null) === true)) {
                // line 253
                echo "            ";
                $context["class"] = (($context["class"] ?? null) . " disabled");
                // line 254
                echo "        ";
            }
            // line 255
            echo "
        <a class=\"";
            // line 256
            echo twig_escape_filter($this->env, twig_trim_filter(($context["class"] ?? null)), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\"";
            // line 257
            if ((($context["disabled"] ?? null) === true)) {
                echo " disabled=\"disabled\"";
            }
            // line 258
            if ( !twig_test_empty(($context["id"] ?? null))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 259
            if ( !twig_test_empty(($context["toggle"] ?? null))) {
                echo " data-toggle=\"";
                echo twig_escape_filter($this->env, ($context["toggle"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 260
            if ( !twig_test_empty(($context["modal"] ?? null))) {
                echo " data-toggle=\"modal\" data-target=\"";
                echo twig_escape_filter($this->env, ($context["modal"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 261
            if ( !twig_test_empty(($context["onclick"] ?? null))) {
                echo " onclick=\"";
                echo twig_escape_filter($this->env, ($context["onclick"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 262
            if ( !twig_test_empty(($context["target"] ?? null))) {
                echo " target=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 263
            if ( !twig_test_empty(($context["attr"] ?? null))) {
                // line 264
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                    // line 265
                    echo "                    ";
                    echo twig_escape_filter($this->env, (" " . $context["name"]), "html", null, true);
                    echo "=";
                    if (twig_in_filter("\"", $context["value"])) {
                        echo "'";
                        echo $context["value"];
                        echo "'";
                    } else {
                        echo "\"";
                        echo $context["value"];
                        echo "\"";
                    }
                    // line 266
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 267
                echo "                ";
            }
            // line 268
            echo "        >";
            if ( !(null === ($context["title"] ?? null))) {
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            } else {
                echo twig_call_macro($macros["macro"], "macro_icon", [($context["icon"] ?? null)], 268, $context, $this->getSourceContext());
            }
            echo "</a>
    ";
            $___internal_593bb66cf118085d55881d300339423a47780c548285fd2e76f9949d742e5839_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 208
            echo twig_spaceless($___internal_593bb66cf118085d55881d300339423a47780c548285fd2e76f9949d742e5839_);

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 272
    public function macro_button_group($__actions__ = null, $__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "actions" => $__actions__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 273
            $macros["macro"] = $this;
            // line 274
            echo "<div class=\"btn-group\">";
            // line 275
            ob_start(function () { return ''; });
            // line 276
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["icon"] => $context["values"]) {
                // line 277
                echo "            ";
                echo twig_call_macro($macros["macro"], "macro_action_button", [$context["icon"], $context["values"], ($context["type"] ?? null)], 277, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['icon'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            $___internal_75f990c2197fbea7cfee2d56116be6c17ae31c903c63777f02210de9d211a6e5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 275
            echo twig_spaceless($___internal_75f990c2197fbea7cfee2d56116be6c17ae31c903c63777f02210de9d211a6e5_);
            // line 280
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 283
    public function macro_button_action($__icon__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 284
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default btn-";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 285
            echo twig_get_attribute($this->env, $this->source, ($context["macro"] ?? null), "icon", [0 => ($context["icon"] ?? null)], "method", false, false, false, 285);
            echo "
    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 289
    public function macro_tag_list($__taglist__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "taglist" => $__taglist__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 290
            echo "    ";
            $macros["macro"] = $this;
            // line 291
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taglist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 292
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_badge", [twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 292), "green"], 292, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/widgets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1327 => 292,  1322 => 291,  1319 => 290,  1306 => 289,  1294 => 285,  1287 => 284,  1273 => 283,  1263 => 280,  1261 => 275,  1251 => 277,  1247 => 276,  1245 => 275,  1243 => 274,  1241 => 273,  1227 => 272,  1218 => 208,  1208 => 268,  1205 => 267,  1199 => 266,  1186 => 265,  1181 => 264,  1179 => 263,  1173 => 262,  1167 => 261,  1161 => 260,  1155 => 259,  1149 => 258,  1145 => 257,  1140 => 256,  1137 => 255,  1134 => 254,  1131 => 253,  1129 => 252,  1126 => 251,  1123 => 250,  1120 => 249,  1117 => 248,  1114 => 247,  1111 => 246,  1108 => 245,  1105 => 244,  1102 => 243,  1099 => 242,  1096 => 241,  1093 => 240,  1090 => 239,  1087 => 238,  1084 => 237,  1081 => 236,  1078 => 235,  1075 => 234,  1072 => 233,  1069 => 232,  1066 => 231,  1063 => 230,  1060 => 229,  1057 => 228,  1054 => 227,  1052 => 226,  1049 => 225,  1046 => 224,  1043 => 223,  1040 => 222,  1037 => 221,  1034 => 220,  1031 => 219,  1028 => 218,  1025 => 217,  1022 => 216,  1019 => 215,  1016 => 214,  1013 => 213,  1010 => 212,  1007 => 211,  1004 => 210,  1002 => 209,  1000 => 208,  998 => 207,  983 => 206,  971 => 201,  969 => 183,  961 => 198,  955 => 196,  949 => 194,  947 => 193,  942 => 192,  939 => 191,  935 => 189,  932 => 188,  929 => 187,  926 => 186,  923 => 185,  919 => 184,  917 => 183,  912 => 180,  909 => 179,  907 => 178,  905 => 177,  892 => 176,  881 => 172,  870 => 170,  866 => 169,  860 => 166,  854 => 163,  851 => 162,  837 => 161,  822 => 154,  816 => 151,  810 => 148,  806 => 147,  800 => 144,  795 => 143,  777 => 142,  764 => 138,  752 => 137,  747 => 136,  731 => 135,  721 => 132,  715 => 130,  707 => 128,  705 => 127,  701 => 126,  694 => 125,  692 => 124,  686 => 122,  670 => 121,  656 => 118,  654 => 117,  640 => 116,  620 => 113,  618 => 112,  603 => 111,  590 => 107,  582 => 105,  579 => 104,  565 => 103,  554 => 99,  548 => 97,  540 => 95,  538 => 94,  529 => 92,  523 => 91,  506 => 90,  494 => 87,  491 => 86,  488 => 85,  474 => 84,  462 => 81,  459 => 80,  456 => 79,  453 => 78,  450 => 77,  447 => 76,  433 => 75,  421 => 72,  418 => 71,  415 => 70,  412 => 69,  409 => 68,  406 => 67,  403 => 66,  400 => 65,  397 => 64,  394 => 63,  391 => 62,  388 => 61,  385 => 60,  371 => 59,  359 => 56,  356 => 55,  343 => 54,  331 => 51,  318 => 50,  305 => 46,  299 => 44,  296 => 43,  293 => 42,  280 => 41,  268 => 38,  265 => 37,  252 => 36,  239 => 32,  233 => 30,  230 => 29,  227 => 28,  214 => 27,  202 => 24,  189 => 23,  177 => 18,  173 => 16,  171 => 15,  158 => 14,  146 => 9,  142 => 7,  140 => 6,  127 => 5,  115 => 2,  102 => 1,  97 => 288,  94 => 282,  91 => 271,  88 => 205,  85 => 175,  82 => 160,  79 => 141,  76 => 134,  73 => 120,  70 => 115,  67 => 110,  64 => 102,  61 => 89,  58 => 83,  55 => 74,  52 => 58,  49 => 53,  46 => 49,  43 => 40,  40 => 35,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "macros/widgets.html.twig", "/var/www/kimai2/templates/macros/widgets.html.twig");
    }
}
