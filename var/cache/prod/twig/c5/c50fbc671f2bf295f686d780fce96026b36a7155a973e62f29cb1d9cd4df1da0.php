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

/* @AdminLTE/Macros/menu.html.twig */
class __TwigTemplate_cc00a769208eac60c772750e6d32e821261f389a8069fc2fe09d80bcfd14c487 extends \Twig\Template
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
        // line 36
        echo "
";
    }

    // line 1
    public function macro_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $macros["menu"] = $this;
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", [], "any", false, false, false, 3) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 3))) {
                // line 4
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "identifier", [], "any", false, false, false, 4), "html", null, true);
                echo "\" class=\" ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isActive", [], "any", false, false, false, 4)) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 4)) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 5
                ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 5)) ? (print ("#")) : (print (twig_escape_filter($this->env, ((twig_in_filter("/", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", [], "any", false, false, false, 5))) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", [], "any", false, false, false, 5)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "route", [], "any", false, false, false, 5)), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "routeArgs", [], "any", false, false, false, 5)))), "html", null, true))));
                echo "\">
                ";
                // line 6
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 6)) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 6), "html", null, true);
                    echo "\"></i> ";
                }
                // line 7
                echo "                ";
                if ( !(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 7) === false)) {
                    // line 8
                    echo "                    <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badgeColor", [], "any", false, false, false, 8), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 8), "html", null, true);
                    echo "</small>
                ";
                }
                // line 10
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 10)) {
                    echo "<i class=\"fas fa-angle-left pull-right\"></i>";
                }
                // line 11
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 11)), "html", null, true);
                echo "</span>
            </a>

            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 16));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 17
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "hasChildren", [], "any", false, false, false, 17)) {
                            // line 18
                            echo "                           ";
                            echo twig_call_macro($macros["menu"], "macro_menu_item", [$context["child"]], 18, $context, $this->getSourceContext());
                            echo "
                        ";
                        } else {
                            // line 20
                            echo "                            <li class=\"";
                            echo ((twig_get_attribute($this->env, $this->source, $context["child"], "isActive", [], "any", false, false, false, 20)) ? ("active") : (""));
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "identifier", [], "any", false, false, false, 20), "html", null, true);
                            echo "\">
                                <a href=\"";
                            // line 21
                            echo twig_escape_filter($this->env, ((twig_in_filter("/", twig_get_attribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 21))) ? (twig_get_attribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 21)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["child"], "route", [], "any", false, false, false, 21)), twig_get_attribute($this->env, $this->source, $context["child"], "routeArgs", [], "any", false, false, false, 21)))), "html", null, true);
                            echo "\">
                                    ";
                            // line 22
                            echo twig_call_macro($macros["menu"], "macro_menu_item_content", [$context["child"], ""], 22, $context, $this->getSourceContext());
                            echo "
                                </a>
                            </li>
                        ";
                        }
                        // line 26
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                </ul>
            ";
                }
                // line 29
                echo "        </li>
    ";
            } else {
                // line 31
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "identifier", [], "any", false, false, false, 31), "html", null, true);
                echo "\" class=\"header\">
            ";
                // line 32
                echo twig_call_macro($macros["menu"], "macro_menu_item_content", [($context["item"] ?? null), ""], 32, $context, $this->getSourceContext());
                echo "
        </li>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
    public function macro_menu_item_content($__item__ = null, $__defaultIcon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "defaultIcon" => $__defaultIcon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 38
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 38), ($context["defaultIcon"] ?? null))) : (($context["defaultIcon"] ?? null))), "html", null, true);
            echo "\"></i>
    <span>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 39)), "html", null, true);
            echo "</span>
    ";
            // line 40
            if ( !(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 40) === false)) {
                // line 41
                echo "        <small class=\"label pull-right bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badgeColor", [], "any", false, false, false, 41), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "badge", [], "any", false, false, false, 41), "html", null, true);
                echo "</small>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Macros/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 41,  194 => 40,  190 => 39,  185 => 38,  171 => 37,  158 => 32,  153 => 31,  149 => 29,  145 => 27,  139 => 26,  132 => 22,  128 => 21,  121 => 20,  115 => 18,  112 => 17,  108 => 16,  105 => 15,  103 => 14,  96 => 11,  91 => 10,  83 => 8,  80 => 7,  74 => 6,  70 => 5,  61 => 4,  58 => 3,  55 => 2,  42 => 1,  37 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Macros/menu.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Macros/menu.html.twig");
    }
}
