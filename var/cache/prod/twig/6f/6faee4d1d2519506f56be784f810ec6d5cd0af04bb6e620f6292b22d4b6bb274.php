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

/* export/layout.html.twig */
class __TwigTemplate_8aff25da63acad62eecce215e4a6c03da1cf864edfbc58b5eed04e2d08670f4f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'export' => [$this, 'block_export'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        // line 9
        $this->displayBlock('styles', $context, $blocks);
        // line 10
        echo "</head>
<body class=\"pad export_print\">
<div class=\"wrapper\">
    <section class=\"export\">
        ";
        // line 14
        $this->displayBlock('export', $context, $blocks);
        // line 15
        echo "    </section>
</div>
";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "</body>
</html>
";
    }

    // line 9
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_export($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "export/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  87 => 14,  81 => 9,  75 => 18,  73 => 17,  69 => 15,  67 => 14,  61 => 10,  59 => 9,  55 => 8,  51 => 7,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "export/layout.html.twig", "/var/www/kimai2/templates/export/layout.html.twig");
    }
}
