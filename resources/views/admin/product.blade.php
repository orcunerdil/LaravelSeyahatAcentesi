@extends('layouts.admin')

@section('title', 'Ürün Listesi')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Ürünler</li>


            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-3">
                <br>
                <a href="{{route('admin_product_add')}}" type="button" class="btn btn-block btn-info" style="width:min-content" >Ürün Ekle</a>

            </div>
        </div><!--/.row-->

        <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ürün Listesi</h3>

            </div>
            <div class="card-body">
                <table border="1" id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Image Gallery</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($datalist as $rs)


                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>
                            {{\App\Http\Controllers\Admin\CategoryController::getParentTree($rs->category,$rs->category->title)}}
                        </td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->price}}</td>
                        <td align="center">@if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                            @endif
                        </td>
                        <td align="center"><a href="{{route('admin_image_add',['product_id'=>$rs->id])}}"><img src="{{asset('assets/admin/images')}}/gallery.png" height="25"></a></td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin_product_edit', ['id' => $rs->id])}}">Edit</a></td>
                        <td><a href="{{route('admin_product_delete',['id' => $rs->id])}}" onclick="return confirm('Silme İsleminden Emin Misiniz ?')" >Delete</a></td>
                    </tr>
                    @endforeach

                    </tbody>


                </table>

            </div>
            </div>
        </section>
        </div>



@endsection
