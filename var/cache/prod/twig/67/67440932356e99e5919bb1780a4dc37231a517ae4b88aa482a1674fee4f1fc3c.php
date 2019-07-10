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

/* activity/delete.html.twig */
class __TwigTemplate_6c92c98cef78e0e0515093cfef991df115d460a3815160e319d806d976e10a71 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("form.html.twig") : ("base.html.twig")), "activity/delete.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "activity/delete.html.twig", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
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
        $context["inUse"] = (twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "recordAmount", [], "any", false, false, false, 10) > 0);
        // line 11
        echo "
    ";
        // line 12
        $context["params"] = ["%activity%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 13
($context["activity"] ?? null), "name", [], "any", false, false, false, 13)) . "</strong>"), "%project%" => "<strong>-</strong>", "%customer%" => "<strong>-</strong>", "%records%" => (("<strong>" . twig_get_attribute($this->env, $this->source,         // line 16
($context["stats"] ?? null), "recordAmount", [], "any", false, false, false, 16)) . "</strong>"), "%duration%" => (("<strong>" . $this->extensions['App\Twig\Extensions']->duration(twig_get_attribute($this->env, $this->source,         // line 17
($context["stats"] ?? null), "recordDuration", [], "any", false, false, false, 17))) . "</strong>")];
        // line 19
        echo "
    ";
        // line 20
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "project", [], "any", false, false, false, 20))) {
            // line 21
            echo "        ";
            $context["params"] = twig_array_merge(($context["params"] ?? null), ["%project%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["activity"] ?? null), "project", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22)) . "</strong>"), "%customer%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
($context["activity"] ?? null), "project", [], "any", false, false, false, 23), "customer", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23)) . "</strong>")]);
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        $context["message"] = (((("<p>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_activity.short_stats", ($context["params"] ?? null))) . "</p><p>") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_entity.delete_confirm")) . "</p>");
        // line 28
        echo "
    ";
        // line 29
        echo twig_include($this->env, $context, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "xmlHttpRequest", [], "any", false, false, false, 29)) ? ("default/_form_delete_modal.html.twig") : ("default/_form_delete.html.twig")), ["message" =>         // line 30
($context["message"] ?? null), "form" =>         // line 31
($context["form"] ?? null), "used" =>         // line 32
($context["inUse"] ?? null), "back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity")]);
        // line 34
        echo "

";
    }

    public function getTemplateName()
    {
        return "activity/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  113 => 32,  112 => 31,  111 => 30,  110 => 29,  107 => 28,  105 => 27,  102 => 26,  99 => 25,  97 => 23,  96 => 22,  94 => 21,  92 => 20,  89 => 19,  87 => 17,  86 => 16,  85 => 13,  84 => 12,  81 => 11,  79 => 10,  76 => 9,  72 => 8,  65 => 6,  58 => 5,  51 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "activity/delete.html.twig", "/var/www/kimai2/templates/activity/delete.html.twig");
    }
}
