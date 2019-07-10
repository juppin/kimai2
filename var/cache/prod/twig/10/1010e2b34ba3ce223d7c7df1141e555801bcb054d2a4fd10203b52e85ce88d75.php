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

/* partials/logo_login.html.twig */
class __TwigTemplate_00265ed97ed01e901c29e1957d087cf6df250f917f00e4ebc11f0aae3e3a4a3d extends \Twig\Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "branding", [], "any", false, false, false, 1), "logo", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "branding", [], "any", false, false, false, 2), "logo", [], "any", false, false, false, 2), "html", null, true);
            echo "\" style=\"max-width: 300px;\">
";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["kimai_context"] ?? null), "branding", [], "any", false, false, false, 3), "company", [], "any", false, false, false, 3))) {
            // line 4
            echo "    <b>";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kimai_context"] ?? null), "branding", [], "any", false, false, false, 4), "company", [], "any", false, false, false, 4);
            echo "</b>
";
        } else {
            // line 6
            echo $this->extensions['App\Twig\TitleExtension']->generateTitle("<b>", "</b><br>");
        }
    }

    public function getTemplateName()
    {
        return "partials/logo_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/logo_login.html.twig", "/var/www/kimai2/templates/partials/logo_login.html.twig");
    }
}
