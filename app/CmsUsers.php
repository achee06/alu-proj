<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsUsers extends Model
{
    //
    public function user_details()
    {
    	return $this->hasOne(CmsUserDetails::class, 'cms_user_id');
    }
}
