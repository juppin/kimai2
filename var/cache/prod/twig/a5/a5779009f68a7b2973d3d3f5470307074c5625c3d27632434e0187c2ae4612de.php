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

/* @AdminLTE/Navbar/user.html.twig */
class __TwigTemplate_5fe1e5ae62f8d88835de68e394ee68c66cbcd962399db889e29174f11ac1bb96 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'member_since' => [$this, 'block_member_since'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Navbar/user.html.twig", 4)->unwrap();
        // line 5
        echo "<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 7
        echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 7), "user-image"], 7, $context, $this->getSourceContext());
        echo "
        <span class=\"hidden-xs\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            ";
        // line 13
        echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
            <p>
                ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "
                ";
        // line 16
        $this->displayBlock('member_since', $context, $blocks);
        // line 19
        echo "            </p>
        </li>
        ";
        // line 21
        if (($context["links"] ?? null)) {
            // line 22
            echo "            <!-- Menu Body -->
            <li class=\"user-body\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 25
                echo "                    <div class=\"col-xs-4 text-center\">
                        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["link"], "path", [], "any", false, false, false, 26)), twig_get_attribute($this->env, $this->source, $context["link"], "parameters", [], "any", false, false, false, 26)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </li>
        ";
        }
        // line 31
        echo "        ";
        if ((($context["showLogoutLink"] ?? null) || ($context["showProfileLink"] ?? null))) {
            // line 32
            echo "            <!-- Menu Footer-->
            <li class=\"user-footer\">
                ";
            // line 34
            if (($context["showProfileLink"] ?? null)) {
                // line 35
                echo "                    <div class=\"pull-left\">
                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_profile"), ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "identifier", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\"
                           class=\"btn btn-default btn-flat\">";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile", [], "AdminLTEBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 40
            echo "                ";
            if (($context["showLogoutLink"] ?? null)) {
                // line 41
                echo "                    <div class=\"pull-right\">
                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
                echo "\"
                           class=\"btn btn-default btn-flat\">";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "AdminLTEBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 46
            echo "            </li>
        ";
        }
        // line 48
        echo "    </ul>
</li>
";
    }

    // line 16
    public function block_member_since($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                <small>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Member since %date%", ["%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "memberSince", [], "any", false, false, false, 17), "m.Y")], "AdminLTEBundle"), "html", null, true);
        echo "</small>
                ";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 17,  149 => 16,  143 => 48,  139 => 46,  133 => 43,  129 => 42,  126 => 41,  123 => 40,  117 => 37,  113 => 36,  110 => 35,  108 => 34,  104 => 32,  101 => 31,  97 => 29,  86 => 26,  83 => 25,  79 => 24,  75 => 22,  73 => 21,  69 => 19,  67 => 16,  61 => 15,  56 => 13,  48 => 8,  44 => 7,  40 => 5,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/Navbar/user.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/user.html.twig");
    }
}
