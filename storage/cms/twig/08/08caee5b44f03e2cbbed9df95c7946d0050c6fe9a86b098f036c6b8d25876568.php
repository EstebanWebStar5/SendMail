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

/* C:\xampp\htdocs\SendEmail/plugins/estebanrocha/main/components/mainform/default.htm */
class __TwigTemplate_157bb9e3a22a95597263de8c1cc4f7ce05c32db840480e9e244ebb79a9347681 extends \Twig\Template
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
        echo "<div id=\"myModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Enter Profile</h4>
            </div>
            <div class=\"modal-body\">
                <form data-request=\"onSave\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"name\" id=\"profile-name\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Surname\" name=\"surname\" id=\"profile-surname\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Address\" name=\"address\" id=\"profile-address\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"City\" name=\"city\" id=\"profile-city\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Country\" name=\"country\" id=\"profile-country\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"New password\" name=\"password\" id=\"profile-password\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Conform-password\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"container\" style=\"display: none;\">
    <h2>You Profile info...</h2>
    <button class=\"btn btn-primary\" style=\"float:right\" id=\"editProfile\">Change</button>
    <table class=\"table table-dark\" style=\"text-align: left;\">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Password</th>
        </tr>
        <tr>
            <td id=\"name\"></td>
            <td id=\"surname\"></td>
            <td id=\"address\"></td>
            <td id=\"city\"></td>
            <td id=\"country\"></td>
            <td id=\"password\"></td>
        </tr>
    </table>  
</div>
<div id=\"updateProfile\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Enter Profile</h4>
            </div>
            <div class=\"modal-body\">
                <form data-request=\"onSave\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"name\" id=\"update-name\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Surname\" name=\"surname\" id=\"update-surname\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Address\" name=\"address\" id=\"update-address\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"City\" name=\"city\" id=\"update-city\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Country\" name=\"country\" id=\"update-country\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"New password\" name=\"password\" id=\"update-password\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Conform-password\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\" id=\"update\">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\SendEmail/plugins/estebanrocha/main/components/mainform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"myModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Enter Profile</h4>
            </div>
            <div class=\"modal-body\">
                <form data-request=\"onSave\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"name\" id=\"profile-name\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Surname\" name=\"surname\" id=\"profile-surname\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Address\" name=\"address\" id=\"profile-address\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"City\" name=\"city\" id=\"profile-city\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Country\" name=\"country\" id=\"profile-country\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"New password\" name=\"password\" id=\"profile-password\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Conform-password\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"container\" style=\"display: none;\">
    <h2>You Profile info...</h2>
    <button class=\"btn btn-primary\" style=\"float:right\" id=\"editProfile\">Change</button>
    <table class=\"table table-dark\" style=\"text-align: left;\">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Password</th>
        </tr>
        <tr>
            <td id=\"name\"></td>
            <td id=\"surname\"></td>
            <td id=\"address\"></td>
            <td id=\"city\"></td>
            <td id=\"country\"></td>
            <td id=\"password\"></td>
        </tr>
    </table>  
</div>
<div id=\"updateProfile\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Enter Profile</h4>
            </div>
            <div class=\"modal-body\">
                <form data-request=\"onSave\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"name\" id=\"update-name\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Surname\" name=\"surname\" id=\"update-surname\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Address\" name=\"address\" id=\"update-address\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"City\" name=\"city\" id=\"update-city\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Country\" name=\"country\" id=\"update-country\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"New password\" name=\"password\" id=\"update-password\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Conform-password\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\" id=\"update\">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\SendEmail/plugins/estebanrocha/main/components/mainform/default.htm", "");
    }
}
