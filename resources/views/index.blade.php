<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ggAfrika</title>
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
 <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/resp.css')}}">

        <!-- FontAwesome Icons core CSS -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('css/caro.css')}}" rel="stylesheet">


        <link href="{{asset("style.css")}}" rel="stylesheet">

        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

        <link href="{{asset('css/colors.css')}}" rel="stylesheet">

        <link href="{{asset('css/tech.css')}}" rel="stylesheet">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
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

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @section('custom')

        @endsection
    </head>
    <body class="antialiased">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md  fixed-top bg-warning">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" color="secondary"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('images/logo.jpeg')}}" style="width: 30px; height:20px; border-radius:50%;"  class="d-inline-block align-top" alt="">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showcat', 4) }}">Gg la Wananchi </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showcat', 5) }}">StartUp and SMEs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showcat', 7) }}">Culture & Heritage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showcat', 6) }}l">Tourism and Eco-Culture</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            @if (Route::has('login'))

                                @auth

                                <li class="nav-item">
                                    <div >
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
                                    @if (Route::has('register'))
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </li>
                                    @endif
                                @endauth

                        @endif


                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.html">GG Afrika</a>
                                <p>GG Afrika is a culture and heritage blog, we share culture, news and wananchi articles.</p>
                                <hr class="invis">
                                <br><br><br><br>
                                <h2><b>Connect with us</b></h2>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title text-black">Email Address</h2>
                            <p class="link-widget"><a href="#">Example@gmail.com </a></p>
                            <h2 class="widget-title">Phone Number</h2>
                            <p class="link-widget"><a href="#">+234-556-778-88</a></p>
                            <h2 class="widget-title">Mail Address</h2>
                            <p class="link-widget"><a href="#">P.O Box 123 Afrika</a></p>

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Copyrights</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">About GG Afrika</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Write for us</a></li>
                                    <li><a href="#">Trademark</a></li>
                                    <li><a href="#">Support & FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="newsletter-widget float-right  ">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="Enter your email address">
                        <button type="submit" class="btn btn-primary">&#8594;</button>
                    </form>
                </div>
                <br><br>   <br><br>
                <div class="text-warning text-center">&copy; GG Afrika 2022-2030</a>.</div>


            </div>
        </footer>

        <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
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



            <!-- Core JavaScript
            ================================================== -->

            {{-- <script src="js/jquery.min.js"></script>
            <script src="js/tether.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/custom.js"></script>
        </body> --}}

    <script src="{{asset('dist/js/splide.min.js')}}"></script>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

        <script>
            var splide = new Splide( '.splide', {
                perPage: 1,
                rewind : true,
                } );

                splide.mount();
        </script>


    </body>
</html>
