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

/* navbar/active-entries.html.twig */
class __TwigTemplate_dfcf5220b5cbc446a901f66e8d129286eb62de3ff44c213e223cf4dc0dd32e4b extends \Twig\Template
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
        echo "<li class=\"dropdown messages-menu\" style=\"";
        if (twig_test_empty(($context["entries"] ?? null))) {
            echo "display:none";
        }
        echo "\">
    <a href=\"#\" class=\"dropdown-toggle ddt-large ticktac\" data-toggle=\"dropdown\">
        <i class=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("start"), "html", null, true);
        echo " fa-2x\"></i>
        <span data-warning=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["soft_limit"] ?? null), "html", null, true);
        echo "\" class=\"label label-";
        if ((twig_length_filter($this->env, ($context["entries"] ?? null)) > ($context["soft_limit"] ?? null))) {
            echo "danger";
        } else {
            echo "warning";
        }
        echo "\">";
        if ((twig_length_filter($this->env, ($context["entries"] ?? null)) > 0)) {
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["entries"] ?? null)), "html", null, true);
        }
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\"
        data-api=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("active_timesheet");
        echo "\"
        data-href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stop_timesheet", ["id" => "000"]);
        echo "\"
        data-icon=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("stop-small"), "html", null, true);
        echo "\"
        data-format=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->getDurationFormat(), "html", null, true);
        echo "\">
        <li class=\"header\">
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("active.entries"), "html", null, true);
        echo "
        </li>
        <li>
            <ul class=\"menu\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 17
            echo "                <li>
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stop_timesheet", ["id" => twig_get_attribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"api-link\" data-event=\"kimai.timesheetStop kimai.timesheetUpdate\" data-method=\"PATCH\" data-msg-error=\"timesheet.stop.error\" data-msg-success=\"timesheet.stop.success\">
                        <div class=\"pull-left\">
                            <i class=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("stop-small"), "html", null, true);
            echo " fa-2x\"></i>
                        </div>
                        <h4>
                            <span>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "activity", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
                            <small>
                                <span data-title=\"true\" data-since=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "begin", [], "any", false, false, false, 25), "format", [0 => twig_constant("DATE_ISO8601")], "method", false, false, false, 25), "html", null, true);
            echo "\" data-format=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->getDurationFormat(), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->duration($context["entry"]), "html", null, true);
            echo "</span>
                            </small>
                        </h4>
                        <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "project", [], "any", false, false, false, 28), "customer", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo ")</p>
                    </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </ul>
        </li>
        ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_own_timesheet")) {
            // line 35
            echo "        <li class=\"footer\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_create");
            echo "\" class=\"modal-ajax-form\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.start"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 37
        echo "    </ul>
</li>
";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_own_timesheet")) {
            // line 40
            echo "<li class=\"messages-menu-empty\" style=\"";
            if ( !twig_test_empty(($context["entries"] ?? null))) {
                echo "display:none";
            }
            echo "\">
    <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_create");
            echo "\" class=\"ddt-large modal-ajax-form\">
        <i class=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("start"), "html", null, true);
            echo " fa-2x\"></i>
    </a>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "navbar/active-entries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  161 => 41,  154 => 40,  152 => 39,  148 => 37,  140 => 35,  138 => 34,  134 => 32,  122 => 28,  112 => 25,  107 => 23,  101 => 20,  96 => 18,  93 => 17,  89 => 16,  82 => 12,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  49 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar/active-entries.html.twig", "/var/www/kimai2/templates/navbar/active-entries.html.twig");
    }
}
