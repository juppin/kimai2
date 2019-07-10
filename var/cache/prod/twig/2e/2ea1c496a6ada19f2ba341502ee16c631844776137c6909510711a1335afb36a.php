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

/* navbar/recent-activities.html.twig */
class __TwigTemplate_731b59f61cb4f05d3a9db0a110ac8a07f28aa32e5625e35a622870fed57a3839 extends \Twig\Template
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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("start_own_timesheet")) {
            // line 2
            echo "    <li class=\"dropdown notifications-menu\">
        <a href=\"#\" class=\"dropdown-toggle ddt-large\" data-toggle=\"dropdown\">
            <i class=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("activity"), "html", null, true);
            echo " fa-2x\"></i>
        </a>
        <ul class=\"dropdown-menu\"
            data-api=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recent_timesheet", ["size" => 10]);
            echo "\"
            data-href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restart_timesheet", ["id" => "000"]);
            echo "\"
            data-icon=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("start-small"), "html", null, true);
            echo "\"
            data-template=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("recent.activities.format"), "html", null, true);
            echo "\">
            <li class=\"header\">";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("recent.activities"), "html", null, true);
            echo "</li>
            <li>
                <ul class=\"menu\">
                </ul>
            </li>
            <li class=\"footer\"><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("timesheet");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.all"), "html", null, true);
            echo "</a></li>
        </ul>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "navbar/recent-activities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar/recent-activities.html.twig", "/var/www/kimai2/templates/navbar/recent-activities.html.twig");
    }
}
