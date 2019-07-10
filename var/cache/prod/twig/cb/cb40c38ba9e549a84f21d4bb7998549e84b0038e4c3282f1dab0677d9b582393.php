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

/* @AdminLTE/Partials/_flash_messages.html.twig */
class __TwigTemplate_a47d20ac666af0e5f0a85920f256382678729f89df675314c8032b19efb3f1fd extends \Twig\Template
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
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Partials/_flash_messages.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 3) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 3), "started", [], "any", false, false, false, 3)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 3), "flashbag", [], "any", false, false, false, 3), "peekAll", [], "any", false, false, false, 3)) > 0))) {
            // line 4
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
            // line 6
            echo twig_call_macro($macros["macro"], "macro_session_flash", [(((isset($context["adminlte_close_alert"]) || array_key_exists("adminlte_close_alert", $context))) ? (_twig_default_filter(($context["adminlte_close_alert"] ?? null), true)) : (true)), false, "", "flashmessages"], 6, $context, $this->getSourceContext());
            echo "
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Partials/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Partials/_flash_messages.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Partials/_flash_messages.html.twig");
    }
}
