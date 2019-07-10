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

/* widget/widget-dailyworkingtimechart.html.twig */
class __TwigTemplate_fe46a09dea707b2bc54c0ac807c43181ad65eaa13b8e525e8b561025f1724752 extends \Twig\Template
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
        $context["type"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 1), "bar")) : ("bar"));
        // line 2
        $context["chart_id"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 2);
        // line 3
        $context["backgroundColor"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 3), "background_color", [], "any", false, false, false, 3);
        // line 4
        $context["borderColor"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 4), "border_color", [], "any", false, false, false, 4);
        // line 5
        $context["gridColor"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 5), "grid_color", [], "any", false, false, false, 5);
        // line 6
        $context["colors"] = twig_split_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", false, false, false, 6), "")) : ("")), ";");
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), 0, [], "any", true, true, false, 7) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), 0, [], "any", false, false, false, 7)))) {
            // line 8
            echo "    ";
            $context["backgroundColor"] = twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), 0, [], "any", false, false, false, 8);
            // line 9
            echo "    ";
            $context["borderColor"] = twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), 0, [], "any", false, false, false, 9);
            // line 10
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), 1, [], "any", true, true, false, 10) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), 1, [], "any", false, false, false, 10)))) {
                // line 11
                echo "        ";
                $context["borderColor"] = twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), 1, [], "any", false, false, false, 11);
                // line 12
                echo "    ";
            }
        }
        // line 14
        echo "
";
        // line 15
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chart");
        echo "
";
        // line 16
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chart");
        echo "

";
        // line 18
        if ( !twig_test_empty(($context["title"] ?? null))) {
            // line 19
            echo "<p class=\"text-center\">
    <strong>
       ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null)), "html", null, true);
            echo "
    </strong>
</p>
";
        }
        // line 25
        echo "
<div class=\"chart\">
    <canvas id=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["chart_id"] ?? null), "html", null, true);
        echo "\" style=\"height: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 27), "height", [], "any", false, false, false, 27), "html", null, true);
        echo "px;\"></canvas>
</div>

<script type=\"text/javascript\">
document.addEventListener('kimai.initialized', function() {
    new Chart(
        document.getElementById('";
        // line 33
        echo twig_escape_filter($this->env, ($context["chart_id"] ?? null), "html", null, true);
        echo "').getContext('2d'), {
            type: '";
        // line 34
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "',
            data: {
                labels: [
                    ";
        // line 37
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
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 38
            echo "moment('";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateFormat(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 38), twig_constant("DateTime::ISO8601")), "html", null, true);
            echo "').format('ll')
                    ";
            // line 39
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 39)) {
                echo ",";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                ],
                datasets: [
                    {
                        backgroundColor: '";
        // line 44
        echo twig_escape_filter($this->env, ($context["backgroundColor"] ?? null), "html", null, true);
        echo "',
                        borderColor: '";
        // line 45
        echo twig_escape_filter($this->env, ($context["borderColor"] ?? null), "html", null, true);
        echo "',
                        data: [
                            ";
        // line 47
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
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["day"], "totalDuration", [], "any", false, false, false, 48) / 3600), 2, ".", ""), "html", null, true);
            // line 49
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 49)) {
                echo ",";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        ],
                        realData: [
                            ";
        // line 53
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
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 54
            echo "'";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["day"], "totalDuration", [], "any", false, false, false, 54)), "html", null, true);
            echo "'";
            // line 55
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55)) {
                echo ",";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        ]
                    }
                ]
            },
            options: {
                maintainAspectRatio: true,
                responsive: true,
                legend: false,
                barPercentage: 0.5,
                categoryPercentage: 0.9,
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        },
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                        gridLines: {
                            display: true,
                            color: '";
        // line 79
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
        return "widget/widget-dailyworkingtimechart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 79,  245 => 57,  229 => 55,  225 => 54,  208 => 53,  204 => 51,  188 => 49,  186 => 48,  169 => 47,  164 => 45,  160 => 44,  155 => 41,  139 => 39,  134 => 38,  117 => 37,  111 => 34,  107 => 33,  96 => 27,  92 => 25,  85 => 21,  81 => 19,  79 => 18,  74 => 16,  70 => 15,  67 => 14,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widget/widget-dailyworkingtimechart.html.twig", "/var/www/kimai2/templates/widget/widget-dailyworkingtimechart.html.twig");
    }
}
