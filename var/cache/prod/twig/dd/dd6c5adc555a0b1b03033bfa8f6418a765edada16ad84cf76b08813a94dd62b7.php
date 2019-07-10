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

/* @AdminLTE/Sidebar/user-panel.html.twig */
class __TwigTemplate_135cecbe9f07460bed502dd4537cc9341e105d71593cfdd339cc1675b0e76948 extends \Twig\Template
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
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Sidebar/user-panel.html.twig", 1)->unwrap();
        // line 2
        echo "<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    ";
        // line 5
        echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
    </div>
    <div class=\"pull-left info\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>

        <a href=\"#\"><i class=\"fas fa-circle text-success\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online", [], "AdminLTEBundle"), "html", null, true);
        echo "</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Sidebar/user-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Sidebar/user-panel.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Sidebar/user-panel.html.twig");
    }
}
