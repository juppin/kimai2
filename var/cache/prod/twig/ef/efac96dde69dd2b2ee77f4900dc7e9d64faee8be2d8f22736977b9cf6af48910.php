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

/* embeds/modal.html.twig */
class __TwigTemplate_c074b2b0902d56519f191f551561998efa448e5b3cb5002a69c53426a1549ece extends \Twig\Template
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
        echo "<div class=\"modal";
        if (        $this->hasBlock("modal_class", $context, $blocks)) {
            echo " ";
            $this->displayBlock("modal_class", $context, $blocks);
        }
        echo "\" id=\"";
        $this->displayBlock("modal_id", $context, $blocks);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        $this->displayBlock("modal_id", $context, $blocks);
        echo "_label\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 4
        if (        $this->hasBlock("modal_before", $context, $blocks)) {
            $this->displayBlock("modal_before", $context, $blocks);
        }
        // line 5
        echo "            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"";
        // line 7
        $this->displayBlock("modal_id", $context, $blocks);
        echo "_label\">";
        $this->displayBlock("modal_title", $context, $blocks);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 10
        $this->displayBlock("modal_body", $context, $blocks);
        echo "
            </div>
            <div class=\"modal-footer\">
                ";
        // line 13
        $this->displayBlock("modal_footer", $context, $blocks);
        echo "
            </div>
            ";
        // line 15
        if (        $this->hasBlock("modal_end", $context, $blocks)) {
            $this->displayBlock("modal_end", $context, $blocks);
        }
        // line 16
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "embeds/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  81 => 15,  76 => 13,  70 => 10,  62 => 7,  58 => 6,  55 => 5,  51 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "embeds/modal.html.twig", "/var/www/kimai2/templates/embeds/modal.html.twig");
    }
}
