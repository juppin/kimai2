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

/* about/system.html.twig */
class __TwigTemplate_4cfcfa72822cf14fcf43a8d55b3d2065318591f1012464a8237449f0730c76d1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'about_box' => [$this, 'block_about_box'],
            'about' => [$this, 'block_about'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "about/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "about/system.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("about/layout.html.twig", "about/system.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.subtitle", [], "about"), "html", null, true);
    }

    // line 6
    public function block_about_box($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_about($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("about/system.html.twig", "about/system.html.twig", 10, "729341730")->display($context);
        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate("about/system.html.twig", "about/system.html.twig", 22, "95620504")->display($context);
        // line 41
        echo "
    ";
        // line 42
        $this->loadTemplate("about/system.html.twig", "about/system.html.twig", 42, "2092477900")->display($context);
    }

    public function getTemplateName()
    {
        return "about/system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 42,  76 => 41,  74 => 22,  71 => 21,  68 => 10,  64 => 9,  58 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/system.html.twig", "/var/www/kimai2/templates/about/system.html.twig");
    }
}


/* about/system.html.twig */
class __TwigTemplate_4cfcfa72822cf14fcf43a8d55b3d2065318591f1012464a8237449f0730c76d1___729341730 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'box_title' => [$this, 'block_box_title'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "about/system.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Environment";
    }

    // line 12
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            <dl>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dotenv"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 15
            echo "                    <dt>";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</dt>
                    <dd>";
            // line 16
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </dl>
        ";
    }

    public function getTemplateName()
    {
        return "about/system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 18,  159 => 16,  154 => 15,  150 => 14,  147 => 13,  143 => 12,  136 => 11,  125 => 10,  79 => 42,  76 => 41,  74 => 22,  71 => 21,  68 => 10,  64 => 9,  58 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/system.html.twig", "/var/www/kimai2/templates/about/system.html.twig");
    }
}


/* about/system.html.twig */
class __TwigTemplate_4cfcfa72822cf14fcf43a8d55b3d2065318591f1012464a8237449f0730c76d1___95620504 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'box_title' => [$this, 'block_box_title'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "about/system.html.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PHP";
    }

    // line 24
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            <dl>
                <dt>Version</dt><dd>";
        // line 26
        echo twig_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
        echo "</dd>
                <dt>Modules</dt><dd>";
        // line 27
        echo twig_escape_filter($this->env, twig_join_filter(($context["modules"] ?? null), ", "), "html", null, true);
        echo "</dd>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["settings"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 29
            echo "                    <dt>";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</dt>
                    <dd>
                        ";
            // line 31
            if (twig_test_empty($context["value"])) {
                // line 32
                echo "                            <i>unknown</i>
                        ";
            } else {
                // line 34
                echo "                            ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                        ";
            }
            // line 36
            echo "                    </dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </dl>
        ";
    }

    public function getTemplateName()
    {
        return "about/system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 38,  269 => 36,  263 => 34,  259 => 32,  257 => 31,  251 => 29,  247 => 28,  243 => 27,  239 => 26,  236 => 25,  232 => 24,  225 => 23,  214 => 22,  167 => 18,  159 => 16,  154 => 15,  150 => 14,  147 => 13,  143 => 12,  136 => 11,  125 => 10,  79 => 42,  76 => 41,  74 => 22,  71 => 21,  68 => 10,  64 => 9,  58 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/system.html.twig", "/var/www/kimai2/templates/about/system.html.twig");
    }
}


/* about/system.html.twig */
class __TwigTemplate_4cfcfa72822cf14fcf43a8d55b3d2065318591f1012464a8237449f0730c76d1___2092477900 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'box_title' => [$this, 'block_box_title'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 42
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "about/system.html.twig", 42);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Server";
    }

    // line 44
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "            <dl>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["info"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 47
            echo "                    <dt>";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</dt>
                    <dd>";
            // line 48
            echo $context["value"];
            echo "</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </dl>
        ";
    }

    public function getTemplateName()
    {
        return "about/system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 50,  357 => 48,  352 => 47,  348 => 46,  345 => 45,  341 => 44,  334 => 43,  323 => 42,  276 => 38,  269 => 36,  263 => 34,  259 => 32,  257 => 31,  251 => 29,  247 => 28,  243 => 27,  239 => 26,  236 => 25,  232 => 24,  225 => 23,  214 => 22,  167 => 18,  159 => 16,  154 => 15,  150 => 14,  147 => 13,  143 => 12,  136 => 11,  125 => 10,  79 => 42,  76 => 41,  74 => 22,  71 => 21,  68 => 10,  64 => 9,  58 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/system.html.twig", "/var/www/kimai2/templates/about/system.html.twig");
    }
}
