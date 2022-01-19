@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title',$data->title)

@section('description'){{$data->description}}@endsection
@section('keywords'){{$data->keywords}}@endsection

@section('content')
    <div id="wrapper" class="container">
    <section class="main-content">
        <div class="row">
            <div class="span12">
                <section class="header_text sub">
                    <img class="pageBanner" src="{{asset('assets')}}/themes/images/banner.jpg" alt="New products" >
                    <h4><span>Paket Detay</span></h4>
                </section>
                <section class="main-content">
                    <div class="row">
                        <div class="span9">
                            <div class="row">
                                <div class="span4">
                                    <a href="{{Storage::url($data->image)}}" target="_blank" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="{{Storage::url($data->image)}}"></a>
                                    <ul class="thumbnails small">
                                        @foreach($datalist as $rs)
                                        <li class="span1">
                                            <a href="{{Storage::url($rs->image)}}" target="_blank" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="{{Storage::url($rs->image)}}" alt=""></a>
                                        </li>
                                        @endforeach
                                            <script src="{{asset('assets')}}/themes/js/common.js"></script>
                                            <script>
                                                $(function () {
                                                    $('#myTab a:first').tab('show');
                                                    $('#myTab a').click(function (e) {
                                                        e.preventDefault();
                                                        $(this).tab('show');
                                                    })
                                                })
                                                $(document).ready(function() {
                                                    $('.thumbnail').fancybox({
                                                        openEffect  : 'none',
                                                        closeEffect : 'none'
                                                    });

                                                    $('#myCarousel-2').carousel({
                                                        interval: 2500
                                                    });
                                                });
                                            </script>
                                    </ul>
                                </div>
                                <div class="span5">
                                    <address>
                                        <strong>Kategori: </strong> <span>{{\App\Http\Controllers\Admin\CategoryController::getParentTree($data->category,$data->category->title)}}</span><br>
                                        <strong>Paket:</strong> <span>{{$data->title}}</span><br>
                                        {{--<strong>Product Code:</strong> <span>Product 14</span><br>
                                        <strong>Reward Points:</strong> <span>0</span><br>
                                        <strong>Availability:</strong> <span>Out Of Stock</span><br>--}}
                                    </address>
                                    <h4><strong>Fiyat: {{$data->price.' TL'}}</strong></h4>
                                </div>
                                <div class="span5">

                                       {{-- <label class="checkbox">
                                            <input type="checkbox" value=""> Option one is this and that
                                        </label>
                                        <br/>
                                        <label class="checkbox">
                                            <input type="checkbox" value=""> Be sure to include why it's great
                                        </label>--}}
                                        <p>&nbsp;</p>

                                        <form action="{{route('user_order_add')}}" method="post">
                                            @csrf
                                            <label>Kişi Sayısı:</label>
                                            <input type="number" min="1"  id="quantity" class="span1" name="adet" placeholder="">
                                            <input type="hidden" name="title" value="{{$data->title}}">
                                            <input type="hidden" name="price" value="{{$data->price}}">
                                            <button class="btn btn-inverse" type="submit">Rezervasyon Yap</button>
                                        </form>


                                </div>
                            </div>
                            <div class="row">
                                <div class="span9">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="active"><a href="#home">Detay</a></li>
                                        {{--<li class=""><a href="#profile">Additional Information</a></li>--}}
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home">{!!$data->detail!!}</div>
                                        <div class="tab-pane" id="profile">
                                            <table class="table table-striped shop_attributes">
                                                <tbody>
                                                <tr class="">
                                                    <th>Size</th>
                                                    <td>Large, Medium, Small, X-Large</td>
                                                </tr>
                                                <tr class="alt">
                                                    <th>Colour</th>
                                                    <td>Orange, Yellow</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="span9">
                                    <br>
                                    {{--<h4 class="title">
                                        <span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
                                        <span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
                                    </h4>--}}
                                    {{--<div id="myCarousel-1" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <ul class="thumbnails listing-products">
                                                    <li class="span3">
                                                        <div class="product-box">
                                                            <span class="sale_tag"></span>
                                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
                                                            <a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
                                                            <a href="#" class="category">Suspendisse aliquet</a>
                                                            <p class="price">$341</p>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="product-box">
                                                            <span class="sale_tag"></span>
                                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
                                                            <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                                                            <a href="#" class="category">Phasellus consequat</a>
                                                            <p class="price">$341</p>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="product-box">
                                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
                                                            <a href="product_detail.html" class="title">Praesent tempor sem</a><br/>
                                                            <a href="#" class="category">Erat gravida</a>
                                                            <p class="price">$28</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item">
                                                <ul class="thumbnails listing-products">
                                                    <li class="span3">
                                                        <div class="product-box">
                                                            <span class="sale_tag"></span>
                                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
                                                            <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                                                            <a href="#" class="category">Phasellus consequat</a>
                                                            <p class="price">$341</p>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="product-box">
                                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
                                                            <a href="product_detail.html">Praesent tempor sem</a><br/>
                                                            <a href="#" class="category">Erat gravida</a>
                                                            <p class="price">$28</p>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="product-box">
                                                            <span class="sale_tag"></span>
                                                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
                                                            <a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
                                                            <a href="#" class="category">Suspendisse aliquet</a>
                                                            <p class="price">$341</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        {{--<div class="span3 col">
                            <div class="block">--}}
                                {{--<ul class="nav nav-list">
                                    <li class="nav-header">SUB CATEGORIES</li>
                                    <li><a href="products.html">Nullam semper elementum</a></li>
                                    <li class="active"><a href="products.html">Phasellus ultricies</a></li>
                                    <li><a href="products.html">Donec laoreet dui</a></li>
                                    <li><a href="products.html">Nullam semper elementum</a></li>
                                    <li><a href="products.html">Phasellus ultricies</a></li>
                                    <li><a href="products.html">Donec laoreet dui</a></li>
                                </ul>--}}
                                <br/>
                                {{--<ul class="nav nav-list below">
                                    <li class="nav-header">MANUFACTURES</li>
                                    <li><a href="products.html">Adidas</a></li>
                                    <li><a href="products.html">Nike</a></li>
                                    <li><a href="products.html">Dunlop</a></li>
                                    <li><a href="products.html">Yamaha</a></li>
                                </ul>--}}
                            {{--</div>
                            <div class="block">
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
                                                        <a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
                                                        <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                                                        <a href="#" class="category">Suspendisse aliquet</a>
                                                        <p class="price">$261</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>--}}
                                       {{-- <div class="item">
                                            <ul class="thumbnails listing-products">
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
                                                        <a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
                                                        <a href="#" class="category">Urna nec lectus mollis</a>
                                                        <p class="price">$134</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>--}}
                        {{--            </div>
                                </div>
                            </div>--}}
                            {{--<div class="block">
                                <h4 class="title"><strong>Best</strong> Seller</h4>
                                <ul class="small-product">
                                    @foreach($datalist as $rs)
                                    <li>
                                        <a href="#" title="Praesent tempor sem sodales">
                                            <img src="{{Storage::url($rs->image)}}" alt="Praesent tempor sem sodales">
                                        </a>
                                        <a href="#">Praesent tempor sem</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>--}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    </div>
@endsection
