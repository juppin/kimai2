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

/* @AdminLTE/Navbar/messages.html.twig */
class __TwigTemplate_42b7d87f35e9791f9beb4b557200450ba499b7bfc33842622a6f909fb9a7c4b0 extends \Twig\Template
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
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Navbar/messages.html.twig", 1)->unwrap();
        // line 2
        echo "<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-envelope\"></i>
        <span class=\"label label-success\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% messages", ["%count%" => ($context["total"] ?? null)], "AdminLTEBundle"), "html", null, true);
        echo "</li>
        <li>
            <ul class=\"menu\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 12
            echo "                    <li>
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_message"), ["id" => twig_get_attribute($this->env, $this->source, $context["msg"], "identifier", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">
                            <div class=\"pull-left\">
                                ";
            // line 15
            echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", [], "any", false, false, false, 15), "avatar", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", [], "any", false, false, false, 15), "username", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
            echo "
                            </div>
                            <h4>
                                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
            echo "
                                <small><i class=\"far fa-clock\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "sentAt", [], "any", false, false, false, 19), "d.m.Y H:i"), "html", null, true);
            echo "</small>
                            </h4>
                            <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "subject", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_messages"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all", [], "AdminLTEBundle"), "html", null, true);
        echo "</a></li>
    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  93 => 25,  83 => 21,  78 => 19,  74 => 18,  68 => 15,  63 => 13,  60 => 12,  56 => 11,  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Navbar/messages.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/messages.html.twig");
    }
}
