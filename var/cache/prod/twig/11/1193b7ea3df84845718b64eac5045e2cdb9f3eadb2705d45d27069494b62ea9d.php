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

/* default/_form_modal.html.twig */
class __TwigTemplate_f8f648e8544274b645089c7a044105ca78d0290ba97720fb81ec681de663354b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("default/_form_modal.html.twig", "default/_form_modal.html.twig", 1, "1444917884")->display($context);
    }

    public function getTemplateName()
    {
        return "default/_form_modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_form_modal.html.twig", "/var/www/kimai2/templates/default/_form_modal.html.twig");
    }
}


/* default/_form_modal.html.twig */
class __TwigTemplate_f8f648e8544274b645089c7a044105ca78d0290ba97720fb81ec681de663354b___1444917884 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'modal_id' => [$this, 'block_modal_id'],
            'modal_before' => [$this, 'block_modal_before'],
            'modal_title' => [$this, 'block_modal_title'],
            'modal_body' => [$this, 'block_modal_body'],
            'modal_footer' => [$this, 'block_modal_footer'],
            'modal_end' => [$this, 'block_modal_end'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "embeds/modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("embeds/modal.html.twig", "default/_form_modal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_modal_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "form_modal";
    }

    // line 3
    public function block_modal_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
    }

    // line 4
    public function block_modal_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
        ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 6), "docu_chapter", [], "any", true, true, false, 6) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "docu_chapter", [], "any", false, false, false, 6)))) {
            // line 7
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->documentationLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 7), "docu_chapter", [], "any", false, false, false, 7)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("help"), "html", null, true);
            echo "\"></i></a>
        ";
        }
        // line 9
        echo "    ";
    }

    // line 10
    public function block_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
    }

    // line 13
    public function block_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <button type=\"submit\" class=\"btn btn-primary pull-left modal-form-save\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
        echo "...\" id=\"";
        $this->displayBlock("modal_id", $context, $blocks);
        echo "_save\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-default btn-cancel\" data-dismiss=\"modal\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
        echo "</button>
    ";
    }

    // line 17
    public function block_modal_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    public function getTemplateName()
    {
        return "default/_form_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 17,  153 => 15,  144 => 14,  140 => 13,  133 => 11,  129 => 10,  125 => 9,  117 => 7,  115 => 6,  110 => 5,  106 => 4,  99 => 3,  92 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_form_modal.html.twig", "/var/www/kimai2/templates/default/_form_modal.html.twig");
    }
}
