<?php namespace Estebanrocha\Login\Components;

use Cms\Classes\ComponentBase;

use Input;

use Mail;

class LoginForm extends ComponentBase

{

    public function componentDetails() {

        return [

            'name' => 'Contact Form',

            'description' => 'Simple contact form'

        ];

    }

    public function onSend() {

        $vars = ['name' => Input::get('name'), 'user' => Input::get('email')];

        Mail::send('estebanrocha.login::mail.message', $vars, function($message) use($vars) {

            $message->to($vars['user'], $vars['name']);
            $message->subject('This is a reminder');

        });

        Mail::send('estebanrocha.login::mail.message_conform', $vars, function($message) use($vars) {

            $message->to($vars['user'], $vars['name']);
            $message->subject('This is a reminder');

        });
    }

}


?>