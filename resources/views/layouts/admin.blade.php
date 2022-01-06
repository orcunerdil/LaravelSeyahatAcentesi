<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
    <link href="{{asset('assets')}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/datepicker3.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/styles.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/summernote/summernote-bs4.min.js" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/summernote/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @yield('css')
    @yield('javascript')

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/admin/js/html5shiv.js"></script>
    <script src="{{asset('assets')}}/admin/js/respond.min.js"></script>

    <![endif]-->


</head>
<body>

@include('admin._header')
@include('admin._sidebar')
@yield('content')
@include('admin._footer')
@yield('footer')

</body>
</html>
