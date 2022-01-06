<section  class="homepage-slider" id="home-slider">
    <div class="flexslider">
        <ul class="slides">
            @foreach($slider as $rs)
            <li>
                <img src="{{Storage::url($rs->image)}}" style="height: 530px" alt="" />
                <div class="intro">
                    <h1>{{$rs->title}}</h1>
                    <p><span>{{$rs->price}}</span></p>
                   <p> <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" type="button" class="btn btn-warning">İncele</a></p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
{{--<section class="header_text">
    We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates.
    <br/>Don't miss to use our cheap abd best bootstrap templates.
</section>--}}
