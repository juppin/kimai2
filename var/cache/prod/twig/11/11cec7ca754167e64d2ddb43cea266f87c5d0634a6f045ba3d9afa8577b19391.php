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

/* invoice/index.html.twig */
class __TwigTemplate_b3805bbe26a219dc103957bcd81b1a2b7772dd1ab6229625550fcdb928042836 extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "invoice/index.html.twig", 2)->unwrap();
        // line 3
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "invoice/index.html.twig", 3)->unwrap();
        // line 4
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "invoice/index.html.twig", 4)->unwrap();
        // line 5
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "invoice/index.html.twig", 5)->unwrap();
        // line 7
        $context["columns"] = ["date" => "alwaysVisible", "user" => "hidden-sm", "description" => "hidden-xs hidden-sm", "unit_price" => "hidden-xs text-center", "amount" => "text-center", "total_rate" => "text-right alwaysVisible"];
        // line 16
        $context["tableName"] = "invoice";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "invoice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.title"), "html", null, true);
    }

    // line 19
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.subtitle"), "html", null, true);
    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_invoices", ["index"], 20, $context, $this->getSourceContext());
    }

    // line 22
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        echo twig_call_macro($macros["toolbar"], "macro_toolbar", [($context["form"] ?? null), "collapseInvoice", true], 23, $context, $this->getSourceContext());
        echo "
    ";
        // line 24
        echo twig_call_macro($macros["tables"], "macro_data_table_column_modal", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 24, $context, $this->getSourceContext());
        echo "
";
    }

    // line 27
    public function block_main_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"clearfix\"></div>
";
    }

    // line 31
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
    ";
        // line 33
        $context["entries"] = [];
        // line 34
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 34)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 34), "entries", [], "any", false, false, false, 34)))) {
            // line 35
            echo "        ";
            $context["entries"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 35), "entries", [], "any", false, false, false, 35);
            // line 36
            echo "    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if (twig_test_empty(($context["entries"] ?? null))) {
            // line 39
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 39, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 41
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["success", "invoice.preview"], 41, $context, $this->getSourceContext());
            echo "

        ";
            // line 43
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 43, $context, $this->getSourceContext());
            echo "
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 45
                echo "            ";
                $context["duration"] = $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 45));
                // line 46
                echo "            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["entry"], "fixedRate", [], "any", false, false, false, 46))) {
                    // line 47
                    echo "                ";
                    $context["rate"] = twig_get_attribute($this->env, $this->source, $context["entry"], "fixedRate", [], "any", false, false, false, 47);
                    // line 48
                    echo "                ";
                    $context["duration"] = 1;
                    // line 49
                    echo "            ";
                } elseif ( !(null === twig_get_attribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "                ";
                    $context["rate"] = twig_get_attribute($this->env, $this->source, $context["entry"], "hourlyRate", [], "any", false, false, false, 50);
                    // line 51
                    echo "            ";
                } else {
                    // line 52
                    echo "                ";
                    $context["rate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 52), "preferenceValue", [0 => "hourly_rate"], "method", false, false, false, 52);
                    // line 53
                    echo "            ";
                }
                // line 54
                echo "            <tr>
                <td class=\"text-nowrap\">";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 55)), "html", null, true);
                echo "</td>
                <td class=\"";
                // line 56
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "user"], 56, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_user", [twig_get_attribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 56)], 56, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 57
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "description"], 57, $context, $this->getSourceContext());
                echo " timesheet-description\">
                    ";
                // line 58
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 58))) {
                    // line 59
                    echo "                        ";
                    echo $this->extensions['App\Twig\MarkdownExtension']->timesheetContent(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 59));
                    echo "
                    ";
                } else {
                    // line 61
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
                    echo "
                    ";
                }
                // line 63
                echo "                </td>
                <td class=\"";
                // line 64
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "unit_price"], 64, $context, $this->getSourceContext());
                echo " text-center\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(($context["rate"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 64), "currency", [], "any", false, false, false, 64)), "html", null, true);
                echo "</td>
                <td class=\"";
                // line 65
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "amount"], 65, $context, $this->getSourceContext());
                echo " text-center text-nowrap\">";
                echo twig_escape_filter($this->env, ($context["duration"] ?? null), "html", null, true);
                echo "</td>
                <td class=\"text-right text-nowrap\">";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["entry"], "rate", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "calculator", [], "any", false, false, false, 66), "currency", [], "any", false, false, false, 66)), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["entries"] ?? null)], 69, $context, $this->getSourceContext());
            echo "

        ";
            // line 71
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_invoice")) {
                // line 72
                echo "            <div class=\"row no-print\">
                <div class=\"col-xs-12\">
                    <a href=\"";
                // line 74
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice_print");
                echo "\" class=\"btn btn-success pull-right toolbar-action\">
                        <i class=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("print"), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.print"), "html", null, true);
                echo "
                    </a>
                </div>
            </div>
        ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "
";
    }

    public function getTemplateName()
    {
        return "invoice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 81,  262 => 80,  252 => 75,  248 => 74,  244 => 72,  242 => 71,  236 => 69,  227 => 66,  221 => 65,  215 => 64,  212 => 63,  204 => 61,  198 => 59,  196 => 58,  192 => 57,  186 => 56,  182 => 55,  179 => 54,  176 => 53,  173 => 52,  170 => 51,  167 => 50,  164 => 49,  161 => 48,  158 => 47,  155 => 46,  152 => 45,  148 => 44,  144 => 43,  138 => 41,  132 => 39,  130 => 38,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  116 => 33,  113 => 32,  109 => 31,  104 => 28,  100 => 27,  94 => 24,  89 => 23,  85 => 22,  78 => 20,  71 => 19,  64 => 18,  59 => 1,  57 => 16,  55 => 7,  53 => 5,  51 => 4,  49 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/index.html.twig", "/var/www/kimai2/templates/invoice/index.html.twig");
    }
}
