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

/* widget/widget-more.html.twig */
class __TwigTemplate_a770883caea0a1aa22b5be97a3512f11dff0c3c0561272e0f47cb782174f4cc0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_data' => [$this, 'block_widget_data'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["url"] = null;
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "route", [], "any", true, true, false, 2)) {
            // line 3
            echo "    ";
            $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "route", [], "any", false, false, false, 3), ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "routeOptions", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "routeOptions", [], "any", false, false, false, 3), [])) : ([])));
        }
        // line 5
        echo "
<div class=\"small-box bg-";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", false, false, false, 6), "green")) : ("green")), "html", null, true);
        echo "\">
    <div class=\"inner\">
        <h3>
            ";
        // line 9
        if (twig_test_iterable(($context["data"] ?? null))) {
            // line 10
            echo "                ";
            echo "Invalid data";
            echo "
            ";
        } else {
            // line 12
            echo "                ";
            $this->displayBlock('widget_data', $context, $blocks);
            // line 20
            echo "            ";
        }
        // line 21
        echo "            <sup style=\"font-size: 20px\">";
        echo twig_escape_filter($this->env, (((isset($context["unit"]) || array_key_exists("unit", $context))) ? (_twig_default_filter(($context["unit"] ?? null), "")) : ("")), "html", null, true);
        echo "</sup>
        </h3>
        <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
        echo "</p>
    </div>
    <div class=\"icon\">
        <i class=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 26)), "html", null, true);
        echo "\"></i>
    </div>
    ";
        // line 28
        if ( !twig_test_empty(($context["url"] ?? null))) {
            // line 29
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"small-box-footer\">
        ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more.info.link"), "html", null, true);
            echo "
    </a>
    ";
        }
        // line 33
        echo "</div>
";
    }

    // line 12
    public function block_widget_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "dataType", [], "any", false, false, false, 13) == "duration")) {
            // line 14
            echo "                        ";
            $context["data"] = $this->extensions['App\Twig\Extensions']->duration(($context["data"] ?? null));
            // line 15
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "dataType", [], "any", false, false, false, 15) == "money")) {
            // line 16
            echo "                        ";
            $context["data"] = $this->extensions['App\Twig\Extensions']->money(($context["data"] ?? null));
            // line 17
            echo "                    ";
        }
        // line 18
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "widget/widget-more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 18,  120 => 17,  117 => 16,  114 => 15,  111 => 14,  108 => 13,  104 => 12,  99 => 33,  93 => 30,  88 => 29,  86 => 28,  81 => 26,  75 => 23,  69 => 21,  66 => 20,  63 => 12,  57 => 10,  55 => 9,  49 => 6,  46 => 5,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widget/widget-more.html.twig", "/var/www/kimai2/templates/widget/widget-more.html.twig");
    }
}
