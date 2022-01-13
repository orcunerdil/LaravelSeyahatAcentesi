<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Login</title>
    <link href="{{asset('assets')}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/datepicker3.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/admin/js/html5shiv.js"></script>
    <script src="{{asset('assets')}}/admin/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Log in</div>
            <div class="panel-body">
                @include('home.message')
                <form role="form" action="{{route('adminlogincheck')}}" method="post">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" id="email" type="email" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" id="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Giriş</button>

                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->


<script src="{{asset('assets')}}/admin/js/jquery-1.11.1.min.js"></script>
<script src="{{asset('assets')}}/admin/js/bootstrap.min.js"></script>
</body>
</html>
