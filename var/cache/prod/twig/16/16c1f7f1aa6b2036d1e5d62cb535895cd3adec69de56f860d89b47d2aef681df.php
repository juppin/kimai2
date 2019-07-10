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

/* @AdminLTE/layout/form-theme-security.html.twig */
class __TwigTemplate_4d914f1659c209c2af4f55ead51c0a9e0c984ceb296295b007e277628affc252 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'email_widget' => [$this, 'block_email_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'form_label' => [$this, 'block_form_label'],
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
        $this->parent = $this->loadTemplate("@AdminLTE/layout/form-theme-base.html.twig", "@AdminLTE/layout/form-theme-security.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null))]);
        // line 5
        echo "    ";
        $context["label"] = false;
        // line 6
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", true, true, false, 6)) {
            // line 7
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["icon" => "user"]);
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        if (((isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? null) == "hidden"))) {
            // line 10
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 12
            echo "        <div class=\"form-group has-feedback\">";
            // line 13
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            // line 14
            echo "<span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", false, false, false, 14), "html", null, true);
            echo " form-control-feedback\"></span>
        </div>
    ";
        }
    }

    // line 19
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["icon" => "envelope"]);
        // line 21
        $this->displayParentBlock("email_widget", $context, $blocks);
    }

    // line 24
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["icon" => "lock"]);
        // line 26
        $this->displayParentBlock("password_widget", $context, $blocks);
    }

    // line 29
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/form-theme-security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  102 => 26,  100 => 25,  96 => 24,  92 => 21,  90 => 20,  86 => 19,  77 => 14,  75 => 13,  73 => 12,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/form-theme-security.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/form-theme-security.html.twig");
    }
}
