<?php namespace Estebanrocha\Login;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'Estebanrocha\Login\Components\LoginForm' => 'loginform'
        ]; 

    }

    public function registerSettings()
    {
    }
}
