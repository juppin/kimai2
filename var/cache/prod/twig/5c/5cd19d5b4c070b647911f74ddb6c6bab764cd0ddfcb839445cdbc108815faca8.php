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

/* timesheet-team/export.html.twig */
class __TwigTemplate_cc0619a7be1919a6a9b205d4d1939cd5ee539cb7ad2988da06399f8d0da5e38b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'invoice' => [$this, 'block_invoice'],
            'print_button' => [$this, 'block_print_button'],
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "timesheet-team/export.html.twig", 1)->unwrap();
        // line 2
        $this->parent = $this->loadTemplate("invoice/layout.html.twig", "timesheet-team/export.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_invoice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h2 class=\"page-header\">
                <span contenteditable=\"true\">
                    ";
        // line 10
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 10)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 10)))) {
            // line 11
            echo "                        ";
            if (((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 11), "m") != twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 11), "m")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 11), "Y") != twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 11), "Y")))) {
                // line 12
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 12)), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 12)), "html", null, true);
                echo "
                        ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 13
($context["query"] ?? null), "end", [], "any", false, false, false, 13))) {
                // line 14
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['App\Twig\DateExtensions']->monthName(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 14))), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 14), "Y"), "html", null, true);
                echo "
                        ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 15
($context["query"] ?? null), "begin", [], "any", false, false, false, 15))) {
                // line 16
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['App\Twig\DateExtensions']->monthName(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 16))), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 16), "Y"), "html", null, true);
                echo "
                        ";
            }
            // line 18
            echo "                    ";
        }
        // line 19
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "user", [], "any", false, false, false, 19))) {
            // line 20
            echo "                        : ";
            echo twig_call_macro($macros["widgets"], "macro_username", [twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "user", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 22
        echo "                </span>
            </h2>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 table-responsive\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date"), "html", null, true);
        echo "</th>
                    ";
        // line 33
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "user", [], "any", false, false, false, 33))) {
            // line 34
            echo "                        <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
            echo "</th>
                    ";
        }
        // line 36
        echo "                    <th>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.description"), "html", null, true);
        echo "</th>
                    <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.hours"), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 41
        $context["timeWorked"] = 0;
        // line 42
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 43
            echo "                    ";
            $context["timeWorked"] = (($context["timeWorked"] ?? null) + twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 43));
            // line 44
            echo "                    <tr>
                        <td class=\"text-nowrap\">";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 45)), "html", null, true);
            echo "</td>
                        ";
            // line 46
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "user", [], "any", false, false, false, 46))) {
                // line 47
                echo "                            <td>";
                echo twig_call_macro($macros["widgets"], "macro_username", [twig_get_attribute($this->env, $this->source, $context["entry"], "user", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
                echo "</td>
                        ";
            }
            // line 49
            echo "                        <td>
                            ";
            // line 50
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 50))) {
                // line 51
                echo "                            <div>
                                ";
                // line 52
                echo $this->extensions['App\Twig\MarkdownExtension']->timesheetContent(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 52));
                echo "
                            </div>
                            ";
            }
            // line 55
            echo "                            <span class=\"small\">
                                ";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.activity"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            echo " |
                                ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.project"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
            echo " |
                                ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 58), "customer", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
            echo "
                            </span>
                        </td>
                        <td class=\"text-nowrap\">";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 61)), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th></th>
                    <th>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.total_working_time"), "html", null, true);
        echo "</th>
                    <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["timeWorked"] ?? null)), "html", null, true);
        echo "</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

";
    }

    // line 78
    public function block_print_button($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "timesheet-team/export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 78,  221 => 69,  217 => 68,  211 => 64,  202 => 61,  194 => 58,  188 => 57,  182 => 56,  179 => 55,  173 => 52,  170 => 51,  168 => 50,  165 => 49,  159 => 47,  157 => 46,  153 => 45,  150 => 44,  147 => 43,  142 => 42,  140 => 41,  133 => 37,  128 => 36,  122 => 34,  120 => 33,  116 => 32,  104 => 22,  98 => 20,  95 => 19,  92 => 18,  84 => 16,  82 => 15,  75 => 14,  73 => 13,  66 => 12,  63 => 11,  61 => 10,  54 => 5,  50 => 4,  45 => 2,  43 => 1,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "timesheet-team/export.html.twig", "/var/www/kimai2/templates/timesheet-team/export.html.twig");
    }
}
