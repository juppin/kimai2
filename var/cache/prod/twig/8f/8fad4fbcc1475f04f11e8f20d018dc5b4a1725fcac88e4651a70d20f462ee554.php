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

/* invoice/renderer/export.csv */
class __TwigTemplate_ff04505ba5eb9b2993164669923915772131d5da6574c2e554c6edc51c95fbfb extends \Twig\Template
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
        echo "start_date,start_timestamp,end_date,end_timestamp,duration,username,description,rate,amount,total
\${entry.begin},\${entry.begin_timestamp},\${entry.end},\${entry.end_timestamp},\${entry.duration},\${entry.user_name},\${entry.description},\${entry.rate},\${entry.amount},\${entry.total}
";
    }

    public function getTemplateName()
    {
        return "invoice/renderer/export.csv";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/renderer/export.csv", "/var/www/kimai2/templates/invoice/renderer/export.csv");
    }
}
