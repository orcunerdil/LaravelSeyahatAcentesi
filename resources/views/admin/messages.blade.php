@extends('layouts.admin')

@section('title', 'Mesajlar')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Mesajlar</li>


            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-3">
                <br>
                @include('home.message')

            </div>
        </div><!--/.row-->

        <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mesajlar</h3>

            </div>
            <div class="card-body">
                <table border="1" id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Subject</th>
                        <th>Mesaj</th>
                        <th>Admin Not</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($datalist as $rs)


                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->name}}</td>
                        <td>{{$rs->email}}</td>
                        <td>{{$rs->phone}}</td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->message}}</td>
                        <td>{{$rs->note}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=700')">Edit</a></td>
                        <td><a href="{{route('admin_message_delete',['id' => $rs->id])}}" onclick="return confirm('Silme İsleminden Emin Misiniz ?')" >Delete</a></td>
                    </tr>
                    @endforeach

                    </tbody>


                </table>

            </div>
            </div>
        </section>
        </div>



@endsection
