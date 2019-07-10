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

/* timesheet-team/edit.html.twig */
class __TwigTemplate_862a0d18d41f5a77e355de4aa059d27908f0b955f58357b16bddeb182993ad97 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("form.html.twig") : ("base.html.twig")), "timesheet-team/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "timesheet-team/edit.html.twig", 2)->unwrap();
        // line 3
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "timesheet-team/edit.html.twig", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_timesheet.title"), "html", null, true);
    }

    // line 6
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_timesheet.subtitle"), "html", null, true);
    }

    // line 7
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_timesheet_team", [($context["timesheet"] ?? null), "edit"], 7, $context, $this->getSourceContext());
    }

    // line 9
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["timesheet"] ?? null), "exported", [], "any", false, false, false, 10)) {
            // line 11
            echo "        ";
            echo twig_call_macro($macros["widgets"], "macro_alert", ["warning", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.locked.warning", [], "flashmessages"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("warning", [], "flashmessages"), "warning"], 11, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 13
        echo "    ";
        echo twig_include($this->env, $context, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "xmlHttpRequest", [], "any", false, false, false, 13)) ? ("default/_form_modal.html.twig") : ("default/_form.html.twig")), ["title" => ((twig_get_attribute($this->env, $this->source,         // line 14
($context["timesheet"] ?? null), "id", [], "any", false, false, false, 14)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("timesheet.edit")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create"))), "form" =>         // line 15
($context["form"] ?? null), "back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_timesheet")]);
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "timesheet-team/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  90 => 15,  89 => 14,  87 => 13,  81 => 11,  78 => 10,  74 => 9,  67 => 7,  60 => 6,  53 => 5,  49 => 1,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "timesheet-team/edit.html.twig", "/var/www/kimai2/templates/timesheet-team/edit.html.twig");
    }
}
