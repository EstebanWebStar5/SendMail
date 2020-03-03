<?php namespace Estebanrocha\Main\Models;

use Model;

/**
 * Model
 */
class Profile extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'estebanrocha_main_profile';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
