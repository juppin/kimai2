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

/* user/stats.html.twig */
class __TwigTemplate_6c4f8b519281e38363d688ead342a65b2ce548ca15a40294d81330f4904a0cbf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'head' => [$this, 'block_head'],
            'profile_content' => [$this, 'block_profile_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "user/stats.html.twig", 2)->unwrap();
        // line 3
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/stats.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/stats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chart");
        echo "
";
    }

    // line 10
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chart");
        echo "
";
    }

    // line 15
    public function block_profile_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    ";
        // line 17
        if (twig_test_empty(($context["years"] ?? null))) {
            // line 18
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_callout", ["warning", "error.no_entries_found"], 18, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 20
        echo "
    <script type=\"text/javascript\">
        function userProfileChartOptions() {
            return {
                maintainAspectRatio: true,
                responsive: true,
                legend: false,
                barPercentage: 0.5,
                categoryPercentage: 0.9,
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                        gridLines: {
                            display: true,
                            color: '";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 41), "grid_color", [], "any", false, false, false, 41), "html", null, true);
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
            };
        }
    </script>

    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["years"] ?? null));
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
        foreach ($context['_seq'] as $context["year"] => $context["yearStat"]) {
            // line 58
            echo "
        ";
            // line 59
            $this->loadTemplate("user/stats.html.twig", "user/stats.html.twig", 59, "508106895")->display($context);
            // line 104
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['yearStat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 106,  162 => 104,  160 => 59,  157 => 58,  140 => 57,  121 => 41,  98 => 20,  92 => 18,  90 => 17,  87 => 16,  83 => 15,  77 => 12,  72 => 11,  68 => 10,  62 => 7,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/stats.html.twig", "/var/www/kimai2/templates/user/stats.html.twig");
    }
}


/* user/stats.html.twig */
class __TwigTemplate_6c4f8b519281e38363d688ead342a65b2ce548ca15a40294d81330f4904a0cbf___508106895 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'box_title' => [$this, 'block_box_title'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 59
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "user/stats.html.twig", 59);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 60
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
    }

    // line 61
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "
                <div class=\"chart\">
                    <canvas id=\"userProfileChart";
        // line 64
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo "\" style=\"height: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 64), "height", [], "any", false, false, false, 64), "html", null, true);
        echo "px;\"></canvas>
                </div>
                <script type=\"text/javascript\">
                    document.addEventListener('kimai.initialized', function() {
                        var userProfileChartData";
        // line 68
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo " = {
                            labels: moment.months(),
                            datasets: [
                                {
                                    label: '";
        // line 72
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo "',
                                    backgroundColor: '";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 73), "background_color", [], "any", false, false, false, 73), "html", null, true);
        echo "',
                                    borderColor: '";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "chart", [], "any", false, false, false, 74), "border_color", [], "any", false, false, false, 74), "html", null, true);
        echo "',
                                    data: [
                                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["yearStat"] ?? null), "months", [], "any", false, false, false, 76));
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
            // line 77
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["month"], "totalDuration", [], "any", false, false, false, 77) / 3600), 2, ".", ""), "html", null, true);
            echo "
                                        ";
            // line 78
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 78)) {
                echo ",";
            }
            // line 79
            echo "                                        ";
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
        // line 80
        echo "                                    ],
                                    realData        : [
                                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["yearStat"] ?? null), "months", [], "any", false, false, false, 82));
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
            // line 83
            echo "                                        '";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, $context["month"], "totalDuration", [], "any", false, false, false, 83)), "html", null, true);
            echo "'
                                        ";
            // line 84
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 84)) {
                echo ",";
            }
            // line 85
            echo "                                        ";
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
        // line 86
        echo "                                    ]
                                }
                            ]
                        };

                        var userProfileChartCanvas";
        // line 91
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo " = \$(\"#userProfileChart";
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo "\").get(0).getContext(\"2d\");

                        var userProfileChart";
        // line 93
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo " = new Chart(
                            userProfileChartCanvas";
        // line 94
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo ", {
                                type: 'bar',
                                data: userProfileChartData";
        // line 96
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo ",
                                options: userProfileChartOptions()
                            }
                        );
                    });
                </script>
            ";
    }

    public function getTemplateName()
    {
        return "user/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 96,  381 => 94,  377 => 93,  370 => 91,  363 => 86,  349 => 85,  345 => 84,  340 => 83,  323 => 82,  319 => 80,  305 => 79,  301 => 78,  296 => 77,  279 => 76,  274 => 74,  270 => 73,  266 => 72,  259 => 68,  250 => 64,  246 => 62,  242 => 61,  235 => 60,  224 => 59,  177 => 106,  162 => 104,  160 => 59,  157 => 58,  140 => 57,  121 => 41,  98 => 20,  92 => 18,  90 => 17,  87 => 16,  83 => 15,  77 => 12,  72 => 11,  68 => 10,  62 => 7,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/stats.html.twig", "/var/www/kimai2/templates/user/stats.html.twig");
    }
}
