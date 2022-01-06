@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title',$setting->title)

@section('description'){{$setting->description}}@endsection
@section('keywords'){{$setting->keywords}}@endsection

@section('content')
    <section class="main-content">
        <div class="row">
            <div class="span5">
                İÇERİK
            </div>
        </div>
    </section>

@endsection
