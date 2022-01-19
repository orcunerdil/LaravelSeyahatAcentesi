<div class="card-body">
    <table class="table table_bordered table-striped">


        <tr>
            <th>Id</th> <td>{{$data->id}}</td>
        </tr>
        <tr>
            <th>Adı</th> <td>{{$data->name}}</td>
        </tr>
        <tr>
            <th>Email</th> <td>{{$data->email}}</td>
        </tr>

        <tr>
            <th>Roller</th>
            <td>
                <table>
                    @foreach($data->roles as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>
                                <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}} "></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>

        <tr>
            <th>Rol Ekle</th>
            <td>
                <form action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <select name="roleid">
                        @foreach($datalist as $rs)
                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary"> Rol Ekle</button>
                </form>
            </td>
        </tr>
    </table>



</div>
