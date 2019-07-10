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

/* @AdminLTE/layout/form-theme.html.twig */
class __TwigTemplate_79aa6c0a5b3bf6661564a55dce353b07da23639496e3fdd14a65c689bcd065f5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'email_widget' => [$this, 'block_email_widget'],
            'password_widget' => [$this, 'block_password_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@AdminLTE/layout/form-theme-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/layout/form-theme-base.html.twig", "@AdminLTE/layout/form-theme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            <i class=\"fa fa-at\"></i>
        </div>";
        // line 13
        $this->displayParentBlock("email_widget", $context, $blocks);
        // line 14
        echo "</div>";
    }

    // line 17
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            <i class=\"fas fa-key\"></i>
        </div>";
        // line 22
        $this->displayParentBlock("password_widget", $context, $blocks);
        // line 23
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/form-theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  71 => 22,  66 => 18,  62 => 17,  58 => 14,  56 => 13,  51 => 9,  47 => 8,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/form-theme.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/form-theme.html.twig");
    }
}
