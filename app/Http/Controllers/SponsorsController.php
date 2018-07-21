<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SponsorsController extends Controller
{
    public function getSponsors()
    {
    	$data['result'] = DB::table('sponsors')
    	->select('*')
    	->orderby('created_at','asc')
    	->get();
    	//dd($data['result']);
    	return view('newsevents',$data);
    }
}
