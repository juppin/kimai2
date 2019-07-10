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

/* project/index.html.twig */
class __TwigTemplate_32152dc05dd6872cceb234b99c9966034928c450c89d3cf1d521e0aaf7597088 extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "project/index.html.twig", 2)->unwrap();
        // line 3
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "project/index.html.twig", 3)->unwrap();
        // line 4
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "project/index.html.twig", 4)->unwrap();
        // line 5
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "project/index.html.twig", 5)->unwrap();
        // line 7
        $context["columns"] = ["name" => "alwaysVisible", "customer" => "hidden-xs", "comment" => "hidden-xs hidden-sm", "visible" => "", "actions" => "actions alwaysVisible"];
        // line 15
        $context["tableName"] = "project_admin";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_project.title"), "html", null, true);
    }

    // line 18
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_project.subtitle"), "html", null, true);
    }

    // line 19
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_projects", ["index"], 19, $context, $this->getSourceContext());
    }

    // line 21
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        echo twig_call_macro($macros["toolbar"], "macro_toolbar", [($context["toolbarForm"] ?? null), "collapseProjectAdmin", ($context["showFilter"] ?? null)], 22, $context, $this->getSourceContext());
        echo "
    ";
        // line 23
        echo twig_call_macro($macros["tables"], "macro_data_table_column_modal", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 23, $context, $this->getSourceContext());
        echo "
";
    }

    // line 26
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "
    ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["entries"] ?? null), "count", [], "any", false, false, false, 28) == 0)) {
            // line 29
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 29, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null), false, "kimai.projectUpdate"], 31, $context, $this->getSourceContext());
            echo "

        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 34
                echo "            <tr";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["entry"])) {
                    echo " class=\"modal-ajax-form open-edit\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                    echo "\"";
                }
                echo ">
                <td>";
                // line 35
                echo twig_call_macro($macros["widgets"], "macro_label_color_dot", ["project", true, twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 35), null, twig_get_attribute($this->env, $this->source, $context["entry"], "color", [], "any", false, false, false, 35)], 35, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 36
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "customer"], 36, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 37
                echo twig_call_macro($macros["widgets"], "macro_label_customer", [twig_get_attribute($this->env, $this->source, $context["entry"], "customer", [], "any", false, false, false, 37), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "customer", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)])], 37, $context, $this->getSourceContext());
                echo "
                </td>
                <td class=\"";
                // line 39
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "comment"], 39, $context, $this->getSourceContext());
                echo "\">";
                echo $this->extensions['App\Twig\MarkdownExtension']->timesheetContent(twig_get_attribute($this->env, $this->source, $context["entry"], "comment", [], "any", false, false, false, 39));
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
                echo twig_call_macro($macros["actions"], "macro_project", [$context["entry"], "index"], 42, $context, $this->getSourceContext());
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
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["entries"] ?? null), "admin_project_paginated"], 47, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  172 => 47,  169 => 46,  159 => 42,  152 => 40,  146 => 39,  141 => 37,  137 => 36,  133 => 35,  124 => 34,  120 => 33,  114 => 31,  108 => 29,  106 => 28,  103 => 27,  99 => 26,  93 => 23,  88 => 22,  84 => 21,  77 => 19,  70 => 18,  63 => 17,  58 => 1,  56 => 15,  54 => 7,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/index.html.twig", "/var/www/kimai2/templates/project/index.html.twig");
    }
}
