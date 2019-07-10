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

/* macros/toolbar.html.twig */
class __TwigTemplate_c0ae61856f32bdc4c2e15c3f288b333dc845074f7e95cdadda89714d860f8ca6 extends \Twig\Template
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
    }

    // line 1
    public function macro_toolbar($__form__ = null, $__collapsible__ = null, $__displayInitial__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "collapsible" => $__collapsible__,
            "displayInitial" => $__displayInitial__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <div class=\"toolbar no-print\">
        ";
            // line 3
            if (($context["collapsible"] ?? null)) {
                echo "<div class=\"collapse";
                if (($context["displayInitial"] ?? null)) {
                    echo " collapse.show in";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ($context["collapsible"] ?? null), "html", null, true);
                echo "\">";
            }
            // line 4
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "navbar-form"]]);
            echo "
            ";
            // line 5
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 6
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
        ";
            // line 7
            if (($context["collapsible"] ?? null)) {
                echo "</div>";
            }
            // line 8
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 8,  80 => 7,  76 => 6,  72 => 5,  67 => 4,  57 => 3,  54 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "macros/toolbar.html.twig", "/var/www/kimai2/templates/macros/toolbar.html.twig");
    }
}
