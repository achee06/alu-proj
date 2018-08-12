@extends('alumni')
 <title> Login </title>
@section('content')
	<link href="{{asset('vendor/crudbooster/assets/adminlte/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css"/>
	<link rel='stylesheet' href='{{asset("vendor/crudbooster/assets/css/main.css")}}'/>

	<style type="text/css">
        .login-page, .register-page {
            background: '#dddddd' url('{{ asset('vendor/crudbooster/assets/bg_blur3.jpg') }}');
            color: :'#ffffff' !important;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .login-box, .register-box {
            margin: 2% auto;
        }

        .login-box-body {
        	margin-top: 10px;
            box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.8);
            background: rgba(255, 255, 255, 0.9);
            color: {{ CRUDBooster::getSetting("login_font_color")?:'#666666' }}  !important;
        }

        html, body {
            overflow: hidden;
        }
    </style>
 
    <div class="login-box">
    <div class="login-logo">
        
    </div><!-- /.login-logo -->
    <div class="login-box-body">

        @if ( Session::get('message') != '' )
            <div class='alert alert-warning'>
                {{ Session::get('message') }}
            </div>
        @endif

        <p class='login-box-msg'>{{trans("crudbooster.login_message")}}</p>
        <form autocomplete='off' action="{{ route('post_login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group has-feedback">
                <input autocomplete='off' type="text" class="form-control" name='email' required placeholder="Email"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input autocomplete='off' type="password" class="form-control" name='password' required placeholder="Password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div style="margin-bottom:10px" class='row'>
                <div class='col-xs-12'>
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><i class='fa fa-lock'></i> {{trans("crudbooster.button_sign_in")}}</button>
                </div>
            </div>

            <div class='row'>
                <div class='col-xs-12' align="center"><p style="padding:10px 0px 10px 0px">{{trans("crudbooster.text_forgot_password")}} <a
                                href='{{route("getForgot")}}'>{{trans("crudbooster.click_here")}}</a></p></div>
            </div>
        </form>


        <br/>
        <!--a href="#">I forgot my password</a-->

    </div><!-- /.login-box-body -->

</div><!-- /.login-box -->
 
@endsection
