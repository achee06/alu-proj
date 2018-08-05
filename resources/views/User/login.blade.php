<html>
    <head>
        <meta charset="UTF-8">
        <title>User Login</title>
        <meta name="generator" content="CRUDBooster">
        <meta name="robots" content="noindex,nofollow">
        <link rel="shortcut icon" href="http://localhost/alumni/public/uploads/2018-07/9a69cc5025b884f5ffff8a2bd94f472a.png">

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{URL::asset('user/User.css')}}">
        <!-- Bootstrap 3.3.2 -->
        <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Theme style -->
        

          <!-- support rtl-->
        
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

       
    </head>
    <body class="login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href="http://localhost/alumni/public">
                <img title="FUAAGI" src="http://localhost/alumni/public/uploads/2018-07/cbb7d89c8b0068dff670582aad8c36ff.png" style="max-width: 100%;max-height:170px">
            </a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">

            
            <p class="login-box-msg">Please login to start your session</p>

            <form autocomplete="off" action="http://localhost/alumni/public/admin/login" method="post">
                <input name="_token" value="QHJvbGbINJ8ev3VUbk1UxT53JfVz6NMcbbby6UuJ" type="hidden">
                <div class="form-group has-feedback">
                    <input autocomplete="off" class="form-control" name="email" required="" placeholder="Email" type="text">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input autocomplete="off" class="form-control" name="password" required="" placeholder="Password" type="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div style="margin-bottom:10px" class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-lock"></i> Sign In</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12" align="center"><p style="padding:10px 0px 10px 0px">Forgot the password ? <a href="http://localhost/alumni/public/admin/forgot">Click here</a></p></div>
                </div>
            </form>


            <br>
            <!--a href="#">I forgot my password</a-->

        </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->


    <!-- jQuery 2.1.3 -->
    <script src="http://localhost/alumni/public/vendor/crudbooster/assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="http://localhost/alumni/public/vendor/crudbooster/assets/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>