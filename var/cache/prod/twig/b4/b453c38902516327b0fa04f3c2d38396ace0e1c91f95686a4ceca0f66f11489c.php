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

/* @AdminLTE/FOSUserBundle/Resetting/request.html.twig */
class __TwigTemplate_315ef8bf4c9c78fa47f8f790b1b972cc3d5551da7277dc333779d553fc78e8f6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'login_social_auth' => [$this, 'block_login_social_auth'],
            'login_box_msg' => [$this, 'block_login_box_msg'],
            'login_form' => [$this, 'block_login_form'],
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
        $this->parent = $this->loadTemplate("@AdminLTE/layout/security-layout.html.twig", "@AdminLTE/FOSUserBundle/Resetting/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_login_social_auth($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_login_box_msg($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset your password", [], "AdminLTEBundle"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        // line 11
        echo "
    <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div class=\"form-group has-feedback\">
            <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.username", [], "FOSUserBundle"), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </form>
";
    }

    // line 25
    public function block_login_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <br>
    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_login"));
        echo "\">
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to login", [], "AdminLTEBundle"), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/FOSUserBundle/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  104 => 27,  101 => 26,  97 => 25,  88 => 19,  80 => 14,  75 => 12,  72 => 11,  70 => 10,  66 => 9,  59 => 6,  55 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/FOSUserBundle/Resetting/request.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/FOSUserBundle/Resetting/request.html.twig");
    }
}
