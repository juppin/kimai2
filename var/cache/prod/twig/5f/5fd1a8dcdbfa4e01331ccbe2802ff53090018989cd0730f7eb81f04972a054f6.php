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

/* macros/progressbar.html.twig */
class __TwigTemplate_9bfbaf0ccd872bdfa8e1baf9e1252ab7e4a72330a7bec99d9c26bfe4f02b9391 extends \Twig\Template
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
    }

    // line 1
    public function macro_progressbar($__max__ = null, $__current__ = null, $__title__ = null, $__subTitle__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "max" => $__max__,
            "current" => $__current__,
            "title" => $__title__,
            "subTitle" => $__subTitle__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $context["percentReached"] = 0;
            // line 3
            echo "    ";
            if ((($context["max"] ?? null) > 0)) {
                // line 4
                echo "        ";
                $context["percentReached"] = (($context["current"] ?? null) / (($context["max"] ?? null) / 100));
                // line 5
                echo "    ";
            }
            // line 6
            echo "    ";
            $context["class"] = "progress-bar-info";
            // line 7
            echo "    ";
            $context["width"] = twig_number_format_filter($this->env, ($context["percentReached"] ?? null), 1, ".", "");
            // line 8
            echo "
    ";
            // line 9
            if ((($context["percentReached"] ?? null) > 90)) {
                // line 10
                echo "        ";
                $context["class"] = "progress-bar-danger";
                // line 11
                echo "    ";
            } elseif ((($context["percentReached"] ?? null) > 70)) {
                // line 12
                echo "        ";
                $context["class"] = "progress-bar-warning";
                // line 13
                echo "    ";
            } elseif ((($context["percentReached"] ?? null) > 50)) {
                // line 14
                echo "        ";
                $context["class"] = "progress-bar-success";
                // line 15
                echo "    ";
            } elseif ((($context["percentReached"] ?? null) > 30)) {
                // line 16
                echo "        ";
                $context["class"] = "progress-bar-primary";
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            if ((($context["width"] ?? null) > 100)) {
                // line 20
                echo "        ";
                $context["width"] = 100;
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    <div class=\"progress-group\">
        <span class=\"progress-text\">";
            // line 24
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            if ((($context["percentReached"] ?? null) > 0)) {
                echo " &ndash; ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["percentReached"] ?? null), 2), "html", null, true);
                echo "%";
            }
            echo "</span>
        <span class=\"progress-number\">";
            // line 25
            echo twig_escape_filter($this->env, ($context["subTitle"] ?? null), "html", null, true);
            echo "</span>

        <div class=\"progress\">
            <div class=\"progress-bar ";
            // line 28
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" role=\"progressbar\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
            echo "%\"></div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/progressbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 28,  126 => 25,  117 => 24,  113 => 22,  110 => 21,  107 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 16,  93 => 15,  90 => 14,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "macros/progressbar.html.twig", "/var/www/kimai2/templates/macros/progressbar.html.twig");
    }
}
