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

/* customer/delete.html.twig */
class __TwigTemplate_07cc46d43930ba233f6d5b075b262c5e049f4b2a7a7753b88271cd30008febda extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("form.html.twig") : ("base.html.twig")), "customer/delete.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "customer/delete.html.twig", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
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
        $context["inUse"] = (twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordAmount", [], "any", false, false, false, 10) > 0);
        // line 11
        echo "
    ";
        // line 12
        $context["params"] = ["%activity%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 13
($context["stats"] ?? null), "activityAmount", [], "any", false, false, false, 13)) . "</strong>"), "%project%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 14
($context["stats"] ?? null), "projectAmount", [], "any", false, false, false, 14)) . "</strong>"), "%customer%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 15
($context["customer"] ?? null), "name", [], "any", false, false, false, 15)) . "</strong>"), "%records%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 16
($context["stats"] ?? null), "recordAmount", [], "any", false, false, false, 16)) . "</strong>"), "%duration%" => (("<strong>" . $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source,         // line 17
($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 17))) . "</strong>")];
        // line 19
        echo "
    ";
        // line 20
        $context["message"] = (((("<p>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_customer.short_stats", ($context["params"] ?? null))) . "</p><p>") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_entity.delete_confirm")) . "</p>");
        // line 21
        echo "
    ";
        // line 22
        echo twig_include($this->env, $context, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "xmlHttpRequest", [], "any", false, false, false, 22)) ? ("default/_form_delete_modal.html.twig") : ("default/_form_delete.html.twig")), ["message" =>         // line 23
($context["message"] ?? null), "form" =>         // line 24
($context["form"] ?? null), "used" =>         // line 25
($context["inUse"] ?? null), "back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer")]);
        // line 27
        echo "

";
    }

    public function getTemplateName()
    {
        return "customer/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  102 => 25,  101 => 24,  100 => 23,  99 => 22,  96 => 21,  94 => 20,  91 => 19,  89 => 17,  88 => 16,  87 => 15,  86 => 14,  85 => 13,  84 => 12,  81 => 11,  79 => 10,  76 => 9,  72 => 8,  65 => 6,  58 => 5,  51 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/delete.html.twig", "/var/www/kimai2/templates/customer/delete.html.twig");
    }
}
