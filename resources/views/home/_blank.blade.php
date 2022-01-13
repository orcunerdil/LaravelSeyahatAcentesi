@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title',$data->title)

@section('description'){{$data->description}}@endsection
@section('keywords'){{$data->keywords}}@endsection

@section('content')
    <section class="main-content">
        <div class="row">
            <div class="span5">
                İÇERİK
            </div>
        </div>
    </section>

@endsection
