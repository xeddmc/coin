<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style=" height: 100%;margin: 0;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Azerbaycanin ilk cryptoexchange platformu">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer>
    <script src="{{ asset('assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451') }}"></script>
    <script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>
    <script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
    </script>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css?h=03ab36d1dde930b7d44a712f19075641') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css?h=03ab36d1dde930b7d44a712f19075641') }}">
    <link rel="stylesheet" href="{{ URL('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/test.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Features-Blue.css?h=40c554ded5b4b9c0c58451552419c167') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Header-Blue.css?h=d2d90f82b710962b6c8f49f1a25467c3') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="opacity: 1;background-image: url('{{asset('assets/img/background.jpeg')}}');background-repeat: no-repeat;background-size: cover;  height: 100%;margin: 0;">
    <div>
        <div class="header">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    <div class="collapse navbar-collapse text-monospace text-nowrap" id="navcol-1" style="width: 250px;">
                        <ul class="nav navbar-nav">

                            <a class="navbar-brand" href="/lsapp/public">
                                <img src="{{ asset('assets/img/logo.png') }}" style="height: 100px;width: 100px;">
                            </a>
                            <li class="nav-item" role="presentation" style="padding-right: 30px;padding-left: 30px;padding-top: 40px;"><a class="nav-link active" href="services" style="font-size: 19px;">Services</a></li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="font-size: 19px;">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" style="font-size: 19px;">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')

</body>
<footer class="footer-basic" style=" font-size: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-auto h-100 text-center text-lg-left">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><span>⋅</span></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                    <li class="list-inline-item"><span>⋅</span></li>
                    <li class="list-inline-item"><a href="#">Terms of &nbsp;Use</a></li>
                    <li class="list-inline-item"><span>⋅</span></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">© All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 my-auto h-100 text-center text-lg-right">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



</html>