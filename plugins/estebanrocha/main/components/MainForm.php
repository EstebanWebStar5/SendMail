<?php namespace Estebanrocha\Main\Components;

use Cms\Classes\ComponentBase;

use Input;

use Validator;

use Redirect;

use Estebanrocha\Main\Models\Profile;

class MainForm extends ComponentBase

{

    public function componentDetails() {

        return [

            'name' => 'Main Form',

            'description' => 'Enter profile'

        ];

    }

    public function onSave() {

        $profile = new Profile();
        $profile->name = Input::get('name');
        $profile->surname = Input::get('surname');
        $profile->address = Input::get('address');
        $profile->city = Input::get('city');
        $profile->country = Input::get('country');
        $profile->password = Input::get('password');
        $profile->save();
    }   

}


?>