<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Orcun Erdil">


    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link href="{{asset('assets')}}/themes/css/bootstrappage.css" rel="stylesheet"/>

    <!-- global styles -->
    <link href="{{asset('assets')}}/themes/css/flexslider.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/themes/css/main.css" rel="stylesheet"/>

    <!-- scripts -->
    <script src="{{asset('assets')}}/themes/js/jquery-1.7.2.min.js"></script>
    <script src="{{asset('assets')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/themes/js/superfish.js"></script>
    <script src="{{asset('assets')}}/themes/js/jquery.scrolltotop.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
    @yield('css')
    @yield('tophs')
    @yield('headerjs')
</head>
<body>

@include('home._header')
@include('home._slider')

@section('content')


@show


@include('home._footer')
@yield('footerjs')

</body>
</html>
