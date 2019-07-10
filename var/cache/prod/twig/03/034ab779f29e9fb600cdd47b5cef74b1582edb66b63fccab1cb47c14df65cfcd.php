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

/* default/_form_delete.html.twig */
class __TwigTemplate_e4eadd50e56d0671d9e1f53c9e4ab789f9114c8f7f91730153396f6dc1e923ac extends \Twig\Template
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
        echo "<div class=\"box box-solid box-danger\">
    <div class=\"box-header\">
        <h3 class=\"box-title\">";
        // line 3
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter(($context["title"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.delete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.delete"))), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"box-body\">
        ";
        // line 6
        echo ($context["message"] ?? null);
        echo "
    </div>
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"box-body\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
    <div class=\"box-footer\">
        <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
        echo "\" class=\"btn btn-danger\" />
        ";
        // line 14
        if (($context["back"] ?? null)) {
            // line 15
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["back"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-link\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/_form_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  77 => 17,  69 => 15,  67 => 14,  63 => 13,  57 => 10,  52 => 8,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_form_delete.html.twig", "/var/www/kimai2/templates/default/_form_delete.html.twig");
    }
}
