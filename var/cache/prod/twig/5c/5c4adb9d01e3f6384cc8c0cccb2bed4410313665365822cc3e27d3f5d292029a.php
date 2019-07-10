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

/* user/delete.html.twig */
class __TwigTemplate_bf506620a738d910f1a49cf7b3d72964e95c8c5fabc656e6256f18619ce1f1cd extends \Twig\Template
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
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("form.html.twig") : ("base.html.twig")), "user/delete.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/delete.html.twig", 2)->unwrap();
        // line 3
        $macros["tables"] = $this->macros["tables"] = $this->loadTemplate("macros/datatables.html.twig", "user/delete.html.twig", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_user.title"), "html", null, true);
    }

    // line 6
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_user.subtitle"), "html", null, true);
    }

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    ";
        // line 10
        $context["inUse"] = (twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordsTotal", [], "any", false, false, false, 10) > 0);
        // line 11
        echo "
    ";
        // line 12
        $context["params"] = ["%user%" => (("<strong>" . twig_call_macro($macros["widgets"], "macro_username", [        // line 13
($context["user"] ?? null)], 13, $context, $this->getSourceContext())) . "</strong>"), "%records%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 14
($context["stats"] ?? null), "recordsTotal", [], "any", false, false, false, 14)) . "</strong>"), "%duration%" => (("<strong>" . $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source,         // line 15
($context["stats"] ?? null), "durationTotal", [], "any", false, false, false, 15))) . "</strong>")];
        // line 17
        echo "
    ";
        // line 18
        $context["message"] = (("<p>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_user.short_stats", ($context["params"] ?? null))) . "</p>");
        // line 19
        echo "
    ";
        // line 20
        echo twig_include($this->env, $context, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "xmlHttpRequest", [], "any", false, false, false, 20)) ? ("default/_form_delete_modal.html.twig") : ("default/_form_delete.html.twig")), ["message" =>         // line 21
($context["message"] ?? null), "form" =>         // line 22
($context["form"] ?? null), "used" =>         // line 23
($context["inUse"] ?? null), "back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user")]);
        // line 25
        echo "

";
    }

    public function getTemplateName()
    {
        return "user/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  94 => 23,  93 => 22,  92 => 21,  91 => 20,  88 => 19,  86 => 18,  83 => 17,  81 => 15,  80 => 14,  79 => 13,  78 => 12,  75 => 11,  73 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  48 => 1,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/delete.html.twig", "/var/www/kimai2/templates/user/delete.html.twig");
    }
}
