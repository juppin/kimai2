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

/* user/layout.html.twig */
class __TwigTemplate_94d9c14aafbc10fd1c19343b63fdf556885d9b68eb7d88f30662a14144c1ec36 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'profile_content' => [$this, 'block_profile_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "user/layout.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.title"), "html", null, true);
    }

    // line 5
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.subtitle"), "html", null, true);
    }

    // line 6
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_user", [($context["user"] ?? null), ($context["tab"] ?? null)], 6, $context, $this->getSourceContext());
    }

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $macros["macro"] = $this;
        // line 10
        echo "    ";
        $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/layout.html.twig", 10)->unwrap();
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-md-9\">

            ";
        // line 15
        $this->displayBlock('profile_content', $context, $blocks);
        // line 16
        echo "
        </div>

        <div class=\"col-md-3\">
            ";
        // line 20
        echo twig_call_macro($macros["macro"], "macro_profile_box", [($context["user"] ?? null), ($context["stats"] ?? null)], 20, $context, $this->getSourceContext());
        echo "
            ";
        // line 21
        echo twig_call_macro($macros["macro"], "macro_profile_infos", [($context["user"] ?? null), ($context["stats"] ?? null)], 21, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
";
    }

    // line 15
    public function block_profile_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function macro_profile_infos($__user__ = null, $__stats__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "stats" => $__stats__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo "    <div class=\"box box-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 27), "type", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.about_me"), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"box-body\">
            <ul class=\"nav nav-stacked\">
                ";
            // line 34
            echo "                <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id"), "html", null, true);
            echo " <span class=\"pull-right badge bg-aqua\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</span></a></li>
                <li><a href=\"#\">";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
            echo " <span class=\"pull-right badge bg-blue\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 35), "html", null, true);
            echo "</span></a></li>
                <li><a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.first_entry"), "html", null, true);
            echo " <span class=\"pull-right badge bg-purple\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "firstEntry", [], "any", false, false, false, 36)), "html", null, true);
            echo "</span></a></li>
                ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_rate_own_timesheet")) {
                // line 38
                echo "                <li><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.hourlyRate"), "html", null, true);
                echo " <span class=\"pull-right badge bg-blue\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "preferenceValue", [0 => "hourly_rate"], "method", false, false, false, 38), "html", null, true);
                echo "</span></a></li>
                ";
            }
            // line 40
            echo "            </ul>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 45
    public function macro_profile_box($__user__ = null, $__stats__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "stats" => $__stats__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 46
            echo "    ";
            $macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "user/layout.html.twig", 46)->unwrap();
            // line 47
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/layout.html.twig", 47)->unwrap();
            // line 48
            echo "
    <div class=\"box box-";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 49), "type", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
        <div class=\"box-body box-profile\">
            ";
            // line 51
            echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 51), "profile-user-img img-responsive img-circle"], 51, $context, $this->getSourceContext());
            echo "
            <h3 class=\"profile-username text-center\">";
            // line 52
            echo twig_call_macro($macros["widgets"], "macro_username", [($context["user"] ?? null)], 52, $context, $this->getSourceContext());
            echo "</h3>

            <p class=\"text-muted text-center\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>

            <ul class=\"list-group list-group-unbordered\">

                <li class=\"list-group-item\">
                    <b>";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationMonth"), "html", null, true);
            echo "</b> <a class=\"pull-right\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "durationThisMonth", [], "any", false, false, false, 59)), "html", null, true);
            echo "</a>
                </li>

                ";
            // line 62
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_rate_own_timesheet")) {
                // line 63
                echo "                <li class=\"list-group-item\">
                    <b>";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.amountMonth"), "html", null, true);
                echo "</b> <a class=\"pull-right\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "amountThisMonth", [], "any", false, false, false, 64)), "html", null, true);
                echo "</a>
                </li>
                ";
            }
            // line 67
            echo "
                <li class=\"list-group-item\">
                    <b>";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationTotal"), "html", null, true);
            echo "</b> <a class=\"pull-right\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "durationTotal", [], "any", false, false, false, 69)), "html", null, true);
            echo "</a>
                </li>

                ";
            // line 72
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_rate_own_timesheet")) {
                // line 73
                echo "                <li class=\"list-group-item\">
                    <b>";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.amountTotal"), "html", null, true);
                echo "</b> <a class=\"pull-right\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "amountTotal", [], "any", false, false, false, 74)), "html", null, true);
                echo "</a>
                </li>
                ";
            }
            // line 77
            echo "
            </ul>

        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 85
    public function macro_profile_list_unused($__user__ = null, $__items__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "items" => $__items__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 86
            echo "    ";
            $macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "user/layout.html.twig", 86)->unwrap();
            // line 87
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/layout.html.twig", 87)->unwrap();
            // line 88
            echo "
    <div class=\"box box-widget widget-user-2\">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class=\"widget-user-header bg-green\">
            <div class=\"widget-user-image\">
                ";
            // line 93
            echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 93)], 93, $context, $this->getSourceContext());
            echo "
            </div>
            <!-- /.widget-user-image -->
            <h3 class=\"widget-user-username\">";
            // line 96
            echo twig_call_macro($macros["widgets"], "macro_username", [($context["user"] ?? null)], 96, $context, $this->getSourceContext());
            echo "</h3>
            <h5 class=\"widget-user-desc\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 97), "html", null, true);
            echo "</h5>
        </div>
        <div class=\"box-footer no-padding\">
            <ul class=\"nav nav-stacked\">
                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 102
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 102), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 102)), "html", null, true);
                echo " <span class=\"pull-right badge bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "color", [], "any", false, false, false, 102), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "value", [], "any", false, false, false, 102), "html", null, true);
                echo "</span></a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "            </ul>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 110
    public function macro_profile_box_unused($__user__ = null, $__stats__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "stats" => $__stats__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 111
            echo "    ";
            $macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "user/layout.html.twig", 111)->unwrap();
            // line 112
            echo "    ";
            $macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/layout.html.twig", 112)->unwrap();
            // line 113
            echo "
    <div class=\"box box-widget widget-user\">
        <div class=\"widget-user-header bg-green\">
            <h3 class=\"widget-user-username\">";
            // line 116
            echo twig_call_macro($macros["widgets"], "macro_username", [($context["user"] ?? null)], 116, $context, $this->getSourceContext());
            echo "</h3>
            <h5 class=\"widget-user-desc\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 117), "html", null, true);
            echo "</h5>
        </div>
        <div class=\"widget-user-image\">
            ";
            // line 120
            echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 120), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 120)], 120, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"box-footer\">
            <div class=\"row\">
                <div class=\"col-sm-6 border-right\">
                    <div class=\"description-block\">
                        <h5 class=\"description-header\">";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "durationTotal", [], "any", false, false, false, 126)), "html", null, true);
            echo "</h5>
                        <span class=\"description-text\">";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationTotal"), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div class=\"col-sm-6 border-right\">
                    <div class=\"description-block\">
                        <h5 class=\"description-header\">";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "amountTotal", [], "any", false, false, false, 132)), "html", null, true);
            echo "</h5>
                        <span class=\"description-text\">";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.amountTotal"), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div class=\"col-sm-6 border-right\">
                    <div class=\"description-block\">
                        <h5 class=\"description-header\">";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "durationThisMonth", [], "any", false, false, false, 138)), "html", null, true);
            echo "</h5>
                        <span class=\"description-text\">";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationMonth"), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div class=\"col-sm-6 border-right\">
                    <div class=\"description-block\">
                        <h5 class=\"description-header\">";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "amountThisMonth", [], "any", false, false, false, 144)), "html", null, true);
            echo "</h5>
                        <span class=\"description-text\">";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.amountMonth"), "html", null, true);
            echo "</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "user/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 145,  444 => 144,  436 => 139,  432 => 138,  424 => 133,  420 => 132,  412 => 127,  408 => 126,  399 => 120,  393 => 117,  389 => 116,  384 => 113,  381 => 112,  378 => 111,  364 => 110,  352 => 104,  337 => 102,  333 => 101,  326 => 97,  322 => 96,  316 => 93,  309 => 88,  306 => 87,  303 => 86,  289 => 85,  275 => 77,  267 => 74,  264 => 73,  262 => 72,  254 => 69,  250 => 67,  242 => 64,  239 => 63,  237 => 62,  229 => 59,  221 => 54,  216 => 52,  212 => 51,  207 => 49,  204 => 48,  201 => 47,  198 => 46,  184 => 45,  172 => 40,  164 => 38,  162 => 37,  156 => 36,  150 => 35,  143 => 34,  136 => 29,  130 => 27,  116 => 26,  110 => 15,  102 => 21,  98 => 20,  92 => 16,  90 => 15,  84 => 11,  81 => 10,  78 => 9,  74 => 8,  67 => 6,  60 => 5,  53 => 4,  48 => 1,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/layout.html.twig", "/var/www/kimai2/templates/user/layout.html.twig");
    }
}
