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

/* error.html.twig */
class __TwigTemplate_15c5074ffcb82563e75ec7ccfa301e79858738623bba6aa3efefdf4c57ed517a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'main' => [$this, 'block_main'],
            'error_class' => [$this, 'block_error_class'],
            'error_content' => [$this, 'block_error_content'],
            'error_icon' => [$this, 'block_error_icon'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("http_error.title", [], "exceptions"), "html", null, true);
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $context["errorTitleKey"] = (("http_error_" . ($context["status_code"] ?? null)) . ".description");
        // line 8
        echo "    ";
        $context["errorTitleTrans"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["errorTitleKey"] ?? null), ["%status_code%" => ($context["status_code"] ?? null)], "exceptions");
        // line 9
        echo "    ";
        if ((($context["errorTitleKey"] ?? null) == ($context["errorTitleTrans"] ?? null))) {
            // line 10
            echo "        ";
            $context["errorTitleKey"] = "http_error.description";
            // line 11
            echo "        ";
            $context["errorTitleTrans"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["errorTitleKey"] ?? null), ["%status_code%" => ($context["status_code"] ?? null)], "exceptions");
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        $context["errorMessageKey"] = (("http_error_" . ($context["status_code"] ?? null)) . ".suggestion");
        // line 15
        echo "    ";
        $context["errorMessageTrans"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["errorMessageKey"] ?? null), ["%status_code%" => ($context["status_code"] ?? null)], "exceptions");
        // line 16
        echo "    ";
        if ((($context["errorMessageKey"] ?? null) == ($context["errorMessageTrans"] ?? null))) {
            // line 17
            echo "        ";
            $context["errorMessageKey"] = "http_error.suggestion";
            // line 18
            echo "        ";
            $context["errorMessageTrans"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["errorMessageKey"] ?? null), ["%status_code%" => ($context["status_code"] ?? null)], "exceptions");
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    <div class=\"error-page\">
        <h2 class=\"headline ";
        // line 22
        $this->displayBlock('error_class', $context, $blocks);
        echo "\"> ";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</h2>

        ";
        // line 24
        $this->displayBlock('error_content', $context, $blocks);
        // line 31
        echo "
    </div>
";
    }

    // line 22
    public function block_error_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "text-yellow";
    }

    // line 24
    public function block_error_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        <div class=\"error-content\">
            <h3>";
        // line 26
        $this->displayBlock('error_icon', $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, ($context["errorTitleTrans"] ?? null), "html", null, true);
        echo "</h3>
            <p>";
        // line 27
        echo twig_escape_filter($this->env, ($context["errorMessageTrans"] ?? null), "html", null, true);
        echo "</p>
            <a class=\"btn btn-primary\" href=\"javascript:window.history.back();\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>
        </div>
        ";
    }

    // line 26
    public function block_error_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 26,  150 => 28,  146 => 27,  140 => 26,  137 => 25,  133 => 24,  126 => 22,  120 => 31,  118 => 24,  111 => 22,  107 => 20,  104 => 19,  101 => 18,  98 => 17,  95 => 16,  92 => 15,  90 => 14,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  65 => 6,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "error.html.twig", "/var/www/kimai2/templates/error.html.twig");
    }
}
