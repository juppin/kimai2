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

/* about/license.html.twig */
class __TwigTemplate_cba75118ef77295d628a7faac76f8375ca9c4d85600dc6be6a6cfe78ae297e37 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("about/layout.html.twig", "about/license.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_about($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("about/license.html.twig", "about/license.html.twig", 4, "691119007")->display($context);
        // line 16
        echo "
    ";
        // line 17
        $this->loadTemplate("about/license.html.twig", "about/license.html.twig", 17, "327198342")->display($context);
    }

    public function getTemplateName()
    {
        return "about/license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  53 => 16,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/license.html.twig", "/var/www/kimai2/templates/about/license.html.twig");
    }
}


/* about/license.html.twig */
class __TwigTemplate_cba75118ef77295d628a7faac76f8375ca9c4d85600dc6be6a6cfe78ae297e37___691119007 extends \Twig\Template
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
            'box_footer' => [$this, 'block_box_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "about/license.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("published_under", ["%kimai%" => twig_constant("App\\Constants::SOFTWARE")], "about"), "html", null, true);
    }

    // line 6
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <pre>
                ";
        // line 8
        echo twig_escape_filter($this->env, ($context["license"] ?? null), "html", null, true);
        echo "
            </pre>
        ";
    }

    // line 11
    public function block_box_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            <a class=\"btn btn-default\" href=\"https://choosealicense.com/licenses/mit/\" target=\"_blank\">choosealicense.com</a>
            <a class=\"btn btn-default\" href=\"https://en.wikipedia.org/wiki/MIT_License\" target=\"_blank\">wikipedia.org</a>
        ";
    }

    public function getTemplateName()
    {
        return "about/license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 12,  135 => 11,  128 => 8,  125 => 7,  121 => 6,  114 => 5,  103 => 4,  56 => 17,  53 => 16,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/license.html.twig", "/var/www/kimai2/templates/about/license.html.twig");
    }
}


/* about/license.html.twig */
class __TwigTemplate_cba75118ef77295d628a7faac76f8375ca9c4d85600dc6be6a6cfe78ae297e37___327198342 extends \Twig\Template
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
        // line 17
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "about/license.html.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_box_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("special_thanks", [], "about"), "html", null, true);
    }

    // line 19
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("library_authors", [], "about"), "html", null, true);
        echo "</p>
            <ul>
                <li>AdminLTE: <a href=\"https://adminlte.io\" target=\"_blank\">https://adminlte.io</a></li>
                <li>Bootstrap: <a href=\"https://getbootstrap.com\" target=\"_blank\">https://getbootstrap.com</a></li>
                <li>Bootstrap-Select: <a href=\"https://developer.snapappointments.com/bootstrap-select\" target=\"_blank\">https://developer.snapappointments.com/bootstrap-select</a></li>
                <li>chart.js: <a href=\"https://www.chartjs.org\" target=\"_blank\">https://www.chartjs.org</a></li>
                <li>DateRangePicker: <a href=\"http://www.daterangepicker.com/\" target=\"_blank\">http://www.daterangepicker.com/</a></li>
                <li>Doctrine: <a href=\"https://www.doctrine-project.org\" target=\"_blank\">https://www.doctrine-project.org</a></li>
                <li>FontAwesome: <a href=\"https://fontawesome.com\" target=\"_blank\">https://fontawesome.com</a></li>
                <li>FullCalendar: <a href=\"https://fullcalendar.io\" target=\"_blank\">https://fullcalendar.io</a></li>
                <li>jQuery: <a href=\"https://jquery.com\" target=\"_blank\">https://jquery.com</a></li>
                <li>jQuery UI: <a href=\"https://jqueryui.com\" target=\"_blank\">http://jqueryui.com</a></li>
                <li>MomentJS: <a href=\"https://momentjs.com\" target=\"_blank\">https://momentjs.com</a></li>
                <li>PHPOffice: <a href=\"https://github.com/PHPOffice\" target=\"_blank\">https://github.com/PHPOffice</a></li>
                <li>SweetAlert 2: <a href=\"https://sweetalert2.github.io\" target=\"_blank\">https://sweetalert2.github.io</a></li>
                <li>Symfony: <a href=\"https://symfony.com\" target=\"_blank\">https://symfony.com</a></li>
                <li>…</li>
            </ul>
        ";
    }

    public function getTemplateName()
    {
        return "about/license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 20,  205 => 19,  198 => 18,  187 => 17,  139 => 12,  135 => 11,  128 => 8,  125 => 7,  121 => 6,  114 => 5,  103 => 4,  56 => 17,  53 => 16,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/license.html.twig", "/var/www/kimai2/templates/about/license.html.twig");
    }
}
