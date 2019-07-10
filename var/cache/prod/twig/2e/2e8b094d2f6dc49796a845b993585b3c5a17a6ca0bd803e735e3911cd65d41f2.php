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

/* widget/section-simple.html.twig */
class __TwigTemplate_83347f97f64033633e06ecd73536a125dd24db555d67c21ea881ad228319c1df extends \Twig\Template
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
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "widget/section-simple.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ( !twig_test_empty(($context["title"] ?? null))) {
            // line 4
            echo "    ";
            echo twig_call_macro($macros["widgets"], "macro_page_header", [($context["title"] ?? null)], 4, $context, $this->getSourceContext());
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        $context["width"] = twig_length_filter($this->env, ($context["widgets"] ?? null));
        // line 8
        $context["rawWidth"] = (12 / ($context["width"] ?? null));
        // line 9
        $context["columnWidth"] = twig_round(($context["rawWidth"] ?? null), 0, "floor");
        // line 10
        echo "<div class=\"row\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["widgets"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 12
            echo "        ";
            $context["columnSize"] = ($context["columnWidth"] ?? null);
            // line 13
            echo "        ";
            if (((($context["width"] ?? null) == 5) && (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13)))) {
                // line 14
                echo "            ";
                $context["columnSize"] = (($context["columnWidth"] ?? null) + 1);
                // line 15
                echo "        ";
            }
            // line 16
            echo "        <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["columnSize"] ?? null), "html", null, true);
            echo " col-sm-";
            echo twig_escape_filter($this->env, (($context["columnSize"] ?? null) * 2), "html", null, true);
            echo " col-xs-";
            echo twig_escape_filter($this->env, (($context["columnSize"] ?? null) * 4), "html", null, true);
            echo "\">
            ";
            // line 17
            echo $this->extensions['App\Twig\WidgetExtension']->renderWidget($context["widget"]);
            echo "
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "widget/section-simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 20,  100 => 17,  91 => 16,  88 => 15,  85 => 14,  82 => 13,  79 => 12,  62 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widget/section-simple.html.twig", "/var/www/kimai2/templates/widget/section-simple.html.twig");
    }
}
