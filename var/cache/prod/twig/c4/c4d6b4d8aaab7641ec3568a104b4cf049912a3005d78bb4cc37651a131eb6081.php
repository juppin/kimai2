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

/* @NelmioApiDoc/SwaggerUi/index.html.twig */
class __TwigTemplate_cadca27cd013cf6c28cc1d853f9b2ddefe271179285fd7d644a4c0254b680872 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@!NelmioApiDoc/SwaggerUi/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@!NelmioApiDoc/SwaggerUi/index.html.twig", "@NelmioApiDoc/SwaggerUi/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        body { margin-top: 0; }
        header { display:none; }
    </style>
";
    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/SwaggerUi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@NelmioApiDoc/SwaggerUi/index.html.twig", "/var/www/kimai2/templates/bundles/NelmioApiDocBundle/SwaggerUi/index.html.twig");
    }
}
