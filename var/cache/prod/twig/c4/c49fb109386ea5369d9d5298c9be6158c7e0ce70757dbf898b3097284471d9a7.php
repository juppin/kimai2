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

/* plugin/index.html.twig */
class __TwigTemplate_606a7fc05cbafcb3846099d5e9512a28532592721955522c256506ac1d675ade extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "plugin/index.html.twig", 2)->unwrap();
        // line 3
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "plugin/index.html.twig", 3)->unwrap();
        // line 4
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "plugin/index.html.twig", 4)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "plugin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugins.title", [], "plugins"), "html", null, true);
    }

    // line 7
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugins.subtitle", [], "plugins"), "html", null, true);
    }

    // line 8
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_plugins", ["index"], 8, $context, $this->getSourceContext());
    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    ";
        // line 12
        if ((twig_length_filter($this->env, ($context["plugins"] ?? null)) == 0)) {
            // line 13
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin.none_installed", [], "plugins")], 13, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 15
            echo "
        ";
            // line 16
            $context["columns"] = ["name" => "", "version" => "", "description" => "hidden-xs", "required_version" => "hidden-xs hidden-sm", "actions" => "actions alwaysVisible"];
            // line 23
            echo "
        ";
            // line 24
            $context["tableName"] = "plugins";
            // line 25
            echo "
        ";
            // line 26
            echo twig_call_macro($macros["tables"], "macro_data_table_header", [($context["tableName"] ?? null), ($context["columns"] ?? null)], 26, $context, $this->getSourceContext());
            echo "
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 28
                echo "            <tr>
                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                <td>";
                // line 30
                echo twig_call_macro($macros["widgets"], "macro_label", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "metadata", [], "any", false, false, false, 30), "version", [], "any", false, false, false, 30), "primary"], 30, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"";
                // line 31
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "description"], 31, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "metadata", [], "any", false, false, false, 31), "description", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                <td class=\"";
                // line 32
                echo twig_call_macro($macros["tables"], "macro_data_table_column_class", [($context["tableName"] ?? null), ($context["columns"] ?? null), "required_version"], 32, $context, $this->getSourceContext());
                echo "\">
                    ";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "metadata", [], "any", false, false, false, 33), "kimaiVersion", [], "any", false, false, false, 33) > twig_constant("App\\Constants::VERSION"))) {
                    // line 34
                    echo "                        ";
                    echo twig_call_macro($macros["widgets"], "macro_label", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "metadata", [], "any", false, false, false, 34), "kimaiVersion", [], "any", false, false, false, 34), "danger"], 34, $context, $this->getSourceContext());
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 35
$context["plugin"], "metadata", [], "any", false, false, false, 35), "kimaiVersion", [], "any", false, false, false, 35) < twig_constant("App\\Constants::VERSION"))) {
                    // line 36
                    echo "                        ";
                    echo twig_call_macro($macros["widgets"], "macro_label", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "metadata", [], "any", false, false, false, 36), "kimaiVersion", [], "any", false, false, false, 36), "warning"], 36, $context, $this->getSourceContext());
                    echo "
                    ";
                } else {
                    // line 38
                    echo "                        ";
                    echo twig_call_macro($macros["widgets"], "macro_label", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "metadata", [], "any", false, false, false, 38), "kimaiVersion", [], "any", false, false, false, 38), "success"], 38, $context, $this->getSourceContext());
                    echo "
                    ";
                }
                // line 40
                echo "                </td>
                <td class=\"actions\">
                    ";
                // line 42
                echo twig_call_macro($macros["actions"], "macro_plugin", [$context["plugin"], "index"], 42, $context, $this->getSourceContext());
                echo "
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        ";
            echo twig_call_macro($macros["tables"], "macro_data_table_footer", [($context["plugins"] ?? null)], 46, $context, $this->getSourceContext());
            echo "

    ";
        }
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "plugin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 49,  169 => 46,  159 => 42,  155 => 40,  149 => 38,  143 => 36,  141 => 35,  136 => 34,  134 => 33,  130 => 32,  124 => 31,  120 => 30,  116 => 29,  113 => 28,  109 => 27,  105 => 26,  102 => 25,  100 => 24,  97 => 23,  95 => 16,  92 => 15,  86 => 13,  84 => 12,  81 => 11,  77 => 10,  70 => 8,  63 => 7,  56 => 6,  51 => 1,  49 => 4,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plugin/index.html.twig", "/var/www/kimai2/templates/plugin/index.html.twig");
    }
}
