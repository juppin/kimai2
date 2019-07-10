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

/* tags/index.html.twig */
class __TwigTemplate_539a39209979bdf1277f83bb30fb3e874d5e5dd44f2da7f84651472a6b815fab extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "tags/index.html.twig", 2)->unwrap();
        // line 3
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "tags/index.html.twig", 3)->unwrap();
        // line 4
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "tags/index.html.twig", 4)->unwrap();
        // line 5
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "tags/index.html.twig", 5)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tags/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tags.title", [], "tags"), "html", null, true);
    }

    // line 8
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tags.subtitle", [], "tags"), "html", null, true);
    }

    // line 9
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_tags", ["index"], 9, $context, $this->getSourceContext());
    }

    // line 11
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        echo twig_call_macro($macros["toolbar"], "macro_toolbar", [($context["toolbarForm"] ?? null), "collapseTags", ($context["showFilter"] ?? null)], 12, $context, $this->getSourceContext());
        echo "
";
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, ($context["tags"] ?? null)) == 0)) {
            // line 18
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 18, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 20
            echo "
        ";
            // line 21
            $context["columns"] = ["name" => "", "amount" => "", "actions" => "actions alwaysVisible"];
            // line 26
            echo "
        ";
            // line 27
            $context["tableName"] = "admin_tags";
            // line 28
            echo "
        ";
            // line 29
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null), false, "kimai.tagUpdate"], 29, $context, $this->getSourceContext());
            echo "
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 31
                echo "            ";
                $context["type"] = "primary";
                // line 32
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["tag"], "amount", [], "any", false, false, false, 32) == 0)) {
                    // line 33
                    echo "                ";
                    $context["type"] = "warning";
                    // line 34
                    echo "            ";
                }
                // line 35
                echo "
            <tr>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_call_macro($macros["widgets"], "macro_label", [twig_get_attribute($this->env, $this->source, $context["tag"], "amount", [], "any", false, false, false, 38), ($context["type"] ?? null)], 38, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"actions\">
                    ";
                // line 40
                echo twig_call_macro($macros["actions"], "macro_tag", [$context["tag"], "index"], 40, $context, $this->getSourceContext());
                echo "
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["tags"] ?? null), "tags_paginated"], 44, $context, $this->getSourceContext());
            echo "

    ";
        }
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "tags/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 47,  162 => 44,  152 => 40,  147 => 38,  143 => 37,  139 => 35,  136 => 34,  133 => 33,  130 => 32,  127 => 31,  123 => 30,  119 => 29,  116 => 28,  114 => 27,  111 => 26,  109 => 21,  106 => 20,  100 => 18,  98 => 17,  95 => 16,  91 => 15,  84 => 12,  80 => 11,  73 => 9,  66 => 8,  59 => 7,  54 => 1,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tags/index.html.twig", "/var/www/kimai2/templates/tags/index.html.twig");
    }
}
