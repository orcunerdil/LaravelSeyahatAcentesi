@extends('layouts.admin')

@section('title', 'Admin Panel Ana Sayfa')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Rezervasyon</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Rezervasyonlar</h1>
                <div class="span7">
                    <section class="content">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tüm Siparişler</h3>

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
                                        <th>Onay-Red</th>
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
                                            <td><a href="{{route('admin_order_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=700')">Edit</a></td>

                                            <td "><a href=""></a></td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                    <br>
                                </table>

                            </div>
            </div>
        </div><!--/.row-->

@endsection
