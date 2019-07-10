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

/* @AdminLTE/layout/login-layout-avanzu.html.twig */
class __TwigTemplate_0eba747871ab4f7d7326bf1c7b8048388259974ccc762a079c4469b995fab737 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'html_start' => [$this, 'block_html_start'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'head' => [$this, 'block_head'],
            'body_start' => [$this, 'block_body_start'],
            'after_body_start' => [$this, 'block_after_body_start'],
            'login_box' => [$this, 'block_login_box'],
            'logo_login' => [$this, 'block_logo_login'],
            'login_box_msg' => [$this, 'block_login_box_msg'],
            'login_form' => [$this, 'block_login_form'],
            'login_social_auth' => [$this, 'block_login_social_auth'],
            'login_actions' => [$this, 'block_login_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@AdminLTE/layout/@AdminLTE/layout/security-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/layout/@AdminLTE/layout/security-layout.html.twig", "@AdminLTE/layout/login-layout-avanzu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_html_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_html_start", $context, $blocks)) {
            $this->displayBlock("avanzu_html_start", $context, $blocks);
        } else {
            $this->displayParentBlock("html_start", $context, $blocks);
        }
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_login_title", $context, $blocks)) {
            $this->displayBlock("avanzu_login_title", $context, $blocks);
        } else {
            $this->displayParentBlock("title", $context, $blocks);
        }
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_stylesheets", $context, $blocks)) {
            $this->displayBlock("avanzu_stylesheets", $context, $blocks);
        } else {
            $this->displayParentBlock("stylesheets", $context, $blocks);
        }
    }

    // line 11
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_head", $context, $blocks)) {
            $this->displayBlock("avanzu_head", $context, $blocks);
        } else {
            $this->displayParentBlock("head", $context, $blocks);
        }
    }

    // line 12
    public function block_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_body_start", $context, $blocks)) {
            $this->displayBlock("avanzu_body_start", $context, $blocks);
        } else {
            $this->displayParentBlock("body_start", $context, $blocks);
        }
    }

    // line 13
    public function block_after_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_after_body_start", $context, $blocks)) {
            $this->displayBlock("avanzu_after_body_start", $context, $blocks);
        } else {
            $this->displayParentBlock("after_body_start", $context, $blocks);
        }
    }

    // line 14
    public function block_login_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_login_box", $context, $blocks)) {
            $this->displayBlock("avanzu_login_box", $context, $blocks);
        } else {
            $this->displayParentBlock("login_box", $context, $blocks);
        }
    }

    // line 15
    public function block_logo_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_logo_login", $context, $blocks)) {
            $this->displayBlock("avanzu_logo_login", $context, $blocks);
        } else {
            $this->displayParentBlock("logo_login", $context, $blocks);
        }
    }

    // line 16
    public function block_login_box_msg($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_login_box_msg", $context, $blocks)) {
            $this->displayBlock("avanzu_login_box_msg", $context, $blocks);
        } else {
            $this->displayParentBlock("login_box_msg", $context, $blocks);
        }
    }

    // line 17
    public function block_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_login_form", $context, $blocks)) {
            $this->displayBlock("avanzu_login_form", $context, $blocks);
        } else {
            $this->displayParentBlock("login_form", $context, $blocks);
        }
    }

    // line 18
    public function block_login_social_auth($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_login_social_auth", $context, $blocks)) {
            $this->displayBlock("avanzu_login_social_auth", $context, $blocks);
        } else {
            $this->displayParentBlock("login_social_auth", $context, $blocks);
        }
    }

    // line 19
    public function block_login_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_login_actions", $context, $blocks)) {
            $this->displayBlock("avanzu_login_actions", $context, $blocks);
        } else {
            $this->displayParentBlock("login_actions", $context, $blocks);
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/login-layout-avanzu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 19,  167 => 18,  156 => 17,  145 => 16,  134 => 15,  123 => 14,  112 => 13,  101 => 12,  90 => 11,  79 => 10,  68 => 9,  57 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/login-layout-avanzu.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/login-layout-avanzu.html.twig");
    }
}
