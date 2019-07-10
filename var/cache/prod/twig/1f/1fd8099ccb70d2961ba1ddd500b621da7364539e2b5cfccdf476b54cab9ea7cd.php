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

/* customer/budget.html.twig */
class __TwigTemplate_d544a9edd305e6127c9193a86b52b6737e85ccfa2ed95c80af65162c3a8cd59e extends \Twig\Template
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
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "customer/budget.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "customer/budget.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_customer.title"), "html", null, true);
    }

    // line 5
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_customer.subtitle"), "html", null, true);
    }

    // line 6
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_customer", [($context["customer"] ?? null), "delete"], 6, $context, $this->getSourceContext());
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
($context["stats"] ?? null), "activityAmount", [], "any", false, false, false, 11)) . "</strong>"), "%project%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 12
($context["stats"] ?? null), "projectAmount", [], "any", false, false, false, 12)) . "</strong>"), "%customer%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 13
($context["customer"] ?? null), "name", [], "any", false, false, false, 13)) . "</strong>"), "%records%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 14
($context["stats"] ?? null), "recordAmount", [], "any", false, false, false, 14)) . "</strong>"), "%duration%" => (("<strong>" . $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source,         // line 15
($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 15))) . "</strong>"), "%rate%" => (("<strong>" . $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source,         // line 16
($context["stats"] ?? null), "recordRate", [], "any", false, false, false, 16))) . "</strong>")];
        // line 18
        echo "
    ";
        // line 19
        $this->loadTemplate("customer/budget.html.twig", "customer/budget.html.twig", 19, "953975395")->display($context);
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/budget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  91 => 19,  88 => 18,  86 => 16,  85 => 15,  84 => 14,  83 => 13,  82 => 12,  81 => 11,  80 => 10,  77 => 9,  73 => 8,  66 => 6,  59 => 5,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/budget.html.twig", "/var/www/kimai2/templates/customer/budget.html.twig");
    }
}


/* customer/budget.html.twig */
class __TwigTemplate_d544a9edd305e6127c9193a86b52b6737e85ccfa2ed95c80af65162c3a8cd59e___953975395 extends \Twig\Template
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
        // line 19
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $macros["progress"] = $this->macros["progress"] = $this->loadTemplate("macros/progressbar.html.twig", "customer/budget.html.twig", 20)->unwrap();
        // line 19
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "customer/budget.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
    }

    // line 22
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            <p>
                ";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_customer.short_stats", ($context["params"] ?? null));
        echo "
            </p>

            ";
        // line 27
        echo twig_call_macro($macros["progress"], "macro_progressbar", [twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "budget", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordRate", [], "any", false, false, false, 27), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.budget"), (($this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordRate", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "currency", [], "any", false, false, false, 27)) . " / ") . $this->extensions['App\Twig\Extensions']->money(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "budget", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "currency", [], "any", false, false, false, 27)))], 27, $context, $this->getSourceContext());
        echo "
            ";
        // line 28
        echo twig_call_macro($macros["progress"], "macro_progressbar", [twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "timeBudget", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 28), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.timeBudget"), (($this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 28)) . " / ") . $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "timeBudget", [], "any", false, false, false, 28)))], 28, $context, $this->getSourceContext());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "customer/budget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 28,  174 => 27,  168 => 24,  165 => 23,  161 => 22,  154 => 21,  149 => 19,  147 => 20,  140 => 19,  93 => 31,  91 => 19,  88 => 18,  86 => 16,  85 => 15,  84 => 14,  83 => 13,  82 => 12,  81 => 11,  80 => 10,  77 => 9,  73 => 8,  66 => 6,  59 => 5,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/budget.html.twig", "/var/www/kimai2/templates/customer/budget.html.twig");
    }
}
