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

/* widget/widget-counter.html.twig */
class __TwigTemplate_5d380a0b04d9670bb66e7941df7d278a7bcec33e469e2d4e9eeb27e5a22f22a7 extends \Twig\Template
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
<div class=\"info-box\">
    <span class=\"info-box-icon bg-";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", false, false, false, 7), "green")) : ("green")), "html", null, true);
        echo "\"><i class=\"";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 7)), "html", null, true);
        echo "\"></i></span>

    <div class=\"info-box-content\">
        ";
        // line 10
        if ( !twig_test_empty(($context["url"] ?? null))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"small-box-footer\">";
        }
        // line 11
        echo "        <span class=\"info-box-text\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
        echo "</span>
        <span class=\"info-box-number\">
            ";
        // line 13
        if (twig_test_iterable(($context["data"] ?? null))) {
            // line 14
            echo "                ";
            echo "Invalid data";
            echo "
            ";
        } else {
            // line 16
            echo "                ";
            $this->displayBlock('widget_data', $context, $blocks);
            // line 24
            echo "            ";
        }
        // line 25
        echo "        </span>
        ";
        // line 26
        if ( !twig_test_empty(($context["url"] ?? null))) {
            echo "</a>";
        }
        // line 27
        echo "    </div>
</div>
";
    }

    // line 16
    public function block_widget_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "dataType", [], "any", false, false, false, 17) == "duration")) {
            // line 18
            echo "                        ";
            $context["data"] = $this->extensions['App\Twig\Extensions']->duration(($context["data"] ?? null));
            // line 19
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "dataType", [], "any", false, false, false, 19) == "money")) {
            // line 20
            echo "                        ";
            $context["data"] = $this->extensions['App\Twig\Extensions']->money(($context["data"] ?? null));
            // line 21
            echo "                    ";
        }
        // line 22
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "widget/widget-counter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  113 => 21,  110 => 20,  107 => 19,  104 => 18,  101 => 17,  97 => 16,  91 => 27,  87 => 26,  84 => 25,  81 => 24,  78 => 16,  72 => 14,  70 => 13,  64 => 11,  58 => 10,  50 => 7,  46 => 5,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widget/widget-counter.html.twig", "/var/www/kimai2/templates/widget/widget-counter.html.twig");
    }
}
