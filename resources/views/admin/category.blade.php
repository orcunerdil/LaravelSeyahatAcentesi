@extends('layouts.admin')

@section('title', 'Kategori Listesi')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Kategoriler</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Kategoriler</h1>
            </div>
        </div><!--/.row-->

        <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kategori Listesi</h3>

            </div>
            <div class="card-body">
                <table border="1" id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Parent</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($datalist as $rs)


                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->parent_id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->status}}</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    @endforeach

                    </tbody>


                </table>

            </div>
            </div>
        </section>
        </div>



@endsection
