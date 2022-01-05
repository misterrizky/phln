<header id="header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">
                <!-- Logo ============================================= -->
                <div id="logo" class="me-lg-5">
                    <a href="javascript:;" class="standard-logo" data-dark-logo="{{asset('img/icon.jpg')}}"><img src="{{asset('img/icon.jpg')}}" alt="{{config('app.name')}}"></a>
                    <a href="javascript:;" class="retina-logo" data-dark-logo="{{asset('img/icon.jpg')}}"><img src="{{asset('img/icon.jpg')}}" alt="{{config('app.name')}}"></a>
                </div>
                <!-- #logo end -->
                <div class="header-misc">
                    <!-- Top Search ============================================= -->
                    <div id="top-search" class="header-misc-icon d-none">
                        <a href="javascript:;" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div>
                    <!-- #top-search end -->
                    <!-- Top Cart ============================================= -->
                    <div id="top-cart" class="header-misc-icon d-none">
                        <a href="javascript:;" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item">
                                    <div class="top-cart-item-image">
                                        <a href="javascript:;"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <div class="top-cart-item-desc-title">
                                            <a href="javascript:;">Blue Round-Neck Tshirt with a Button</a>
                                            <span class="top-cart-item-price d-block">$19.99</span>
                                        </div>
                                        <div class="top-cart-item-quantity">x 2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action">
                                <span class="top-checkout-price">$114.95</span>
                                <a href="javascript:;" class="button button-3d button-small m-0">View Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-misc">
                        <a href="{{route('phln.auth.index')}}" class="button button-rounded button-reveal button-mini button-white button-light text-end">
                            <i class="icon-line-arrow-right"></i>
                            <span>Masuk</span>
                        </a>
                    </div>
                    <!-- #top-cart end -->

                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu me-lg-auto">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="{{route('web.home')}}"><div>Home</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{route('web.about')}}"><div>Tentang</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="javascript:;"><div>Download</div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="javascript:;"><div>Blue Book</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="javascript:;"><div>Green Book</div></a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </nav><!-- #primary-menu end -->

                <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>