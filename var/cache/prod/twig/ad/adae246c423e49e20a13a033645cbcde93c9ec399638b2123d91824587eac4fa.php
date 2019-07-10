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

/* about/layout.html.twig */
class __TwigTemplate_1b6bcd4df830627911101100eff95d6dff58025348c290692c6b8a996dca9d97 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'about_box' => [$this, 'block_about_box'],
            'about' => [$this, 'block_about'],
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
        // line 2
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "about/layout.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "about/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.title", [], "about"), "html", null, true);
    }

    // line 5
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_about", ["index"], 5, $context, $this->getSourceContext());
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-3\">

            <div class=\"box box-";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 11), "type", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
                <div class=\"box-body\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\" class=\"profile-user-img img-responsive img-circle\" alt=\"Kimai logo\" style=\"border: 0;\">
                    <h3 class=\"profile-username text-center\">";
        // line 14
        echo twig_escape_filter($this->env, twig_constant("App\\Constants::SOFTWARE"), "html", null, true);
        echo "</h3>

                    <p class=\"text-muted text-center\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, twig_constant("App\\Constants::VERSION"), "html", null, true);
        echo "
                        ";
        // line 18
        echo twig_escape_filter($this->env, twig_constant("App\\Constants::STATUS"), "html", null, true);
        echo "
                        (";
        // line 19
        echo twig_escape_filter($this->env, twig_constant("App\\Constants::NAME"), "html", null, true);
        echo ")
                    </p>

                    <hr>

                    <ul class=\"nav nav-stacked\">
                        <li>
                            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extensions']->documentationLink(""), "html", null, true);
        echo "\" target=\"_blank\">
                                <i class=\"menu-icon fas fa-question bg-navy\"></i>
                                ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help", [], "about"), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_constant("App\\Constants::GITHUB"), "html", null, true);
        echo "\" target=\"_blank\">
                                <i class=\"menu-icon fab fa-github bg-gray\"></i>
                                ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("support", [], "about"), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_constant("App\\Constants::HOMEPAGE"), "html", null, true);
        echo "\" target=\"_blank\">
                                <i class=\"menu-icon fa fa-home bg-green\"></i>
                                ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("website", [], "about"), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_constant("App\\Constants::HOMEPAGE"), "html", null, true);
        echo "/donate/\" target=\"_blank\">
                                <i class=\"menu-icon fab fa-paypal bg-blue\"></i>
                                ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("donate", [], "about"), "html", null, true);
        echo "
                            </a>
                        </li>
                    </ul>

                    <hr>

                    <p class=\"text-center\">
                        Made with ♥ by <a href=\"https://www.kevinpapst.de/\">Kevin Papst</a> and <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_constant("App\\Constants::GITHUB"), "html", null, true);
        echo "graphs/contributors\" target=\"_blank\">great contributors</a>.
                    </p>
                </div>
            </div>

            ";
        // line 59
        $this->displayBlock('about_box', $context, $blocks);
        // line 60
        echo "
        </div>
        <div class=\"col-md-9\">
            ";
        // line 63
        $this->displayBlock('about', $context, $blocks);
        // line 64
        echo "        </div>
    </div>
";
    }

    // line 59
    public function block_about_box($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 63
    public function block_about($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "about/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 63,  184 => 59,  178 => 64,  176 => 63,  171 => 60,  169 => 59,  161 => 54,  150 => 46,  145 => 44,  138 => 40,  133 => 38,  126 => 34,  121 => 32,  114 => 28,  109 => 26,  99 => 19,  95 => 18,  91 => 17,  85 => 14,  81 => 13,  76 => 11,  71 => 8,  67 => 7,  60 => 5,  53 => 4,  48 => 1,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/layout.html.twig", "/var/www/kimai2/templates/about/layout.html.twig");
    }
}
