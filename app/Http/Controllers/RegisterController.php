<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistrationModel;
class RegisterController extends Controller
{
    //
    public function create()
    {
		 return view('pages/registration');
    }

     public function store(Request $request)
    {
		 $this->validate($request, [
		            'email' => 'required|email|unique:cms_users',
		            'name_password' => 'required|min:6|confirmed',
		            'name_password_confirmation' => 'required|min:6',
		            'name_firstname' => 'required',
		            'name_middlename' => 'required',
		            'name_lastname' => 'required',
		            'name_address' => 'required',
		            'name_country' => 'required',
		            'name_mobile' => 'required',
		            'name_course' => 'required',
		            'name_batch' => 'required|integer',
		            'name_membership' => 'required'

		        ]);
		 $name = $request->get('name_firstname').' '.$request->get('name_middlename').' '.$request->get('name_lastname');

        $password = Hash::make($request->input('name_password'));


        $cms_user = new CmsUsers;  
		$cms_user->name  = $request->get('name_firstname');
		$cms_user->email = $request->get('email');
		$cms_user->password = $password;
		$cms_user->id_cms_privileges = 3; 
		$cms_user->save();

		$cms_user_details= new CmsUserDetails;
		 //$register->email = $request->input('email');
		 //$register->email = $request->input('name_password');
		 $cms_user_details->firstname =$request->get('name_firstname');
		 $cms_user_details->middlename=$request->get('name_middlename');
		 $cms_user_details->lastname = $request->get('name_lastname');
		 $cms_user_details->address = $request->get('name_address');
		 $cms_user_details->country = $request->get('name_country');
		 $cms_user_details->mobile = $request->get('name_mobile');
		 $cms_user_details->course = $request->get('name_course');
		 $cms_user_details->batch = $request->get('name_batch');
		 $cms_user_details->membership = $request->get('name_membership');

		 $cms_user->user_details()->save($cms_user_details);

		 return redirect('pages/registration');
		 
    }



     
}
