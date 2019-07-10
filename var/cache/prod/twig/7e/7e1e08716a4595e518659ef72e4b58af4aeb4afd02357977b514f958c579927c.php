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

/* default/_form.html.twig */
class __TwigTemplate_78cfc57a5ff34d300e26de1b95e61543069ab55fa8937ce2c2d2f6c80a82d704 extends \Twig\Template
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
        echo "<div class=\"box box-primary\">
    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">
            ";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
            ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "docu_chapter", [], "any", true, true, false, 5) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "docu_chapter", [], "any", false, false, false, 5)))) {
            // line 6
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->documentationLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "docu_chapter", [], "any", false, false, false, 6)), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\IconExtension']->icon("help"), "html", null, true);
            echo "\"></i></a>
            ";
        }
        // line 8
        echo "        </h3>
    </div>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"box-body\">
         ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
    <div class=\"box-footer\">
        <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
        ";
        // line 16
        if ((((isset($context["back"]) || array_key_exists("back", $context))) ? (_twig_default_filter(($context["back"] ?? null), false)) : (false))) {
            // line 17
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["back"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-link\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
            echo "</a>
        ";
        }
        // line 19
        echo "    </div>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  85 => 19,  77 => 17,  75 => 16,  71 => 15,  65 => 12,  60 => 10,  56 => 8,  48 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_form.html.twig", "/var/www/kimai2/templates/default/_form.html.twig");
    }
}
