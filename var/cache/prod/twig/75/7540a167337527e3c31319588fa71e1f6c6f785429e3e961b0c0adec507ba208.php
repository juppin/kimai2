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

/* widget/section-chart.html.twig */
class __TwigTemplate_d15b11546f7c09f39c69e7ba77c165c0bbea09046955bf9152f95255a7da0a99 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box\">
                ";
        // line 25
        echo "            <div class=\"box-body\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 28
        echo $this->extensions['App\Twig\WidgetExtension']->renderWidget(twig_get_attribute($this->env, $this->source, ($context["widgets"] ?? null), 0, [], "any", false, false, false, 28));
        echo "
                    </div>
                    ";
        // line 66
        echo "                </div>
            </div>
            ";
        // line 68
        if ((twig_length_filter($this->env, ($context["widgets"] ?? null)) > 1)) {
            // line 69
            echo "            <div class=\"box-footer\">
                <div class=\"row\">
                    ";
            // line 71
            $context["width"] = (twig_length_filter($this->env, ($context["widgets"] ?? null)) - 1);
            // line 72
            echo "                    ";
            $context["rawWidth"] = (12 / ($context["width"] ?? null));
            // line 73
            echo "                    ";
            $context["columnWidth"] = twig_round(($context["rawWidth"] ?? null), 0, "floor");
            // line 74
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["widgets"] ?? null), 1, ($context["width"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 75
                echo "                        ";
                $context["data"] = twig_get_attribute($this->env, $this->source, $context["widget"], "data", [], "any", false, false, false, 75);
                // line 76
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["widget"], "option", [0 => "dataType"], "method", false, false, false, 76) == "duration")) {
                    // line 77
                    echo "                            ";
                    $context["data"] = $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["widget"], "data", [], "any", false, false, false, 77));
                    // line 78
                    echo "                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["widget"], "option", [0 => "dataType"], "method", false, false, false, 78) == "money")) {
                    // line 79
                    echo "                            ";
                    $context["data"] = $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, $context["widget"], "data", [], "any", false, false, false, 79));
                    // line 80
                    echo "                        ";
                }
                // line 81
                echo "                        <div class=\"col-sm-";
                echo twig_escape_filter($this->env, ($context["columnWidth"] ?? null), "html", null, true);
                echo " col-xs-";
                echo twig_escape_filter($this->env, (($context["columnWidth"] ?? null) * 2), "html", null, true);
                echo "\">
                            <div class=\"description-block border-right\">
                                ";
                // line 84
                echo "                                ";
                // line 85
                echo "                                ";
                // line 86
                echo "                                ";
                // line 87
                echo "                                <h5 class=\"description-header\">";
                echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
                echo "</h5>
                                <span class=\"description-text\">";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 88)), "html", null, true);
                echo "</span>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                </div>
            </div>
            ";
        }
        // line 95
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "widget/section-chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 95,  122 => 92,  112 => 88,  107 => 87,  105 => 86,  103 => 85,  101 => 84,  93 => 81,  90 => 80,  87 => 79,  84 => 78,  81 => 77,  78 => 76,  75 => 75,  70 => 74,  67 => 73,  64 => 72,  62 => 71,  58 => 69,  56 => 68,  52 => 66,  47 => 28,  42 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widget/section-chart.html.twig", "/var/www/kimai2/templates/widget/section-chart.html.twig");
    }
}
