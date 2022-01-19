@section('javascript')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection
@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp

<html>
<head>

    <meta charset="utf-8">
    <style type="text/css">
        .sosyal_icon {
            margin-top: 1px;
            position: relative;
            z-index: 50;
        }

        ul.share-icons li {
            display: inline-block;
            margin: 1px;
            padding: 0;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
</html>
<div id="wrapper" class="container">
<section id="footer-bar">
    <div class="row">
        <div class="span3">
            <h4>Alt Menü</h4>
            <ul class="nav">
                <li><a href="{{route('home')}}">Anasayfa</a></li>
                <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                <li><a href="{{route('contact')}}">Bize Ulaşın</a></li>
                <li><a href="./contact.html">SSS</a></li>
                <li><a href="{{route('references')}}">Referanslar</a></li>
                {{--<li><a href="./cart.html">Your Cart</a></li>
                <li><a href="./register.html">Login</a></li>--}}
            </ul>
        </div>
        <div class="span4">
            {{--<h4>My Account</h4>
            <ul class="nav">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">Wish List</a></li>
                <li><a href="#">Newsletter</a></li>
            </ul>--}}
        </div>
        <div class="span5">
            <a class="logo" href="{{route('home')}}">
                <p><img src="{{asset('assets')}}/themes/images/logo.png" class="site_logo" alt=""></p>
            </a>
            <strong>Şirket :</strong> {{$setting->company}}<br>
            <strong>Adres :</strong> {{$setting->address}}<br>
            <strong>Telefon :</strong> {{$setting->phone}}<br>
            <strong>Fax :</strong> {{$setting->fax}}<br>
            <strong>Email :</strong> {{$setting->email}}<br><br>
            <div class="sosyal_icon">
               <ul class="share-icons">
                   @if($setting->facebook !=null)<li><a href="{{$setting->facebook }}" target="_blank" alt="Facebook" class="fa fa-facebook" c></a></li>@endif
                       @if($setting->twitter !=null) <li><a href="{{$setting->twitter }}"target="_blank" alt="Twitter" class="fa fa-twitter"></a></li>@endif
                       @if($setting->instagram !=null)<li><a href="{{$setting->instagram }}"target="_blank" alt="İnstagram" class="fa fa-instagram "></a></li>@endif
               </ul>
            </div>
        </div>
    </div>
</section>
<section id="copyright">
    <span>Copyright 2022 {{$setting->company}}| All right reserved.</span>
</section>

<script src=""></script>
<script src="{{asset('assets')}}/themes/js/common.js"></script>
<script src="{{asset('assets')}}/themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
    $(function() {
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    });
</script>

