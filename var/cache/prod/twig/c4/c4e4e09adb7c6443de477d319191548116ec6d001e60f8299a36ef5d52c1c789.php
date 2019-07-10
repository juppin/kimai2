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

/* user/profile.html.twig */
class __TwigTemplate_0f4144e23d878623942eafc8853993f9e4de84b16839d32a0ee6880bfebac9f9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forms"] ?? null));
        foreach ($context['_seq'] as $context["formName"] => $context["form"]) {
            // line 9
            echo "                        <li ";
            if ((($context["tab"] ?? null) == $context["formName"])) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#";
            echo twig_escape_filter($this->env, $context["formName"], "html", null, true);
            echo "\" data-toggle=\"tab\" aria-expanded=\"false\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("profile." . $context["formName"])), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['formName'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "                </ul>
                <div class=\"tab-content\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forms"] ?? null));
        foreach ($context['_seq'] as $context["formName"] => $context["form"]) {
            // line 14
            echo "                        <div class=\"tab-pane ";
            if ((($context["tab"] ?? null) == $context["formName"])) {
                echo "active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["formName"], "html", null, true);
            echo "\">
                            ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_start');
            echo "
                            ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["form"], 'widget');
            echo "
                            <input type=\"submit\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
            echo "\" class=\"btn btn-primary\" />
                            ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_end');
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['formName'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 21,  104 => 18,  100 => 17,  96 => 16,  92 => 15,  83 => 14,  79 => 13,  75 => 11,  60 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/profile.html.twig", "/var/www/kimai2/templates/user/profile.html.twig");
    }
}
