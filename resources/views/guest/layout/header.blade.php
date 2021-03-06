<!-- Page Preloder -->
<!-- <div id="preloder">
    <div class="loader"></div>
</div> -->

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<!-- <div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="#">Sign in</a>
            <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
            <span>Usd <i class="arrow_carrot-down"></i></span>
            <ul>
                <li>USD</li>
                <li>EUR</li>
                <li>USD</li>
            </ul>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{asset('shop/img/icon/search.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('shop/img/icon/heart.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('shop/img/icon/cart.png')}}" alt=""> <span></span></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div> -->
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <!-- <a href="#">Sign in</a>
                            <a href="#">FAQs</a> -->
                        </div>
                        <div class="header__top__hover">
                            <!-- <span>Usd <i class="arrow_carrot-down"></i></span>
                            <ul>
                                <li>USD</li>
                                <li>EUR</li>
                                <li>USD</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo" style="padding: 0">
                    <a href="/"><img src="{{asset('/logo.png')}}" alt="" width="60%"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul id="menu_header">
                        <li class="menu {{request()->segment(1) == '' ? 'active' : ''}}"><a href="/">Trang ch???</a></li>
                        <li class="menu"><a href="#">Gi???i thi???u</a></li>
                        <li class="menu {{request()->segment(1) == 'shop' ? 'active' : ''}}"><a href="{{route('shop.index')}}">S???n ph???m</a></li>
                        <li class="menu"><a href="#">Blog</a></li>
                        <li class="menu"><a href="#">Li??n h???</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('shop/img/icon/search.png')}}" alt=""></a>
                    <a href="{{route('cart.show')}}"><img src="{{asset('shop/img/icon/cart.png')}}" alt=""> <span id="cart">@if(Session::has('cart')!=null){{Session::get('cart')->totalQuanty}} @else 0 @endif</span></a>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->