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

/* @AdminLTE/Partials/_menu.html.twig */
class __TwigTemplate_37190b5bb7958d8ac6b7a8550f52fb701a49ca29b2005ae9f6e1a0cc9fd81f44 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'list' => [$this, 'block_list'],
            'spanElement' => [$this, 'block_spanElement'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@AdminLTE/Partials/_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "icon"], "method", false, false, false, 4)) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "icon"], "method", false, false, false, 4), "html", null, true);
            echo "\"></i>";
        }
        // line 5
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "iconOnly"], "method", false, false, false, 5)) {
            // line 6
            echo "        <span>";
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", [], "any", false, false, false, 6) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getExtra", [0 => "safe_label", 1 => false], "method", false, false, false, 6))) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 6));
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 6)), "html", null, true);
            }
            echo "</span>
    ";
        }
        // line 8
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "data-image"], "method", false, false, false, 8)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "data-image"], "method", false, false, false, 8), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"menu-thumbnail\"/>";
        }
        // line 9
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 9) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 9) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 9))) {
            // line 10
            echo "        <span class=\"pull-right-container\">
            <i class=\"fas fa-angle-left pull-right\"></i>
        </span>
    ";
        }
    }

    // line 16
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 17) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 17) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 17))) {
            // line 18
            echo "        ";
            $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@AdminLTE/Partials/_menu.html.twig", 18)->unwrap();
            // line 19
            echo "
        ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isAncestor", [0 => ($context["item"] ?? null)], "method", false, false, false, 20)) {
                // line 21
                $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 21), "")) : ("")) . " in"))]);
            }
            // line 23
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRoot", [], "any", false, false, false, 23)) {
                // line 24
                $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 24), "")) : ("")) . " treeview-menu"))]);
            }
            // line 25
            echo " 
        <ul";
            // line 26
            echo twig_call_macro($macros["macros"], "macro_attributes", [($context["listAttributes"] ?? null)], 26, $context, $this->getSourceContext());
            echo ">
            ";
            // line 27
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
    }

    // line 40
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@AdminLTE/Partials/_menu.html.twig", 41)->unwrap();
        // line 42
        echo "    ";
        if (preg_match("/(^|s+)header(s+|\$)/", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 42))) {
            // line 43
            echo "        ";
            $this->displayBlock("label", $context, $blocks);
            echo "
    ";
        } else {
            // line 45
            echo "        <a";
            echo twig_call_macro($macros["macros"], "macro_attributes", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", [], "any", false, false, false, 45)], 45, $context, $this->getSourceContext());
            echo ">
            ";
            // line 46
            $this->displayBlock("label", $context, $blocks);
            echo "
        </a>
    ";
        }
    }

    // line 32
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 34
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 35
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Partials/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 35,  178 => 34,  173 => 33,  160 => 32,  152 => 46,  147 => 45,  141 => 43,  138 => 42,  135 => 41,  131 => 40,  123 => 27,  119 => 26,  116 => 25,  113 => 24,  110 => 23,  107 => 21,  105 => 20,  102 => 19,  99 => 18,  96 => 17,  92 => 16,  84 => 10,  81 => 9,  72 => 8,  62 => 6,  59 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Partials/_menu.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Partials/_menu.html.twig");
    }
}
