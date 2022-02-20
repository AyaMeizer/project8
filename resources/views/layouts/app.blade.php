<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>



.formBooking{
    background-color: white !important;
    color: black !important;
    margin:0 1em 1em 0;
}



</style>

<body>
    {{-- <div id="app"> --}}
    <header style="background: url(../images/uploads/ft-bg.jpg) no-repeat;" class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="{{ url('/') }}"><img class="logo" src="{{ asset('images/logo1.png') }}" alt="" width="119"
                            height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ url('/') }}" class="btn "> Home</a>
                        </li>


                        <li class="dropdown first">
                            <a href="{{ url('/moviegrid') }}" class="btn ">Movies</a>
                        </li>

                        <li class="dropdown first">
                            <a href="{{ url('/about') }}" class="btn "> About</a>
                        </li>

                        <li class="dropdown first">
                            <a href="{{ url('/contact') }}" class="btn "> Contact</a>
                        </li>
                        {{-- <li class="loginLink"><a href="#">LOG In</a></li>
                            <li class="btn signupLink"><a href="#">sign up</a></li> --}}

                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">
                        @guest
                            @if (Route::has('login'))
                            <li class="dropdown first">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="btn">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                            <li class="loginLink">
                                <a class="nav-link" href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="btn signupLink">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                        @endguest
                        </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>


        </div>
    </header>
    <!-- END | Header -->


    <main class="py-4">
        @yield('content')
    </main>


    <!-- footer section-->
    <footer style="background: url(../images/uploads/ft-bg.jpg) no-repeat;" class="ht-footer">
        <div class="container">
            <div class="flex-parent-ft">
                <div class="flex-child-ft item1">
                    <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
                    <p>5th Avenue st, manhattan<br>
                        New York, NY 10001</p>
                    <p>Call us: <a href="#">(+01) 202 342 6789</a></p>
                </div>
                <div class="flex-child-ft item2">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blockbuster</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item3">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item4">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Watchlist</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">User Guide</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item5">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email...">
                    </form>
                    <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
                </div>
            </div>
        </div>
        <div class="ft-copyright">
            <div class="ft-left">
                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
            <div class="backtotop">
                <p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p>
            </div>
        </div>
    </footer>


    {{-- </div> --}}


    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>
