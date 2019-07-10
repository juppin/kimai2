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

/* @AdminLTE/FOSUserBundle/layout.html.twig */
class __TwigTemplate_ada478f329a635ee02e22b4a6b9b12f86b1036ea2e3e1a1fe8823488d54db177 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'login_social_auth' => [$this, 'block_login_social_auth'],
            'login_form' => [$this, 'block_login_form'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'login_actions' => [$this, 'block_login_actions'],
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
        $this->parent = $this->loadTemplate("@AdminLTE/layout/security-layout.html.twig", "@AdminLTE/FOSUserBundle/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_login_social_auth($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_login_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <br>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_login"));
        echo "\">
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to login", [], "AdminLTEBundle"), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/FOSUserBundle/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  76 => 11,  73 => 10,  69 => 9,  59 => 6,  55 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/FOSUserBundle/layout.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/FOSUserBundle/layout.html.twig");
    }
}
