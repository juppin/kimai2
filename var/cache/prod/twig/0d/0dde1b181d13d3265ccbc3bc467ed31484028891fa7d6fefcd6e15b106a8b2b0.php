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

/* customer/edit.html.twig */
class __TwigTemplate_a946a79c1f663463a45e17f547f2cf36759c0616e153dabe4c70008b722cc651 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("form.html.twig") : ("base.html.twig")), "customer/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "customer/edit.html.twig", 2)->unwrap();
        // line 3
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "customer/edit.html.twig", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_customer.title"), "html", null, true);
    }

    // line 6
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_customer.subtitle"), "html", null, true);
    }

    // line 7
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_customer", [($context["customer"] ?? null), "edit"], 7, $context, $this->getSourceContext());
    }

    // line 9
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo twig_include($this->env, $context, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "xmlHttpRequest", [], "any", false, false, false, 10)) ? ("default/_form_modal.html.twig") : ("default/_form.html.twig")), ["title" => ((twig_get_attribute($this->env, $this->source,         // line 11
($context["customer"] ?? null), "name", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "name", [], "any", false, false, false, 11), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create"))), "form" =>         // line 12
($context["form"] ?? null), "back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer")]);
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  81 => 12,  80 => 11,  78 => 10,  74 => 9,  67 => 7,  60 => 6,  53 => 5,  49 => 1,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/edit.html.twig", "/var/www/kimai2/templates/customer/edit.html.twig");
    }
}
