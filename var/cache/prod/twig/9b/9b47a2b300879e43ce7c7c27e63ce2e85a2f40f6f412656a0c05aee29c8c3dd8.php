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

/* timesheet-team/index.html.twig */
class __TwigTemplate_e61f14c51b5c4033927db4b952d13477f01faf77eec6d032d52ff319fcee8073 extends \Twig\Template
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
            'main_before' => [$this, 'block_main_before'],
            'main' => [$this, 'block_main'],
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "timesheet-team/index.html.twig", 2)->unwrap();
        // line 3
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "timesheet-team/index.html.twig", 3)->unwrap();
        // line 4
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "timesheet-team/index.html.twig", 4)->unwrap();
        // line 5
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "timesheet-team/index.html.twig", 5)->unwrap();
        // line 7
        $context["tableName"] = "timesheet_admin";
        // line 8
        $context["columns"] = ["date" => "alwaysVisible"];
        // line 12
        if (($context["showStartEndTime"] ?? null)) {
            // line 13
            $context["columns"] = twig_array_merge(($context["columns"] ?? null), ["starttime" => "hidden-xs", "endtime" => "hidden-xs"]);
        }
        // line 19
        $context["columns"] = twig_array_merge(($context["columns"] ?? null), ["duration" => "", "rate" => "", "customer" => "hidden-xs hidden-sm hidden-md", "project" => "hidden-xs hidden-sm hidden-md", "activity" => "hidden-xs hidden-sm", "username" => "hidden-xs", "description" => "hidden-xs hidden-sm", "tags" => "hidden-xs hidden-sm", "actions" => "actions alwaysVisible"]);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "timesheet-team/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_timesheet.title"), "html", null, true);
    }

    // line 32
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_timesheet.subtitle"), "html", null, true);
    }

    // line 33
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_timesheets_team", ["index"], 33, $context, $this->getSourceContext());
    }

    // line 35
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    ";
        echo twig_call_macro($macros["toolbar"], "macro_toolbar", [($context["toolbarForm"] ?? null), "collapseTimesheetAdmin", ($context["showFilter"] ?? null)], 36, $context, $this->getSourceContext());
        echo "
    ";
        // line 37
        echo twig_call_macro($macros["tables"], "macro_data_table_column_modal", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 37, $context, $this->getSourceContext());
        echo "
";
    }

    // line 40
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "
    ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["entries"] ?? null), "count", [], "any", false, false, false, 42) == 0)) {
            // line 43
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 43, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 45
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null), false, "kimai.timesheetUpdate"], 45, $context, $this->getSourceContext());
            echo "

        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 48
                echo "            <tr";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["entry"])) {
                    echo " class=\"modal-ajax-form open-edit\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                    echo "\"";
                }
                echo ">
                <td class=\"text-nowrap ";
                // line 49
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "date"], 49, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 49)), "html", null, true);
                echo "</td>

                ";
                // line 51
                if (($context["showStartEndTime"] ?? null)) {
                    // line 52
                    echo "                    <td class=\"text-nowrap ";
                    echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "starttime"], 52, $context, $this->getSourceContext());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->time(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 52)), "html", null, true);
                    echo "</td>
                    <td class=\"text-nowrap ";
                    // line 53
                    echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "endtime"], 53, $context, $this->getSourceContext());
                    echo "\">
                        ";
                    // line 54
                    if (twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 54)) {
                        // line 55
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->time(twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 55)), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 57
                        echo "                            &dash;
                        ";
                    }
                    // line 59
                    echo "                    </td>
                ";
                }
                // line 61
                echo "
                ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                    <td class=\"text-nowrap ";
                    echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "duration"], 63, $context, $this->getSourceContext());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 63)), "html", null, true);
                    echo "</td>
                ";
                } else {
                    // line 65
                    echo "                    <td class=\"text-nowrap ";
                    echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "duration"], 65, $context, $this->getSourceContext());
                    echo "\">
                        <i data-since=\"";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 66), "format", [0 => twig_constant("DATE_ISO8601")], "method", false, false, false, 66), "html", null, true);
                    echo "\" data-format=\"";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->getDurationFormat(), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration($context["entry"]), "html", null, true);
                    echo "</i>
                    </td>
                ";
                }
                // line 69
                echo "
                <td class=\"text-nowrap ";
                // line 70
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "rate"], 70, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 71
                if (( !twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 71) ||  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_rate", $context["entry"]))) {
                    // line 72
                    echo "                        &dash;
                    ";
                } else {
                    // line 74
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 74), "customer", [], "any", false, false, false, 74), "currency", [], "any", false, false, false, 74)), "html", null, true);
                    echo "
                    ";
                }
                // line 76
                echo "                </td>
                <td class=\"";
                // line 77
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "customer"], 77, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 78
                echo twig_call_macro($macros["widgets"], "macro_label_customer", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 78), "customer", [], "any", false, false, false, 78)], 78, $context, $this->getSourceContext());
                echo "
                </td>
                <td class=\"";
                // line 80
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "project"], 80, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 81
                echo twig_call_macro($macros["widgets"], "macro_label_project", [twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 81)], 81, $context, $this->getSourceContext());
                echo "
                </td>
                <td class=\"";
                // line 83
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "activity"], 83, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 84
                echo twig_call_macro($macros["widgets"], "macro_label_activity", [twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 84)], 84, $context, $this->getSourceContext());
                echo "
                </td>
                <td class=\"";
                // line 86
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "username"], 86, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 87
                echo twig_call_macro($macros["widgets"], "macro_label_user", [twig_get_attribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 87)], 87, $context, $this->getSourceContext());
                echo "
                </td>
                <td class=\"";
                // line 89
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "description"], 89, $context, $this->getSourceContext());
                echo "\">";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 89), "html", null, true));
                echo "</td>
                <td class=\"";
                // line 90
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "tags"], 90, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_tag_list", [twig_get_attribute($this->env, $this->source, $context["entry"], "tags", [], "any", false, false, false, 90)], 90, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"actions\">";
                // line 92
                echo twig_call_macro($macros["actions"], "macro_timesheet_team", [$context["entry"], "index"], 92, $context, $this->getSourceContext());
                // line 93
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "
        ";
            // line 97
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["entries"] ?? null), "admin_timesheet_paginated"], 97, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 99
        echo "
";
    }

    public function getTemplateName()
    {
        return "timesheet-team/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 99,  287 => 97,  284 => 96,  276 => 93,  274 => 92,  268 => 90,  262 => 89,  257 => 87,  253 => 86,  248 => 84,  244 => 83,  239 => 81,  235 => 80,  230 => 78,  226 => 77,  223 => 76,  217 => 74,  213 => 72,  211 => 71,  207 => 70,  204 => 69,  194 => 66,  189 => 65,  181 => 63,  179 => 62,  176 => 61,  172 => 59,  168 => 57,  162 => 55,  160 => 54,  156 => 53,  149 => 52,  147 => 51,  140 => 49,  131 => 48,  127 => 47,  121 => 45,  115 => 43,  113 => 42,  110 => 41,  106 => 40,  100 => 37,  95 => 36,  91 => 35,  84 => 33,  77 => 32,  70 => 31,  65 => 1,  63 => 19,  60 => 13,  58 => 12,  56 => 8,  54 => 7,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "timesheet-team/index.html.twig", "/var/www/kimai2/templates/timesheet-team/index.html.twig");
    }
}
