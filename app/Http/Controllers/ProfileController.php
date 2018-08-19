<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;
use Validator;
use App\CmsUsers;
use App\UserDetails;

class ProfileController extends Controller
{
    //
    public function store(Request $request)
    {
    	//dd($request);
    	if($request->get('password') != '')
    	{
    		$this->validate($request, [
	            'email' => 'required|email|unique:cms_users',
	            'password' => 'required|min:6|confirmed',
	            'password_confirmation' => 'required|min:6',
	            'firstname' => 'required',
	            'middlename' => 'required',
	            'lastname' => 'required',
	            'address' => 'required',
	            'country' => 'required',
	            'mobile' => 'required',
	            'course' => 'required',
	            'batch' => 'required|integer',
	            'membership' => 'required'
	        ]);
    	}
    	else {
    		$this->validate($request, [
	            'email' => 'required|email|unique:cms_users',
	            'firstname' => 'required',
	            'middlename' => 'required',
	            'lastname' => 'required',
	            'address' => 'required',
	            'country' => 'required',
	            'mobile' => 'required',
	            'course' => 'required',
	            'batch' => 'required|integer',
	            'membership' => 'required'
	        ]);
    	}
    	
    }
}
