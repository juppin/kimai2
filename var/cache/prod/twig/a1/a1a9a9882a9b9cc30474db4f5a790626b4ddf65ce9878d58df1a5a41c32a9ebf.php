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

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_c2083cac748e8006a228b45d6a784b8e9ac37d935785c1e8630be617417b82ab extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'error_icon' => [$this, 'block_error_icon'],
            'error_class' => [$this, 'block_error_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "error.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("error.html.twig", "@Twig/Exception/error500.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_error_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <i class=\"fas fa-bug text-red\"></i>
";
    }

    // line 7
    public function block_error_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "text-red";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error500.html.twig", "/var/www/kimai2/templates/bundles/TwigBundle/Exception/error500.html.twig");
    }
}
