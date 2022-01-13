<div>
    <h3>Mesaj Detay</h3>
    @include('home.message')
</div>
<form action="{{route('admin_order_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <table border="1" id="example" class="display" style="width:100%">

        <tr><th>Id</th><td>{{$data->id}}</td></tr>
        <tr>  <th>Name</th><td>{{$data->user->name}}</td></tr>
        <tr>  <th>Email</th><td>{{$data->email}}</td></tr>
        <tr>  <th>Telefon</th><td>{{$data->phone}}</td></tr>
        <tr>   <th>Adres</th><td>{{$data->address}}</td></tr>
        <tr>   <th>Toplam</th><td>{{$data->total}} TL</td></tr>
        <tr>   <th>Tarih</th><td>{{$data->created_at}} TL</td></tr>
        <tr>   <th>Satın Alınan Ürün</th><td>{{$data->note}} </td></tr>
        <tr>   <th>Status</th><td> <div class="form-outline mb-4">

                    <select class="form-control select 2" name="status" style="width: 100%">
                        <option selected="selected">{{$data->status}}</option>
                        <option>Onaylandı</option>
                        <option>Reddedildi</option>
                    </select>
                </div></td></tr>


                <div>
                    <button type="submit" style="inline-size: auto" class="btn btn-primary btn-block mb-4">Update</button>
                </div></tr>





    </table>
</form>
</div>
</div>

<div class="card-footer">
    ..
</div>
</div>
</section>



