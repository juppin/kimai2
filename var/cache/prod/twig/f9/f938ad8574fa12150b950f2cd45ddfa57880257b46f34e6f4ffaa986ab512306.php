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

/* default/_form_delete_modal.html.twig */
class __TwigTemplate_afd240a99067f3d87c6275455b375633a5c061a321dc658009c0ba9970277b67 extends \Twig\Template
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
        $this->loadTemplate("default/_form_delete_modal.html.twig", "default/_form_delete_modal.html.twig", 1, "1349194815")->display($context);
    }

    public function getTemplateName()
    {
        return "default/_form_delete_modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_form_delete_modal.html.twig", "/var/www/kimai2/templates/default/_form_delete_modal.html.twig");
    }
}


/* default/_form_delete_modal.html.twig */
class __TwigTemplate_afd240a99067f3d87c6275455b375633a5c061a321dc658009c0ba9970277b67___1349194815 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'modal_id' => [$this, 'block_modal_id'],
            'modal_class' => [$this, 'block_modal_class'],
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
        // line 2
        $context["used"] = (((isset($context["used"]) || array_key_exists("used", $context))) ? (_twig_default_filter(($context["used"] ?? null), false)) : (false));
        // line 1
        $this->parent = $this->loadTemplate("embeds/modal.html.twig", "default/_form_delete_modal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_modal_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "form_modal";
    }

    // line 4
    public function block_modal_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (($context["used"] ?? null)) {
            echo "modal-danger";
        }
    }

    // line 5
    public function block_modal_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
    }

    // line 6
    public function block_modal_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        ";
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter(($context["title"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.delete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.delete"))), "html", null, true);
        echo "
    ";
    }

    // line 9
    public function block_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        ";
        if ((($context["used"] ?? null) === false)) {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete.not_in_use"), "html", null, true);
            echo "
            <div class=\"hidden\">
                ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            </div>
        ";
        } else {
            // line 16
            echo "            <p>";
            echo ($context["message"] ?? null);
            echo "</p>
            ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        ";
        }
        // line 19
        echo "    ";
    }

    // line 20
    public function block_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "        <button type=\"submit\" class=\"btn ";
        if (($context["used"] ?? null)) {
            echo "btn-outline";
        } else {
            echo "btn-primary";
        }
        echo " pull-left modal-form-save\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
        echo "...\" id=\"";
        $this->displayBlock("modal_id", $context, $blocks);
        echo "_save\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-default btn-cancel\" data-dismiss=\"modal\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
        echo "</button>
    ";
    }

    // line 24
    public function block_modal_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    public function getTemplateName()
    {
        return "default/_form_delete_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 24,  182 => 22,  167 => 21,  163 => 20,  159 => 19,  154 => 17,  149 => 16,  143 => 13,  137 => 11,  134 => 10,  130 => 9,  123 => 7,  119 => 6,  112 => 5,  103 => 4,  96 => 3,  91 => 1,  89 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_form_delete_modal.html.twig", "/var/www/kimai2/templates/default/_form_delete_modal.html.twig");
    }
}
