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

/* C:\xampp\htdocs\SendEmail/themes/demo/pages/profile.htm */
class __TwigTemplate_fee0c16c693e663695a26eae5af786fed6ebaf8831238a9d3c95616a462305e1 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mainform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<script>
    \$(document).ready(function(){
        \$(\"#myModal\").modal('show');
    });
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\SendEmail/themes/demo/pages/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'mainform' %}

<script>
    \$(document).ready(function(){
        \$(\"#myModal\").modal('show');
    });
</script>", "C:\\xampp\\htdocs\\SendEmail/themes/demo/pages/profile.htm", "");
    }
}
