 <!-- Top Bar
============================================= -->
<div id="top-bar">
    <div class="container">

        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-auto">
                <p class="mb-0 py-2 text-center text-md-start"><strong>Call Center:</strong> 0000-1111-2222 | <strong>Email:</strong> ranggacahyaw@gmail.com</p>
            </div>

            <div class="col-12 col-md-auto">

                <!-- Top Links
                ============================================= -->
                <div class="top-links on-click">
                    <ul class="top-links-container">
                        @if (Route::has('login'))
                            <li class="top-links-item">
                                @auth
                                    <a href="#">{{Auth::user()->name;}}</a>
                                    <ul class="top-links-sub-menu">
                                        <li class="top-links-item"><a href="#">Profile</a></li>
                                        <li class="top-links-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                    </ul>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                @else
                                <a href="#">Login</a>
                                <div class="top-links-section">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="johndoe@gmail.com">
    
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <button class="btn btn-primary w-100" type="submit">Sign in</button>
                                    </form>
                                </div>
                            </li>

                            <li class="top-links-item">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            </li>
                                @endauth
                        @endif
                    </ul>
                </div><!-- .top-links end -->
            </div>
        </div>

    </div>
</div><!-- #top-bar end -->

<!-- Header
============================================= -->
<header id="header" class="header-size-sm">
    <div class="container">
        <div class="header-row flex-column flex-lg-row justify-content-center justify-content-lg-start">

            <!-- Logo
            ============================================= -->
            <div id="logo" class="me-0 me-lg-auto">
                <a href="{{url('/') }}" class="standard-logo" data-dark-logo="{{asset('images/logo/logo.png')}}"><img src="{{asset('images/logo/logo.png')}}" alt="cawstudio Logo"></a>
                <a href="{{url('/') }}" class="retina-logo" data-dark-logo="{{asset('images/logo/logo.png')}}"><img src="{{asset('images/logo/logo.png')}}" alt="cawstudio Logo"></a>
            </div><!-- #logo end -->

            <div class="header-misc mb-4 mb-lg-0 order-lg-last">

                <ul class="header-extras me-0 me-lg-4">
                    <li>
                        <i class="i-plain icon-thumbs-up2 m-0"></i>
                        <div class="he-text">
                            Original Brands
                            <span>100% Guaranteed</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-truck2 m-0"></i>
                        <div class="he-text">
                            Free Shipping
                            <span>for $20 or more</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-undo m-0"></i>
                        <div class="he-text">
                            30-Day Returns
                            <span>Completely Free</span>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </div>

    <div id="header-wrap" class="border-top border-f5">
        <div class="container">
            <div class="header-row justify-content-between">

                <div class="header-misc">

                    <!-- Top Cart
                    ============================================= -->
                    <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                        <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <div class="top-cart-item-desc-title">
                                            <a href="#">Blue Round-Neck Tshirt with a Button</a>
                                            <span class="top-cart-item-price d-block">$19.99</span>
                                        </div>
                                        <div class="top-cart-item-quantity">x 2</div>
                                    </div>
                                </div>
                                <div class="top-cart-item">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <div class="top-cart-item-desc-title">
                                            <a href="#">Light Blue Denim Dress</a>
                                            <span class="top-cart-item-price d-block">$24.99</span>
                                        </div>
                                        <div class="top-cart-item-quantity">x 3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action">
                                <span class="top-checkout-price">$114.95</span>
                                <a href="#" class="button button-3d button-small m-0">View Cart</a>
                            </div>
                        </div>
                    </div><!-- #top-cart end -->

                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="{{url('/') }}"><div>Home</div></a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="#"><div>Men</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="#"><div>Women</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="http://blog.test" target="blank"><div>Blog</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ url('contact' )}}"><div>Contact</div></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->