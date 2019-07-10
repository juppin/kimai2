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

/* @AdminLTE/Breadcrumb/breadcrumb.html.twig */
class __TwigTemplate_f384a6479d67fc793c215f5e24c5227222ef8a14f3de1f8742bb53a546f10f22 extends \Twig\Template
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
        echo "<ol class=\"breadcrumb\">
    <li>
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_welcome"));
        echo "\">
            <i class=\"fas fa-tachometer-alt\"></i>
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home", [], "AdminLTEBundle"), "html", null, true);
        echo "
        </a>
    </li>
    ";
        // line 8
        if (($context["active"] ?? null)) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["active"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <li><a href=\"";
                ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 10))) ? (print ("#")) : (print (twig_escape_filter($this->env, ((twig_in_filter("/", twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 10))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 10)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 10)), twig_get_attribute($this->env, $this->source, $context["item"], "routeArgs", [], "any", false, false, false, 10)))), "html", null, true))));
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 10)), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "</ol>";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Breadcrumb/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  70 => 12,  59 => 10,  54 => 9,  52 => 8,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Breadcrumb/breadcrumb.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Breadcrumb/breadcrumb.html.twig");
    }
}
