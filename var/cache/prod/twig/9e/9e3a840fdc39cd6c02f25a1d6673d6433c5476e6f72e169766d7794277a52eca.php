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

/* @AdminLTE/layout/default-layout-avanzu.html.twig */
class __TwigTemplate_95d686385c489e9a1b7f0c0f8a9e6794416414c4d3006d3ee86675a6ed6c2696 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'html_start' => [$this, 'block_html_start'],
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body_start' => [$this, 'block_body_start'],
            'after_body_start' => [$this, 'block_after_body_start'],
            'logo_path' => [$this, 'block_logo_path'],
            'logo_mini' => [$this, 'block_logo_mini'],
            'logo_large' => [$this, 'block_logo_large'],
            'navbar_toggle' => [$this, 'block_navbar_toggle'],
            'navbar_messages' => [$this, 'block_navbar_messages'],
            'navbar_notifications' => [$this, 'block_navbar_notifications'],
            'navbar_tasks' => [$this, 'block_navbar_tasks'],
            'navbar_user' => [$this, 'block_navbar_user'],
            'navbar_control_sidebar_toggle' => [$this, 'block_navbar_control_sidebar_toggle'],
            'sidebar_user' => [$this, 'block_sidebar_user'],
            'sidebar_search' => [$this, 'block_sidebar_search'],
            'sidebar_nav' => [$this, 'block_sidebar_nav'],
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_content_before' => [$this, 'block_page_content_before'],
            'page_content_class' => [$this, 'block_page_content_class'],
            'page_content_start' => [$this, 'block_page_content_start'],
            'page_content' => [$this, 'block_page_content'],
            'page_content_end' => [$this, 'block_page_content_end'],
            'page_content_after' => [$this, 'block_page_content_after'],
            'footer' => [$this, 'block_footer'],
            'control_sidebar' => [$this, 'block_control_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "@AdminLTE/layout/default-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/layout/default-layout.html.twig", "@AdminLTE/layout/default-layout-avanzu.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_html_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_html_start", $context, $blocks)) {
            $this->displayBlock("avanzu_html_start", $context, $blocks);
        } else {
            $this->displayParentBlock("html_start", $context, $blocks);
        }
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_document_title", $context, $blocks)) {
            $this->displayBlock("avanzu_document_title", $context, $blocks);
        } else {
            $this->displayParentBlock("title", $context, $blocks);
        }
    }

    // line 14
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_head", $context, $blocks)) {
            $this->displayBlock("avanzu_head", $context, $blocks);
        } else {
            $this->displayParentBlock("head", $context, $blocks);
        }
    }

    // line 15
    public function block_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_body_start", $context, $blocks)) {
            $this->displayBlock("avanzu_body_start", $context, $blocks);
        } else {
            $this->displayParentBlock("body_start", $context, $blocks);
        }
    }

    // line 16
    public function block_after_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_after_body_start", $context, $blocks)) {
            $this->displayBlock("avanzu_after_body_start", $context, $blocks);
        } else {
            $this->displayParentBlock("after_body_start", $context, $blocks);
        }
    }

    // line 17
    public function block_logo_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_logo_path", $context, $blocks)) {
            $this->displayBlock("avanzu_logo_path", $context, $blocks);
        } else {
            $this->displayParentBlock("logo_path", $context, $blocks);
        }
    }

    // line 18
    public function block_logo_mini($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_logo_mini", $context, $blocks)) {
            $this->displayBlock("avanzu_logo_mini", $context, $blocks);
        } else {
            $this->displayParentBlock("logo_mini", $context, $blocks);
        }
    }

    // line 19
    public function block_logo_large($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_logo_lg", $context, $blocks)) {
            $this->displayBlock("avanzu_logo_lg", $context, $blocks);
        } else {
            $this->displayParentBlock("logo_large", $context, $blocks);
        }
    }

    // line 20
    public function block_navbar_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_navbar_toggle", $context, $blocks)) {
            $this->displayBlock("avanzu_navbar_toggle", $context, $blocks);
        } else {
            $this->displayParentBlock("navbar_toggle", $context, $blocks);
        }
    }

    // line 21
    public function block_navbar_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_navbar_messages", $context, $blocks)) {
            $this->displayBlock("avanzu_navbar_messages", $context, $blocks);
        } else {
            $this->displayParentBlock("navbar_messages", $context, $blocks);
        }
    }

    // line 22
    public function block_navbar_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_navbar_notifications", $context, $blocks)) {
            $this->displayBlock("avanzu_navbar_notifications", $context, $blocks);
        } else {
            $this->displayParentBlock("navbar_notifications", $context, $blocks);
        }
    }

    // line 23
    public function block_navbar_tasks($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_navbar_tasks", $context, $blocks)) {
            $this->displayBlock("avanzu_navbar_tasks", $context, $blocks);
        } else {
            $this->displayParentBlock("navbar_tasks", $context, $blocks);
        }
    }

    // line 24
    public function block_navbar_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_navbar_user", $context, $blocks)) {
            $this->displayBlock("avanzu_navbar_user", $context, $blocks);
        } else {
            $this->displayParentBlock("navbar_user", $context, $blocks);
        }
    }

    // line 25
    public function block_navbar_control_sidebar_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_navbar_control_sidebar_toggle", $context, $blocks)) {
            $this->displayBlock("avanzu_navbar_control_sidebar_toggle", $context, $blocks);
        } else {
            $this->displayParentBlock("navbar_control_sidebar_toggle", $context, $blocks);
        }
    }

    // line 26
    public function block_sidebar_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_sidebar_user", $context, $blocks)) {
            $this->displayBlock("avanzu_sidebar_user", $context, $blocks);
        } else {
            $this->displayParentBlock("sidebar_user", $context, $blocks);
        }
    }

    // line 27
    public function block_sidebar_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_sidebar_search", $context, $blocks)) {
            $this->displayBlock("avanzu_sidebar_search", $context, $blocks);
        } else {
            $this->displayParentBlock("sidebar_search", $context, $blocks);
        }
    }

    // line 28
    public function block_sidebar_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_sidebar_nav", $context, $blocks)) {
            $this->displayBlock("avanzu_sidebar_nav", $context, $blocks);
        } else {
            $this->displayParentBlock("sidebar_nav", $context, $blocks);
        }
    }

    // line 29
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_page_title", $context, $blocks)) {
            $this->displayBlock("avanzu_page_title", $context, $blocks);
        } else {
            $this->displayParentBlock("page_title", $context, $blocks);
        }
    }

    // line 30
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_page_subtitle", $context, $blocks)) {
            $this->displayBlock("avanzu_page_subtitle", $context, $blocks);
        } else {
            $this->displayParentBlock("page_subtitle", $context, $blocks);
        }
    }

    // line 31
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_breadcrumb", $context, $blocks)) {
            $this->displayBlock("avanzu_breadcrumb", $context, $blocks);
        } else {
            $this->displayParentBlock("breadcrumb", $context, $blocks);
        }
    }

    // line 32
    public function block_page_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_page_content_before", $context, $blocks)) {
            $this->displayBlock("avanzu_page_content_before", $context, $blocks);
        } else {
            $this->displayParentBlock("page_content_before", $context, $blocks);
        }
    }

    // line 33
    public function block_page_content_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_page_content_class", $context, $blocks)) {
            $this->displayBlock("avanzu_page_content_class", $context, $blocks);
        } else {
            $this->displayParentBlock("page_content_class", $context, $blocks);
        }
    }

    // line 34
    public function block_page_content_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_page_content_start", $context, $blocks)) {
            $this->displayBlock("avanzu_page_content_start", $context, $blocks);
        } else {
            $this->displayParentBlock("page_content_start", $context, $blocks);
        }
    }

    // line 35
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_page_content", $context, $blocks)) {
            $this->displayBlock("avanzu_page_content", $context, $blocks);
        } else {
            $this->displayParentBlock("page_content", $context, $blocks);
        }
    }

    // line 36
    public function block_page_content_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_page_content_end", $context, $blocks)) {
            $this->displayBlock("avanzu_page_content_end", $context, $blocks);
        } else {
            $this->displayParentBlock("page_content_end", $context, $blocks);
        }
    }

    // line 37
    public function block_page_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_page_content_after", $context, $blocks)) {
            $this->displayBlock("avanzu_page_content_after", $context, $blocks);
        } else {
            $this->displayParentBlock("page_content_after", $context, $blocks);
        }
    }

    // line 38
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_footer", $context, $blocks)) {
            $this->displayBlock("avanzu_footer", $context, $blocks);
        } else {
            $this->displayParentBlock("footer", $context, $blocks);
        }
    }

    // line 39
    public function block_control_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (        $this->hasBlock("avanzu_control_sidebar", $context, $blocks)) {
            $this->displayBlock("avanzu_control_sidebar", $context, $blocks);
        } else {
            $this->displayParentBlock("control_sidebar", $context, $blocks);
        }
    }

    public function getTemplateName()
    {
        return "@AdminLTE/layout/default-layout-avanzu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 39,  359 => 38,  348 => 37,  337 => 36,  326 => 35,  315 => 34,  304 => 33,  293 => 32,  282 => 31,  271 => 30,  260 => 29,  249 => 28,  238 => 27,  227 => 26,  216 => 25,  205 => 24,  194 => 23,  183 => 22,  172 => 21,  161 => 20,  150 => 19,  139 => 18,  128 => 17,  117 => 16,  106 => 15,  95 => 14,  84 => 13,  73 => 12,  62 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdminLTE/layout/default-layout-avanzu.html.twig", "/var/www/kimai2/vendor/kevinpapst/adminlte-bundle/Resources/views/layout/default-layout-avanzu.html.twig");
    }
}
