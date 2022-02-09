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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('dist/css/splide.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
        <link rel="stylesheet" href="{{asset('css/resp.css')}}">
        <!-- FontAwesome Icons core CSS -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link href="{{asset('css/colors.css')}}" rel="stylesheet">
        <link href="{{asset('css/tech.css')}}" rel="stylesheet">
            <style>
                body{
                    height:100%;
                }
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
            .gallery {
  overflow: hidden;
}
.swiper-slider{
    width:10em;
}
.swiper-slide img{
    width:80%;
    border-radius: 50%;
    
}
.gallery .swiper-pagination {
  margin-top: 20px;
  position: relative;
}
.gallery .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid orange;
}
.gallery .swiper-pagination .swiper-pagination-bullet-active {
  background-color: orange;
}
.gallery .swiper-slide-active {
  text-align: center;
}
@media (min-width: 992px) {
  .gallery .swiper-wrapper {
    padding: 40px 0;
  }
  
  
}
@media (max-width:640px){
      .swiper-slider{
    width:50px;
}
.swiper-slide img{
    width:50%;
    border-radius: 50%;
    
}
  }

            /*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials .testimonials-carousel, .testimonials .testimonials-slider {
  overflow: hidden;
}
.testimonials .testimonial-item {
  box-sizing: content-box;
  width:200px;
  min-height: 100px;
}
.testimonials .testimonial-item .testimonial-img {
  width: 100px;
  border-radius: 50%;
  padding:0px;
  margin:0px;
  position: relative;
  z-index: 2;
  border: 6px solid #fff;
}
.testimonials .testimonial-item {
  font-size: 18px;
  font-weight: bold;
 
  color: #111;
}
.testimonials .testimonial-item  {
  font-size: 14px;
  color: #999;
  
}
.testimonials .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
  color: #b2e4e6;
  font-size: 26px;
}
.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}
.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}
.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #3fbbc0;
}
.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #3fbbc0;
}
        </style>
        @section('custom')
        @endsection
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png')}}">
<link rel="manifest" href="/site.webmanifest">
    </head>
    <body class="antialiased">
        <header class="tech-header header" style="margin-bottom:30px;">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md   fixed-top bg-warning" >
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="color: black; top: 10px;">
                        <span><i class="fa fa-bars"></i></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="https://i.postimg.cc/j2rTp7Hm/IMG-20220202-WA0008.jpg" style="width: 30px; height:20px; border-radius:50%;"  class="d-inline-block align-top" alt="ggafrika-logo"> 
                        <span><b>GG.Afrika</b></span>
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
        <br><br>
        <footer class="footer pt-3" style="padding: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="{{ route('home') }}">GG Afrika</a>
                                <p>Take courage to invent the future. Make a difference. Let love be won and shared.</p>
                                <h5 class="text-white"><b>Connect with us</b></h5>
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
                            <h4 class="text-white">Contact Us </h4>
                            <p class="link-widget"><a href="mailto:info@ggafrika.com" target="_blank"><i class="fa fa-envelope"></i> info@ggafrika.com </a></p>
                            <p class="link-widget"><a href="#"><i class="fa fa-phone"></i> +254 701 700 144</a></p>
                            <p class="link-widget"><a href="#"><i class="fa fa-home"></i> P.O Box 20100-00100 Nairobi, KE</a></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <h4 class="text-white">About Us </h4>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="{{ route('about') }}">About GG Afrika</a></li>
                                    <li><a href="{{ route('advertising')}}">Advertising</a></li>
                                    <li><a href="#">Write for us</a></li>
                                    <li><a href="{{ route('support')}}">Support & FAQs</a></li>
                                </ul>
                            </div>
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
