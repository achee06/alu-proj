<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsUserDetails extends Model
{
    //
    public function user()
    {
    	return $this->hasOne(CmsUsers::class);
    }
}
