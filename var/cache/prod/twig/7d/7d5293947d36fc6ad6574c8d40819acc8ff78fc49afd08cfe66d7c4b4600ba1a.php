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

/* invoice/renderer/default.html.twig */
class __TwigTemplate_11312a09a76888f0d970138debd6fd834d72be7b23cb51c21bdaef7f3b579ba7 extends \Twig\Template
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
        // line 1
        return "invoice/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("invoice/layout.html.twig", "invoice/renderer/default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <h2 class=\"page-header\">
            <span contenteditable=\"true\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
            <small class=\"pull-right\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "invoiceDate", [], "any", false, false, false, 8)), "html", null, true);
        echo "</small>
        </h2>
    </div>
</div>

<div class=\"row invoice-info\">
    <div class=\"col-sm-4 invoice-col\">
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.from"), "html", null, true);
        echo "
        <address contenteditable=\"true\">
            <strong>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 17), "company", [], "any", false, false, false, 17), "html", null, true);
        echo "</strong><br>
            ";
        // line 18
        echo nl2br(twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 18), "address", [], "any", false, false, false, 18)), "html", null, true));
        echo "
        </address>
    </div>
    <div class=\"col-sm-4 invoice-col\">
        ";
        // line 22
        $context["customerPhone"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, true, false, 22), "phone", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, true, false, 22), "phone", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 22), "mobile", [], "any", false, false, false, 22))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 22), "mobile", [], "any", false, false, false, 22)));
        // line 23
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.to"), "html", null, true);
        echo "
        <address contenteditable=\"true\">
            <strong>";
        // line 25
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, true, false, 25), "company", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, true, false, 25), "company", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25))), "html", null, true);
        echo "</strong><br>
            ";
        // line 26
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 26), "address", [], "any", false, false, false, 26), "html", null, true));
        echo "
            ";
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 27), "phone", [], "any", false, false, false, 27))) {
            // line 28
            echo "                <br>
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.phone"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 29), "phone", [], "any", false, false, false, 29), "html", null, true);
            echo "
            ";
        }
        // line 31
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31))) {
            // line 32
            echo "                <br>
                ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.email"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 33), "email", [], "any", false, false, false, 33), "html", null, true);
            echo "
            ";
        }
        // line 35
        echo "        </address>
    </div>
    <div class=\"col-sm-4 invoice-col\">
        <p contenteditable=\"true\">
            <b>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.number"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "numberGenerator", [], "any", false, false, false, 39), "invoiceNumber", [], "any", false, false, false, 39), "html", null, true);
        echo "</b>
        </p>
        <p contenteditable=\"true\">
            <b>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.due_days"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "dueDate", [], "any", false, false, false, 42)), "html", null, true);
        echo "
            ";
        // line 43
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 43), "number", [], "any", false, false, false, 43))) {
            // line 44
            echo "                <br><b>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.number"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 44), "number", [], "any", false, false, false, 44), "html", null, true);
            echo "
            ";
        }
        // line 46
        echo "            ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 46), "project", [], "any", false, false, false, 46)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 46), "project", [], "any", false, false, false, 46), "orderNumber", [], "any", false, false, false, 46)))) {
            // line 47
            echo "                <br><b>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.orderNumber"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 47), "project", [], "any", false, false, false, 47), "orderNumber", [], "any", false, false, false, 47), "html", null, true);
            echo "
            ";
        }
        // line 49
        echo "        </p>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-12 table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date"), "html", null, true);
        echo "</th>
                    <th>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.description"), "html", null, true);
        echo "</th>
                    <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unit_price"), "html", null, true);
        echo "</th>
                    <th>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.hours"), "html", null, true);
        echo "</th>
                    <th>";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.total_rate"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 66), "entries", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 67
            echo "                ";
            $context["duration"] = $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 67));
            // line 68
            echo "                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["entry"], "fixedRate", [], "any", false, false, false, 68))) {
                // line 69
                echo "                    ";
                $context["rate"] = twig_get_attribute($this->env, $this->source, $context["entry"], "fixedRate", [], "any", false, false, false, 69);
                // line 70
                echo "                    ";
                $context["duration"] = 1;
                // line 71
                echo "                ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 71))) {
                // line 72
                echo "                    ";
                $context["rate"] = twig_get_attribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 72);
                // line 73
                echo "                ";
            } else {
                // line 74
                echo "                    ";
                $context["rate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 74), "getPreferenceValue", [0 => "hourly_rate"], "method", false, false, false, 74);
                // line 75
                echo "                ";
            }
            // line 76
            echo "                <tr>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 77)), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 79
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 79))) {
                // line 80
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 80), "html", null, true);
                echo "
                        ";
            } else {
                // line 82
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
                echo "
                        ";
            }
            // line 84
            echo "                    </td>
                    <td contenteditable=\"true\">";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["rate"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 85), "currency", [], "any", false, false, false, 85)), "html", null, true);
            echo "</td>
                    <td>";
            // line 86
            echo twig_escape_filter($this->env, ($context["duration"] ?? null), "html", null, true);
            echo "</td>
                    <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 87), "currency", [], "any", false, false, false, 87)), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            </tbody>
        </table>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-6\">
        ";
        // line 97
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 97), "paymentTerms", [], "any", false, false, false, 97))) {
            // line 98
            echo "        <p class=\"lead\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.payment_terms"), "html", null, true);
            echo "</p>

        <p class=\"text-muted well well-sm no-shadow\" contenteditable=\"true\">
            ";
            // line 101
            echo nl2br(twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 101), "paymentTerms", [], "any", false, false, false, 101)), "html", null, true));
            echo "
        </p>
        ";
        }
        // line 104
        echo "    </div>

    <div class=\"col-xs-6\">
        <p class=\"lead\" contenteditable=\"true\">";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.due_days"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "dueDate", [], "any", false, false, false, 107)), "html", null, true);
        echo "</p>

        <div class=\"table-responsive\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th style=\"width:50%\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.subtotal"), "html", null, true);
        echo "</th>
                    <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 114), "subtotal", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 114), "currency", [], "any", false, false, false, 114)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.tax"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 117), "vat", [], "any", false, false, false, 117), "html", null, true);
        echo "%)</th>
                    <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 118), "tax", [], "any", false, false, false, 118), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 118), "currency", [], "any", false, false, false, 118)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.total"), "html", null, true);
        echo "</th>
                    <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 122), "total", [], "any", false, false, false, 122), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 122), "currency", [], "any", false, false, false, 122)), "html", null, true);
        echo "</td>
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
        return "invoice/renderer/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 122,  340 => 121,  334 => 118,  328 => 117,  322 => 114,  318 => 113,  307 => 107,  302 => 104,  296 => 101,  289 => 98,  287 => 97,  278 => 90,  269 => 87,  265 => 86,  261 => 85,  258 => 84,  250 => 82,  244 => 80,  242 => 79,  237 => 77,  234 => 76,  231 => 75,  228 => 74,  225 => 73,  222 => 72,  219 => 71,  216 => 70,  213 => 69,  210 => 68,  207 => 67,  203 => 66,  196 => 62,  192 => 61,  188 => 60,  184 => 59,  180 => 58,  169 => 49,  161 => 47,  158 => 46,  150 => 44,  148 => 43,  142 => 42,  134 => 39,  128 => 35,  121 => 33,  118 => 32,  115 => 31,  108 => 29,  105 => 28,  103 => 27,  99 => 26,  95 => 25,  89 => 23,  87 => 22,  80 => 18,  76 => 17,  71 => 15,  59 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/renderer/default.html.twig", "/var/www/kimai2/templates/invoice/renderer/default.html.twig");
    }
}
