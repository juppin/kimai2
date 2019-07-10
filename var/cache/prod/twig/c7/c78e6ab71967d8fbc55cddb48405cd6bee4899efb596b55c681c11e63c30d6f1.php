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

/* @AdminLTE/Navbar/notifications.html.twig */
class __TwigTemplate_7d0bceec14c819238158c6e80ae147809b467ee7590e8acb578df71bbc546819 extends \Twig\Template
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
        echo "<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-bell\"></i>
        <span class=\"label label-warning\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% notifications", ["%count%" => ($context["total"] ?? null)], "AdminLTEBundle"), "html", null, true);
        echo "</li>
        <li>
            <ul class=\"menu\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 11
            echo "                    <li>
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_notification"), ["id" => twig_get_attribute($this->env, $this->source, $context["notice"], "identifier", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">
                            <i class=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notice"], "icon", [], "any", false, false, false, 13), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getTextType(twig_get_attribute($this->env, $this->source, $context["notice"], "type", [], "any", false, false, false, 13)), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notice"], "message", [], "any", false, false, false, 13), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_notifications"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all", [], "AdminLTEBundle"), "html", null, true);
        echo "</a></li>
    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  79 => 17,  65 => 13,  61 => 12,  58 => 11,  54 => 10,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Navbar/notifications.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/notifications.html.twig");
    }
}
