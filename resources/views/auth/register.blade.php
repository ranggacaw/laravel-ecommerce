<!doctype html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel | Ecommerce</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{asset('include/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('include/rs-plugin/css/layers.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('include/rs-plugin/css/navigation.css')}}"/>
    
    @stack('styles')
</head>
<body class="stretched">
    <!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

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
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            
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
        </header><!-- #header end -->

        <!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body pt-5">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</section><!-- #content end -->

        @include('layouts.footer')

    </div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{asset('include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

	<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
	<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
</body>
</html>

