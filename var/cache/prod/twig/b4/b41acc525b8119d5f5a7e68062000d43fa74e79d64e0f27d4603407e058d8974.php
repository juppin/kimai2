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

/* invoice/renderer/freelancer.html.twig */
class __TwigTemplate_8058e9fc0d0cd87d2e7fdcfa12e0545b42fef6c0e8a8d4e47fd8bd2ce556c793 extends \Twig\Template
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
        // line 3
        return "invoice/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "invoice/renderer/freelancer.html.twig", 1)->unwrap();
        // line 3
        $this->parent = $this->loadTemplate("invoice/layout.html.twig", "invoice/renderer/freelancer.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 8
        $context["company"] = (((isset($context["company"]) || array_key_exists("company", $context))) ? (_twig_default_filter(($context["company"] ?? null), ["name" => "Kimai Inc.", "homepage" => "www.kimai.org", "email" => "kimai@example.com", "phone" => "0123-4567890", "tax_number" => "YourTaxNumber", "signature" => "/build/images/signature.png", "address" => "Kimai Inc.
        Example road 42
        D – 12345 City
    ", "bank_account" => "
        Kimai Inc.
        IBAN: DE00 0000 0000 0000 0000 00
        BIC: XXXXXXXX (a bank name)
    "])) : (["name" => "Kimai Inc.", "homepage" => "www.kimai.org", "email" => "kimai@example.com", "phone" => "0123-4567890", "tax_number" => "YourTaxNumber", "signature" => "/build/images/signature.png", "address" => "Kimai Inc.
        Example road 42
        D – 12345 City
    ", "bank_account" => "
        Kimai Inc.
        IBAN: DE00 0000 0000 0000 0000 00
        BIC: XXXXXXXX (a bank name)
    "]));
        // line 25
        echo "
<div class=\"row\" id=\"freelancer-invoice\" style=\"page:invoiceFreelancer;\">
    <div class=\"col-xs-12\">
        <header>
            <address>
                <p contenteditable=\"true\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 30), "address", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
            </address>
        </header>
        <article class=\"address\">
            <h1>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.to"), "html", null, true);
        echo "</h1>
            <address>
                <p>
                    <strong>";
        // line 37
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, true, false, 37), "company", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, true, false, 37), "company", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37))), "html", null, true);
        echo "</strong><br>
                    ";
        // line 38
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "customer", [], "any", false, false, false, 38), "address", [], "any", false, false, false, 38), "html", null, true));
        echo "
                </p>
            </address>
            <table class=\"meta\">
                <tr>
                    <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date"), "html", null, true);
        echo ":</th>
                    <td contenteditable=\"true\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "invoiceDate", [], "any", false, false, false, 44)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.service_date"), "html", null, true);
        echo ":</th>
                    <td><span contenteditable=\"true\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['App\Twig\DateExtensions']->monthName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 48), "end", [], "any", false, false, false, 48))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 48), "end", [], "any", false, false, false, 48), "Y"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.number"), "html", null, true);
        echo ":</th>
                    <td><span contenteditable=\"true\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "numberGenerator", [], "any", false, false, false, 52), "invoiceNumber", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 54
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 54), "project", [], "any", false, false, false, 54)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 54), "project", [], "any", false, false, false, 54), "orderNumber", [], "any", false, false, false, 54)))) {
            // line 55
            echo "                    <tr>
                        <th>";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.orderNumber"), "html", null, true);
            echo "</th>
                        <td contenteditable=\"true\">
                            ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "query", [], "any", false, false, false, 58), "project", [], "any", false, false, false, 58), "orderNumber", [], "any", false, false, false, 58), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 62
        echo "            </table>
        </article>
        <article>
            <h2>";
        // line 65
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, true, false, 65), "title", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, true, false, 65), "title", [], "any", false, false, false, 65), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet", [], "invoice-renderer"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet", [], "invoice-renderer"))), "html", null, true);
        echo "</h2>
            <p contenteditable=\"true\">
                ";
        // line 67
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.invoice_salutation"), "html", null, true));
        echo "
            </p>
            <table class=\"inventory\">
                <thead>
                    <tr>
                        <th>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.description"), "html", null, true);
        echo "</th>
                        <th>";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unit_price"), "html", null, true);
        echo "</th>
                        <th>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.amount"), "html", null, true);
        echo "</th>
                        <th>";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.total_rate"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 79), "entries", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 80
            echo "                    ";
            $context["duration"] = $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 80));
            // line 81
            echo "                    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["entry"], "fixedRate", [], "any", false, false, false, 81))) {
                // line 82
                echo "                        ";
                $context["rate"] = twig_get_attribute($this->env, $this->source, $context["entry"], "fixedRate", [], "any", false, false, false, 82);
                // line 83
                echo "                        ";
                $context["duration"] = 1;
                // line 84
                echo "                    ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 84))) {
                // line 85
                echo "                        ";
                $context["rate"] = twig_get_attribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 85);
                // line 86
                echo "                    ";
            } else {
                // line 87
                echo "                        ";
                $context["rate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 87), "getPreferenceValue", [0 => "hourly_rate"], "method", false, false, false, 87);
                // line 88
                echo "                    ";
            }
            // line 89
            echo "
                    <tr>
                        <td contenteditable=\"true\">
                            ";
            // line 92
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 92))) {
                // line 93
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 93), "html", null, true);
                echo "
                            ";
            } else {
                // line 95
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
                echo "
                            ";
            }
            // line 97
            echo "                        </td>
                        <td contenteditable=\"true\">";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["rate"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 98), "currency", [], "any", false, false, false, 98)), "html", null, true);
            echo "</td>
                        <td contenteditable=\"true\">";
            // line 99
            echo twig_escape_filter($this->env, ($context["duration"] ?? null), "html", null, true);
            echo "</td>
                        <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 100), "currency", [], "any", false, false, false, 100)), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </tbody>
            </table>
            <table class=\"balance\">
                <tr>
                    <th>";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.subtotal"), "html", null, true);
        echo "</th>
                    <td>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 108), "subtotal", [], "any", false, false, false, 108), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 108), "currency", [], "any", false, false, false, 108)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.tax"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 111), "vat", [], "any", false, false, false, 111), "html", null, true);
        echo "%)</th>
                    <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 112), "tax", [], "any", false, false, false, 112), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 112), "currency", [], "any", false, false, false, 112)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th class=\"total\">";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.total"), "html", null, true);
        echo "</th>
                    <td class=\"total\">";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 116), "total", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 116), "currency", [], "any", false, false, false, 116)), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </article>
        ";
        // line 120
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 120), "paymentTerms", [], "any", false, false, false, 120))) {
            // line 121
            echo "            <article class=\"footer\">
                <p contenteditable=\"true\">
                    ";
            // line 123
            echo nl2br(twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "template", [], "any", false, false, false, 123), "paymentTerms", [], "any", false, false, false, 123)), "html", null, true));
            echo "
                </p>
                ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", true, true, false, 125)) {
                // line 126
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 126), "html", null, true);
                echo "\">
                ";
            }
            // line 128
            echo "            </article>
        ";
        }
        // line 130
        echo "        <footer>
            <table>
                <thead>
                <tr>
                    <th>";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.address"), "html", null, true);
        echo "</th>
                    <th>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.invoice_bank_account"), "html", null, true);
        echo "</th>
                    <th>";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.contact"), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td contenteditable=\"true\">
                        ";
        // line 142
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 142), "html", null, true));
        echo "
                        ";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.invoice_tax_number"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "tax_number", [], "any", false, false, false, 143), "html", null, true);
        echo "
                    </td>
                    <td contenteditable=\"true\">
                        ";
        // line 146
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "bank_account", [], "any", false, false, false, 146), "html", null, true));
        echo "
                    </td>
                    <td contenteditable=\"true\">
                        ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", false, false, false, 149), "html", null, true);
        echo "
                        <br/>
                        ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 151), "html", null, true);
        echo "
                        <br/>
                        ";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "homepage", [], "any", false, false, false, 153), "html", null, true);
        echo "
                    </td>
                </tr>
                </tbody>
            </table>
        </footer>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "invoice/renderer/freelancer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 153,  369 => 151,  364 => 149,  358 => 146,  350 => 143,  346 => 142,  337 => 136,  333 => 135,  329 => 134,  323 => 130,  319 => 128,  313 => 126,  311 => 125,  306 => 123,  302 => 121,  300 => 120,  293 => 116,  289 => 115,  283 => 112,  277 => 111,  271 => 108,  267 => 107,  261 => 103,  252 => 100,  248 => 99,  244 => 98,  241 => 97,  233 => 95,  227 => 93,  225 => 92,  220 => 89,  217 => 88,  214 => 87,  211 => 86,  208 => 85,  205 => 84,  202 => 83,  199 => 82,  196 => 81,  193 => 80,  189 => 79,  182 => 75,  178 => 74,  174 => 73,  170 => 72,  162 => 67,  157 => 65,  152 => 62,  145 => 58,  140 => 56,  137 => 55,  135 => 54,  130 => 52,  126 => 51,  118 => 48,  114 => 47,  108 => 44,  104 => 43,  96 => 38,  92 => 37,  86 => 34,  79 => 30,  72 => 25,  56 => 8,  53 => 6,  49 => 5,  44 => 3,  42 => 1,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/renderer/freelancer.html.twig", "/var/www/kimai2/templates/invoice/renderer/freelancer.html.twig");
    }
}
