<section>
    @php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp
    @section('javascript')
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    @endsection

@extends('layouts.home')

@section('title','User Profile')

@section('content')



        <div id="wrapper" class="container">
        <section class="main-content">
            <div class="row">
                <div class="span3">

                    <h4 class="title"><span class="text"><strong>Üye</strong> Paneli</span></h4>
                    <ul>
                        <li><a href="{{'myprofile'}}">My Profile</a></li>
                        <li><a href="{{route('user_orders')}}">Siparişlerim</a></li>
                        <li><a href="">Mesajlar</a></li>
                        <li><a href="{{route('logout')}}">Çıkış</a></li>

                    </ul>
                </div>
                <div class="span7">
                    <h4 class="title"><span class="text"><strong>User</strong> Menu</span></h4>
                    @include('profile.show')
                </div>
            </div>
        </section>
        </div>


@endsection
