<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer_Zipper extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'volunteer__zippers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['zipper_name', 'phone_number'];

    
}
