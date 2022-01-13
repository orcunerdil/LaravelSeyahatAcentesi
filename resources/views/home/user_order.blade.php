@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp


@extends('layouts.home')

@section('title','Siparişlerim')


@section('content')
    <div id="wrapper" class="container">
        <section class="main-content">
            <div class="row">
                <div class="span3">

                    <h4 class="title"><span class="text"><strong>Üye</strong> Paneli</span></h4>
                    <ul>
                        <li><a href="{{route('myprofile')}}">My Profile</a></li>
                        <li><a href="{{route('user_orders')}}">Siparişlerim</a></li>
                        <li><a href="">Mesajlar</a></li>
                        <li><a href="{{route('logout')}}">Çıkış</a></li>

                    </ul>
                </div>
                <div class="span7">
                    <h4 class="title"><span class="text"><strong>User</strong> Menu</span></h4>
                    <section class="content">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Geçmiş Siparişlerim</h3>

                            </div>
                            <div class="card-body">
                                <table border="1" id="example" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Sipariş Id</th>
                                        <th>Ad&Soyad</th>
                                        <th>Telefon</th>
                                        <th>Email</th>
                                        <th>Adres</th>
                                        <th>Toplam</th>
                                        <th>Tarih</th>
                                        <th>Status</th>
                                        <th>Satın Alınan Ürün</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($datalist as $rs)

                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->phone}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->address}}</td>
                                            <td>{{$rs->total}} TL</td>
                                            <td>{{$rs->created_at}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>{{$rs->note}}</td>

                                        </tr>
                                    @endforeach

                                    </tbody>

                                <br>
                                </table>

                            </div>
                            <br><br><br>
                        </div>

                    </section>

                </div>
            </div>
        </section>
    </div>

@endsection
