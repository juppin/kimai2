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

/* activity/index.html.twig */
class __TwigTemplate_f9a5184d468cbd9f3996f3b6b55972e9c5a96dc7276accb5fa27ee10aa36ff19 extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "activity/index.html.twig", 2)->unwrap();
        // line 3
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "activity/index.html.twig", 3)->unwrap();
        // line 4
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "activity/index.html.twig", 4)->unwrap();
        // line 5
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "activity/index.html.twig", 5)->unwrap();
        // line 7
        $context["columns"] = ["name" => "alwaysVisible", "customer" => "hidden-xs", "project" => "hidden-xs", "comment" => "hidden-xs", "visible" => "", "actions" => "actions alwaysVisible"];
        // line 16
        $context["tableName"] = "activity_admin";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "activity/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_activity.title"), "html", null, true);
    }

    // line 19
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_activity.subtitle"), "html", null, true);
    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_activities", ["index"], 20, $context, $this->getSourceContext());
    }

    // line 22
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        echo twig_call_macro($macros["toolbar"], "macro_toolbar", [($context["toolbarForm"] ?? null), "collapseActivityAdmin", ($context["showFilter"] ?? null)], 23, $context, $this->getSourceContext());
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
            echo "
        ";
            // line 33
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null), false, "kimai.activityUpdate"], 33, $context, $this->getSourceContext());
            echo "

        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 36
                echo "            <tr";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["entry"])) {
                    echo " class=\"modal-ajax-form open-edit\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                    echo "\"";
                }
                echo ">
                <td>";
                // line 37
                echo twig_call_macro($macros["widgets"], "macro_label_color_dot", ["activity", true, twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 37), null, twig_get_attribute($this->env, $this->source, $context["entry"], "color", [], "any", false, false, false, 37)], 37, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 38
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "customer"], 38, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 39) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 39), "customer", [], "any", false, false, false, 39))) {
                    // line 40
                    echo "                        ";
                    // line 41
                    echo "                        ";
                    echo twig_call_macro($macros["widgets"], "macro_label_customer", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 41), "customer", [], "any", false, false, false, 41), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 41), "customer", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)])], 41, $context, $this->getSourceContext());
                    echo "
                    ";
                }
                // line 43
                echo "                </td>
                <td class=\"";
                // line 44
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "project"], 44, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "                        ";
                    // line 47
                    echo "                        ";
                    echo twig_call_macro($macros["widgets"], "macro_label_project", [twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 47), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)])], 47, $context, $this->getSourceContext());
                    echo "
                    ";
                }
                // line 49
                echo "                </td>
                <td class=\"";
                // line 50
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "comment"], 50, $context, $this->getSourceContext());
                echo "\">";
                echo $this->extensions['App\Twig\MarkdownExtension']->timesheetContent(twig_get_attribute($this->env, $this->source, $context["entry"], "comment", [], "any", false, false, false, 50));
                echo "</td>
                <td class=\"";
                // line 51
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "visible"], 51, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_visible", [twig_get_attribute($this->env, $this->source, $context["entry"], "visible", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"actions\">
                    ";
                // line 53
                echo twig_call_macro($macros["actions"], "macro_activity", [$context["entry"], "index"], 53, $context, $this->getSourceContext());
                echo "
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
        ";
            // line 58
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["entries"] ?? null), "admin_activity_paginated"], 58, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "activity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 60,  199 => 58,  196 => 57,  186 => 53,  179 => 51,  173 => 50,  170 => 49,  164 => 47,  162 => 46,  160 => 45,  156 => 44,  153 => 43,  147 => 41,  145 => 40,  143 => 39,  139 => 38,  135 => 37,  126 => 36,  122 => 35,  117 => 33,  114 => 32,  108 => 30,  106 => 29,  103 => 28,  99 => 27,  93 => 24,  88 => 23,  84 => 22,  77 => 20,  70 => 19,  63 => 18,  58 => 1,  56 => 16,  54 => 7,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "activity/index.html.twig", "/var/www/kimai2/templates/activity/index.html.twig");
    }
}
