<?php namespace Estebanrocha\Main\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEstebanrochaMainProfile extends Migration
{
    public function up()
    {
        Schema::table('estebanrocha_main_profile', function($table)
        {
            $table->string('country');
        });
    }
    
    public function down()
    {
        Schema::table('estebanrocha_main_profile', function($table)
        {
            $table->dropColumn('country');
        });
    }
}
