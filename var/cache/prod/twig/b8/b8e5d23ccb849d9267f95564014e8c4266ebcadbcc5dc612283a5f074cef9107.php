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

/* activity/budget.html.twig */
class __TwigTemplate_e079f97bea839c0b292765d0713221a9a5f9f256e8d2f925e8f9dcfdb1eb49f4 extends \Twig\Template
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
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "activity/budget.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "activity/budget.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_activity.title"), "html", null, true);
    }

    // line 5
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_activity.subtitle"), "html", null, true);
    }

    // line 6
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_activity", [($context["activity"] ?? null), "delete"], 6, $context, $this->getSourceContext());
    }

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    ";
        // line 10
        $context["params"] = ["%activity%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 11
($context["activity"] ?? null), "name", [], "any", false, false, false, 11)) . "</strong>"), "%project%" => "<strong>-</strong>", "%customer%" => "<strong>-</strong>", "%records%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 14
($context["stats"] ?? null), "recordAmount", [], "any", false, false, false, 14)) . "</strong>"), "%duration%" => (("<strong>" . $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source,         // line 15
($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 15))) . "</strong>")];
        // line 17
        echo "
    ";
        // line 18
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 18))) {
            // line 19
            echo "        ";
            $context["params"] = twig_array_merge(($context["params"] ?? null), ["%project%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["activity"] ?? null), "project", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20)) . "</strong>"), "%customer%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["activity"] ?? null), "project", [], "any", false, false, false, 21), "customer", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21)) . "</strong>")]);
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        $this->loadTemplate("activity/budget.html.twig", "activity/budget.html.twig", 25, "826509716")->display($context);
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "activity/budget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  101 => 25,  98 => 24,  95 => 23,  93 => 21,  92 => 20,  90 => 19,  88 => 18,  85 => 17,  83 => 15,  82 => 14,  81 => 11,  80 => 10,  77 => 9,  73 => 8,  66 => 6,  59 => 5,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "activity/budget.html.twig", "/var/www/kimai2/templates/activity/budget.html.twig");
    }
}


/* activity/budget.html.twig */
class __TwigTemplate_e079f97bea839c0b292765d0713221a9a5f9f256e8d2f925e8f9dcfdb1eb49f4___826509716 extends \Twig\Template
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
        // line 25
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $macros["progress"] = $this->macros["progress"] = $this->loadTemplate("macros/progressbar.html.twig", "activity/budget.html.twig", 26)->unwrap();
        // line 25
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "activity/budget.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
    }

    // line 28
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            <p>
                ";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_activity.short_stats", ($context["params"] ?? null));
        echo "
            </p>

            ";
        // line 33
        $context["currency"] = null;
        // line 34
        echo "            ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 34))) {
            // line 35
            echo "                ";
            $context["currency"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 35), "customer", [], "any", false, false, false, 35), "currency", [], "any", false, false, false, 35);
            // line 36
            echo "            ";
        }
        // line 37
        echo "
            ";
        // line 38
        echo twig_call_macro($macros["progress"], "macro_progressbar", [twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "budget", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordRate", [], "any", false, false, false, 38), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.budget"), (($this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordRate", [], "any", false, false, false, 38), ($context["currency"] ?? null)) . " / ") . $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "budget", [], "any", false, false, false, 38), ($context["currency"] ?? null)))], 38, $context, $this->getSourceContext());
        echo "
            ";
        // line 39
        echo twig_call_macro($macros["progress"], "macro_progressbar", [twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "timeBudget", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 39), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.timeBudget"), (($this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 39)) . " / ") . $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "timeBudget", [], "any", false, false, false, 39)))], 39, $context, $this->getSourceContext());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "activity/budget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 39,  198 => 38,  195 => 37,  192 => 36,  189 => 35,  186 => 34,  184 => 33,  178 => 30,  175 => 29,  171 => 28,  164 => 27,  159 => 25,  157 => 26,  150 => 25,  103 => 42,  101 => 25,  98 => 24,  95 => 23,  93 => 21,  92 => 20,  90 => 19,  88 => 18,  85 => 17,  83 => 15,  82 => 14,  81 => 11,  80 => 10,  77 => 9,  73 => 8,  66 => 6,  59 => 5,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "activity/budget.html.twig", "/var/www/kimai2/templates/activity/budget.html.twig");
    }
}
