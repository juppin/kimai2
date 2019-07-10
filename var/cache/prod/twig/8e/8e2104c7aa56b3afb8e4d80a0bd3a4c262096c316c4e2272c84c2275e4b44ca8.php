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

/* macros/datatables.html.twig */
class __TwigTemplate_459064a297c09ee72345ca2e6fc0b5629421c5d14d11f409cd090699440531fb extends \Twig\Template
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
        echo "
";
        // line 32
        echo "
";
        // line 72
        echo "
";
        // line 99
        echo "
";
        // line 104
        echo "
";
    }

    // line 2
    public function macro_data_table_column_modal($__name__ = null, $__columns__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "columns" => $__columns__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "<div class=\"modal fade\" id=\"modal_";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-column-visibility=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"data_table_modal_label\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
            echo "\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"data_table_modal_label\">";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.columns.title"), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"modal-body\">
                <form name=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_visibility\">
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["title"] => $context["class"]) {
                // line 13
                echo "                        ";
                if (!twig_in_filter("alwaysVisible", $context["class"])) {
                    // line 14
                    echo "                            <div class=\"form-group\">
                                <input type=\"checkbox\" id=\"column_";
                    // line 15
                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                    echo "\"";
                    if ($this->extensions['App\Twig\DatatableExtensions']->isColumnVisible(($context["name"] ?? null), $context["title"])) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
                                <label class=\"control-label\" for=\"column_";
                    // line 16
                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("label." . $context["title"])), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                }
                // line 19
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['title'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                </form>
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.columns.description"), "html", null, true);
            echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary pull-left\" data-type=\"save\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
            echo "</button>
                <button type=\"button\" class=\"btn btn-warning pull-left\" data-type=\"reset\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
            echo "</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
            echo "</button>
            </div>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 33
    public function macro_data_table_column_class($__name__ = null, $__columns__ = null, $__column__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "columns" => $__columns__,
            "column" => $__column__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 34
            ob_start(function () { return ''; });
            // line 35
            echo "    ";
            $context["class"] = "";
            // line 36
            echo "    ";
            $context["always"] = false;
            // line 37
            echo "
    ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), ($context["column"] ?? null), [], "array", true, true, false, 38)) {
                // line 39
                echo "        ";
                $context["classes"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["columns"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["column"] ?? null)] ?? null) : null);
                // line 40
                echo "        ";
                if (twig_in_filter("alwaysVisible", ($context["classes"] ?? null))) {
                    // line 41
                    echo "            ";
                    // line 42
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["classes"] ?? null), " "));
                    foreach ($context['_seq'] as $context["_key"] => $context["tmp"]) {
                        // line 43
                        echo "                ";
                        if (!twig_in_filter("hidden", $context["tmp"])) {
                            // line 44
                            echo "                    ";
                            $context["class"] = ((($context["class"] ?? null) . " ") . $context["tmp"]);
                            // line 45
                            echo "                ";
                        }
                        // line 46
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmp'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "        ";
                } else {
                    // line 48
                    echo "            ";
                    if ( !$this->extensions['App\Twig\DatatableExtensions']->isColumnVisible(($context["name"] ?? null), ($context["column"] ?? null))) {
                        // line 49
                        echo "                ";
                        $context["classes"] = (($context["classes"] ?? null) . " hidden");
                        // line 50
                        echo "            ";
                    } elseif ( !$this->extensions['App\Twig\DatatableExtensions']->isDatatableConfigured(($context["name"] ?? null))) {
                        // line 51
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["classes"] ?? null), " "));
                        foreach ($context['_seq'] as $context["_key"] => $context["tmp"]) {
                            // line 52
                            echo "                    ";
                            if (("hidden" == $context["tmp"])) {
                                // line 53
                                echo "                        ";
                                $context["classes"] = twig_replace_filter(($context["classes"] ?? null), [$context["tmp"] => ""]);
                                // line 54
                                echo "                    ";
                            }
                            // line 55
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmp'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 56
                        echo "            ";
                    } else {
                        // line 57
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["classes"] ?? null), " "));
                        foreach ($context['_seq'] as $context["_key"] => $context["tmp"]) {
                            // line 58
                            echo "                    ";
                            if (twig_in_filter("hidden", $context["tmp"])) {
                                // line 59
                                echo "                        ";
                                $context["classes"] = twig_replace_filter(($context["classes"] ?? null), [$context["tmp"] => ""]);
                                // line 60
                                echo "                    ";
                            }
                            // line 61
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmp'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 62
                        echo "            ";
                    }
                    // line 63
                    echo "            ";
                    $context["class"] = ($context["classes"] ?? null);
                    // line 64
                    echo "        ";
                }
                // line 65
                echo "    ";
            }
            // line 66
            echo "
    ";
            // line 67
            if ( !twig_test_empty(($context["class"] ?? null))) {
                // line 68
                echo "        ";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "
    ";
            }
            $___internal_403e0d9873de4367bf8c47db04a628fdd541cb3581a645e47f2b46f60198e145_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            echo twig_spaceless($___internal_403e0d9873de4367bf8c47db04a628fdd541cb3581a645e47f2b46f60198e145_);

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 73
    public function macro_data_table_header_options($__name__ = null, $__columns__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "columns" => $__columns__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 74
            echo "    ";
            $context["skipStripped"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "skipStripped", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "skipStripped", [], "any", false, false, false, 74), false)) : (false));
            // line 75
            echo "    ";
            $context["reloadEvent"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "reloadEvent", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "reloadEvent", [], "any", false, false, false, 75), "")) : (""));
            // line 76
            echo "    ";
            $context["translationDomain"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "translationDomain", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "translationDomain", [], "any", false, false, false, 76), "messages")) : ("messages"));
            // line 77
            echo "    ";
            // line 78
            echo "    ";
            $context["translationPrefix"] = "label.";
            // line 79
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "translationPrefix", [], "any", true, true, false, 79)) {
                // line 80
                echo "        ";
                $context["translationPrefix"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "translationPrefix", [], "any", false, false, false, 80);
                // line 81
                echo "    ";
            }
            // line 82
            echo "
    ";
            // line 83
            $macros["macro"] = $this;
            // line 84
            echo "    <div class=\"box box-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, false, false, 84), "type", [], "any", false, false, false, 84), "html", null, true);
            echo " data_table\" id=\"datatable_";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
        <div class=\"box-body no-padding\">
            <div class=\"dataTables_wrapper form-inline dt-bootstrap\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <table class=\"table ";
            // line 89
            if ( !($context["skipStripped"] ?? null)) {
                echo "table-striped ";
            }
            echo "table-hover dataTable\" role=\"grid\" data-reload-event=\"";
            echo twig_escape_filter($this->env, ($context["reloadEvent"] ?? null), "html", null, true);
            echo "\">
                            <thead>
                            <tr>";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["title"] => $context["class"]) {
                // line 93
                echo "<th data-field=\"";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "\" class=\"";
                echo twig_call_macro($macros["macro"], "macro_data_table_column_class", [($context["name"] ?? null), ($context["columns"] ?? null), $context["title"]], 93, $context, $this->getSourceContext());
                echo "\">";
                if (( !twig_test_empty($context["title"]) && ($context["title"] != "actions"))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["translationPrefix"] ?? null) . $context["title"]), [], ($context["translationDomain"] ?? null)), "html", null, true);
                }
                echo "</th>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['title'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "</tr>
                            </thead>
                            <tbody>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 100
    public function macro_data_table_header($__name__ = null, $__columns__ = null, $__skipStripped__ = null, $__reloadEvent__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "columns" => $__columns__,
            "skipStripped" => $__skipStripped__,
            "reloadEvent" => $__reloadEvent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 101
            echo "    ";
            $macros["macro"] = $this;
            // line 102
            echo "    ";
            echo twig_call_macro($macros["macro"], "macro_data_table_header_options", [($context["name"] ?? null), ($context["columns"] ?? null), ["skipStripped" => ($context["skipStripped"] ?? null), "reloadEvent" => ($context["reloadEvent"] ?? null)]], 102, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 105
    public function macro_data_table_footer($__entries__ = null, $__route__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entries" => $__entries__,
            "route" => $__route__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 106
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";
            // line 113
            if (( !twig_test_empty(($context["route"] ?? null)) &&  !(null === ($context["entries"] ?? null)))) {
                // line 114
                echo "<div class=\"navigation text-center no-print\">
    ";
                // line 115
                echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta(($context["entries"] ?? null), "twitter_bootstrap3_translated", ["proximity" => 1, "routeName" => ($context["route"] ?? null)]);
                echo "
</div>
";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/datatables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 115,  451 => 114,  449 => 113,  440 => 106,  426 => 105,  414 => 102,  411 => 101,  395 => 100,  383 => 95,  369 => 93,  365 => 92,  356 => 89,  345 => 84,  343 => 83,  340 => 82,  337 => 81,  334 => 80,  331 => 79,  328 => 78,  326 => 77,  323 => 76,  320 => 75,  317 => 74,  302 => 73,  293 => 34,  286 => 68,  284 => 67,  281 => 66,  278 => 65,  275 => 64,  272 => 63,  269 => 62,  263 => 61,  260 => 60,  257 => 59,  254 => 58,  249 => 57,  246 => 56,  240 => 55,  237 => 54,  234 => 53,  231 => 52,  226 => 51,  223 => 50,  220 => 49,  217 => 48,  214 => 47,  208 => 46,  205 => 45,  202 => 44,  199 => 43,  194 => 42,  192 => 41,  189 => 40,  186 => 39,  184 => 38,  181 => 37,  178 => 36,  175 => 35,  173 => 34,  158 => 33,  143 => 26,  139 => 25,  135 => 24,  129 => 21,  126 => 20,  120 => 19,  112 => 16,  102 => 15,  99 => 14,  96 => 13,  92 => 12,  88 => 11,  82 => 8,  78 => 7,  68 => 3,  54 => 2,  49 => 104,  46 => 99,  43 => 72,  40 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "macros/datatables.html.twig", "/var/www/kimai2/templates/macros/datatables.html.twig");
    }
}
