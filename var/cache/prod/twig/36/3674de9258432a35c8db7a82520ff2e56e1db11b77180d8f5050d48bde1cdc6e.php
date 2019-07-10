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

/* user/form.html.twig */
class __TwigTemplate_4f4f35296b7104283f3e214f525bbf4237463fe4d6b6b6fb7244567b5cf1dd33 extends \Twig\Template
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
        // line 2
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "user/form.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("user/layout.html.twig", "user/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    ";
        // line 6
        $this->loadTemplate("user/form.html.twig", "user/form.html.twig", 6, "58098479")->display($context);
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  56 => 6,  53 => 5,  49 => 4,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/form.html.twig", "/var/www/kimai2/templates/user/form.html.twig");
    }
}


/* user/form.html.twig */
class __TwigTemplate_4f4f35296b7104283f3e214f525bbf4237463fe4d6b6b6fb7244567b5cf1dd33___58098479 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'box_title' => [$this, 'block_box_title'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "user/form.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("profile." . ($context["tab"] ?? null))), "html", null, true);
    }

    // line 8
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "user/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 12,  136 => 11,  132 => 10,  127 => 9,  123 => 8,  116 => 7,  105 => 6,  58 => 15,  56 => 6,  53 => 5,  49 => 4,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/form.html.twig", "/var/www/kimai2/templates/user/form.html.twig");
    }
}
