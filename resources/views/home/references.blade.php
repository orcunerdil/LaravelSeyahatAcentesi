@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title','Referanslar')

@section('description'){{$setting->description}}@endsection
@section('keywords'){{$setting->keywords}}@endsection

@section('content')
    <section class="main-content">
        <div class="row">

            <div class="span12">
               {{-- <h4>Hakkımızda</h4>--}}
                {!!$setting->references!!}
            </div>
        </div>
    </section>

@endsection
