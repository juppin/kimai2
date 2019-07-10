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

/* widget/widget-yearchart.html.twig */
class __TwigTemplate_d562911c47efa2a534b5ffb191905a1cccf394d1f682a228cf90a391960d320e extends \Twig\Template
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
        $context["backgroundColor"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 1), "background_color", [], "any", false, false, false, 1);
        // line 2
        $context["borderColor"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 2), "border_color", [], "any", false, false, false, 2);
        // line 3
        $context["gridColor"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 3), "grid_color", [], "any", false, false, false, 3);
        // line 4
        $context["colors"] = twig_split_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", false, false, false, 4), "")) : ("")), ";");
        // line 5
        $context["type"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 5), "line")) : ("line"));
        // line 6
        if (!twig_in_filter(($context["type"] ?? null), [0 => "line", 1 => "bar"])) {
            // line 7
            echo "    ";
            $context["type"] = "line";
        }
        // line 9
        echo "
";
        // line 10
        if ( !twig_test_empty(($context["title"] ?? null))) {
            // line 11
            echo "<p class=\"text-center\">
    <strong>
        ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
            echo "
    </strong>
</p>
";
        }
        // line 17
        echo "
<div class=\"chart\">
    <canvas id=\"timeChart\" style=\"height: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 19), "height", [], "any", false, false, false, 19), "html", null, true);
        echo "px;\"></canvas>
</div>

<script type=\"text/javascript\">
document.addEventListener('kimai.initialized', function() {
    new Chart(
        document.getElementById('timeChart').getContext('2d'), {
            type: '";
        // line 26
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "',
            data: {
                labels: moment.months(),
                datasets: [
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
        foreach ($context['_seq'] as $context["yearName"] => $context["year"]) {
            // line 31
            echo "                    ";
            $context["yearBackgroundColor"] = ($context["backgroundColor"] ?? null);
            // line 32
            echo "                    ";
            $context["yearBorderColor"] = ($context["borderColor"] ?? null);
            // line 33
            echo "
                    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34) - 1), [], "array", true, true, false, 34)) {
                // line 35
                echo "                    ";
                $context["yearColors"] = twig_split_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["colors"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35) - 1)] ?? null) : null), "|");
                // line 36
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["yearColors"] ?? null), 0, [], "any", true, true, false, 36) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["yearColors"] ?? null), 0, [], "any", false, false, false, 36)))) {
                    // line 37
                    echo "                    ";
                    $context["yearBackgroundColor"] = twig_get_attribute($this->env, $this->source, ($context["yearColors"] ?? null), 0, [], "any", false, false, false, 37);
                    // line 38
                    echo "                    ";
                    $context["yearBorderColor"] = twig_get_attribute($this->env, $this->source, ($context["yearColors"] ?? null), 0, [], "any", false, false, false, 38);
                    // line 39
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["yearColors"] ?? null), 1, [], "any", true, true, false, 39) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["yearColors"] ?? null), 1, [], "any", false, false, false, 39)))) {
                        // line 40
                        echo "                    ";
                        $context["yearBorderColor"] = twig_get_attribute($this->env, $this->source, ($context["yearColors"] ?? null), 1, [], "any", false, false, false, 40);
                        // line 41
                        echo "                    ";
                    }
                    // line 42
                    echo "                    ";
                }
                // line 43
                echo "                    ";
            }
            // line 44
            echo "
                    {
                        label           : '";
            // line 46
            echo twig_escape_filter($this->env, $context["yearName"], "html", null, true);
            echo "',
                        backgroundColor : '";
            // line 47
            echo twig_escape_filter($this->env, ($context["yearBackgroundColor"] ?? null), "html", null, true);
            echo "',
                        borderColor     : '";
            // line 48
            echo twig_escape_filter($this->env, ($context["yearBorderColor"] ?? null), "html", null, true);
            echo "',
                        pointRadius     : 2,
                        borderWidth     : 1,
                        pointHitRadius  : 10,
                        lineTension     : 0.3,
                        data            : [
                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["year"], "months", [], "any", false, false, false, 54));
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
            foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
                // line 55
                echo "                            ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["month"], "totalDuration", [], "any", false, false, false, 55) / 3600), 2, ".", ""), "html", null, true);
                echo "
                            ";
                // line 56
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 56)) {
                    echo ",";
                }
                // line 57
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                        ],
                        realData        : [
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["year"], "months", [], "any", false, false, false, 60));
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
            foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
                // line 61
                echo "                            '";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["month"], "totalDuration", [], "any", false, false, false, 61)), "html", null, true);
                echo "'
                            ";
                // line 62
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 62)) {
                    echo ",";
                }
                // line 63
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                        ]
                    }
                    ";
            // line 66
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 66)) {
                echo ",";
            }
            // line 67
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['yearName'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                ]
            },
            options: {
                maintainAspectRatio: true,
                responsive: true,
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: true,
                            color: '";
        // line 82
        echo twig_escape_filter($this->env, ($context["gridColor"] ?? null), "html", null, true);
        echo "',
                            lineWidth: 1
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            return data.datasets[tooltipItem.datasetIndex].realData[tooltipItem.index];
                        }
                    }
                }
            }
        }
    );
});
</script>
";
    }

    public function getTemplateName()
    {
        return "widget/widget-yearchart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 82,  272 => 68,  258 => 67,  254 => 66,  250 => 64,  236 => 63,  232 => 62,  227 => 61,  210 => 60,  206 => 58,  192 => 57,  188 => 56,  183 => 55,  166 => 54,  157 => 48,  153 => 47,  149 => 46,  145 => 44,  142 => 43,  139 => 42,  136 => 41,  133 => 40,  130 => 39,  127 => 38,  124 => 37,  121 => 36,  118 => 35,  116 => 34,  113 => 33,  110 => 32,  107 => 31,  90 => 30,  83 => 26,  73 => 19,  69 => 17,  62 => 13,  58 => 11,  56 => 10,  53 => 9,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widget/widget-yearchart.html.twig", "/var/www/kimai2/templates/widget/widget-yearchart.html.twig");
    }
}
