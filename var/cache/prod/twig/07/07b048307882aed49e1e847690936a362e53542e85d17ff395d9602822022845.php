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

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_f4d623a3bae15300193c96c12f4274c7aa80c17a792743f230fa430241f9c90f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'body_text' => [$this, 'block_body_text'],
            'body_html' => [$this, 'block_body_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.email.subject", ["%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 4), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)], "FOSUserBundle");
    }

    // line 8
    public function block_body_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.email.message", ["%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 10), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)], "FOSUserBundle");
        echo "
";
    }

    // line 13
    public function block_body_html($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  63 => 10,  59 => 8,  55 => 4,  51 => 2,  47 => 13,  45 => 8,  42 => 7,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Registration/email.txt.twig", "/var/www/kimai2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
