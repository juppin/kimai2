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

/* user/index.html.twig */
class __TwigTemplate_9ca4726a6ecb8e29e857c48be484d340601ac7bbbf23fecab68ae18b4fa5ff87 extends \Twig\Template
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
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "user/index.html.twig", 2)->unwrap();
        // line 3
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/index.html.twig", 3)->unwrap();
        // line 4
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "user/index.html.twig", 4)->unwrap();
        // line 5
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "user/index.html.twig", 5)->unwrap();
        // line 7
        $context["columns"] = ["alias" => "alwaysVisible", "username" => "hidden-xs", "email" => "hidden-xs hidden-sm", "title" => "hidden-xs", "roles" => "hidden-xs", "active" => "", "actions" => "actions alwaysVisible"];
        // line 17
        $context["tableName"] = "user_admin";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_user.title"), "html", null, true);
    }

    // line 20
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_user.subtitle"), "html", null, true);
    }

    // line 21
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_users", ["index"], 21, $context, $this->getSourceContext());
    }

    // line 23
    public function block_main_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        echo twig_call_macro($macros["toolbar"], "macro_toolbar", [($context["toolbarForm"] ?? null), "collapseUserAdmin", ($context["showFilter"] ?? null)], 24, $context, $this->getSourceContext());
        echo "
    ";
        // line 25
        echo twig_call_macro($macros["tables"], "macro_data_table_column_modal", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 25, $context, $this->getSourceContext());
        echo "
";
    }

    // line 28
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
    ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["entries"] ?? null), "count", [], "any", false, false, false, 30) == 0)) {
            // line 31
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 31, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 33
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null), false, "kimai.userUpdate"], 33, $context, $this->getSourceContext());
            echo "

        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 36
                echo "            <tr";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["entry"])) {
                    echo " class=\"open-edit alternative-link\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_edit", ["username" => twig_get_attribute($this->env, $this->source, $context["entry"], "username", [], "any", false, false, false, 36)]), "html", null, true);
                    echo "\"";
                }
                echo ">
                <td>";
                // line 37
                echo twig_call_macro($macros["widgets"], "macro_username", [$context["entry"]], 37, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 38
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "username"], 38, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "username", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                <td class=\"";
                // line 39
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "email"], 39, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "email", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                <td class=\"";
                // line 40
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "title"], 40, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                <td class=\"";
                // line 41
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "roles"], 41, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entry"], "roles", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 43
                    echo "                        ";
                    if (($context["role"] != "ROLE_USER")) {
                        // line 44
                        echo "                            ";
                        echo twig_call_macro($macros["widgets"], "macro_label_role", [$context["role"]], 44, $context, $this->getSourceContext());
                        echo "
                        ";
                    }
                    // line 46
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                </td>
                <td class=\"";
                // line 48
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "active"], 48, $context, $this->getSourceContext());
                echo "\">";
                echo twig_call_macro($macros["widgets"], "macro_label_visible", [twig_get_attribute($this->env, $this->source, $context["entry"], "enabled", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"actions\">
                    ";
                // line 50
                echo twig_call_macro($macros["actions"], "macro_user", [$context["entry"], "index"], 50, $context, $this->getSourceContext());
                echo "
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
        ";
            // line 55
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["entries"] ?? null), "admin_user_paginated"], 55, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 57,  201 => 55,  198 => 54,  188 => 50,  181 => 48,  178 => 47,  172 => 46,  166 => 44,  163 => 43,  159 => 42,  155 => 41,  149 => 40,  143 => 39,  137 => 38,  133 => 37,  124 => 36,  120 => 35,  114 => 33,  108 => 31,  106 => 30,  103 => 29,  99 => 28,  93 => 25,  88 => 24,  84 => 23,  77 => 21,  70 => 20,  63 => 19,  58 => 1,  56 => 17,  54 => 7,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "/var/www/kimai2/templates/user/index.html.twig");
    }
}
