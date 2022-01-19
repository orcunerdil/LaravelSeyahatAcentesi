@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title',$setting->title)

@section('description'){{$setting->description}}@endsection
@section('keywords'){{$setting->keywords}}@endsection

@section('content')
    @include('home._slider')

    <section class="main-content">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span12">
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">SİZE <strong>ÖZEL</strong></span></span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel" class="myCarousel carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails">
                                        @foreach($daily as $rs)
                                        <li class="span3">
                                            <div class="product-box">
                                                <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"><img style="height: 200px" alt="" src="{{Storage::url($rs->image)}}"></a><br/>
                                                {{--<p><a href="product_detail.html"><img src="{{Storage::url($rs->image)}}" alt="" /></a></p>--}}
                                                <a href="product_detail.html" class="title">{{$rs->title}}</a><br/>
                                                {{--<a href="products.html" class="category">Commodo consequat</a>--}}
                                                <p class="price">{{$rs->price.' TL'}}</p>
                                            </div>
                                        </li>
                                            @endforeach
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                    @foreach($slider as $rs)
                                        <li class="span3">
                                            <div class="product-box">
                                                <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"><img style="height: 200px" alt="" src="{{Storage::url($rs->image)}}"></a><br/>
                                                <a href="product_detail.html" class="title">{{$rs->title}}</a><br/>
                                                {{--<a href="products.html" class="category">Quis nostrud</a>--}}
                                                <p class="price">{{$rs->price.' TL'}}</p>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="span12">
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Son <strong>Fırsatlar</strong></span></span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel-2" class="myCarousel carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails">
                                        @foreach($last as $rs)
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <p><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"><img src="{{Storage::url($rs->image)}}" alt="" /></a></p>
                                                <a href="product_detail.html" class="title">{{$rs->title}}</a><br/>
                                               {{-- <a href="products.html" class="category">Commodo consequat</a>--}}
                                                <p class="price">{{$rs->price.' TL'}}</p>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        @foreach($last as $rs)
                                        <li class="span3">
                                            <div class="product-box">
                                                <p><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"><img src="{{Storage::url($rs->image)}}" alt="" /></a></p>
                                                <a href="product_detail.html" class="title">{{$rs->title}}</a><br/>
                                                <a href="products.html" class="category">Quis nostrud</a>
                                                <p class="price">{{$rs->price.' TL'}}</p>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row feature_box">
                    <div class="span4">
                        <div class="service">
                            <div class="responsive">
                                <img src="{{asset('assets')}}/themes/images/feature_img_2.png" alt="" />
                                <h4>MODERN <strong>TASARIM</strong></h4>
                                <p>Sizlerin işlemlerinizi kolaylaştırmak için sürekli güncellenen basit bir arayüz kullanıyoruz!</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="service">
                            <div class="customize">
                                <img src="{{asset('assets')}}/themes/images/feature_img_1.png" alt="" />
                                <h4>ÜCRETSİZ <strong>REZERVASYON</strong></h4>
                                <p>Tatil ve seyahatlerinizde ilave bir komisyon alınmaz, istediğiniz zaman ücretsiz iptal edebilirsiniz!</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="service">
                            <div class="support">
                                <img src="{{asset('assets')}}/themes/images/feature_img_3.png" alt="" />
                                <h4>7/24 CANLI <strong>DESTEK</strong></h4>
                                <p>Sizlere daha iyi ve kesintisiz bir hizmet verebilmek için, 7/24 canlı destek vermekteyiz!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection
