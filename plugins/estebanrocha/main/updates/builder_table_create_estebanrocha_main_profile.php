<?php namespace Estebanrocha\Main\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEstebanrochaMainProfile extends Migration
{
    public function up()
    {
        Schema::create('estebanrocha_main_profile', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->string('address');
            $table->string('city');
            $table->string('password');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('estebanrocha_main_profile');
    }
}
