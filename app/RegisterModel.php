<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
    //
    protected $fillable = ['name_firstname','name_middlename','name_lastname','name_address','name_country','name_mobile','name_course','name_batch','name_membership'];

}
