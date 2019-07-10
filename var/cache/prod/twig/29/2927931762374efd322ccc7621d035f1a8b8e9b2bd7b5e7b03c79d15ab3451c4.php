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

/* @AdminLTE/Macros/default.html.twig */
class __TwigTemplate_5ab707ccab799ca71e2206686a4f34f9b64f85aa1c1a75e74a085f9ae0318d5b extends \Twig\Template
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
        // line 8
        echo "
";
        // line 25
        echo "
";
    }

    // line 1
    public function macro_avatar($__image__ = null, $__alt__ = null, $__class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "image" => $__image__,
            "alt" => $__alt__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            if (($context["image"] ?? null)) {
                // line 3
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image"] ?? null)), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter(($context["class"] ?? null), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ($context["alt"] ?? null), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 5
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "default_avatar", [], "any", false, false, false, 5)), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter(($context["class"] ?? null), "img-circle")) : ("img-circle")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ($context["alt"] ?? null), "html", null, true);
                echo "\" />
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 13
    public function macro_flash($__type__ = null, $__message__ = null, $__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "message" => $__message__,
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 14
            echo "    <div class=\"alert";
            ((($context["type"] ?? null)) ? (print (twig_escape_filter($this->env, (" alert-" . ($context["type"] ?? null)), "html", null, true))) : (print ("")));
            echo " fade in ";
            echo twig_escape_filter($this->env, (((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter(($context["class"] ?? null), "")) : ("")), "html", null, true);
            echo " ";
            if ((((isset($context["close"]) || array_key_exists("close", $context))) ? (_twig_default_filter(($context["close"] ?? null), false)) : (false))) {
                echo "alert-dismissible";
            }
            echo "\">
        ";
            // line 15
            if ((((isset($context["close"]) || array_key_exists("close", $context))) ? (_twig_default_filter(($context["close"] ?? null), false)) : (false))) {
                // line 16
                echo "            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            }
            // line 18
            echo "        ";
            if ((((isset($context["use_raw"]) || array_key_exists("use_raw", $context))) ? (_twig_default_filter(($context["use_raw"] ?? null), false)) : (false))) {
                // line 19
                echo "            ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["message"] ?? null), [], (((isset($context["domain"]) || array_key_exists("domain", $context))) ? (_twig_default_filter(($context["domain"] ?? null), "AdminLTEBundle")) : ("AdminLTEBundle")));
                echo "
        ";
            } else {
                // line 21
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["message"] ?? null), [], (((isset($context["domain"]) || array_key_exists("domain", $context))) ? (_twig_default_filter(($context["domain"] ?? null), "AdminLTEBundle")) : ("AdminLTEBundle"))), "html", null, true);
                echo "
        ";
            }
            // line 23
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 26
    public function macro_session_flash($__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo "    ";
            $macros["flash_messages"] = $this;
            // line 28
            echo "
    ";
            // line 29
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 29), "flashbag", [], "any", false, false, false, 29), "peekAll", [], "any", false, false, false, 29)) > 0)) {
                // line 30
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 30), "flashbag", [], "any", false, false, false, 30), "all", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 31
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 32
                        echo "                ";
                        if (($context["type"] == "fos_user_success")) {
                            // line 33
                            echo "                    ";
                            $context["type"] = "success";
                            // line 34
                            echo "                    ";
                            $context["domain"] = "FOSUserBundle";
                            // line 35
                            echo "                ";
                        }
                        // line 36
                        echo "                ";
                        echo twig_call_macro($macros["flash_messages"], "macro_flash", [$context["type"], $context["message"], ($context["close"] ?? null), ($context["use_raw"] ?? null), ($context["class"] ?? null), ($context["domain"] ?? null)], 36, $context, $this->getSourceContext());
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Macros/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 39,  205 => 38,  196 => 36,  193 => 35,  190 => 34,  187 => 33,  184 => 32,  179 => 31,  174 => 30,  172 => 29,  169 => 28,  166 => 27,  150 => 26,  140 => 23,  134 => 21,  128 => 19,  125 => 18,  121 => 16,  119 => 15,  108 => 14,  90 => 13,  73 => 5,  63 => 3,  60 => 2,  45 => 1,  40 => 25,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Macros/default.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Macros/default.html.twig");
    }
}
