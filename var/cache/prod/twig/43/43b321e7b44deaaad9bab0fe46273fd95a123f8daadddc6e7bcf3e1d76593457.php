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

/* @AdminLTE/layout/form-theme-base.html.twig */
class __TwigTemplate_f87e9deb5c2c9d0c60ec95384cd4a96e0187eda8ae25f228fdd89f21a2d2e3f4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_errors' => [$this, 'block_form_errors'],
            '__internal_2056faa727b26b181d6d0c189b6728fe5347040720967be4acd47e5388c12863' => [$this, 'block___internal_2056faa727b26b181d6d0c189b6728fe5347040720967be4acd47e5388c12863'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            '__internal_36333a22e4e7e920273129c712d6852144a3875ef1421e68fa4682c284e10df6' => [$this, 'block___internal_36333a22e4e7e920273129c712d6852144a3875ef1421e68fa4682c284e10df6'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            '__internal_c6a9acc740d963da94cf93f10beb5c7222c202b6e186d887b57aefc4aac62da2' => [$this, 'block___internal_c6a9acc740d963da94cf93f10beb5c7222c202b6e186d887b57aefc4aac62da2'],
            'radio_widget' => [$this, 'block_radio_widget'],
            '__internal_efc5e2587793fc4d943dcb4e997844c91eeb40d2a2a4a4c0f75e3bd047007950' => [$this, 'block___internal_efc5e2587793fc4d943dcb4e997844c91eeb40d2a2a4a4c0f75e3bd047007950'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'url_widget' => [$this, 'block_url_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "@AdminLTE/layout/form-theme-base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo twig_spaceless(        $this->renderBlock("__internal_2056faa727b26b181d6d0c189b6728fe5347040720967be4acd47e5388c12863", $context, $blocks));
    }

    public function block___internal_2056faa727b26b181d6d0c189b6728fe5347040720967be4acd47e5388c12863($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 11
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 13
                echo "                    <li class=\"text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 13), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            </ul>
        ";
        }
        // line 17
        echo "    ";
    }

    // line 20
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $context["types"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 21), "block_prefixes", [], "any", false, false, false, 21);
        // line 22
        echo "     ";
        $context["_class"] = "";
        // line 23
        echo "    ";
        if (twig_in_filter("checkbox", ($context["types"] ?? null))) {
            // line 24
            echo "        ";
            $context["_class"] = " checkbox";
            // line 25
            echo "    ";
        } elseif (twig_in_filter("radio", ($context["types"] ?? null))) {
            // line 26
            echo "        ";
            $context["_class"] = " radio";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        // line 31
        echo "
    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 32)) {
            // line 33
            echo "        ";
            $context["class"] = (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 33) . ($context["_class"] ?? null));
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        ";
            $context["class"] = ($context["_class"] ?? null);
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        if ((!twig_in_filter("checkbox", ($context["types"] ?? null)) && !twig_in_filter("form-control", ($context["class"] ?? null)))) {
            // line 38
            echo "        ";
            $context["class"] = (($context["class"] ?? null) . " form-control");
            // line 39
            echo "    ";
        }
        // line 40
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($context["class"] ?? null)]);
        // line 41
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
    }

    // line 44
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        echo twig_spaceless(        $this->renderBlock("__internal_36333a22e4e7e920273129c712d6852144a3875ef1421e68fa4682c284e10df6", $context, $blocks));
    }

    public function block___internal_36333a22e4e7e920273129c712d6852144a3875ef1421e68fa4682c284e10df6($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
    ";
    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["att"] => $context["val"]) {
            // line 56
            echo "        ";
            if (($context["att"] == "class")) {
                // line 57
                echo "            ";
                $context["att"] = ($context["val"] . " form-control");
                // line 58
                echo "        ";
            }
            // line 59
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['att'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
    ";
        // line 61
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 64
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    <div class=\"checkbox\">
        ";
        // line 66
        echo twig_spaceless(        $this->renderBlock("__internal_c6a9acc740d963da94cf93f10beb5c7222c202b6e186d887b57aefc4aac62da2", $context, $blocks));
        // line 84
        echo "    </div>
";
    }

    // line 66
    public function block___internal_c6a9acc740d963da94cf93f10beb5c7222c202b6e186d887b57aefc4aac62da2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "            ";
        if ( !($context["compound"] ?? null)) {
            // line 68
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            // line 69
            echo "            ";
        }
        // line 70
        echo "            ";
        if (($context["required"] ?? null)) {
            // line 71
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 71), "")) : ("")) . " required"))]);
            // line 72
            echo "            ";
        }
        // line 73
        echo "            ";
        if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
            // line 74
            echo "                ";
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            // line 75
            echo "            ";
        }
        // line 76
        echo "
            <label";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            <input type=\"checkbox\" ";
        // line 78
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 79
        if ( !(($context["label"] ?? null) === false)) {
            // line 80
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
            echo "
            ";
        }
        // line 82
        echo "            </label>
        ";
    }

    // line 87
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "    <div class=\"radio\">
        ";
        // line 89
        echo twig_spaceless(        $this->renderBlock("__internal_efc5e2587793fc4d943dcb4e997844c91eeb40d2a2a4a4c0f75e3bd047007950", $context, $blocks));
        // line 106
        echo "    </div>
";
    }

    // line 89
    public function block___internal_efc5e2587793fc4d943dcb4e997844c91eeb40d2a2a4a4c0f75e3bd047007950($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "            ";
        if ( !($context["compound"] ?? null)) {
            // line 91
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            // line 92
            echo "            ";
        }
        // line 93
        echo "            ";
        if (($context["required"] ?? null)) {
            // line 94
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 94)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 94), "")) : ("")) . " required"))]);
            // line 95
            echo "            ";
        }
        // line 96
        echo "            ";
        if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
            // line 97
            echo "                ";
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            // line 98
            echo "            ";
        }
        // line 99
        echo "            <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            <input type=\"radio\" ";
        // line 100
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 101
        if ( !(($context["label"] ?? null) === false)) {
            // line 102
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
            echo "
            ";
        }
        // line 104
        echo "            </label>
        ";
    }

    // line 109
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 111
            echo "        <div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"far fa-calendar-alt\"></i>
            </div>

            ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 116)) {
                // line 117
                echo "                ";
                $context["class"] = (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 117) . " timepicker");
                // line 118
                echo "            ";
            } else {
                // line 119
                echo "                ";
                $context["class"] = " timepicker";
                // line 120
                echo "            ";
            }
            // line 121
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($context["class"] ?? null), "data-datepickerenable" => "on"]);
            // line 122
            echo "
            ";
            // line 123
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 126
            echo "        ";
            $context["date_pattern"] = (("<div class=\"row\">" . ($context["date_pattern"] ?? null)) . "</div>");
            // line 127
            echo "        ";
            echo twig_replace_filter(twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" => "<div class=\"col-xs-4\">{{ year }}</div>", "{{ month }}" => "<div class=\"col-xs-4\">{{ month }}</div>", "{{ day }}" => "<div class=\"col-xs-4\">{{ day }}</div>"]), ["{{ year }}" =>             // line 132
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 132), 'widget'), "{{ month }}" =>             // line 133
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 133), 'widget'), "{{ day }}" =>             // line 134
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 134), 'widget')]);
            // line 135
            echo "

    ";
        }
    }

    // line 140
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 142
            echo "        <div class=\"bootstrap-timepicker\">
            <div class=\"input-group\">
                <div class=\"input-group-addon add-on\">
                    <i class=\"far fa-clock\"></i>
                </div>
                ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 147)) {
                // line 148
                echo "                    ";
                $context["class"] = (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 148) . " timepicker");
                // line 149
                echo "                ";
            } else {
                // line 150
                echo "                    ";
                $context["class"] = " timepicker";
                // line 151
                echo "                ";
            }
            // line 152
            echo "                ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($context["class"] ?? null), "data-timepicker" => "on"]);
            // line 153
            echo "                ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 157
            echo "        ";
            $this->displayParentBlock("time_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 161
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 163
            echo "<div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"fa fa-calendar-alt\"></i>
            </div>";
            // line 167
            $this->displayParentBlock("datetime_widget", $context, $blocks);
            // line 168
            echo "</div>";
        } else {
            // line 170
            $this->displayParentBlock("datetime_widget", $context, $blocks);
        }
    }

    // line 174
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            ";
        // line 177
        $context["icon"] = "phone";
        // line 178
        echo "            ";
        if (twig_in_filter("icon", twig_get_array_keys_filter(($context["attr"] ?? null)))) {
            // line 179
            echo "                ";
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "icon", [], "any", false, false, false, 179);
            // line 180
            echo "            ";
        }
        // line 181
        echo "            <i class=\"fas fa-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></i>
        </div>";
        // line 183
        $this->displayParentBlock("tel_widget", $context, $blocks);
        // line 184
        echo "</div>";
    }

    // line 187
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "<div class=\"input-group\">
        <div class=\"input-group-addon\">
            <i class=\"fas fa-home\"></i>
        </div>";
        // line 192
        $this->displayParentBlock("url_widget", $context, $blocks);
        // line 193
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/form-theme-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 193,  567 => 192,  562 => 188,  558 => 187,  554 => 184,  552 => 183,  547 => 181,  544 => 180,  541 => 179,  538 => 178,  536 => 177,  532 => 175,  528 => 174,  523 => 170,  520 => 168,  518 => 167,  513 => 163,  511 => 162,  507 => 161,  499 => 157,  491 => 153,  488 => 152,  485 => 151,  482 => 150,  479 => 149,  476 => 148,  474 => 147,  467 => 142,  464 => 141,  460 => 140,  453 => 135,  451 => 134,  450 => 133,  449 => 132,  447 => 127,  444 => 126,  438 => 123,  435 => 122,  432 => 121,  429 => 120,  426 => 119,  423 => 118,  420 => 117,  418 => 116,  411 => 111,  408 => 110,  404 => 109,  399 => 104,  393 => 102,  391 => 101,  379 => 100,  363 => 99,  360 => 98,  357 => 97,  354 => 96,  351 => 95,  348 => 94,  345 => 93,  342 => 92,  339 => 91,  336 => 90,  332 => 89,  327 => 106,  325 => 89,  322 => 88,  318 => 87,  313 => 82,  307 => 80,  305 => 79,  293 => 78,  278 => 77,  275 => 76,  272 => 75,  269 => 74,  266 => 73,  263 => 72,  260 => 71,  257 => 70,  254 => 69,  251 => 68,  248 => 67,  244 => 66,  239 => 84,  237 => 66,  234 => 65,  230 => 64,  224 => 61,  221 => 60,  215 => 59,  212 => 58,  209 => 57,  206 => 56,  201 => 55,  197 => 54,  192 => 50,  183 => 48,  179 => 47,  174 => 46,  166 => 45,  162 => 44,  155 => 41,  152 => 40,  149 => 39,  146 => 38,  143 => 37,  140 => 36,  137 => 35,  134 => 34,  131 => 33,  129 => 32,  126 => 31,  124 => 28,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  99 => 20,  95 => 17,  91 => 15,  82 => 13,  78 => 12,  75 => 11,  72 => 10,  64 => 9,  60 => 8,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/form-theme-base.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/form-theme-base.html.twig");
    }
}
