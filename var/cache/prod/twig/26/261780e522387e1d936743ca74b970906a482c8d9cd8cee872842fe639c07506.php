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

/* timesheet/export.html.twig */
class __TwigTemplate_79132ef3da90aae0109ba3171fb5c7cbbd33960d8d4e33da45877ea14e478fc3 extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "timesheet/export.html.twig", 1)->unwrap();
        // line 2
        $this->parent = $this->loadTemplate("invoice/layout.html.twig", "timesheet/export.html.twig", 2);
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
                echo ":
                        ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 13
($context["query"] ?? null), "end", [], "any", false, false, false, 13))) {
                // line 14
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['App\Twig\DateExtensions']->monthName(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 14))), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "end", [], "any", false, false, false, 14), "Y"), "html", null, true);
                echo ":
                        ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 15
($context["query"] ?? null), "begin", [], "any", false, false, false, 15))) {
                // line 16
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['App\Twig\DateExtensions']->monthName(twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 16))), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "begin", [], "any", false, false, false, 16), "Y"), "html", null, true);
                echo ":
                        ";
            }
            // line 18
            echo "                    ";
        }
        // line 19
        echo "                    ";
        echo twig_call_macro($macros["widgets"], "macro_username", [twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "user", [], "any", false, false, false, 19)], 19, $context, $this->getSourceContext());
        echo "
                </span>
            </h2>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 table-responsive\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.description"), "html", null, true);
        echo "</th>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.hours"), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 36
        $context["timeWorked"] = 0;
        // line 37
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 38
            echo "                    ";
            $context["timeWorked"] = (($context["timeWorked"] ?? null) + twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 38));
            // line 39
            echo "                    <tr>
                        <td class=\"text-nowrap\">";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateShort(twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 40)), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 42
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 42))) {
                // line 43
                echo "                            <div>
                                ";
                // line 44
                echo $this->extensions['App\Twig\MarkdownExtension']->timesheetContent(twig_get_attribute($this->env, $this->source, $context["entry"], "description", [], "any", false, false, false, 44));
                echo "
                            </div>
                            ";
            }
            // line 47
            echo "                            <span class=\"small\">
                                ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.activity"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
            echo " |
                                ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.project"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
            echo " |
                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 50), "customer", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            echo "
                            </span>
                        </td>
                        <td class=\"text-nowrap\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["entry"], "duration", [], "any", false, false, false, 53)), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th></th>
                    <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("invoice.total_working_time"), "html", null, true);
        echo "</th>
                    <th>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(($context["timeWorked"] ?? null)), "html", null, true);
        echo "</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

";
    }

    // line 70
    public function block_print_button($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "timesheet/export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 70,  196 => 61,  192 => 60,  186 => 56,  177 => 53,  169 => 50,  163 => 49,  157 => 48,  154 => 47,  148 => 44,  145 => 43,  143 => 42,  138 => 40,  135 => 39,  132 => 38,  127 => 37,  125 => 36,  118 => 32,  114 => 31,  110 => 30,  95 => 19,  92 => 18,  84 => 16,  82 => 15,  75 => 14,  73 => 13,  66 => 12,  63 => 11,  61 => 10,  54 => 5,  50 => 4,  45 => 2,  43 => 1,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "timesheet/export.html.twig", "/var/www/kimai2/templates/timesheet/export.html.twig");
    }
}
