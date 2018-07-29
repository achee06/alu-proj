<?php

namespace App\Http\Controllers;

use Request;
use Session;
use DB;
use CRUDBooster;
use Validator;

class LoginController extends \crocodicstudio\crudbooster\controllers\CBController
{
    //
    public function postLogin()
    {

        $validator = Validator::make(Request::all(), [
            'email' => 'required|email|exists:'.config('crudbooster.USER_TABLE'),
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->all();

            return redirect()->back()->with(['message' => implode(', ', $message), 'message_type' => 'danger']);
        }

        $email = Request::input("email");
        $password = Request::input("password");
        $users = DB::table(config('crudbooster.USER_TABLE'))->where("email", $email)->first();

        /* Archere */
        if($users->status === null)
            return redirect()->back()->with('message', "Your account is inactive. Please Contact the management.");
         /* Archere */

        if (\Hash::check($password, $users->password)) {
            $priv = DB::table("cms_privileges")->where("id", $users->id_cms_privileges)->first();

            $roles = DB::table('cms_privileges_roles')->where('id_cms_privileges', $users->id_cms_privileges)->join('cms_moduls', 'cms_moduls.id', '=', 'id_cms_moduls')->select('cms_moduls.name', 'cms_moduls.path', 'is_visible', 'is_create', 'is_read', 'is_edit', 'is_delete')->get();

            $photo = ($users->photo) ? asset($users->photo) : asset('vendor/crudbooster/avatar.jpg');
            Session::put('admin_id', $users->id);
            Session::put('admin_is_superadmin', $priv->is_superadmin);
            Session::put('admin_name', $users->name);
            Session::put('admin_photo', $photo);
            Session::put('admin_privileges_roles', $roles);
            Session::put("admin_privileges", $users->id_cms_privileges);
            Session::put('admin_privileges_name', $priv->name);
            Session::put('admin_lock', 0);
            Session::put('theme_color', $priv->theme_color);
            Session::put("appname", CRUDBooster::getSetting('appname'));

            CRUDBooster::insertLog(trans("crudbooster.log_login", ['email' => $users->email, 'ip' => Request::server('REMOTE_ADDR')]));

            $cb_hook_session = new \App\Http\Controllers\CBHook;
            $cb_hook_session->afterLogin();

             /* Archere */
            if($users->id_cms_privileges === 3)
            {  				
                return view('user-panel');
            }
            else
            {
            	return view(CRUDBooster::adminPath());
            }
             /* Archere */
        } else {
            return redirect()->back()->with('message', trans('crudbooster.alert_password_wrong'));
        }
    }

    public function getLogin()
    {

        if (CRUDBooster::myId()) {
            return redirect(CRUDBooster::adminPath());
        }

        return view('crudbooster::login');
    }

    public function getAdd() {
	  //Create an Auth
	  if(!CRUDBooster::isCreate() && $this->global_privilege==FALSE || $this->button_add==FALSE) {    
	    CRUDBooster::redirect(CRUDBooster::adminPath(),trans("crudbooster.denied_access"));
	  }
	  
	  $data = [];
	  $data['page_title'] = 'Add Data';
	  
	  //Please use cbView method instead view method from laravel
	  $this->cbView('custom',$data);
	}
}