@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title','İletişim')

@section('description'){{$setting->description}}@endsection
@section('keywords'){{$setting->keywords}}@endsection

@section('content')
    <div id="wrapper" class="container">
    <section class="main-content">
        <div class="row">

            <div class="span6">
               {{-- <h4>Hakkımızda</h4>--}}
                <h3 class="aside-title"> İletişim Bilgileri</h3>
                <div class="accordion-inner">
                {!!$setting->contact!!}
                </div>
            </div>
            <div class="span6">
                {{-- <h4>Hakkımızda</h4>--}}
                <h3 class="aside-title"> İletişim Formu</h3>
                @include('home.message')
                <form id="form" method="post" action="{{route('sendmessage')}}">
                    @csrf
                <div class="accordion-inner">
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="form-group">
                                <label class="control-label">Ad Soyad</label>
                                <div class="form-group">
                                    <input type="text" placeholder="" name="name" class="input-xlarge">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Telefon</label>
                                <div class="form-group">
                                    <input type="text" placeholder="" name="phone" class="input-xlarge">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <div class="form-group">
                                    <input type="text" placeholder="" name="email" class="input-xlarge"">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Konu</label>
                                <div class="form-group">
                                    <input type="text" placeholder="" name="subject" class="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-group">Mesajınız</label>
                                <div class="controls">
                                    <textarea class="text" name="message" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div style="text-align: right" >
                                <button type="submit" class="primary-btn">Gönder</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    </div>


@endsection
