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

/* form/kimai-theme.html.twig */
class __TwigTemplate_dc122600f2f6c403f6aea9f20a29c8fcbb3a85a9605f8a4de398c5b215af6691 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_label' => [$this, 'block_form_label'],
            'daterange_widget' => [$this, 'block_daterange_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@AdminLTE/layout/form-theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/layout/form-theme.html.twig", "form/kimai-theme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "docu_chapter", [], "any", true, true, false, 5) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "docu_chapter", [], "any", false, false, false, 5)))) {
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->documentationLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "docu_chapter", [], "any", false, false, false, 6)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("help"), "html", null, true);
            echo "\"></i></a>
    ";
        }
        // line 8
        echo "    ";
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_daterange_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <div class=\"input-group\">
        <div class=\"input-group-addon\">
            <i class=\"far fa-calendar-alt\"></i>
        </div>

        ";
        // line 17
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-daterangepickerenable" => "on"]);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "form/kimai-theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  82 => 18,  80 => 17,  73 => 12,  69 => 11,  62 => 8,  54 => 6,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form/kimai-theme.html.twig", "/var/www/kimai2/templates/form/kimai-theme.html.twig");
    }
}
