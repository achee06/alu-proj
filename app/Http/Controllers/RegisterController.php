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
		            'email' => 'required|email',
		            'name_password' => 'required|min:6',
		            'name_firstname' => 'required',
		            'name_middlename' => 'required',
		            'name_lastname' => 'required',
		            'name_address' => 'required',
		            'name_country' => 'required',
		            'name_mobile' => 'required',
		            'name_course' => 'required',
		            'name_batch' => 'required',
		            'name_membership' => 'required'

		        ]);
		 $cms_user_details= new RegistrationModel;
		
		 //$register->email = $request->input('email');
		 //$register->email = $request->input('name_password');
		 $cms_user_details->cms_userid =$request->get('user');
		 $cms_user_details->firstname =$request->get('name_firstname');
		 $cms_user_details->middlename=$request->get('name_middlename');
		 $cms_user_details->lastname = $request->get('name_lastname');
		 $cms_user_details->address = $request->get('name_address');
		 $cms_user_details->country = $request->get('name_country');
		 $cms_user_details->mobile = $request->get('name_mobile');
		 $cms_user_details->course = $request->get('name_course');
		 $cms_user_details->batch = $request->get('name_batch');
		 $cms_user_details->membership = $request->get('name_membership');
		 
		

		 $cms_user_details->save();
		 return redirect('pages/registration');
		 
    }



     
}
