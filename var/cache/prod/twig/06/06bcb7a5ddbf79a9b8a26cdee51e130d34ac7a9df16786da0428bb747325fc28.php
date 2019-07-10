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

/* invoice/templates.html.twig */
class __TwigTemplate_5612a20770ea0ecb8643912399adc1e5c9f876b6fa48460b5f2bd2eca2ca4fcc extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "invoice/templates.html.twig", 2)->unwrap();
        // line 3
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "invoice/templates.html.twig", 3)->unwrap();
        // line 4
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "invoice/templates.html.twig", 4)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "invoice/templates.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_invoice_template.title"), "html", null, true);
    }

    // line 7
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_invoice_template.subtitle"), "html", null, true);
    }

    // line 8
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_invoice_templates", ["index"], 8, $context, $this->getSourceContext());
    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["entries"] ?? null), "count", [], "any", false, false, false, 11) == 0)) {
            // line 12
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 12, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        $context["columns"] = ["name" => "alwaysVisible", "title" => "hidden-xs", "due_days" => "hidden-xs hidden-sm", "vat" => "hidden-xs hidden-sm", "actions" => "actions alwaysVisible"];
        // line 22
        echo "
    ";
        // line 23
        $context["tableName"] = "invoice_template";
        // line 24
        echo "
    ";
        // line 25
        echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 25, $context, $this->getSourceContext());
        echo "

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 28
            echo "        <tr";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["entry"])) {
                echo " class=\"modal-ajax-form open-edit\" data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_invoice_template_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 28), "page" => ($context["page"] ?? null)]), "html", null, true);
                echo "\"";
            }
            echo ">
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td class=\"";
            // line 30
            echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "title"], 30, $context, $this->getSourceContext());
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            <td class=\"";
            // line 31
            echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "due_days"], 31, $context, $this->getSourceContext());
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "dueDays", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
            <td class=\"";
            // line 32
            echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "vat"], 32, $context, $this->getSourceContext());
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "vat", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
            <td class=\"actions\">
                ";
            // line 35
            echo "                ";
            $context["actions"] = [];
            // line 36
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["entry"])) {
                // line 37
                echo "                    ";
                $context["actions"] = ["edit" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_invoice_template_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 37), "page" => ($context["page"] ?? null)]), "class" => "modal-ajax-form"]];
                // line 38
                echo "                ";
            }
            // line 39
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_invoice_template")) {
                // line 40
                echo "                    ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["copy" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_invoice_template_copy", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 40), "page" => ($context["page"] ?? null)])]);
                // line 41
                echo "                ";
            }
            // line 42
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", $context["entry"])) {
                // line 43
                echo "                    ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["trash" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_invoice_template_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 43), "page" => ($context["page"] ?? null)])]);
                // line 44
                echo "                ";
            }
            // line 45
            echo "                ";
            $context["event"] = $this->extensions['App\Twig\EventExtensions']->triggerEvent("actions.invoice_templates", ["actions" => ($context["actions"] ?? null), "view" => "index", "template" => $context["entry"]]);
            // line 46
            echo "                ";
            echo twig_call_macro($macros["widgets"], "macro_table_actions", [($context["actions"] ?? null)], 46, $context, $this->getSourceContext());
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    ";
        // line 51
        echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["entries"] ?? null), "admin_invoice_template_paginated"], 51, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "invoice/templates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 51,  188 => 50,  177 => 46,  174 => 45,  171 => 44,  168 => 43,  165 => 42,  162 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 37,  147 => 36,  144 => 35,  137 => 32,  131 => 31,  125 => 30,  121 => 29,  112 => 28,  108 => 27,  103 => 25,  100 => 24,  98 => 23,  95 => 22,  93 => 15,  90 => 14,  84 => 12,  81 => 11,  77 => 10,  70 => 8,  63 => 7,  56 => 6,  51 => 1,  49 => 4,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/templates.html.twig", "/var/www/kimai2/templates/invoice/templates.html.twig");
    }
}
