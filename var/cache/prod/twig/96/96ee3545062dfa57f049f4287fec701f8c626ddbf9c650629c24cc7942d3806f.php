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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_1336d4fa618b548d67194726f89b024379c69d79db70da332c70b2af52db9e86 extends \Twig\Template
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
        // line 10
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
    <title>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("http_error.title", [], "exceptions"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</title>
</head>
<body>

";
        // line 18
        $context["errorTitleKey"] = (("http_error_" . ($context["status_code"] ?? null)) . ".description");
        // line 19
        $context["errorTitleTrans"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["errorTitleKey"] ?? null), ["%status_code%" => ($context["status_code"] ?? null)], "exceptions");
        // line 20
        if ((($context["errorTitleKey"] ?? null) == ($context["errorTitleTrans"] ?? null))) {
            // line 21
            echo "    ";
            $context["errorTitleKey"] = "http_error.description";
            // line 22
            echo "    ";
            $context["errorTitleTrans"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["errorTitleKey"] ?? null), ["%status_code%" => ($context["status_code"] ?? null)], "exceptions");
        }
        // line 24
        echo "
";
        // line 25
        $context["errorMessageKey"] = (("http_error_" . ($context["status_code"] ?? null)) . ".suggestion");
        // line 26
        $context["errorMessageTrans"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["errorMessageKey"] ?? null), ["%status_code%" => ($context["status_code"] ?? null)], "exceptions");
        // line 27
        if ((($context["errorMessageKey"] ?? null) == ($context["errorMessageTrans"] ?? null))) {
            // line 28
            echo "    ";
            $context["errorMessageKey"] = "http_error.suggestion";
            // line 29
            echo "    ";
            $context["errorMessageTrans"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["errorMessageKey"] ?? null), ["%status_code%" => ($context["status_code"] ?? null)], "exceptions");
        }
        // line 31
        echo "
<h1>";
        // line 32
        echo twig_escape_filter($this->env, ($context["errorTitleTrans"] ?? null), "html", null, true);
        echo "</h1>
<h2>";
        // line 33
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</h2>

<div>
    ";
        // line 36
        echo twig_escape_filter($this->env, ($context["errorMessageTrans"] ?? null), "html", null, true);
        echo "
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  91 => 33,  87 => 32,  84 => 31,  80 => 29,  77 => 28,  75 => 27,  73 => 26,  71 => 25,  68 => 24,  64 => 22,  61 => 21,  59 => 20,  57 => 19,  55 => 18,  46 => 14,  42 => 13,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error.html.twig", "/var/www/kimai2/templates/bundles/TwigBundle/Exception/error.html.twig");
    }
}
