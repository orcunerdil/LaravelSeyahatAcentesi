@extends('layouts.admin')

@section('title', 'Category Add')

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

        <section class="content col-lg-8">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>

                </div>

                <div class="card-body">
                    Add Category Form
                    <form role="form" action="{{route('admin_category_create')}}" method="post">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" >Parent</label>
                            <select class="form-control select 2" name="parent_id" style="width: 100%">
                                <option value="1">Ana Kategori</option>
                                @foreach($datalist as $rs)

                                <option value="{{$rs->id}}">{{$rs->title}}</option>
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
                        <button type="submit" class="btn btn-primary btn-block mb-4">Add Category</button>

                    </form>
                </div>

                <div class="card-footer">
                    ..
                </div>
            </div>
        </section>

@endsection

