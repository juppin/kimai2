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

/* @AdminLTE/Navbar/tasks.html.twig */
class __TwigTemplate_b1c552e577476aa522569abe5d65d56a85f4612938f704c20f4221b60dfa5145 extends \Twig\Template
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
        echo "<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-flag\"></i>
        <span class=\"label label-danger\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have %count% tasks", ["%count%" => ($context["total"] ?? null)], "AdminLTEBundle"), "html", null, true);
        echo "</li>
        <li>
            <ul class=\"menu\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 11
            echo "                    <li>
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_task"), ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "identifier", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">
                            <h3>
                                ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "
                                <small class=\"pull-right\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 15), "html", null, true);
            echo "%</small>
                            </h3>
                            <div class=\"progress xs\">
                                <div class=\"progress-bar progress-bar-";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "color", [], "any", false, false, false, 18), "html", null, true);
            echo "\"
                                     style=\"width: ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 19), "html", null, true);
            echo "%\"
                                     role=\"progressbar\"
                                     aria-valuenow=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 21), "html", null, true);
            echo "\"
                                     aria-valuemin=\"0\"
                                     aria-valuemax=\"100\">
                                    <span class=\"sr-only\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%progress%% Complete", ["%progress%" => twig_get_attribute($this->env, $this->source, $context["task"], "progress", [], "any", false, false, false, 24)], "AdminLTEBundle"), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>
        <li class=\"footer\">
            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_tasks"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all", [], "AdminLTEBundle"), "html", null, true);
        echo "</a>
        </li>
    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  103 => 30,  91 => 24,  85 => 21,  80 => 19,  76 => 18,  70 => 15,  66 => 14,  61 => 12,  58 => 11,  54 => 10,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Navbar/tasks.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/tasks.html.twig");
    }
}
