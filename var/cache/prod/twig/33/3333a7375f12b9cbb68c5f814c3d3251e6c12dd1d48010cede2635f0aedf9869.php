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

/* invoice/template_edit.html.twig */
class __TwigTemplate_529b8c4358daff8ff9b0aadeedbb5831d28766156959ed8b503a2200e20d765b extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("form.html.twig") : ("base.html.twig")), "invoice/template_edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_invoice_template.title"), "html", null, true);
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_invoice_template.subtitle"), "html", null, true);
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo twig_include($this->env, $context, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "xmlHttpRequest", [], "any", false, false, false, 7)) ? ("default/_form_modal.html.twig") : ("default/_form.html.twig")), ["title" => ((twig_get_attribute($this->env, $this->source,         // line 8
($context["template"] ?? null), "name", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "name", [], "any", false, false, false, 8), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create"))), "form" =>         // line 9
($context["form"] ?? null), "back" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_invoice_template")]);
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "invoice/template_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  68 => 9,  67 => 8,  65 => 7,  61 => 6,  54 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/template_edit.html.twig", "/var/www/kimai2/templates/invoice/template_edit.html.twig");
    }
}
