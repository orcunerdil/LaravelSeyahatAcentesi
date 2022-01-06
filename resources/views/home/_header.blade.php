@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
            </form>
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">
                    @auth
                    <a href="{{route('home')}}">Home
                        <li><a href="{{route('myprofile')}}"strong class="text-uppercase">{{Auth::user()->name}}</strong></a></li>
                    <li><a href="cart.html">Your Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>

                        <li><a href="{{route('logout')}}">Logout</a></li>
                    @endauth
                    @guest
                            <li><a href="/login">Giriş</a></li>
                            <li><a href="/register">Kayıt Ol</a></li>
                        @endguest
                </ul>
            </div>
        </div>
    </div>
</div>


<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="{{route('home')}}" class="logo pull-left"><img src="{{asset('assets')}}/themes/images/logo.png" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul>
                    @foreach($parentCategories as $rs)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true"> {{$rs->title}} <i class="fa fa-angle-right"></i></a>
                            <div class="dropdown-menu">
                                @if(count($rs->children))
                                    @include('home.categorytree',['children'=> $rs->children])
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </section>



