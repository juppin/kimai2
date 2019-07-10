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

/* user/permissions.html.twig */
class __TwigTemplate_e5b828d4bbaa69eb9df97ac6c19117b19b4c27d98e6c0a2416a8dd0110a745a4 extends \Twig\Template
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
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "user/permissions.html.twig", 2)->unwrap();
        // line 3
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/permissions.html.twig", 3)->unwrap();
        // line 4
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("macros/toolbar.html.twig", "user/permissions.html.twig", 4)->unwrap();
        // line 5
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "user/permissions.html.twig", 5)->unwrap();
        // line 7
        $context["columns"] = ["label.name" => "alwaysVisible"];
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 12
            $context["columns"] = twig_array_merge(($context["columns"] ?? null), [            // line 13
$context["role"] => "alwaysVisible text-center"]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        $context["tableName"] = "user_admin_permissions";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/permissions.html.twig", 1);
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
        echo twig_call_macro($macros["actions"], "macro_user_permissions", ["index"], 21, $context, $this->getSourceContext());
    }

    // line 23
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
    ";
        // line 25
        echo twig_call_macro($macros["tables"], "macro_data_table_header_options", [($context["tableName"] ?? null), ($context["columns"] ?? null), ["translationPrefix" => ""]], 25, $context, $this->getSourceContext());
        echo "

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["permissions"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 28
            echo "        <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
            echo "</td>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 31
                echo "                <td class=\"text-center\">
                    ";
                // line 32
                echo twig_call_macro($macros["widgets"], "macro_label_boolean", [twig_get_attribute($this->env, $this->source, ($context["manager"] ?? null), "permission", [0 => $context["role"], 1 => $context["permission"]], "method", false, false, false, 32)], 32, $context, $this->getSourceContext());
                echo "
                </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["permissions"] ?? null)], 38, $context, $this->getSourceContext());
        echo "

";
    }

    public function getTemplateName()
    {
        return "user/permissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 38,  140 => 37,  133 => 35,  124 => 32,  121 => 31,  117 => 30,  113 => 29,  110 => 28,  106 => 27,  101 => 25,  98 => 24,  94 => 23,  87 => 21,  80 => 20,  73 => 19,  68 => 1,  66 => 17,  60 => 13,  59 => 12,  55 => 11,  53 => 7,  51 => 5,  49 => 4,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/permissions.html.twig", "/var/www/kimai2/templates/user/permissions.html.twig");
    }
}
