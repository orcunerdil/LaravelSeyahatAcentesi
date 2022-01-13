<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            @auth
            <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            @endauth
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="{{route('adminhome')}}"><em class="fa fa-dashboard">&nbsp;</em> Anasayfa</a></li>
        <li><a href="{{route('admin_category')}}"><em class="fa fa-navicon"">&nbsp;</em> Kategoriler</a></li>
        <li><a href="{{route('admin_products')}}"><em class="fa fa-bar-chart">&nbsp;</em> Ürünler</a></li>
        <li><a href="{{route('admin_message')}}"><em class="fa fa-bar-chart">&nbsp;</em> Mesajlar</a></li>
        <li><a href="{{route('admin_setting')}}"><em class="fa fa-toggle-off">&nbsp;</em>Setting</a></li>
        <li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Rezervasyon Menüsü<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="{{route('admin_orders')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Tüm Rezervasyonlar
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Yeni Rezervasyonlar
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Onaylanan Rezervasyonlar
                    </a></li>
            </ul>
        </li>
        {{--<li><a href="{{route('admin_logout')}}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>--}}


            @csrf
       @auth
        <a href="{{route('logout')}}" class="d-block">Logout</a>
            @endauth

        </a></li>
    </ul>
</div><!--/.sidebar-->
