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

/* timesheet/index.html.twig */
class __TwigTemplate_2f247e8dbcc44a7f1af87ece03e2c4a4e81f1d8fc533c854ec298edd0df55d40 extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "timesheet/index.html.twig", 2)->unwrap();
        // line 3
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "timesheet/index.html.twig", 3)->unwrap();
        // line 4
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "timesheet/index.html.twig", 4)->unwrap();
        // line 5
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "timesheet/index.html.twig", 5)->unwrap();
        // line 6
        $macros["timesheet"] = $this->macros["timesheet"] = $this;
        // line 8
        $context["tableName"] = "timesheet";
        // line 9
        $context["canSeeRate"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_rate_own_timesheet");
        // line 10
        $context["columns"] = ["date" => "alwaysVisible"];
        // line 14
        if (($context["showStartEndTime"] ?? null)) {
            // line 15
            $context["columns"] = twig_array_merge(($context["columns"] ?? null), ["starttime" => "", "endtime" => "hidden-xs"]);
        }
        // line 20
        $context["columns"] = twig_array_merge(($context["columns"] ?? null), ["duration" => ""]);
        // line 21
        if (($context["canSeeRate"] ?? null)) {
            // line 22
            $context["columns"] = twig_array_merge(($context["columns"] ?? null), ["rate" => "hidden-xs"]);
        }
        // line 24
        $context["columns"] = twig_array_merge(($context["columns"] ?? null), ["customer" => "hidden-xs hidden-sm hidden-md", "project" => "hidden-xs hidden-sm hidden-md", "activity" => "hidden-xs hidden-sm", "description" => "hidden-xs hidden-sm", "tags" => "hidden-xs hidden-sm", "actions" => "actions alwaysVisible"]);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "timesheet/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.title"), "html", null, true);
    }

    // line 34
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.subtitle"), "html", null, true);
    }

    // line 35
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_timesheets", ["index"], 35, $context, $this->getSourceContext());
    }

    // line 37
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        echo twig_call_macro($macros["toolbar"], "macro_toolbar", [($context["toolbarForm"] ?? null), "collapseTimesheet", ($context["showFilter"] ?? null)], 38, $context, $this->getSourceContext());
        echo "
    ";
        // line 39
        echo twig_call_macro($macros["tables"], "macro_data_table_column_modal", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 39, $context, $this->getSourceContext());
        echo "
";
    }

    // line 42
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "
    ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["entries"] ?? null), "count", [], "any", false, false, false, 44) == 0)) {
            // line 45
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 45, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 47
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null), ($context["showSummary"] ?? null), "kimai.timesheetUpdate"], 47, $context, $this->getSourceContext());
            echo "

        ";
            // line 49
            $context["day"] = null;
            // line 50
            echo "        ";
            $context["dayDuration"] = 0;
            // line 51
            echo "        ";
            $context["dayRate"] = [];
            // line 52
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 53
                $context["customerCurrency"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 53), "customer", [], "any", false, false, false, 53), "currency", [], "any", false, false, false, 53);
                // line 54
                if ((($context["day"] ?? null) === null)) {
                    // line 55
                    $context["day"] = $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 55));
                    // line 56
                    echo "            ";
                }
                // line 57
                if ((($context["showSummary"] ?? null) &&  !(($context["day"] ?? null) === $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 57))))) {
                    // line 58
                    echo twig_call_macro($macros["timesheet"], "macro_summary", [($context["day"] ?? null), ($context["dayDuration"] ?? null), ($context["dayRate"] ?? null), ($context["columns"] ?? null), ($context["canSeeRate"] ?? null), ($context["showStartEndTime"] ?? null), ($context["tableName"] ?? null)], 58, $context, $this->getSourceContext());
                    echo "
                ";
                    // line 59
                    $context["day"] = $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 59));
                    // line 60
                    echo "                ";
                    $context["dayDuration"] = 0;
                    // line 61
                    echo "                ";
                    $context["dayRate"] = [];
                }
                // line 63
                echo "<tr";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["entry"])) {
                    echo " class=\"modal-ajax-form open-edit\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                    echo "\"";
                }
                echo ">
                <td class=\"text-nowrap ";
                // line 64
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "date"], 64, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 64)), "html", null, true);
                echo "</td>

                ";
                // line 66
                if (($context["showStartEndTime"] ?? null)) {
                    // line 67
                    echo "                    <td class=\"text-nowrap ";
                    echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "starttime"], 67, $context, $this->getSourceContext());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->time(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 67)), "html", null, true);
                    echo "</td>
                    <td class=\"text-nowrap ";
                    // line 68
                    echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "endtime"], 68, $context, $this->getSourceContext());
                    echo "\">
                        ";
                    // line 69
                    if (twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 69)) {
                        // line 70
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->time(twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 70)), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 72
                        echo "                            &dash;
                        ";
                    }
                    // line 74
                    echo "                    </td>
                ";
                }
                // line 76
                echo "
                ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                    <td class=\"text-nowrap ";
                    echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "duration"], 78, $context, $this->getSourceContext());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 78)), "html", null, true);
                    echo "</td>
                ";
                } else {
                    // line 80
                    echo "                    <td class=\"text-nowrap ";
                    echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "duration"], 80, $context, $this->getSourceContext());
                    echo "\">
                        <i data-since=\"";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 81), "format", [0 => twig_constant("DATE_ISO8601")], "method", false, false, false, 81), "html", null, true);
                    echo "\" data-format=\"";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->getDurationFormat(), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration($context["entry"]), "html", null, true);
                    echo "</i>
                    </td>
                ";
                }
                // line 84
                echo "
                ";
                // line 85
                if (($context["canSeeRate"] ?? null)) {
                    // line 86
                    echo "                <td class=\"text-nowrap ";
                    echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "rate"], 86, $context, $this->getSourceContext());
                    echo "\">
                    ";
                    // line 87
                    if ( !twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 87)) {
                        // line 88
                        echo "                        &dash;
                    ";
                    } else {
                        // line 90
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 90), "customer", [], "any", false, false, false, 90), "currency", [], "any", false, false, false, 90)), "html", null, true);
                        echo "
                    ";
                    }
                    // line 92
                    echo "                </td>
                ";
                }
                // line 94
                echo "
                <td class=\"";
                // line 95
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "customer"], 95, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_customer", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 95), "customer", [], "any", false, false, false, 95)], 95, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 96
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "project"], 96, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_project", [twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 96)], 96, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 97
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "activity"], 97, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_activity", [twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 97)], 97, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 98
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "description"], 98, $context, $this->getSourceContext());
                echo " timesheet-description\">";
                echo $this->extensions['App\Twig\MarkdownExtension']->timesheetContent(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 98));
                echo "</td>
                <td class=\"";
                // line 99
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "tags"], 99, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_tag_list", [twig_get_attribute($this->env, $this->source, $context["entry"], "tags", [], "any", false, false, false, 99)], 99, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"actions\">";
                // line 101
                echo twig_call_macro($macros["actions"], "macro_timesheet", [$context["entry"], "index"], 101, $context, $this->getSourceContext());
                // line 102
                echo "</td>
            </tr>";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 104)) {
                    // line 105
                    if ( !twig_get_attribute($this->env, $this->source, ($context["dayRate"] ?? null), ($context["customerCurrency"] ?? null), [], "array", true, true, false, 105)) {
                        // line 106
                        echo "                    ";
                        $context["dayRate"] = twig_array_merge(($context["dayRate"] ?? null), [($context["customerCurrency"] ?? null) => 0]);
                        // line 107
                        echo "                ";
                    }
                    // line 108
                    echo "                ";
                    $context["dayRate"] = twig_array_merge(($context["dayRate"] ?? null), [($context["customerCurrency"] ?? null) => ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["dayRate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["customerCurrency"] ?? null)] ?? null) : null) + twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 108))]);
                }
                // line 110
                $context["dayDuration"] = (($context["dayDuration"] ?? null) + twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 110));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "
        ";
            // line 113
            if (($context["showSummary"] ?? null)) {
                // line 114
                echo "            ";
                echo twig_call_macro($macros["timesheet"], "macro_summary", [($context["day"] ?? null), ($context["dayDuration"] ?? null), ($context["dayRate"] ?? null), ($context["columns"] ?? null), ($context["canSeeRate"] ?? null), ($context["showStartEndTime"] ?? null), ($context["tableName"] ?? null)], 114, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 116
            echo "
        ";
            // line 117
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["entries"] ?? null), "timesheet_paginated"], 117, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 119
        echo "
";
    }

    // line 122
    public function macro_summary($__day__ = null, $__duration__ = null, $__dayRates__ = null, $__columns__ = null, $__canSeeRate__ = null, $__showStartEndTime__ = null, $__tableName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "day" => $__day__,
            "duration" => $__duration__,
            "dayRates" => $__dayRates__,
            "columns" => $__columns__,
            "canSeeRate" => $__canSeeRate__,
            "showStartEndTime" => $__showStartEndTime__,
            "tableName" => $__tableName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 123
            echo "    ";
            $macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "timesheet/index.html.twig", 123)->unwrap();
            // line 124
            echo "    <tr class=\"summary info\">
        <td class=\"text-nowrap\">";
            // line 125
            echo twig_escape_filter($this->env, ($context["day"] ?? null), "html", null, true);
            echo "</td>
        ";
            // line 126
            if (($context["showStartEndTime"] ?? null)) {
                // line 127
                echo "            <td class=\"";
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "starttime"], 127, $context, $this->getSourceContext());
                echo "\"></td>
            <td class=\"";
                // line 128
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "endtime"], 128, $context, $this->getSourceContext());
                echo "\"></td>
        ";
            }
            // line 130
            echo "        <td class=\"text-nowrap ";
            echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "duration"], 130, $context, $this->getSourceContext());
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["duration"] ?? null)), "html", null, true);
            echo "</td>
        ";
            // line 131
            if (($context["canSeeRate"] ?? null)) {
                // line 132
                echo "            <td class=\"text-nowrap ";
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "rate"], 132, $context, $this->getSourceContext());
                echo "\">
                ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dayRates"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["currency"] => $context["rate"]) {
                    // line 134
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money($context["rate"], $context["currency"]), "html", null, true);
                    echo "
                    ";
                    // line 135
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 135)) {
                        // line 136
                        echo "                        <br>
                    ";
                    }
                    // line 138
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['currency'], $context['rate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "            </td>
        ";
            }
            // line 141
            echo "        <td class=\"";
            echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "customer"], 141, $context, $this->getSourceContext());
            echo "\"></td>
        <td class=\"";
            // line 142
            echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "project"], 142, $context, $this->getSourceContext());
            echo "\"></td>
        <td class=\"";
            // line 143
            echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "activity"], 143, $context, $this->getSourceContext());
            echo "\"></td>
        <td class=\"";
            // line 144
            echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "description"], 144, $context, $this->getSourceContext());
            echo "\"></td>
        <td class=\"";
            // line 145
            echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "tags"], 145, $context, $this->getSourceContext());
            echo "\"></td>
        <td class=\"actions\"></td>
    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "timesheet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 145,  470 => 144,  466 => 143,  462 => 142,  457 => 141,  453 => 139,  439 => 138,  435 => 136,  433 => 135,  428 => 134,  411 => 133,  406 => 132,  404 => 131,  397 => 130,  392 => 128,  387 => 127,  385 => 126,  381 => 125,  378 => 124,  375 => 123,  356 => 122,  351 => 119,  346 => 117,  343 => 116,  337 => 114,  335 => 113,  332 => 112,  326 => 110,  322 => 108,  319 => 107,  316 => 106,  314 => 105,  312 => 104,  309 => 102,  307 => 101,  301 => 99,  295 => 98,  289 => 97,  283 => 96,  277 => 95,  274 => 94,  270 => 92,  264 => 90,  260 => 88,  258 => 87,  253 => 86,  251 => 85,  248 => 84,  238 => 81,  233 => 80,  225 => 78,  223 => 77,  220 => 76,  216 => 74,  212 => 72,  206 => 70,  204 => 69,  200 => 68,  193 => 67,  191 => 66,  184 => 64,  175 => 63,  171 => 61,  168 => 60,  166 => 59,  162 => 58,  160 => 57,  157 => 56,  155 => 55,  153 => 54,  151 => 53,  146 => 52,  143 => 51,  140 => 50,  138 => 49,  132 => 47,  126 => 45,  124 => 44,  121 => 43,  117 => 42,  111 => 39,  106 => 38,  102 => 37,  95 => 35,  88 => 34,  81 => 33,  76 => 1,  74 => 24,  71 => 22,  69 => 21,  67 => 20,  64 => 15,  62 => 14,  60 => 10,  58 => 9,  56 => 8,  54 => 6,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "timesheet/index.html.twig", "/var/www/kimai2/templates/timesheet/index.html.twig");
    }
}
