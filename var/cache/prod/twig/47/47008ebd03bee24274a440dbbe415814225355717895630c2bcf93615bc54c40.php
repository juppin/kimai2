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

/* @AdminLTE/FOSUserBundle/Security/login.html.twig */
class __TwigTemplate_f3b529383ab75e162bdc8136e782f6370b8610996eaeda21cb8ebaf2c32ab173 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'login_social_auth' => [$this, 'block_login_social_auth'],
            'login_box_icon' => [$this, 'block_login_box_icon'],
            'login_box_msg' => [$this, 'block_login_box_msg'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@AdminLTE/layout/security-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/layout/security-layout.html.twig", "@AdminLTE/FOSUserBundle/Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_login_social_auth($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_login_box_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <span class=\"glyphicon glyphicon-user\"></span>
";
    }

    // line 9
    public function block_login_box_msg($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in to start your session", [], "AdminLTEBundle"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/FOSUserBundle/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  63 => 9,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/FOSUserBundle/Security/login.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/FOSUserBundle/Security/login.html.twig");
    }
}
