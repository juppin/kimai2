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

/* export/renderer/pdf.html.twig */
class __TwigTemplate_feaf1ff6fa577a5182578b60252ab45f2f9f52dd0ba4bf597d966dff51a52a21 extends \Twig\Template
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
        // line 1
        echo "<html>
<head>
    <style>
        body {font-family: sans-serif;
            font-size: 10pt;
        }
        p {\tmargin: 0pt; }
        table.items {
            border: 0.1mm solid #000000;
        }
        td { vertical-align: top; }
        .items td {
            border-left: 0.1mm solid #000000;
            border-right: 0.1mm solid #000000;
        }
        .items tr.even {
            background-color: #e0ebff;
        }
        .items tr.summary {
            background-color: #efefef;
        }
        .items tr.summary td {
            font-weight: bold;
            border-top: 0.1mm solid #000000;
            border-bottom: 0.1mm solid #000000;
        }
        table thead td {
            background-color: #ececec;
            text-align: center;
            border: 0.1mm solid #000000;
            font-variant: small-caps;
        }
        .items td.totals {
            font-weight: bold;
            text-align: right;
            border: 0.1mm solid #000000;
        }
        .items td.duration,
        .items td.cost {
            text-align: center;
        }
    </style>
</head>
<body>
<!--mpdf
<htmlpagefooter name=\"myfooter\">
<table style=\"border-top: 1px solid #000000; font-size: 9pt; padding-top: 3mm; width: 100%\">
<tr>
    <td align=\"left\">
    ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.page_of", ["%page%" => "{PAGENO}", "%pages%" => "{nb}"]), "html", null, true);
        echo "
    </td>
    <td align=\"right\">
    ";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.date_copyright", ["%date%" => (($this->extensions['App\Twig\DateExtensions']->dateShort(($context["now"] ?? null)) . " ") . twig_date_format_filter($this->env, ($context["now"] ?? null), "H:i")), "%kimai%" => (((("<a href=\"" . twig_constant("App\\Constants::HOMEPAGE")) . "\">") . twig_constant("App\\Constants::SOFTWARE")) . "</a>")]);
        echo "
    </td>
</tr>
</table>
</htmlpagefooter>
<sethtmlpagefooter name=\"myfooter\" value=\"on\" />
mpdf-->
<h2 style=\"margin-bottom: 0; padding-bottom: 0\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.document_title"), "html", null, true);
        echo "</h2>
<p>
    ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.period"), "html", null, true);
        echo ":
    ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 63)), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 63)), "html", null, true);
        echo "
</p>
<h3>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.summary"), "html", null, true);
        echo "</h3>
<table class=\"items\" width=\"100%\" style=\"font-size: 9pt; border-collapse: collapse; \" cellpadding=\"8\">
    <thead>
    <tr>
        <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer"), "html", null, true);
        echo "</td>
        <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.project"), "html", null, true);
        echo "</td>
        <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.duration"), "html", null, true);
        echo "</td>
        <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rate"), "html", null, true);
        echo "</td>
    </tr>
    </thead>
    <tbody>
    ";
        // line 76
        $context["customer"] = null;
        // line 77
        echo "    ";
        $context["customerDuration"] = 0;
        // line 78
        echo "    ";
        $context["customerRate"] = 0;
        // line 79
        echo "    ";
        $context["customerCurrency"] = null;
        // line 80
        echo "    ";
        $context["customerCount"] = 0;
        // line 81
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["summaries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["summary"]) {
            // line 82
            echo "        ";
            if ((($context["customer"] ?? null) === null)) {
                // line 83
                echo "            ";
                $context["customer"] = twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 83);
                // line 84
                echo "            ";
                $context["customerCurrency"] = twig_get_attribute($this->env, $this->source, $context["summary"], "currency", [], "any", false, false, false, 84);
                // line 85
                echo "        ";
            }
            // line 86
            echo "        ";
            if ( !(($context["customer"] ?? null) === twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 86))) {
                // line 87
                echo "                <tr class=\"summary\">
                    <td colspan=\"2\"></td>
                    <td class=\"totals duration\">";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["customerDuration"] ?? null)), "html", null, true);
                echo "</td>
                    <td class=\"totals cost\">";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["customerRate"] ?? null), ($context["customerCurrency"] ?? null)), "html", null, true);
                echo "</td>
                </tr>
            ";
                // line 92
                $context["customerCurrency"] = twig_get_attribute($this->env, $this->source, $context["summary"], "currency", [], "any", false, false, false, 92);
                // line 93
                echo "            ";
                $context["customer"] = twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 93);
                // line 94
                echo "            ";
                $context["customerDuration"] = 0;
                // line 95
                echo "            ";
                $context["customerRate"] = 0;
                // line 96
                echo "            ";
                $context["customerCount"] = 0;
                // line 97
                echo "        ";
            }
            // line 98
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], ($context["customerCount"] ?? null)), "html", null, true);
            echo "\">
            <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["summary"], "customer", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["summary"], "project", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
            <td class=\"duration\">";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["summary"], "duration", [], "any", false, false, false, 101)), "html", null, true);
            echo "</td>
            <td class=\"cost\">";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["summary"], "rate", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, $context["summary"], "currency", [], "any", false, false, false, 102)), "html", null, true);
            echo "</td>
        </tr>
        ";
            // line 104
            $context["customerDuration"] = (($context["customerDuration"] ?? null) + twig_get_attribute($this->env, $this->source, $context["summary"], "duration", [], "any", false, false, false, 104));
            // line 105
            echo "        ";
            $context["customerRate"] = (($context["customerRate"] ?? null) + twig_get_attribute($this->env, $this->source, $context["summary"], "rate", [], "any", false, false, false, 105));
            // line 106
            echo "        ";
            $context["customerCount"] = (($context["customerCount"] ?? null) + 1);
            // line 107
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['summary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "    ";
        if ( !(($context["customer"] ?? null) === null)) {
            // line 109
            echo "    <tr class=\"summary\">
        <td colspan=\"2\"></td>
        <td class=\"totals duration\">";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["customerDuration"] ?? null)), "html", null, true);
            echo "</td>
        <td class=\"totals cost\">";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["customerRate"] ?? null), ($context["customerCurrency"] ?? null)), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        // line 115
        echo "    </tbody>
</table>

<pagebreak>

<h3>";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("export.full_list"), "html", null, true);
        echo "</h3>

";
        // line 122
        $context["duration"] = 0;
        // line 123
        $context["rate"] = 0;
        // line 124
        $context["currency"] = false;
        // line 125
        echo "<table class=\"items\" width=\"100%\" style=\"font-size: 9pt; border-collapse: collapse; \" cellpadding=\"8\">
    <thead>
    <tr>
        <td>";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date"), "html", null, true);
        echo "</td>
        <td width=\"\">";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.description"), "html", null, true);
        echo "</td>
        <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.duration"), "html", null, true);
        echo "</td>
        <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rate"), "html", null, true);
        echo "</td>
    </tr>
    </thead>
    <tbody>
    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 136
            echo "        ";
            $context["duration"] = (($context["duration"] ?? null) + twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 136));
            // line 137
            echo "        ";
            $context["rate"] = (($context["rate"] ?? null) + twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 137));
            // line 138
            echo "        ";
            if ((($context["currency"] ?? null) === false)) {
                // line 139
                echo "            ";
                $context["currency"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 139), "customer", [], "any", false, false, false, 139), "currency", [], "any", false, false, false, 139);
                // line 140
                echo "        ";
            }
            // line 141
            echo "        ";
            if ( !(($context["currency"] ?? null) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 141), "customer", [], "any", false, false, false, 141), "currency", [], "any", false, false, false, 141))) {
                // line 142
                echo "            ";
                $context["currency"] = null;
                // line 143
                echo "        ";
            }
            // line 144
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 144)), "html", null, true);
            echo "\">
            <td>
                ";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateTime(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 146)), "html", null, true);
            echo "
                <br>
                ";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateTime(twig_get_attribute($this->env, $this->source, $context["entry"], "end", [], "any", false, false, false, 148)), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 151), "customer", [], "any", false, false, false, 151), "name", [], "any", false, false, false, 151), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 151), "name", [], "any", false, false, false, 151), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 151), "name", [], "any", false, false, false, 151), "html", null, true);
            echo "
                ";
            // line 152
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 152))) {
                // line 153
                echo "                    <br>
                    <i>";
                // line 154
                echo $this->extensions['App\Twig\MarkdownExtension']->timesheetContent(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 154));
                echo "</i>
                ";
            }
            // line 156
            echo "            </td>
            <td class=\"duration\">";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 157)), "html", null, true);
            echo "</td>
            <td class=\"cost\">";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 158), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 158), "customer", [], "any", false, false, false, 158), "currency", [], "any", false, false, false, 158)), "html", null, true);
            echo "</td>
        </tr>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "    <tr class=\"summary\">
        <td colspan=\"2\"></td>
        <td class=\"totals duration\">";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["duration"] ?? null)), "html", null, true);
        echo "</td>
        <td class=\"totals cost\">";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["rate"] ?? null), ($context["currency"] ?? null)), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
</table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "export/renderer/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 164,  409 => 163,  405 => 161,  388 => 158,  384 => 157,  381 => 156,  376 => 154,  373 => 153,  371 => 152,  363 => 151,  357 => 148,  352 => 146,  346 => 144,  343 => 143,  340 => 142,  337 => 141,  334 => 140,  331 => 139,  328 => 138,  325 => 137,  322 => 136,  305 => 135,  298 => 131,  294 => 130,  290 => 129,  286 => 128,  281 => 125,  279 => 124,  277 => 123,  275 => 122,  270 => 120,  263 => 115,  257 => 112,  253 => 111,  249 => 109,  246 => 108,  240 => 107,  237 => 106,  234 => 105,  232 => 104,  227 => 102,  223 => 101,  219 => 100,  215 => 99,  210 => 98,  207 => 97,  204 => 96,  201 => 95,  198 => 94,  195 => 93,  193 => 92,  188 => 90,  184 => 89,  180 => 87,  177 => 86,  174 => 85,  171 => 84,  168 => 83,  165 => 82,  160 => 81,  157 => 80,  154 => 79,  151 => 78,  148 => 77,  146 => 76,  139 => 72,  135 => 71,  131 => 70,  127 => 69,  120 => 65,  113 => 63,  109 => 62,  104 => 60,  94 => 53,  88 => 50,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "export/renderer/pdf.html.twig", "/var/www/kimai2/templates/export/renderer/pdf.html.twig");
    }
}
