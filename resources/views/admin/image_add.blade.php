@extends('layouts.admin')

@section('title', 'Add Images Gallery')


@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Images</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Images</h1>
            </div>
        </div><!--/.row-->

        <section class="content col-lg-8">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$data->title}}</h3>

                </div>

                <div class="card-body">
                    Görsel Ekle
                    <form role="form" action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Email input -->

                        <div class="form-outline mb-4">
                            <label class="form-label" >Title</label>
                            <input type="text" name="title" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Image</label>
                            <input type="file" name="image" class="form-control" />
                        </div>

                        <br>
                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Görsel Ekle</button>

                    </form>
                </div>
                <br>
                <table border="1" id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($images as $rs)


                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td align="center">@if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="70" alt="">
                                @endif
                            </td>

                            <td><a href="{{route('admin_image_delete',['id' => $rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Kayit Silme İsleminden Emin Misiniz ?')" >Delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card-footer">
                    ..
                </div>
            </div>
        </section>

@endsection


