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

/* @AdminLTE/Macros/buttons.html.twig */
class __TwigTemplate_55edcf7d37acf8157fcb511335a2f8dbfb2e81f27eef69d55f91bf0c3dbdb451 extends \Twig\Template
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
        // line 6
        echo "
";
        // line 12
        echo "
";
        // line 25
        echo "
";
    }

    // line 1
    public function macro_action_toolbutton($__icon__ = null, $__action__ = null, $__label__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "action" => $__action__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <button class=\"btn btn-box-tool\" data-widget=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter(($context["label"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
        <i class=\"";
            // line 3
            echo twig_escape_filter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter(($context["icon"] ?? null), "times")) : ("times")), "html", null, true);
            echo "\"></i>
    </button>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_link_toolbutton($__icon__ = null, $__href__ = null, $__label__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "href" => $__href__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter(($context["label"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
        <i class=\"";
            // line 9
            echo twig_escape_filter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter(($context["icon"] ?? null), "times")) : ("times")), "html", null, true);
            echo "\"></i>
    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 13
    public function macro_link_button($__label__ = null, $__href__ = null, $__icon__ = null, $__type__ = null, $__size__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "href" => $__href__,
            "icon" => $__icon__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 14
            echo "    ";
            $context["_size"] = (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter(($context["size"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "button", [], "any", false, false, false, 14), "size", [], "any", false, false, false, 14))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "button", [], "any", false, false, false, 14), "size", [], "any", false, false, false, 14)));
            // line 15
            echo "    ";
            $context["_type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "button", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "button", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15)));
            // line 16
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (((isset($context["href"]) || array_key_exists("href", $context))) ? (_twig_default_filter(($context["href"] ?? null), "#")) : ("#")), "html", null, true);
            echo "\" class=\"btn btn-";
            echo twig_escape_filter($this->env, ($context["_type"] ?? null), "html", null, true);
            if (($context["_size"] ?? null)) {
                echo " btn-";
                echo twig_escape_filter($this->env, ($context["_size"] ?? null), "html", null, true);
            }
            echo "\">
        ";
            // line 17
            if (($context["icon"] ?? null)) {
                // line 18
                echo "            <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 20
            echo "        ";
            if (($context["label"] ?? null)) {
                // line 21
                echo "            <span>";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</span>
        ";
            }
            // line 23
            echo "    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 26
    public function macro_action_button($__label__ = null, $__action__ = null, $__icon__ = null, $__type__ = null, $__size__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "action" => $__action__,
            "icon" => $__icon__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo "    ";
            $context["_size"] = (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter(($context["size"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "button", [], "any", false, false, false, 27), "size", [], "any", false, false, false, 27))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "button", [], "any", false, false, false, 27), "size", [], "any", false, false, false, 27)));
            // line 28
            echo "    ";
            $context["_type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "button", [], "any", false, false, false, 28), "type", [], "any", false, false, false, 28))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "button", [], "any", false, false, false, 28), "type", [], "any", false, false, false, 28)));
            // line 29
            echo "    <button data-action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-";
            echo twig_escape_filter($this->env, ($context["_type"] ?? null), "html", null, true);
            if (($context["_size"] ?? null)) {
                echo " btn-";
                echo twig_escape_filter($this->env, ($context["_size"] ?? null), "html", null, true);
            }
            echo "\">
        ";
            // line 30
            if (($context["icon"] ?? null)) {
                // line 31
                echo "            <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 33
            echo "        ";
            if (($context["label"] ?? null)) {
                // line 34
                echo "            <span>";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</span>
        ";
            }
            // line 36
            echo "    </button>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Macros/buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 36,  222 => 34,  219 => 33,  213 => 31,  211 => 30,  200 => 29,  197 => 28,  194 => 27,  177 => 26,  167 => 23,  161 => 21,  158 => 20,  152 => 18,  150 => 17,  139 => 16,  136 => 15,  133 => 14,  116 => 13,  104 => 9,  97 => 8,  82 => 7,  70 => 3,  63 => 2,  48 => 1,  43 => 25,  40 => 12,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Macros/buttons.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Macros/buttons.html.twig");
    }
}
