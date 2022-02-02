<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>gg Afrika</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="_wawiny">
        <!-- Site Icons -->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
        <!-- Design fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('dist/css/splide.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
        <link rel="stylesheet" href="{{asset('css/resp.css')}}">
        <!-- FontAwesome Icons core CSS -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link href="{{asset('css/colors.css')}}" rel="stylesheet">
        <link href="{{asset('css/tech.css')}}" rel="stylesheet">
            <style>
            #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: rgb(255, 166, 0);
                color: white;
                cursor: pointer;
                padding: 10px;
                border-radius: 4px;
            }

            #myBtn:hover {
                background-color: #555;
            }
        </style>
        @section('custom')
        @endsection
    </head>
    <body class="antialiased">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md  fixed-top bg-warning">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="color: black; top: 10px;">
                        <span><i class="fa fa-bars"></i></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{asset('images/logo.jpeg')}}" style="width: 30px; height:20px; border-radius:50%;"  class="d-inline-block align-top" alt="ggafrika-logo"> 
                        <span><b>gg-afrika</b></span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            @auth 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin') }}">Dashboard</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            @endauth
                            @foreach($categories as $categories)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showcat', $categories->id) }}">{{$categories->name}} </a>
                            </li>
                            @endforeach
                        </ul>
                        <ul class="navbar-nav mr-2">
                            @if (Route::has('login'))
                                @auth
                                <li class="nav-item">
                                    <div>
                                        <a  href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                </li>
                                    <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </li>
                                    @endif -->
                                @endauth
                        @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        @yield('content')
        <footer class="footer" style="padding: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="{{ route('home') }}">GG Afrika</a>
                                <p>GG Afrika is a culture and heritage blog, we share culture, news and wananchi articles.</p>
                                <h5><b>Connect with us</b></h5>
                                <div class="social">
                                    <a href="https://m.facebook.com/GG-Afrika-107646545139344" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/ggafrika/"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="https://google.com/?ggafrika" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="https://"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="YouTube"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <h5>Contact Us </h5>
                            <p class="link-widget"><a href="info@ggafrika.com"><i class="fa fa-envelope"></i> info@ggafrika.com </a></p>
                            <p class="link-widget"><a href="#"><i class="fa fa-phone"></i> +254 701 700 144</a></p>
                            <p class="link-widget"><a href="#"><i class="fa fa-home"></i> P.O Box 20100-00100 Nairobi, KE</a></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <h5>About Us</h5>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">About GG Afrika</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Write for us</a></li>
                                    <li><a href="#">Support & FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-warning text-center">&copy; GG Afrika 2022-2030</a>.</div>
                <p class="text-center">A Swift Creation </p>
            </div>
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
        </body>
            <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }
            </script>
            <script src="{{asset('dist/js/splide.min.js')}}"></script>
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script src="{{asset('js/tether.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/custom.js')}}"></script>
        <script>
            var splide1 = new Splide( '.splide1', {
                perPage: 1,
                rewind : true,
                cover  : true,
		        // heightRatio: 0.7,
                } );
                splide1.mount();
                var splide = new Splide( '.splide', {
                
                    perPage : 4,
                    autoplay: true,
                    } );
                splide.mount();
        </script>
    </body>
</html>
