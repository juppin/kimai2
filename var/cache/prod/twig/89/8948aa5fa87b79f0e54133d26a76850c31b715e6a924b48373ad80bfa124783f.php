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

/* @AdminLTE/FOSUserBundle/Registration/confirmed.html.twig */
class __TwigTemplate_e11c74430bde0eb1e3b81663124188f0492e3fc936d75a5a739443cf16bf0bd8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@AdminLTE/layout/security-layout.html.twig", "@AdminLTE/FOSUserBundle/Registration/confirmed.html.twig", 1);
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
        // line 7
        echo "        <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.confirmed", ["%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 7)], "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
    }

    // line 11
    public function block_login_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <br>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_welcome"));
        echo "\">
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show homepage", [], "AdminLTEBundle"), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/FOSUserBundle/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  81 => 13,  78 => 12,  74 => 11,  67 => 7,  59 => 6,  55 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/FOSUserBundle/Registration/confirmed.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/FOSUserBundle/Registration/confirmed.html.twig");
    }
}
