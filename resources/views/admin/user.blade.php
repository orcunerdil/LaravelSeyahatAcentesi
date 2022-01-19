@extends('layouts.admin')

@section('title', 'Üye Listesi')

@section('content')
    <script src="https://kit.fontawesome.com/c0d3887fd5.js" crossorigin="anonymous"></script>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Üyeler</li>


            </ol>
        </div><!--/.row-->



        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Üye Listesi</h3>

                </div>
                <div class="card-body">
                    <table border="1" id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Adı</th>
                            <th>Email</th>
                            <th>Telefon</th>
                            <th>Adres</th>
                            <th>Rol</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datalist as $rs)


                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->address}}</td>
                                <td>@foreach($rs->roles as $row)
                                        {{$row->name}},
                                    @endforeach
                                    <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                        <i class="fas fa-plus"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>


                    </table>

                </div>
            </div>
        </section>
    </div>



@endsection
