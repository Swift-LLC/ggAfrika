<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>gg Afrika- @yield('title')</title>
        <meta name="keywords" content="ggafrika, startup and smes,tourism and ecoculture,afrika,ggafrika market place, culture and heritage, gg la wananchi,">
        <meta name="description" content="Social media across Afika to the world.The hub of future innovations and budding entreprenuers. Do take a snap, tour with us and be part if Afrika's journey.Market place for all outlooks and outfits for growing businesses. Young and budding entreprenuers advertise across Afrika.
          Reach out, build, innovate and grow to your full potential.Take courage to invent the future. Make a difference. Let love be won and shared.">
        <meta name="robots" content="index, follow">
        <meta name="author" content="_wawiny">
       
        <!-- Design fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <!-- CSS only --> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
        <link rel="stylesheet" href="{{asset('css/resp.css')}}">
        <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet">
            <style>
             
        </style>
    </head>
    <body class="">
            <nav class="navbar navbar-expand-lg fixed-top" >
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="https://i.postimg.cc/j2rTp7Hm/IMG-20220202-WA0008.jpg" style="width: 30px; height:20px; border-radius:50%;"  class="d-inline-block align-top" alt="ggafrika-logo"> 
                        <span><b>GG.Afrika</b></span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="color: black; top: 10px;">
                        <span><i class="bi bi-list"></i></span>
                    </button>
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
                        <ul class="navbar-nav ms-auto">
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
                                    <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-person"></i>Account</a>
                                </li>
                                @endauth
                        @endif
                        </ul>
                    </div>
                </nav>
                <br>
        @yield('content')
        <br>

        <footer class="footer pt-3">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-lg-4  col-md-12 col-sm-12  ">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <h4 class="text-white">About GG Afrika</h4>
                                <p>Take courage to invent the future. Make a difference. Let love be won and shared.</p>
                                <h5 class="text-white"><b>Connect with us</b></h5>
                                <div class="social">
                                    <a href="https://m.facebook.com/GG-Afrika-107646545139344" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="bi bi-facebook text-white"></i></a>&nbsp;
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>&nbsp;
                                    <a href="https://www.instagram.com/ggafrika/"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="bi bi-instagram text-white"></i></a>&nbsp;
                                    <a href="https://google.com/?ggafrika" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="bi bi-google text-white"></i></a>&nbsp;
                                    <a href="https://"  target="_blank" data-toggle="tooltip" data-placement="bottom" title="YouTube"><i class="bi bi-youtube"></i></a>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <h4 class="text-white">Contact Us </h4>
                            <p class="link-widget"><a href="mailto:info@ggafrika.com" target="_blank"><i class="fa fa-envelope"></i> info@ggafrika.com </a></p>
                            <p class="link-widget"><a href="#"><i class="fa fa-phone"></i> +254 701 700 144</a></p>
                            <p class="link-widget"><a href="#"><i class="fa fa-home"></i> P.O Box 20100-00100 Nairobi, KE</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <h4 class="text-white">About Us </h4>
                                    <p class="link-widget"><a href="{{ route('about') }}">About GG Afrika</a></p>
                                    <p class="link-widget"><a href="{{ route('advertising')}}">Advertising</a></p>
                                    <p class="link-widget"><a href="#">Write for us</a></p>
                                    <p class="link-widget"><a href="{{ route('support')}}">Support & FAQs</a></p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-warning text-center">&copy; GG Afrika 2022-2030</a>.</div>
                <br>
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
            <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
        <script>
            var splide1 = new Splide( '.splide1', {
                type  : 'fade',
                perPage: 1,
                gap: 0,
                padding: 0,
                rewind: true,
                width : '100vw',
                height: 700,
                cover: true,
                autoplay: true,
                interval: 4000
                } );
                splide1.mount();

                 /**
   * Testimonials slider
   */
/**
   * Clients Slider
   */
      new Swiper('.gallery-slider', {
        speed: 400,
        loop: true,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 10
          }
        }
      });
        </script>
    </body>
</html>
