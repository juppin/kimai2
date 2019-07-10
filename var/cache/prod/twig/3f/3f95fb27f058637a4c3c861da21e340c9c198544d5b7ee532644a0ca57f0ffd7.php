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

/* @AdminLTE/Partials/_control-sidebar.html.twig */
class __TwigTemplate_e0e7e15f837cdcadbad421ad9f6e13fba9aa8a3a0b527a029da5a6e77ee31829 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", true, true, false, 1) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", false, false, false, 1)))) {
            // line 2
            echo "<aside class=\"control-sidebar control-sidebar-dark\">
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", false, false, false, 4));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["tab"]) {
                // line 5
                echo "                <li";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#control-sidebar-";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "-tab\" data-toggle=\"tab\"><i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, false, 5), "html", null, true);
                echo "\"></i></a></li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </ul>
    <div class=\"tab-content\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", false, false, false, 9));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["tab"]) {
                // line 10
                echo "                <div class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 10)) {
                    echo "active";
                }
                echo "\" id=\"control-sidebar-";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "-tab\">
                    ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "controller", [], "any", true, true, false, 11)) {
                    // line 12
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller(twig_get_attribute($this->env, $this->source, $context["tab"], "controller", [], "any", false, false, false, 12), ["originalRequest" => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12)]));
                    echo "
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 13
$context["tab"], "template", [], "any", true, true, false, 13)) {
                    // line 14
                    echo "                        ";
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["tab"], "template", [], "any", false, false, false, 14), "@AdminLTE/Partials/_control-sidebar.html.twig", 14)->display($context);
                    // line 15
                    echo "                    ";
                }
                // line 16
                echo "                </div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
</aside>
<div class=\"control-sidebar-bg\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Partials/_control-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 18,  128 => 16,  125 => 15,  122 => 14,  120 => 13,  115 => 12,  113 => 11,  104 => 10,  87 => 9,  83 => 7,  60 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Partials/_control-sidebar.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Partials/_control-sidebar.html.twig");
    }
}
