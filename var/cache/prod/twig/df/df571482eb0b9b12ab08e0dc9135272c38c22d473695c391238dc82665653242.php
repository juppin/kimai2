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

/* export/renderer/default.html.twig */
class __TwigTemplate_2529457598c0ef11e57945711a04e5351a35f2efe9b7c212026a01ee9a32462d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'styles' => [$this, 'block_styles'],
            'export' => [$this, 'block_export'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "export/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "export/renderer/default.html.twig", 1)->unwrap();
        // line 4
        $context["columnTitles"] = [];
        // line 5
        $context["columns"] = ["date" => true, "username" => false, "customer" => true, "project" => true, "activity" => true, "description" => false, "exported" => false, "tags" => false];
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["metaFields"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["metaField"]) {
            // line 17
            $context["columns"] = twig_array_merge(($context["columns"] ?? null), [$context["metaField"] => true]);
            // line 18
            $context["columnTitles"] = twig_array_merge(($context["columnTitles"] ?? null), [$context["metaField"] => $context["metaField"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['metaField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        $context["columns"] = twig_array_merge(($context["columns"] ?? null), ["hourlyRate" => false, "fixedRate" => false, "duration" => "label.duration", "rate" => "label.rate"]);
        // line 2
        $this->parent = $this->loadTemplate("export/layout.html.twig", "export/renderer/default.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <script type=\"text/javascript\">
        document.getElementById('summary-by-activities').addEventListener('click', function(event) {
            document.getElementById('summary-project').style.display = event.target.checked ? 'none' : 'table';
            document.getElementById('summary-activity').style.display = event.target.checked ? 'table' : 'none';
        });
        document.getElementById('summary-show').addEventListener('click', function(event) {
            document.getElementById('export-summary').style.display = event.target.checked ? 'block' : 'none';
        });
        document.getElementById('records-show').addEventListener('click', function(event) {
            document.getElementById('export-records').style.display = event.target.checked ? 'block' : 'none';
        });
        var columnCheckboxes = document.getElementsByClassName('column-visibility-changer');
        for (var checkbox of columnCheckboxes) {
            checkbox.addEventListener('click', function(event) {
                var cells = document.getElementsByClassName('column-'+event.target.name);
                for (var columnCell of cells) {
                    columnCell.style.display = event.target.checked ? 'table-cell' : 'none';
                }
            });
        }
    </script>
";
    }

    // line 52
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    <style>
        .items tr.summary {
        }
        .items td.totals {
            font-weight: bold;
            text-align: right;
        }
        .items td.duration,
        .items th.duration,
        .items th.cost,
        .items td.cost {
            text-align: center;
        }
        .toolbar {
            border-bottom: 1px solid #ccc;
            background-color: #eee;
            padding: 5px 0 0 5px;
        }
    </style>
";
    }

    // line 74
    public function block_export($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "    <div class=\"row no-print toolbar\">
        <div class=\"col-xs-12\">
            <form class=\"navbar-form\">
                <div class=\"form-group\">
                    ";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.summary"), "html", null, true);
        echo ":
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\" for=\"summary-show\">
                        <input type=\"checkbox\" id=\"summary-show\" name=\"summary-show\" checked=\"checked\">
                        ";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.visible"), "html", null, true);
        echo "
                    </label>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\" for=\"summary-by-activities\">
                        <input type=\"checkbox\" id=\"summary-by-activities\" name=\"summary-by-activities\">
                        ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.activity"), "html", null, true);
        echo "
                    </label>
                </div>
            </form>

            <form class=\"navbar-form\">
                <div class=\"form-group\">
                    ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.full_list"), "html", null, true);
        echo ":
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\" for=\"records-show\">
                        <input type=\"checkbox\" id=\"records-show\" name=\"records-show\" checked=\"checked\">
                        ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.visible"), "html", null, true);
        echo "
                    </label>
                </div>
                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["columnId"] => $context["visibility"]) {
            // line 106
            echo "                    <div class=\"form-group\">
                        <label class=\"control-label\" for=\"records-column-";
            // line 107
            echo twig_escape_filter($this->env, $context["columnId"], "html", null, true);
            echo "\">
                            <input type=\"checkbox\" class=\"column-visibility-changer\" id=\"records-column-";
            // line 108
            echo twig_escape_filter($this->env, $context["columnId"], "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $context["columnId"], "html", null, true);
            echo "\" ";
            if ($context["visibility"]) {
                echo "checked=\"checked\"";
            }
            echo ">
                            ";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["columnTitles"] ?? null), $context["columnId"], [], "array", true, true, false, 109)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["columnTitles"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["columnId"]] ?? null) : null), ("label." . $context["columnId"]))) : (("label." . $context["columnId"])))), "html", null, true);
            echo "
                        </label>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['columnId'], $context['visibility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            </form>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h2>";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.document_title"), "html", null, true);
        echo "</h2>
            <p>
                ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.period"), "html", null, true);
        echo ":
                ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 122)), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 122)), "html", null, true);
        echo "
            </p>
        </div>
    </div>

    <div class=\"row\" id=\"export-summary\">
        <div class=\"col-xs-12\">
            <h3>";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.summary"), "html", null, true);
        echo "</h3>
            <table class=\"items table table-condensed table-bordered dataTable\" id=\"summary-project\">
                <thead>
                <tr>
                    <th>";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer"), "html", null, true);
        echo "</th>
                    <th>";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.project"), "html", null, true);
        echo "</th>
                    <th class=\"duration\">";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.duration"), "html", null, true);
        echo "</th>
                    <th class=\"cost\">";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rate"), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 140
        $context["customer"] = null;
        // line 141
        echo "                ";
        $context["customerDuration"] = 0;
        // line 142
        echo "                ";
        $context["customerRate"] = 0;
        // line 143
        echo "                ";
        $context["customerCurrency"] = null;
        // line 144
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["summaries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["summary"]) {
            // line 145
            echo "                    ";
            if ((($context["customer"] ?? null) === null)) {
                // line 146
                echo "                        ";
                $context["customer"] = twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 146);
                // line 147
                echo "                        ";
                $context["customerCurrency"] = twig_get_attribute($this->env, $this->source, $context["summary"], "currency", [], "any", false, false, false, 147);
                // line 148
                echo "                    ";
            }
            // line 149
            echo "                    ";
            if ( !(($context["customer"] ?? null) === twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 149))) {
                // line 150
                echo "                        <tr class=\"summary\">
                            <td colspan=\"2\"></td>
                            <td class=\"totals duration\">";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["customerDuration"] ?? null)), "html", null, true);
                echo "</td>
                            <td class=\"totals cost\">";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["customerRate"] ?? null), ($context["customerCurrency"] ?? null)), "html", null, true);
                echo "</td>
                        </tr>
                        ";
                // line 155
                $context["customerCurrency"] = twig_get_attribute($this->env, $this->source, $context["summary"], "currency", [], "any", false, false, false, 155);
                // line 156
                echo "                        ";
                $context["customer"] = twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 156);
                // line 157
                echo "                        ";
                $context["customerDuration"] = 0;
                // line 158
                echo "                        ";
                $context["customerRate"] = 0;
                // line 159
                echo "                    ";
            }
            // line 160
            echo "                    <tr>
                        <td>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 161), "html", null, true);
            echo "</td>
                        <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["summary"], "project", [], "any", false, false, false, 162), "html", null, true);
            echo "</td>
                        <td class=\"duration\">";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["summary"], "duration", [], "any", false, false, false, 163)), "html", null, true);
            echo "</td>
                        <td class=\"cost\">";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["summary"], "rate", [], "any", false, false, false, 164), twig_get_attribute($this->env, $this->source, $context["summary"], "currency", [], "any", false, false, false, 164)), "html", null, true);
            echo "</td>
                    </tr>
                    ";
            // line 166
            $context["customerDuration"] = (($context["customerDuration"] ?? null) + twig_get_attribute($this->env, $this->source, $context["summary"], "duration", [], "any", false, false, false, 166));
            // line 167
            echo "                    ";
            $context["customerRate"] = (($context["customerRate"] ?? null) + twig_get_attribute($this->env, $this->source, $context["summary"], "rate", [], "any", false, false, false, 167));
            // line 168
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['summary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                ";
        if ( !(($context["customer"] ?? null) === null)) {
            // line 170
            echo "                    <tr class=\"summary\">
                        <td colspan=\"2\"></td>
                        <td class=\"totals duration\">";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["customerDuration"] ?? null)), "html", null, true);
            echo "</td>
                        <td class=\"totals cost\">";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["customerRate"] ?? null), ($context["customerCurrency"] ?? null)), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 176
        echo "                </tbody>
            </table>

            <table class=\"items table table-condensed table-bordered dataTable\" id=\"summary-activity\" style=\"display:none\">
                <thead>
                <tr>
                    <th>";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer"), "html", null, true);
        echo "</th>
                    <th>";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.project"), "html", null, true);
        echo "</th>
                    <th>";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.activity"), "html", null, true);
        echo "</th>
                    <th class=\"duration\">";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.duration"), "html", null, true);
        echo "</th>
                    <th class=\"cost\">";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rate"), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 190
        $context["customer"] = null;
        // line 191
        echo "                ";
        $context["customerDuration"] = 0;
        // line 192
        echo "                ";
        $context["customerRate"] = 0;
        // line 193
        echo "                ";
        $context["customerCurrency"] = null;
        // line 194
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["summaries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["summary"]) {
            // line 195
            echo "                ";
            if ((($context["customer"] ?? null) === null)) {
                // line 196
                echo "                    ";
                $context["customer"] = twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 196);
                // line 197
                echo "                    ";
                $context["customerCurrency"] = twig_get_attribute($this->env, $this->source, $context["summary"], "currency", [], "any", false, false, false, 197);
                // line 198
                echo "                ";
            }
            // line 199
            echo "                ";
            if ( !(($context["customer"] ?? null) === twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 199))) {
                // line 200
                echo "                    <tr class=\"summary\">
                        <td colspan=\"3\"></td>
                        <td class=\"totals duration\">";
                // line 202
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["customerDuration"] ?? null)), "html", null, true);
                echo "</td>
                        <td class=\"totals cost\">";
                // line 203
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["customerRate"] ?? null), ($context["customerCurrency"] ?? null)), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                // line 205
                $context["customerCurrency"] = twig_get_attribute($this->env, $this->source, $context["summary"], "currency", [], "any", false, false, false, 205);
                // line 206
                echo "                    ";
                $context["customer"] = twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 206);
                // line 207
                echo "                    ";
                $context["customerDuration"] = 0;
                // line 208
                echo "                    ";
                $context["customerRate"] = 0;
                // line 209
                echo "                ";
            }
            // line 210
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["summary"], "activities", [], "any", false, false, false, 210));
            foreach ($context['_seq'] as $context["_key"] => $context["activitySummary"]) {
                // line 211
                echo "                <tr>
                    <td>";
                // line 212
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 212), "html", null, true);
                echo "</td>
                    <td>";
                // line 213
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["summary"], "project", [], "any", false, false, false, 213), "html", null, true);
                echo "</td>
                    <td>";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitySummary"], "activity", [], "any", false, false, false, 214), "html", null, true);
                echo "</td>
                    <td class=\"duration\">";
                // line 215
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["activitySummary"], "duration", [], "any", false, false, false, 215)), "html", null, true);
                echo "</td>
                    <td class=\"cost\">";
                // line 216
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["activitySummary"], "rate", [], "any", false, false, false, 216), twig_get_attribute($this->env, $this->source, $context["activitySummary"], "currency", [], "any", false, false, false, 216)), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activitySummary'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                ";
            $context["customerDuration"] = (($context["customerDuration"] ?? null) + twig_get_attribute($this->env, $this->source, $context["summary"], "duration", [], "any", false, false, false, 219));
            // line 220
            echo "                ";
            $context["customerRate"] = (($context["customerRate"] ?? null) + twig_get_attribute($this->env, $this->source, $context["summary"], "rate", [], "any", false, false, false, 220));
            // line 221
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['summary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                ";
        if ( !(($context["customer"] ?? null) === null)) {
            // line 223
            echo "                    <tr class=\"summary\">
                        <td colspan=\"3\"></td>
                        <td class=\"totals duration\">";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["customerDuration"] ?? null)), "html", null, true);
            echo "</td>
                        <td class=\"totals cost\">";
            // line 226
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["customerRate"] ?? null), ($context["customerCurrency"] ?? null)), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 229
        echo "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"row\" id=\"export-records\">
        <div class=\"col-xs-12\">
            <h3>";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.full_list"), "html", null, true);
        echo "</h3>
            <table class=\"table table-condensed table-bordered dataTable\">
                <thead>
                <tr>
                    ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["columnId"] => $context["visibility"]) {
            // line 241
            echo "                    <th class=\"column column-";
            echo twig_escape_filter($this->env, $context["columnId"], "html", null, true);
            echo "\" ";
            if ( !$context["visibility"]) {
                echo "style=\"display: none\"";
            }
            echo ">
                        ";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["columnTitles"] ?? null), $context["columnId"], [], "array", true, true, false, 242)) ? (_twig_default_filter((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["columnTitles"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["columnId"]] ?? null) : null), ("label." . $context["columnId"]))) : (("label." . $context["columnId"])))), "html", null, true);
            echo "
                    </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['columnId'], $context['visibility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                </tr>
                </thead>
                <tbody>
                ";
        // line 248
        $context["timeWorked"] = 0;
        // line 249
        echo "                ";
        $context["rateTotal"] = 0;
        // line 250
        echo "                ";
        $context["currency"] = false;
        // line 251
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 252
            echo "                    ";
            $context["timeWorked"] = (($context["timeWorked"] ?? null) + twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 252));
            // line 253
            echo "                    ";
            $context["rateTotal"] = (($context["rateTotal"] ?? null) + twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 253));
            // line 254
            echo "                    ";
            if ((($context["currency"] ?? null) === false)) {
                // line 255
                echo "                        ";
                $context["currency"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 255), "customer", [], "any", false, false, false, 255), "currency", [], "any", false, false, false, 255);
                // line 256
                echo "                    ";
            }
            // line 257
            echo "                    ";
            if ( !(($context["currency"] ?? null) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 257), "customer", [], "any", false, false, false, 257), "currency", [], "any", false, false, false, 257))) {
                // line 258
                echo "                        ";
                $context["currency"] = null;
                // line 259
                echo "                    ";
            }
            // line 260
            echo "                    <tr>
                        <td class=\"column-date text-nowrap\" ";
            // line 261
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "date", [], "any", false, false, false, 261)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateTime(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 262)), "html", null, true);
            echo "
                            <br>
                            ";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateTime(twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 264)), "html", null, true);
            echo "
                        </td>
                        <td class=\"column-username\" ";
            // line 266
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "username", [], "any", false, false, false, 266)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 267
            echo twig_call_macro($macros["widgets"], "macro_username", [twig_get_attribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 267)], 267, $context, $this->getSourceContext());
            echo "
                        </td>
                        <td class=\"column-customer\" ";
            // line 269
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "customer", [], "any", false, false, false, 269)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 270), "customer", [], "any", false, false, false, 270), "name", [], "any", false, false, false, 270), "html", null, true);
            echo "
                        </td>
                        <td class=\"column-project\" ";
            // line 272
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "project", [], "any", false, false, false, 272)) {
                echo "style=\"display: none\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 272), "name", [], "any", false, false, false, 272), "html", null, true);
            echo "
                        </td>
                        <td class=\"column-activity\" ";
            // line 274
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "activity", [], "any", false, false, false, 274)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 275), "name", [], "any", false, false, false, 275), "html", null, true);
            echo "
                        </td>
                        <td class=\"column-description\" ";
            // line 277
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "description", [], "any", false, false, false, 277)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 278
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 278))) {
                // line 279
                echo "                                ";
                echo $this->extensions['App\Twig\MarkdownExtension']->timesheetContent(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 279));
                echo "
                            ";
            }
            // line 281
            echo "                        </td>
                        <td class=\"column-exported\" ";
            // line 282
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "exported", [], "any", false, false, false, 282)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 283
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "exported", [], "any", false, false, false, 283)) {
                // line 284
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.exported"), "html", null, true);
                echo "
                            ";
            } else {
                // line 286
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entryState.not_exported"), "html", null, true);
                echo "
                            ";
            }
            // line 288
            echo "                        </td>
                        <td class=\"column-tags\" ";
            // line 289
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "tags", [], "any", false, false, false, 289)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 290
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "tags", [], "any", false, false, false, 290))) {
                // line 291
                echo "                                ";
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "tagsAsArray", [], "any", false, false, false, 291), ", "), "html", null, true);
                echo "
                            ";
            }
            // line 293
            echo "                        </td>
                        ";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["metaFields"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["metaFieldName"]) {
                // line 295
                echo "                            <td class=\"column-";
                echo twig_escape_filter($this->env, $context["metaFieldName"], "html", null, true);
                echo " text-nowrap\" ";
                if ( !(($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["columns"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["metaFieldName"]] ?? null) : null)) {
                    echo "style=\"display: none\"";
                }
                echo ">
                                ";
                // line 296
                $context["metaField"] = twig_get_attribute($this->env, $this->source, $context["entry"], "metaField", [0 => $context["metaFieldName"]], "method", false, false, false, 296);
                // line 297
                echo "                                ";
                if (( !(null === ($context["metaField"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["metaField"] ?? null), "visible", [], "any", false, false, false, 297))) {
                    // line 298
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["metaField"] ?? null), "value", [], "any", false, false, false, 298), "html", null, true);
                    echo "
                                ";
                }
                // line 300
                echo "                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['metaFieldName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "                        <td class=\"column-hourlyRate text-nowrap\" ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "hourlyRate", [], "any", false, false, false, 302)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 303
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 303), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 303), "customer", [], "any", false, false, false, 303), "currency", [], "any", false, false, false, 303)), "html", null, true);
            echo "
                        </td>
                        <td class=\"column-fixedRate text-nowrap\" ";
            // line 305
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "fixedRate", [], "any", false, false, false, 305)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 306
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "fixedRate", [], "any", false, false, false, 306), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 306), "customer", [], "any", false, false, false, 306), "currency", [], "any", false, false, false, 306)), "html", null, true);
            echo "
                        </td>
                        <td class=\"column-duration text-nowrap\" ";
            // line 308
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "duration", [], "any", false, false, false, 308)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 309
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 309)), "html", null, true);
            echo "
                        </td>
                        <td class=\"column-rate text-nowrap\" ";
            // line 311
            if ( !twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), "rate", [], "any", false, false, false, 311)) {
                echo "style=\"display: none\"";
            }
            echo ">
                            ";
            // line 312
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 312), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 312), "customer", [], "any", false, false, false, 312), "currency", [], "any", false, false, false, 312)), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                ";
        // line 317
        echo "                <tr>
                    ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["visibility"]) {
            // line 319
            echo "                        ";
            if ((($context["id"] != "duration") && ($context["id"] != "rate"))) {
                // line 320
                echo "                            <th class=\"column-";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\" ";
                if ( !$context["visibility"]) {
                    echo "style=\"display: none\"";
                }
                echo "></th>
                        ";
            }
            // line 322
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['visibility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "                    <th class=\"text-nowrap column-duration\">
                        ";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["timeWorked"] ?? null)), "html", null, true);
        echo "
                    </th>
                    <th class=\"text-nowrap column-rate\">
                        ";
        // line 327
        if (( !(null === ($context["currency"] ?? null)) &&  !(($context["currency"] ?? null) === false))) {
            // line 328
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["rateTotal"] ?? null), ($context["currency"] ?? null)), "html", null, true);
            echo "
                        ";
        } else {
            // line 330
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["rateTotal"] ?? null)), "html", null, true);
            echo "
                        ";
        }
        // line 332
        echo "                    </th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "export/renderer/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  849 => 332,  843 => 330,  837 => 328,  835 => 327,  829 => 324,  826 => 323,  820 => 322,  810 => 320,  807 => 319,  803 => 318,  800 => 317,  798 => 316,  788 => 312,  782 => 311,  777 => 309,  771 => 308,  766 => 306,  760 => 305,  755 => 303,  748 => 302,  741 => 300,  735 => 298,  732 => 297,  730 => 296,  721 => 295,  717 => 294,  714 => 293,  708 => 291,  706 => 290,  700 => 289,  697 => 288,  691 => 286,  685 => 284,  683 => 283,  677 => 282,  674 => 281,  668 => 279,  666 => 278,  660 => 277,  655 => 275,  649 => 274,  640 => 272,  635 => 270,  629 => 269,  624 => 267,  618 => 266,  613 => 264,  608 => 262,  602 => 261,  599 => 260,  596 => 259,  593 => 258,  590 => 257,  587 => 256,  584 => 255,  581 => 254,  578 => 253,  575 => 252,  570 => 251,  567 => 250,  564 => 249,  562 => 248,  557 => 245,  548 => 242,  539 => 241,  535 => 240,  528 => 236,  519 => 229,  513 => 226,  509 => 225,  505 => 223,  502 => 222,  496 => 221,  493 => 220,  490 => 219,  481 => 216,  477 => 215,  473 => 214,  469 => 213,  465 => 212,  462 => 211,  457 => 210,  454 => 209,  451 => 208,  448 => 207,  445 => 206,  443 => 205,  438 => 203,  434 => 202,  430 => 200,  427 => 199,  424 => 198,  421 => 197,  418 => 196,  415 => 195,  410 => 194,  407 => 193,  404 => 192,  401 => 191,  399 => 190,  392 => 186,  388 => 185,  384 => 184,  380 => 183,  376 => 182,  368 => 176,  362 => 173,  358 => 172,  354 => 170,  351 => 169,  345 => 168,  342 => 167,  340 => 166,  335 => 164,  331 => 163,  327 => 162,  323 => 161,  320 => 160,  317 => 159,  314 => 158,  311 => 157,  308 => 156,  306 => 155,  301 => 153,  297 => 152,  293 => 150,  290 => 149,  287 => 148,  284 => 147,  281 => 146,  278 => 145,  273 => 144,  270 => 143,  267 => 142,  264 => 141,  262 => 140,  255 => 136,  251 => 135,  247 => 134,  243 => 133,  236 => 129,  224 => 122,  220 => 121,  215 => 119,  207 => 113,  197 => 109,  187 => 108,  183 => 107,  180 => 106,  176 => 105,  170 => 102,  162 => 97,  152 => 90,  143 => 84,  135 => 79,  129 => 75,  125 => 74,  102 => 53,  98 => 52,  73 => 29,  69 => 28,  64 => 2,  62 => 21,  56 => 18,  54 => 17,  50 => 16,  48 => 5,  46 => 4,  44 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "export/renderer/default.html.twig", "/var/www/kimai2/templates/export/renderer/default.html.twig");
    }
}
