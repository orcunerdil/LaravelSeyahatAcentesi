@extends('layouts.admin')

@section('title', 'Ürün Ekle')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">ürünler</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Ürünler</h1>
            </div>
        </div><!--/.row-->

        <section class="content col-lg-8">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ürün Ekle</h3>

                </div>

                <div class="card-body">
                    Add Category Form
                    <form role="form" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" >Category</label>
                            <select class="form-control select 2" name="category_id" style="width: 100%">

                                @foreach($datalist as $rs)

                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentTree($rs,$rs->title)}}</option>
                                @endforeach

                            </select>

                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" >Title</label>
                            <input type="text" name="title" class="form-control" />

                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" >Keywords</label>
                            <input type="text" name="keywords" class="form-control" />

                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" >Description</label>
                            <input type="text" name="description" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Image</label>
                            <input type="file" name="image" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Price</label>
                            <input type="number" name="price" value="0" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" >Detail</label>
                            <textarea id="detail" name="detail"class="form-control" ></textarea>
                            <script>
                                $('#detail').summernote({

                                    tabsize: 2,
                                    height: 120,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            </script>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Slug</label>
                            <input type="text" name="slug" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label">Status</label>
                            <select class="form-control select 2" name="status" style="width: 100%">
                                <option selected>Choose...</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <br>
                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Add Product</button>

                    </form>
                </div>

                <div class="card-footer">
                    ..
                </div>
            </div>
        </section>

@endsection


