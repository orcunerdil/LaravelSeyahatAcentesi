<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('assets')}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/datepicker3.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/admin/js/html5shiv.js"></script>
    <script src="{{asset('assets')}}/admin/js/respond.min.js"></script>
    <![endif]-->
    @yield('css')
    @yield('javascript')

</head>
<body>

@include('admin._header')
@include('admin._sidebar')
@yield('content')
@include('admin._footer')
@yield('footer')

</body>
</html>
