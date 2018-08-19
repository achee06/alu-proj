<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\CmsUsers;
use App\UserDetails;
use App\Courses;

use Mail;
class TracerController extends Controller
{
    //
    public function show()
    {
    	$data['courses'] = Courses::all();
    	
		return view('user/tracer',$data);
    }     
}
