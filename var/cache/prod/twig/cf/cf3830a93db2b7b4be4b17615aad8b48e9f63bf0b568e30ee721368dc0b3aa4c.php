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

/* @AdminLTE/Partials/_footer.html.twig */
class __TwigTemplate_0ba0c99ebe7e3b37febbb69f631ee7a42fd9efc32c5bffafae08db22e039e694 extends \Twig\Template
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
        echo "<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href=\"#\">Company</a>.</strong> All rights reserved.
</footer>";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Partials/_footer.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Partials/_footer.html.twig");
    }
}
