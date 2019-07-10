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

/* customer/index.html.twig */
class __TwigTemplate_ce3b54d3846d597d41f82d5f678be20670ec4b5b7b4bbdb0f8bcb58da804158b extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "customer/index.html.twig", 2)->unwrap();
        // line 3
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "customer/index.html.twig", 3)->unwrap();
        // line 4
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "customer/index.html.twig", 4)->unwrap();
        // line 5
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "customer/index.html.twig", 5)->unwrap();
        // line 7
        $context["columns"] = ["name" => "alwaysVisible", "comment" => "hidden-xs", "country" => "hidden-xs", "number" => "hidden-xs", "visible" => "hidden-xs", "actions" => "actions alwaysVisible"];
        // line 16
        $context["tableName"] = "customer_admin";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "customer/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_customer.title"), "html", null, true);
    }

    // line 19
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_customer.subtitle"), "html", null, true);
    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_customers", ["index"], 20, $context, $this->getSourceContext());
    }

    // line 22
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        echo twig_call_macro($macros["toolbar"], "macro_toolbar", [($context["toolbarForm"] ?? null), "collapseCustomerAdmin", ($context["showFilter"] ?? null)], 23, $context, $this->getSourceContext());
        echo "
    ";
        // line 24
        echo twig_call_macro($macros["tables"], "macro_data_table_column_modal", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 24, $context, $this->getSourceContext());
        echo "
";
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
    ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["entries"] ?? null), "count", [], "any", false, false, false, 29) == 0)) {
            // line 30
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 30, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 32
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null), false, "kimai.customerUpdate"], 32, $context, $this->getSourceContext());
            echo "

        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 35
                echo "            <tr";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["entry"])) {
                    echo " class=\"modal-ajax-form open-edit\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                    echo "\"";
                }
                echo ">
                <td>";
                // line 36
                echo twig_call_macro($macros["widgets"], "macro_label_color_dot", ["customer", true, twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 36), null, twig_get_attribute($this->env, $this->source, $context["entry"], "color", [], "any", false, false, false, 36)], 36, $context, $this->getSourceContext());
                echo " ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "company", [], "any", false, false, false, 36))) {
                    echo "(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "company", [], "any", false, false, false, 36), "html", null, true);
                    echo ")";
                }
                echo "</td>
                <td class=\"";
                // line 37
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "comment"], 37, $context, $this->getSourceContext());
                echo "\">";
                echo $this->extensions['App\Twig\MarkdownExtension']->timesheetContent(twig_get_attribute($this->env, $this->source, $context["entry"], "comment", [], "any", false, false, false, 37));
                echo "</td>
                <td class=\"";
                // line 38
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "country"], 38, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->country(twig_get_attribute($this->env, $this->source, $context["entry"], "country", [], "any", false, false, false, 38)), "html", null, true);
                echo "</td>
                <td class=\"";
                // line 39
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "number"], 39, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "number", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                <td class=\"";
                // line 40
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "visible"], 40, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_visible", [twig_get_attribute($this->env, $this->source, $context["entry"], "visible", [], "any", false, false, false, 40)], 40, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"actions\">
                    ";
                // line 42
                echo twig_call_macro($macros["actions"], "macro_customer", [$context["entry"], "index"], 42, $context, $this->getSourceContext());
                echo "
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
            // line 47
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["entries"] ?? null), "admin_customer_paginated"], 47, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 49,  181 => 47,  178 => 46,  168 => 42,  161 => 40,  155 => 39,  149 => 38,  143 => 37,  133 => 36,  124 => 35,  120 => 34,  114 => 32,  108 => 30,  106 => 29,  103 => 28,  99 => 27,  93 => 24,  88 => 23,  84 => 22,  77 => 20,  70 => 19,  63 => 18,  58 => 1,  56 => 16,  54 => 7,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/index.html.twig", "/var/www/kimai2/templates/customer/index.html.twig");
    }
}
