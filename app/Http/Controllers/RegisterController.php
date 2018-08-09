<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\RegistrationModel;
use App\CmsUsers;
use App\UserDetails;
use App\Courses;
use Mail;
class RegisterController extends Controller
{
    //
    public function create()
    {
    	$data['courses'] = Courses::all();
    	
		return view('registration',$data);
    }

     public function store(Request $request)
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
		 $name = $request->get('firstname').' '.$request->get('middlename').' '.$request->get('lastname');

        $password = Hash::make($request->input('password'));


        $cms_user = new CmsUsers;  
		$cms_user->name  = $request->get('firstname');
		$cms_user->email = $request->get('email');
		$cms_user->password = $password;
		$cms_user->id_cms_privileges = 3; 
		$cms_user->save();

		$cms_user_details= new UserDetails;
		 //$register->email = $request->input('email');
		 //$register->email = $request->input('name_password');
		 $cms_user_details->firstname =$request->get('firstname');
		 $cms_user_details->middlename=$request->get('middlename');
		 $cms_user_details->lastname = $request->get('lastname');
		 $cms_user_details->address = $request->get('address');
		 $cms_user_details->country = $request->get('country');
		 $cms_user_details->mobile = $request->get('mobile');
		 $cms_user_details->course = $request->get('course');
		 $cms_user_details->batch = $request->get('batch');
		 $cms_user_details->membership = $request->get('membership');

		 $cms_user->user_details()->save($cms_user_details);

		/* Sending of email */
		
		return redirect()->route('registrationIndex')->with('success_message', 'You are successfuly registered. We are processing your account.');
		 
    }



     
}
