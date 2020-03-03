<?php namespace Estebanrocha\Main;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'Estebanrocha\Main\Components\MainForm' => 'mainform'
        ]; 

    }

    public function registerSettings()
    {
    }
}
