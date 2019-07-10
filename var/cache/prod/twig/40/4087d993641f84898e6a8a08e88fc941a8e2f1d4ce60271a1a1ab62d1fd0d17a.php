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

/* export/index.html.twig */
class __TwigTemplate_c084211d1feda8e2fc87670f013d121286e572b2df9d2f0fd277ff792adb71e2 extends \Twig\Template
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
            'main_after' => [$this, 'block_main_after'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "export/index.html.twig", 2)->unwrap();
        // line 3
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "export/index.html.twig", 3)->unwrap();
        // line 4
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "export/index.html.twig", 4)->unwrap();
        // line 6
        $context["columns"] = ["date" => "alwaysVisible", "user" => "hidden-xs hidden-sm", "customer" => "hidden-xs hidden-sm", "project" => "hidden-xs hidden-sm", "activity" => "hidden-xs hidden-sm", "description" => "hidden-xs hidden-sm", "unit_price" => "hidden-xs", "duration" => "", "total_rate" => "", "exported" => "alwaysVisible"];
        // line 19
        $context["tableName"] = "export";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "export/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.title"), "html", null, true);
    }

    // line 22
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.subtitle"), "html", null, true);
    }

    // line 23
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $context["actions"] = ["filter" => "#collapseExport", "visibility" => "#modal_export", "off" => ["id" => "export-toggle-button"]];
        // line 29
        echo "    ";
        echo twig_call_macro($macros["widgets"], "macro_page_actions", [($context["actions"] ?? null)], 29, $context, $this->getSourceContext());
        echo "
";
    }

    // line 32
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        echo twig_call_macro($macros["toolbar"], "macro_toolbar", [($context["form"] ?? null), "collapseExport", true], 33, $context, $this->getSourceContext());
        echo "
    ";
        // line 34
        echo twig_call_macro($macros["tables"], "macro_data_table_column_modal", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 34, $context, $this->getSourceContext());
        echo "
";
    }

    // line 37
    public function block_main_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"clearfix\"></div>
";
    }

    // line 41
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "
    ";
        // line 43
        if (twig_test_empty(($context["entries"] ?? null))) {
            // line 44
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 44, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 46
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 46, $context, $this->getSourceContext());
            echo "
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 48
                echo "            ";
                $context["currency"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 48), "customer", [], "any", false, false, false, 48), "currency", [], "any", false, false, false, 48);
                // line 49
                echo "            ";
                $context["duration"] = $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 49));
                // line 50
                echo "            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["entry"], "fixedRate", [], "any", false, false, false, 50))) {
                    // line 51
                    echo "                ";
                    $context["rate"] = twig_get_attribute($this->env, $this->source, $context["entry"], "fixedRate", [], "any", false, false, false, 51);
                    // line 52
                    echo "                ";
                    $context["duration"] = 1;
                    // line 53
                    echo "            ";
                } elseif ( !(null === twig_get_attribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 53))) {
                    // line 54
                    echo "                ";
                    $context["rate"] = twig_get_attribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 54);
                    // line 55
                    echo "            ";
                } else {
                    // line 56
                    echo "                ";
                    $context["rate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 56), "preferenceValue", [0 => "hourly_rate"], "method", false, false, false, 56);
                    // line 57
                    echo "            ";
                }
                // line 58
                echo "            <tr>
                <td class=\"text-nowrap\">";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 59)), "html", null, true);
                echo "</td>
                <td class=\"";
                // line 60
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "user"], 60, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_user", [twig_get_attribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 60)], 60, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 61
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "customer"], 61, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_customer", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 61), "customer", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 62
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "project"], 62, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_project", [twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 63
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "activity"], 63, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_activity", [twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 64
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "description"], 64, $context, $this->getSourceContext());
                echo " timesheet-description\">
                    ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 65), "html", null, true);
                echo "
                </td>
                <td class=\"";
                // line 67
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "unit_price"], 67, $context, $this->getSourceContext());
                echo " text-nowrap\">
                    ";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["rate"] ?? null), ($context["currency"] ?? null)), "html", null, true);
                echo "
                </td>
                <td class=\"";
                // line 70
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "duration"], 70, $context, $this->getSourceContext());
                echo " text-nowrap\">
                    ";
                // line 71
                echo twig_escape_filter($this->env, ($context["duration"] ?? null), "html", null, true);
                echo "
                </td>
                <td class=\"";
                // line 73
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "total_rate"], 73, $context, $this->getSourceContext());
                echo " text-nowrap\">
                    ";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 74), ($context["currency"] ?? null)), "html", null, true);
                echo "
                </td>
                <td>
                ";
                // line 77
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit_export", $context["entry"])) {
                    // line 78
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["entry"], "exported", [], "any", false, false, false, 78)) {
                        // line 79
                        echo "                        <button type=\"button\" class=\"btn btn-default exportBtn active\" data-toggle=\"button\" aria-pressed=\"true\" autocomplete=\"off\"
                                data-exported-text=\"";
                        // line 80
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.exported"), "html", null, true);
                        echo "\" data-clean-text=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.not_exported"), "html", null, true);
                        echo "\" data-timesheet=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 80), "html", null, true);
                        echo "\">
                        ";
                        // line 81
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.exported"), "html", null, true);
                        echo "
                        </button>
                    ";
                    } else {
                        // line 84
                        echo "                        <button type=\"button\" class=\"btn btn-default exportBtn\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\"
                                data-exported-text=\"";
                        // line 85
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.exported"), "html", null, true);
                        echo "\" data-clean-text=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.not_exported"), "html", null, true);
                        echo "\" data-timesheet=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 85), "html", null, true);
                        echo "\">
                        ";
                        // line 86
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.not_exported"), "html", null, true);
                        echo "
                        </button>
                    ";
                    }
                    // line 89
                    echo "                ";
                } else {
                    // line 90
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["entry"], "exported", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.exported"), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 93
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.not_exported"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 95
                    echo "                ";
                }
                // line 96
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["entries"] ?? null)], 99, $context, $this->getSourceContext());
            echo "

        ";
            // line 101
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_export")) {
                // line 102
                echo "        <div class=\"row no-print\">
            <div class=\"col-xs-12\">
                <div class=\"btn-group pull-right\" id=\"export-buttons\" role=\"group\">
                    ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["renderer"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 106
                    echo "                        <button type=\"button\" id=\"export-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "any", false, false, false, 106), "html", null, true);
                    echo "-button\" class=\"btn btn-success startExportBtn\" data-type=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "any", false, false, false, 106), "html", null, true);
                    echo "\">
                            <i class=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon(twig_get_attribute($this->env, $this->source, $context["button"], "icon", [], "any", false, false, false, 107)), "html", null, true);
                    echo "\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("button." . twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 107))), "html", null, true);
                    echo "
                        </button>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "                </div>
            </div>
        </div>
        ";
            }
            // line 114
            echo "    ";
        }
        // line 115
        echo "
";
    }

    // line 118
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        function confirmToggleState(button)
        {
            var ALERT = kimai.getPlugin('alert');
            var message = '";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.clear_all"), "html", null, true);
        echo "';
            var hasActive = true;

            if (!\$('#export-toggle-button').hasClass('export-off')) {
                message = '";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.mark_all"), "html", null, true);
        echo "';
                hasActive = false;
            }

            ALERT.question(message, function(value) {
                if (!value) {
                    return;
                }
                var btn = \$(button);
                var exportButtons = \$('.exportBtn');
                // disabling does not yet work...
                if (exportButtons.length > 0) {
                    btn.addClass('disabled');
                }

                // ... as the clicks are asynchronous and the each comes back too early ...
                exportButtons.each(function () {
                    if (hasActive === \$(this).hasClass('active')) {
                        \$(this).click();
                    }
                });

                // ... so the button is re-enabled immediately - that should be fixed in a future update
                btn.removeClass('disabled');
                if (btn.hasClass('export-off')) {
                    btn.removeClass('export-off');
                    btn.html('<i class=\"fas fa-toggle-off\"></i>');
                } else {
                    btn.addClass('export-off');
                    btn.html('<i class=\"fas fa-toggle-on\"></i>');
                }
            });
        }

        function updateTimesheetExportState(button, id, exported)
        {
            var ALERT = kimai.getPlugin('alert');

            // FIXME use Kimai API plugin
            \$.ajax({
                url: '";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_timesheet", ["id" => "-s-"]);
        echo "'.replace('-s-', id),
                headers: {
                    'X-AUTH-SESSION': true,
                    'Content-Type':'application/json'
                },
                method: 'PATCH',
                success: function(data) {
                    if (exported) {
                        button.button('exported');
                    } else {
                        button.button('clean');
                    }
                    if (\$('select#exported').val() !== '";
        // line 181
        echo twig_escape_filter($this->env, twig_constant("App\\Repository\\Query\\TimesheetQuery::STATE_ALL"), "html", null, true);
        echo "') {
                        button.closest('tr').hide('ease', function() {
                            \$(this).remove();
                            if(\$(this).closest('table').find('tbody tr:visible').length === 0) {
                                \$('#export-buttons button').prop('disabled', true);
                            }
                        });
                    }
                }, error: function(jqXHR, textStatus, errorThrown) {
                    var message = 'An error occured';
                    if (jqXHR.responseJSON !== undefined) {
                        message = jqXHR.responseJSON.message;
                        if (jqXHR.responseJSON.errors !== undefined)
                        {
                            var errors = jqXHR.responseJSON.errors.errors;
                            for (var i = 0; i < errors.length; i++) {
                                message += ' / ' + errors[i];
                            }
                        }
                    }
                    ALERT.error('";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.update.error", [], "flashmessages"), "html", null, true);
        echo "', message);
                    button.button('reset');
                    if (exported) {
                        button.removeClass('active');
                    } else {
                        button.addClass('active');
                    }
                }
            });
        }

        document.addEventListener('kimai.initialized', function() {
            \$('body').on('click', '.exportBtn', function() {
                var button = \$(this);
                var id = button.attr('data-timesheet');
                updateTimesheetExportState(button, id, !button.hasClass('active'));
            });

            \$('#export-toggle-button').on('click', function () {
                confirmToggleState(this);
            });

            \$('body').on('click', '#export-buttons .startExportBtn', function() {
                \$('#type').val(\$(this).attr('data-type'));
                var \$form = \$(\"#export-form\");
                var prevAction = \$form.attr('action');
                \$form.attr('target', '_blank').attr('action', '";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_data");
        echo "');
                \$form.submit();
                \$('#type').val('');
                \$form.removeAttr('target').attr('action', prevAction);
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "export/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 227,  456 => 201,  433 => 181,  418 => 169,  375 => 129,  368 => 125,  358 => 119,  354 => 118,  349 => 115,  346 => 114,  340 => 110,  329 => 107,  322 => 106,  318 => 105,  313 => 102,  311 => 101,  305 => 99,  297 => 96,  294 => 95,  288 => 93,  282 => 91,  279 => 90,  276 => 89,  270 => 86,  262 => 85,  259 => 84,  253 => 81,  245 => 80,  242 => 79,  239 => 78,  237 => 77,  231 => 74,  227 => 73,  222 => 71,  218 => 70,  213 => 68,  209 => 67,  204 => 65,  200 => 64,  194 => 63,  188 => 62,  182 => 61,  176 => 60,  172 => 59,  169 => 58,  166 => 57,  163 => 56,  160 => 55,  157 => 54,  154 => 53,  151 => 52,  148 => 51,  145 => 50,  142 => 49,  139 => 48,  135 => 47,  130 => 46,  124 => 44,  122 => 43,  119 => 42,  115 => 41,  110 => 38,  106 => 37,  100 => 34,  95 => 33,  91 => 32,  84 => 29,  81 => 24,  77 => 23,  70 => 22,  63 => 21,  58 => 1,  56 => 19,  54 => 6,  52 => 4,  50 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "export/index.html.twig", "/var/www/kimai2/templates/export/index.html.twig");
    }
}
