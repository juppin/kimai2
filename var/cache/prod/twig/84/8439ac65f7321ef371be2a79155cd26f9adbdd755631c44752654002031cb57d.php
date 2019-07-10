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

/* project/budget.html.twig */
class __TwigTemplate_4bcbe40cca487da589c466021c1c6a42799e16a7aa12e6c9d4d2ceb829b51a62 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "project/budget.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/budget.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_project.title"), "html", null, true);
    }

    // line 5
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_project.subtitle"), "html", null, true);
    }

    // line 6
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_project", [($context["project"] ?? null), "delete"], 6, $context, $this->getSourceContext());
    }

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    ";
        // line 10
        $context["params"] = ["%project%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 11
($context["project"] ?? null), "name", [], "any", false, false, false, 11)) . "</strong>"), "%customer%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["project"] ?? null), "customer", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12)) . "</strong>"), "%records%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 13
($context["stats"] ?? null), "recordAmount", [], "any", false, false, false, 13)) . "</strong>"), "%activities%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 14
($context["stats"] ?? null), "activityAmount", [], "any", false, false, false, 14)) . "</strong>"), "%duration%" => (("<strong>" . $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source,         // line 15
($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 15))) . "</strong>")];
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("project/budget.html.twig", "project/budget.html.twig", 18, "1073436876")->display($context);
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "project/budget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  90 => 18,  87 => 17,  85 => 15,  84 => 14,  83 => 13,  82 => 12,  81 => 11,  80 => 10,  77 => 9,  73 => 8,  66 => 6,  59 => 5,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/budget.html.twig", "/var/www/kimai2/templates/project/budget.html.twig");
    }
}


/* project/budget.html.twig */
class __TwigTemplate_4bcbe40cca487da589c466021c1c6a42799e16a7aa12e6c9d4d2ceb829b51a62___1073436876 extends \Twig\Template
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
        // line 18
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        $macros["progress"] = $this->macros["progress"] = $this->loadTemplate("macros/progressbar.html.twig", "project/budget.html.twig", 19)->unwrap();
        // line 18
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "project/budget.html.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
    }

    // line 21
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            <p>
                ";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_project.short_stats", ($context["params"] ?? null));
        echo "
            </p>

            ";
        // line 26
        echo twig_call_macro($macros["progress"], "macro_progressbar", [twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "budget", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordRate", [], "any", false, false, false, 26), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.budget"), (($this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordRate", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "customer", [], "any", false, false, false, 26), "currency", [], "any", false, false, false, 26)) . " / ") . $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "budget", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "customer", [], "any", false, false, false, 26), "currency", [], "any", false, false, false, 26)))], 26, $context, $this->getSourceContext());
        echo "
            ";
        // line 27
        echo twig_call_macro($macros["progress"], "macro_progressbar", [twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "timeBudget", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 27), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.timeBudget"), (($this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 27)) . " / ") . $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "timeBudget", [], "any", false, false, false, 27)))], 27, $context, $this->getSourceContext());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "project/budget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 27,  173 => 26,  167 => 23,  164 => 22,  160 => 21,  153 => 20,  148 => 18,  146 => 19,  139 => 18,  92 => 30,  90 => 18,  87 => 17,  85 => 15,  84 => 14,  83 => 13,  82 => 12,  81 => 11,  80 => 10,  77 => 9,  73 => 8,  66 => 6,  59 => 5,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/budget.html.twig", "/var/www/kimai2/templates/project/budget.html.twig");
    }
}
