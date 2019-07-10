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

/* @AdminLTE/Widgets/infobox-widget.html.twig */
class __TwigTemplate_79535ad84effca7e6b3a4bf544a618dd196e4d76035c6f4baf34752033eb8f86 extends \Twig\Template
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
        if (        $this->hasBlock("box_before", $context, $blocks)) {
            $this->displayBlock("box_before", $context, $blocks);
        }
        // line 2
        echo "<div class=\"info-box";
        if ((isset($context["solid"]) || array_key_exists("solid", $context))) {
            echo " bg-";
            echo twig_escape_filter($this->env, ($context["solid"] ?? null), "html", null, true);
        }
        echo "\">
    <span class=\"info-box-icon";
        // line 3
        if ((isset($context["color"]) || array_key_exists("color", $context))) {
            echo " bg-";
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
        }
        echo "\"><i class=\"";
        echo twig_escape_filter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter(($context["icon"] ?? null), "info-circle")) : ("info-circle")), "html", null, true);
        echo "\"></i></span>
    <div class=\"info-box-content\">
        <span class=\"info-box-text\">
            ";
        // line 6
        $this->displayBlock("box_text", $context, $blocks);
        echo "
        </span>
        <span class=\"info-box-number\">
            ";
        // line 9
        if (        $this->hasBlock("box_number", $context, $blocks)) {
            // line 10
            echo "                ";
            $this->displayBlock("box_number", $context, $blocks);
            echo "
            ";
        }
        // line 12
        echo "        </span>
        <!-- The progress section is optional -->
        ";
        // line 14
        if ((isset($context["progress"]) || array_key_exists("progress", $context))) {
            // line 15
            echo "        <div class=\"progress\">
            <div class=\"progress-bar\" style=\"width: ";
            // line 16
            echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
            echo "%\"></div>
        </div>
        ";
        }
        // line 19
        echo "        ";
        if ((twig_length_filter($this->env, (((isset($context["progress"]) || array_key_exists("progress", $context))) ? (_twig_default_filter(($context["progress"] ?? null),         $this->renderBlock("progress_description", $context, $blocks))) : (        $this->renderBlock("progress_description", $context, $blocks)))) > 0)) {
            // line 20
            echo "    <span class=\"progress-description\">
      ";
            // line 21
            $this->displayBlock("progress_description", $context, $blocks);
            echo "
    </span>
        ";
        }
        // line 24
        echo "    </div><!-- /.info-box-content -->
</div><!-- /.info-box -->
";
        // line 26
        if (        $this->hasBlock("box_after", $context, $blocks)) {
            $this->displayBlock("box_after", $context, $blocks);
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Widgets/infobox-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  101 => 24,  95 => 21,  92 => 20,  89 => 19,  83 => 16,  80 => 15,  78 => 14,  74 => 12,  68 => 10,  66 => 9,  60 => 6,  49 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Widgets/infobox-widget.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Widgets/infobox-widget.html.twig");
    }
}
