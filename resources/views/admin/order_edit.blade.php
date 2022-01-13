<div>
    <h3>Mesaj Detay</h3>
    @include('home.message')
</div>
<form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <table border="1" id="example" class="display" style="width:100%">

        <tr><th>Id</th><td>{{$data->id}}</td></tr>
        <tr>  <th>Name</th><td>{{$data->name}}</td></tr>
        <tr>  <th>Email</th><td>{{$data->email}}</td></tr>
        <tr>  <th>Telefon</th><td>{{$data->phone}}</td></tr>
        <tr>   <th>Subject</th><td>{{$data->subject}}</td></tr>
        <tr>   <th>Mesaj</th><td>{{$data->message}}</td></tr>
        <tr>   <th>Admin Not</th>
            <td>
                <textarea id="note" name="note"  class="form-control" >{{$data->note}}</textarea>
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
                </script><div>
                    <button type="submit" style="inline-size: auto" class="btn btn-primary btn-block mb-4">Update Product</button>
                </div></tr>

        </td>



    </table>
</form>
</div>
</div>

<div class="card-footer">
    ..
</div>
</div>
</section>



