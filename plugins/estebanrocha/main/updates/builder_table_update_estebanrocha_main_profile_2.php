<?php namespace Estebanrocha\Main\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEstebanrochaMainProfile2 extends Migration
{
    public function up()
    {
        Schema::table('estebanrocha_main_profile', function($table)
        {
            $table->string('name', 191)->nullable()->change();
            $table->string('surname', 191)->nullable()->change();
            $table->string('address', 191)->nullable()->change();
            $table->string('city', 191)->nullable()->change();
            $table->string('password', 191)->nullable()->change();
            $table->string('country', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('estebanrocha_main_profile', function($table)
        {
            $table->string('name', 191)->nullable(false)->change();
            $table->string('surname', 191)->nullable(false)->change();
            $table->string('address', 191)->nullable(false)->change();
            $table->string('city', 191)->nullable(false)->change();
            $table->string('password', 191)->nullable(false)->change();
            $table->string('country', 191)->nullable(false)->change();
        });
    }
}
