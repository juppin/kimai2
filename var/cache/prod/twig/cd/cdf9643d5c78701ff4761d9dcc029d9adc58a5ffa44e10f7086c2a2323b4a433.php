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

/* @AdminLTE/layout/security-layout.html.twig */
class __TwigTemplate_e18dde0d8a0e01280aed1d2320328b7eac08089b2bf916ccf3609c694583b166 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html_start' => [$this, 'block_html_start'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body_start' => [$this, 'block_body_start'],
            'after_body_start' => [$this, 'block_after_body_start'],
            'login_box' => [$this, 'block_login_box'],
            'logo_login' => [$this, 'block_logo_login'],
            'login_box_icon' => [$this, 'block_login_box_icon'],
            'login_box_msg' => [$this, 'block_login_box_msg'],
            'login_box_error' => [$this, 'block_login_box_error'],
            'login_form' => [$this, 'block_login_form'],
            'login_form_start' => [$this, 'block_login_form_start'],
            'login_form_end' => [$this, 'block_login_form_end'],
            'login_social_auth' => [$this, 'block_login_social_auth'],
            'login_actions' => [$this, 'block_login_actions'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html";
        $this->displayBlock('html_start', $context, $blocks);
        echo ">
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body";
        // line 14
        $this->displayBlock('body_start', $context, $blocks);
        echo " class=\"hold-transition login-page\">
";
        // line 15
        $this->displayBlock('after_body_start', $context, $blocks);
        // line 16
        $this->displayBlock('login_box', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "
</body>
</html>
";
    }

    // line 1
    public function block_html_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "AdminLTE 2 | Log in";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/adminlte/adminlte.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 14
    public function block_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_after_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_login_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <div class=\"login-box\">
        <div class=\"login-logo\">
            ";
        // line 19
        $this->displayBlock('logo_login', $context, $blocks);
        // line 20
        echo "        </div>
        <div class=\"login-box-body\">
            <div class=\"login-box-msg\">
                <h3 class=\"login-head\">
                    ";
        // line 24
        $this->displayBlock('login_box_icon', $context, $blocks);
        // line 25
        echo "                    ";
        $this->displayBlock('login_box_msg', $context, $blocks);
        // line 26
        echo "                </h3>
                ";
        // line 27
        $this->displayBlock('login_box_error', $context, $blocks);
        // line 32
        echo "            </div>

            ";
        // line 34
        $this->displayBlock('login_form', $context, $blocks);
        // line 58
        echo "            ";
        $this->displayBlock('login_social_auth', $context, $blocks);
        // line 69
        echo "            ";
        $this->displayBlock('login_actions', $context, $blocks);
        // line 82
        echo "        </div>
    </div>
";
    }

    // line 19
    public function block_logo_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<b>Admin</b>LTE";
    }

    // line 24
    public function block_login_box_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_login_box_msg($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 27
    public function block_login_box_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                    ";
        if ((((isset($context["error"]) || array_key_exists("error", $context))) ? (_twig_default_filter(($context["error"] ?? null), false)) : (false))) {
            // line 29
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 29), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 31
        echo "                ";
    }

    // line 34
    public function block_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "            <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_login_check"));
        echo "\" method=\"post\">
                ";
        // line 36
        $this->displayBlock('login_form_start', $context, $blocks);
        // line 37
        echo "                <div class=\"form-group has-feedback\">
                    <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username", [], "AdminLTEBundle"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (((isset($context["last_username"]) || array_key_exists("last_username", $context))) ? (_twig_default_filter(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "AdminLTEBundle"), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"form-group\">
                    <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\">
                    <label for=\"remember_me\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remember Me", [], "AdminLTEBundle"), "html", null, true);
        echo "</label>
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign In", [], "AdminLTEBundle"), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 52
        if (($context["csrf_token"] ?? null)) {
            // line 53
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\"/>
                ";
        }
        // line 55
        echo "                ";
        $this->displayBlock('login_form_end', $context, $blocks);
        // line 56
        echo "            </form>
            ";
    }

    // line 36
    public function block_login_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 55
    public function block_login_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 58
    public function block_login_social_auth($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "            <div class=\"social-auth-links text-center\">
                <p>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("- OR -", [], "AdminLTEBundle"), "html", null, true);
        echo "</p>
                <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fab fa-facebook\"></i>
                    ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in using Facebook", [], "AdminLTEBundle"), "html", null, true);
        echo "
                </a>
                <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fab fa-google-plus\"></i>
                    ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in using Google+", [], "AdminLTEBundle"), "html", null, true);
        echo "
                </a>
            </div>
            ";
    }

    // line 69
    public function block_login_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                ";
        if (($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_password_reset") != "adminlte_password_reset")) {
            // line 71
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_password_reset"));
            echo "\">
                        ";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I forgot my password", [], "AdminLTEBundle"), "html", null, true);
            echo "
                    </a>
                    <br>
                ";
        }
        // line 76
        echo "                ";
        if (($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_registration") != "adminlte_registration")) {
            // line 77
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_registration"));
            echo "\" class=\"text-center\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register a new account", [], "AdminLTEBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 81
        echo "            ";
    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/adminlte/adminlte.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/security-layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  357 => 87,  353 => 86,  349 => 81,  343 => 78,  338 => 77,  335 => 76,  328 => 72,  323 => 71,  320 => 70,  316 => 69,  308 => 65,  302 => 62,  297 => 60,  294 => 59,  290 => 58,  284 => 55,  278 => 36,  273 => 56,  270 => 55,  264 => 53,  262 => 52,  257 => 50,  251 => 47,  243 => 42,  234 => 38,  231 => 37,  229 => 36,  224 => 35,  220 => 34,  216 => 31,  210 => 29,  207 => 28,  203 => 27,  197 => 25,  191 => 24,  184 => 19,  178 => 82,  175 => 69,  172 => 58,  170 => 34,  166 => 32,  164 => 27,  161 => 26,  158 => 25,  156 => 24,  150 => 20,  148 => 19,  144 => 17,  140 => 16,  134 => 15,  128 => 14,  121 => 11,  117 => 10,  110 => 9,  103 => 5,  99 => 4,  93 => 1,  86 => 89,  84 => 86,  81 => 85,  79 => 16,  77 => 15,  73 => 14,  70 => 13,  68 => 10,  63 => 9,  61 => 4,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/security-layout.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/security-layout.html.twig");
    }
}
