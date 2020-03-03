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

/* C:\xampp\htdocs\SendEmail/plugins/estebanrocha/login/components/loginform/default.htm */
class __TwigTemplate_cf7f3d8bc44e87f2dd5bc62e3198d1ff3304c23934cd41d5399907a3fa87e511 extends \Twig\Template
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
        echo "<form data-request=\"onSend\" class=\"form-inline form-login\">
    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Enter username\">
    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Enter Email\">
    <button type=\"submit\" class=\"btn btn-primary\">Send</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\SendEmail/plugins/estebanrocha/login/components/loginform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onSend\" class=\"form-inline form-login\">
    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Enter username\">
    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Enter Email\">
    <button type=\"submit\" class=\"btn btn-primary\">Send</button>
</form>", "C:\\xampp\\htdocs\\SendEmail/plugins/estebanrocha/login/components/loginform/default.htm", "");
    }
}
