@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title',$data->title)

@section('description'){{$data->description}}@endsection
@section('keywords'){{$data->keywords}}@endsection

@section('content')
    <div id="wrapper" class="container">
        <section class="header_text sub">
        <img class="pageBanner" src="{{asset('assets')}}/themes/images/banner.jpg" alt="New products" >
        <h4><span>Paketler</span></h4>
        </section>
    <section class="main-content">
                <div class="row ">
                    <div class="span12">

                        <ul class="thumbnails listing-products">
                            @foreach($datalist as $rs)
                            <li class="span3">
                                <div class="product-box">
                                    <span class="sale_tag"></span>
                                    <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"><img alt="" src="{{Storage::url($rs->image)}} "></a><br/>
                                    <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="title">{{$rs->title}}</a><br/>
                                    {{--<a href="#" class="category">Phasellus consequat</a>--}}
                                    <p class="price">{{$rs->price.' TL'}}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <hr>
                        <div class="pagination pagination-small pagination-centered">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                    {{--div class="span3 col">
                        <div class="block">
                            <ul class="nav nav-list">
                                <li class="nav-header">SUB CATEGORIES</li>
                                <li><a href="products.html">Nullam semper elementum</a></li>
                                <li class="active"><a href="products.html">Phasellus ultricies</a></li>
                                <li><a href="products.html">Donec laoreet dui</a></li>
                                <li><a href="products.html">Nullam semper elementum</a></li>
                                <li><a href="products.html">Phasellus ultricies</a></li>
                                <li><a href="products.html">Donec laoreet dui</a></li>
                            </ul>
                            <br/>
                            <ul class="nav nav-list below">
                                <li class="nav-header">MANUFACTURES</li>
                                <li><a href="products.html">Adidas</a></li>
                                <li><a href="products.html">Nike</a></li>
                                <li><a href="products.html">Dunlop</a></li>
                                <li><a href="products.html">Yamaha</a></li>
                            </ul>
                        </div>--}}
                        {{--<div class="block">
                            <h4 class="title">
                                <span class="pull-left"><span class="text">Randomize</span></span>
                                <span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
                            </h4>--}}
                            {{--<div id="myCarousel" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails listing-products">
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <img alt="" src="{{asset('assets')}}/themes/images/ladies/1.jpg"><br/>
                                                    <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                                                    <a href="#" class="category">Suspendisse aliquet</a>
                                                    <p class="price">$261</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>--}}
                                    {{--<div class="item">
                                        <ul class="thumbnails listing-products">
                                            <li class="span3">
                                                <div class="product-box">
                                                    <img alt="" src="{{asset('assets')}}/themes/images/ladies/2.jpg"><br/>
                                                    <a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
                                                    <a href="#" class="category">Urna nec lectus mollis</a>
                                                    <p class="price">$134</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <h4 class="title"><strong>Best</strong> Seller</h4>
                            <ul class="small-product">
                                <li>
                                    <a href="#" title="Praesent tempor sem sodales">
                                        <img src="{{asset('assets')}}/themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
                                    </a>
                                    <a href="#">Praesent tempor sem</a>
                                </li>
                                <li>
                                    <a href="#" title="Luctus quam ultrices rutrum">
                                        <img src="{{asset('assets')}}/themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
                                    </a>
                                    <a href="#">Luctus quam ultrices rutrum</a>
                                </li>
                                <li>
                                    <a href="#" title="Fusce id molestie massa">
                                        <img src="{{asset('assets')}}/themes/images/ladies/5.jpg" alt="Fusce id molestie massa">
                                    </a>
                                    <a href="#">Fusce id molestie massa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>--}}

                <script src="{{asset('assets')}}/themes/js/common.js"></script>

    </div>
    </section>
    </div>


@endsection
