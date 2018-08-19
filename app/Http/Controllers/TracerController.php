<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetails;
class TracerController extends Controller
{
    //
    public function show()
    {
    	$data['courses'] = UserDetails::all();
    	$data1['batches'] = UserDetails::all();
		return view('user/tracer',$data,$data1);
    }     
}
