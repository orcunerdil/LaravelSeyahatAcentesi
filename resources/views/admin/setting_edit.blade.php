@extends('layouts.admin')

@section('title',' Add Setting')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    @endsection



@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Setting</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Setting</h1>
            </div>
        </div><!--/.row-->

        <section class="content col-lg-8">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Setting</h3>

                </div>

                <div class="card-body">

                    <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control" />

                            <div class="form-outline mb-4">
                            <label class="form-label" >Title</label>
                            <input type="text" id="title"  name="title" value="{{$data->title}}" class="form-control" />

                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" >Keywords</label>
                            <input type="text" name="keywords"  value="{{$data->keywords}}" class="form-control" />

                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" >Description</label>
                            <input type="text" name="description" value="{{$data->description}}" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" >Company</label>
                            <input type="text" name="company" value="{{$data->company}}" class="form-control" />
                        </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" >Address</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" >Phone</label>
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" >Fax</label>
                                <input type="text" name="fax"  value="{{$data->fax}}" class="form-control" />
                            </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Email</label>
                            <input type="text" name="email"  value="{{$data->email}}" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Smtp Server</label>
                            <input type="text" name="smtpserver"  value="{{$data->smtpserver}}" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" >Smtp Email</label>
                            <input type="text" name="smtpemail"  value="{{$data->smtpemail}}" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Smtp Password</label>
                            <input type="password" name="smtppassword"  value="{{$data->smtppassword}}" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Smtp Port</label>
                            <input type="text" name="smtpport"  value="{{$data->smtpport}}" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Facebook</label>
                            <input type="text" name="facebook"  value="{{$data->facebook}}" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Instagram</label>
                            <input type="text" name="instagram"  value="{{$data->instagram}}" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Twitter</label>
                            <input type="text" name="twitter"  value="{{$data->twitter}}" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >About Us</label>
                            <textarea id="aboutus" name="aboutus"  class="form-control" >{{$data->aboutus}} </textarea>
                            <script>
                                $('#aboutus').summernote({

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
                            <label class="form-label" >Contact</label>
                            <textarea id="contact" name="contact"class="form-control" > {{$data->contact}} </textarea>
                            <script>
                                $('#contact').summernote({
                                    placeholder: 'Hello stand alone ui',
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
                            <label class="form-label" >References</label>
                            <textarea id="references" name="references" class="form-control">{{$data->references}} </textarea>

                        </div>
                        <script>
                            $('#references').summernote({
                                placeholder: 'Hello stand alone ui',
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

                        <div class="form-outline mb-4">
                            <label class="form-label" >Status</label>
                        <select class="form-control select 2" name="status" style="width: 100%">
                            <option selected="selected">{{$data->status}}</option>
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
                            <div>
                        <button type="submit" class="btn btn-primary btn-block mb-4">Update Setting</button>
                            </div>
                    </form>
                </div>

                <div class="card-footer">
                    ..
                </div>
            </div>
        </section>



@endsection
