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

/* @AdminLTE/Sidebar/menu.html.twig */
class __TwigTemplate_002544516e38b1ebf4ba38467d446d93a6376a87993e049ffc0481a6831a4128 extends \Twig\Template
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
        echo "<!-- sidebar menu: : style can be found in sidebar.less -->
";
        // line 2
        $macros["__internal_f99428bb6ad979fd17d33b43b7cbbb5f971c224e6c0dc0c25ec094bdebf364e5"] = $this->macros["__internal_f99428bb6ad979fd17d33b43b7cbbb5f971c224e6c0dc0c25ec094bdebf364e5"] = $this->loadTemplate("@AdminLTE/Macros/menu.html.twig", "@AdminLTE/Sidebar/menu.html.twig", 2)->unwrap();
        // line 3
        echo "<ul class=\"sidebar-menu\" data-widget=\"tree\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        ";
            echo twig_call_macro($macros["__internal_f99428bb6ad979fd17d33b43b7cbbb5f971c224e6c0dc0c25ec094bdebf364e5"], "macro_menu_item", [$context["item"]], 5, $context, $this->getSourceContext());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Sidebar/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Sidebar/menu.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Sidebar/menu.html.twig");
    }
}
