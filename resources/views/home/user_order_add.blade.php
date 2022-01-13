@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title',"Order Product")


@section('content')
    <div id="wrapper" class="container">
    <section class="main-content">
        <div class="row">
                <div class="span6">
                    <form action="{{route('user_order_store')}}" method="post">
                        @csrf
                    <h4>Sipariş Bilgileri</h4>
                        <div class="control-group">
                            <label class="control-label">Alınan Ürün</label>
                            <div class="controls">
                                <input type="text" value="{{$title}}" name="note" placeholder="" class="input-xlarge">
                            </div>
                        </div>

                        <div class="control-group">
                        <label class="control-label">Ad Soyad</label>
                        <div class="controls">
                            <input type="text" value="{{Auth::user()->name}}" name="name" placeholder="" class="input-xlarge">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input type="text"  name="email"value="{{Auth::user()->email}}" placeholder="{{(int)$price}}*{{(int)$adet}}" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Adres</label>
                        <div class="controls">
                            <input type="text"  name="address" value="{{Auth::user()->address}}"placeholder="" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Telefon</label>
                        <div class="controls">
                            <input type="text"  name="phone" placeholder="" value="{{Auth::user()->phone}}" class="input-xlarge">
                        </div>
                    </div>

                        <div class="control-group">
                            <label class="control-label">Kişi Sayısı</label>
                            <div class="controls">
                                <input type="number" min="1"  name="adet"  placeholder="" value="{{$adet}}" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Toplam Fiyat</label>
                            <div class="controls">
                                <input type="text"  name="total" placeholder="" value="{{(int)$adet*(int)$price}}" class="input-xlarge">
                            </div>
                        </div>

                </div>

        <div class="span6">
            <h4>Ödeme Bilgileri</h4>
            <div class="control-group">
                <label class="control-label">Ad Soyad</label>
                <div class="controls">
                    <input type="text" placeholder=""  value="{{Auth::user()->name}}" name="cardname" class="input-xlarge">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Kart Numarası</label>
                <div class="controls">
                    <input type="text" placeholder="" name="cardnumber" class="input-xlarge">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><span class="required"></span> Son Kullanma Tarihi</label>
                <div class="controls">
                    <input type="text" placeholder="" class="input-xlarge">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><span class="required"></span> CVC2</label>
                <div class="controls">
                    <input type="text" placeholder="" class="input-xlarge">
                </div>
            </div>
            <button type="submit" class="btn btn-inverse pull-left">Rezervasyonu Tamamla</button>
            </form>
        </div>
    </section>
        </div>



@endsection
