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

/* @AdminLTE/FOSUserBundle/Registration/register.html.twig */
class __TwigTemplate_c678fa72bebecb6e591cdc222982cf1e0869d004aa3afddddab15e94227728fa extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@AdminLTE/layout/security-layout.html.twig", "@AdminLTE/FOSUserBundle/Registration/register.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register a new account", [], "AdminLTEBundle"), "html", null, true);
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
        echo "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@AdminLTE/layout/form-theme-security.html.twig"], true);
        // line 12
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 20
    public function block_login_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <br>
    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_login"));
        echo "\">
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to login", [], "AdminLTEBundle"), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/FOSUserBundle/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 23,  103 => 22,  100 => 21,  96 => 20,  90 => 17,  85 => 15,  80 => 13,  75 => 12,  72 => 11,  70 => 10,  66 => 9,  59 => 6,  55 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/FOSUserBundle/Registration/register.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/FOSUserBundle/Registration/register.html.twig");
    }
}
