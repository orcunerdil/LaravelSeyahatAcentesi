
@foreach($children as $subcategory)

    <div align="center">
    <a style="text-align:center" href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
        <br>
    </div>

@endforeach
