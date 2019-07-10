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

/* invoice/renderer/timesheet.html.twig */
class __TwigTemplate_c184241e276380810e8bd603c880fa28b8e02661e80f5b1bf90f96c64b3b66f4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'invoice' => [$this, 'block_invoice'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "invoice/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "invoice/renderer/timesheet.html.twig", 1)->unwrap();
        // line 2
        $this->parent = $this->loadTemplate("invoice/layout.html.twig", "invoice/renderer/timesheet.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <h2 class=\"page-header\">
           <span contenteditable=\"true\">";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, true, false, 8), "title", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, true, false, 8), "title", [], "any", false, false, false, 8), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet", [], "invoice-renderer"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet", [], "invoice-renderer"))), "html", null, true);
        echo "</span>
        </h2>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-12\">
        <table class=\"table no-border table-condensed\">
            <tr>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.from"), "html", null, true);
        echo "</th>
                <td contenteditable=\"true\">
                    ";
        // line 19
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 19), "user", [], "any", false, false, false, 19))) {
            // line 20
            echo "                        ";
            echo twig_call_macro($macros["widgets"], "macro_username", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 20), "user", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext());
            echo "
                    ";
        } else {
            // line 22
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 22), "company", [], "any", false, false, false, 22), "html", null, true);
            echo "
                    ";
        }
        // line 24
        echo "                </td>
            </tr>
            <tr>
                <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date"), "html", null, true);
        echo "</th>
                <td contenteditable=\"true\">
                    ";
        // line 29
        if (((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 29), "begin", [], "any", false, false, false, 29), "m") != twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 29), "end", [], "any", false, false, false, 29), "m")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 29), "begin", [], "any", false, false, false, 29), "Y") != twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 29), "end", [], "any", false, false, false, 29), "Y")))) {
            // line 30
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 30), "begin", [], "any", false, false, false, 30)), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 30), "end", [], "any", false, false, false, 30)), "html", null, true);
            echo "
                    ";
        } else {
            // line 32
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['App\Twig\DateExtensions']->monthName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 32), "end", [], "any", false, false, false, 32))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 32), "end", [], "any", false, false, false, 32), "Y"), "html", null, true);
            echo "
                    ";
        }
        // line 34
        echo "                </td>
            </tr>
            <tr>
                <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer"), "html", null, true);
        echo "</th>
                <td contenteditable=\"true\">
                    ";
        // line 39
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 39), "number", [], "any", false, false, false, 39))) {
            echo "[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 39), "number", [], "any", false, false, false, 39), "html", null, true);
            echo "]";
        }
        // line 40
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 40), "contact", [], "any", false, false, false, 40))) {
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 40), "contact", [], "any", false, false, false, 40), "html", null, true);
        }
        // line 41
        echo "                </td>
            </tr>
            ";
        // line 43
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 43), "project", [], "any", false, false, false, 43)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 43), "project", [], "any", false, false, false, 43), "orderNumber", [], "any", false, false, false, 43)))) {
            // line 44
            echo "                <tr>
                    <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.orderNumber"), "html", null, true);
            echo "</th>
                    <td contenteditable=\"true\">
                        ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 47), "project", [], "any", false, false, false, 47), "orderNumber", [], "any", false, false, false, 47), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        // line 51
        echo "        </table>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-12 table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date"), "html", null, true);
        echo "</th>
                ";
        // line 61
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 61), "user", [], "any", false, false, false, 61))) {
            // line 62
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.user"), "html", null, true);
            echo "</th>
                ";
        }
        // line 64
        echo "                <th>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.activity"), "html", null, true);
        echo "</th>
                <th>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.hours"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 69), "entries", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 70
            echo "            <tr>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 71)), "html", null, true);
            echo "</td>
                ";
            // line 72
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 72), "user", [], "any", false, false, false, 72))) {
                // line 73
                echo "                    <td>";
                echo twig_call_macro($macros["widgets"], "macro_username", [twig_get_attribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 73)], 73, $context, $this->getSourceContext());
                echo "</td>
                ";
            }
            // line 75
            echo "                <td>
                    ";
            // line 76
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 76))) {
                // line 77
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 77), "html", null, true);
                echo "
                    ";
            } else {
                // line 79
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
                echo "
                    ";
            }
            // line 81
            echo "                </td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 82)), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            </tbody>
            <tfoot>
            <tr>
                <th></th>
                <th>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.total_working_time"), "html", null, true);
        echo "</th>
                <th>";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 90), "timeWorked", [], "any", false, false, false, 90)), "html", null, true);
        echo "</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"row\" style=\"padding: 60px 0\">
    <div class=\"col-xs-12\">
        ";
        // line 99
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 99), "paymentTerms", [], "any", false, false, false, 99))) {
            // line 100
            echo "            <p class=\"lead\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.payment_terms"), "html", null, true);
            echo "</p>

            <p class=\"text-muted well well-sm no-shadow\" contenteditable=\"true\">
                ";
            // line 103
            echo nl2br(twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 103), "paymentTerms", [], "any", false, false, false, 103)), "html", null, true));
            echo "
            </p>
        ";
        }
        // line 106
        echo "

        <div class=\"table-responsive\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th style=\"width:50%;padding-bottom: 60px\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.signature_user"), "html", null, true);
        echo "</th>
                </tr>
                <tr>
                    <th>";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.signature_customer"), "html", null, true);
        echo "</th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "invoice/renderer/timesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 115,  291 => 112,  283 => 106,  277 => 103,  270 => 100,  268 => 99,  256 => 90,  252 => 89,  246 => 85,  237 => 82,  234 => 81,  226 => 79,  220 => 77,  218 => 76,  215 => 75,  209 => 73,  207 => 72,  203 => 71,  200 => 70,  196 => 69,  189 => 65,  184 => 64,  178 => 62,  176 => 61,  172 => 60,  161 => 51,  154 => 47,  149 => 45,  146 => 44,  144 => 43,  140 => 41,  133 => 40,  127 => 39,  122 => 37,  117 => 34,  109 => 32,  101 => 30,  99 => 29,  94 => 27,  89 => 24,  83 => 22,  77 => 20,  75 => 19,  70 => 17,  58 => 8,  53 => 5,  49 => 4,  44 => 2,  42 => 1,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/renderer/timesheet.html.twig", "/var/www/kimai2/templates/invoice/renderer/timesheet.html.twig");
    }
}
