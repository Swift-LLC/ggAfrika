<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>GG Afrika - @yield('title')</title>
        <meta name="keywords" content="gg afrika, startup and smes,tourism and ecoculture,afrika, ggafrika market place, culture and heritage, gg la wananchi,">
        <meta name="description" content="Social interaction across Afrika and to the world.The hub of future innovations and budding entreprenuers.">
        <meta name="robots" content="index, follow" />
        <meta name="author" content="_wawiny" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300&display=swap"
            rel="stylesheet"
        />

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <!-- CSS only -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
            crossorigin="anonymous"
        />

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        />
        <link rel="stylesheet" href="{{asset('css/style2.css')}}" />
        <!-- <link rel="stylesheet" href="{{asset('css/resp.css')}}"> -->
        <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet" />
        <style>
            .title {
                font-family: "Roboto Condensed", sans-serif !important;
            }
            .btn-warning {
                color: #fff;
                background-color: #ec971f !important;
                border-color: #ec971f;
            }

            .btn-warning:hover {
                color: #fff;
                background-color: #ec971f;
                border-color: #eb9316;
            }
            .bg-warning {
                background-color: #ec971f !important;
            }
            .card-header {
                background-color: #ec971f !important;
            }

            .d-flex {
                justify-content: space-between;
            }
            .link-widget > a {
                text-decoration: none;
            }

            .navbar {
                background-color: #ec971f !important;
            }
            .active-link {
                color: #000;
            }

            .active-link:hover {
                color: #ec971f;
            }

            .nav-link {
                color: #000000;
                text-transform: uppercase;
                font-size: 0.9rem;
            }
            .nav-link:hover {
                color: #000000;
                text-decoration: underline;
            }

            .navbar-brand {
                color: #000000;
            }
            .navbar-brand:hover {
                color: #000000;
            }
            .footer {
                background-color: #000000;
                /* min-height: fit-content; */
                /* background-image: none; */
                bottom: 0;
                /* position: fixed; */
            }

            .footer p {
                color: #999999 !important;
            }

            .footer a {
                color: #999999 !important;
            }

            .bg-orange {
                background-color: #ff6347 !important;
            }

            .footer a:hover,
            .footer .fa:hover,
            .footer .fa:focus {
                color: #ec971f !important;
            }

            .text-warning {
                color: #ec971f !important;
            }

            body {
                font-family: "Montserrat", sans-serif;
                min-height: 90vh;
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
                background-color: #ec971f;
                color: white;
                cursor: pointer;
                padding: 10px;
                border-radius: 4px;
            }

            #myBtn:hover {
                background-color: #ec971f;
            }

            .gallery {
                overflow: hidden;
            }
            .swiper-slider {
                width: 7em;
            }
            .swiper-slide img {
                width: 30%;
                /* border-radius: 50%; */
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

            @media (max-width: 768px) {
                .gallery .swiper-wrapper {
                    padding: 40px 0;
                }
            }
            @media (max-width: 468px) {
                .swiper-slider {
                    width: 50px;
                }
                .swiper-slide > img {
                    width: 50%;
                }
            }
            .carousel {
                overflow: hidden;
                margin: auto;
            }

            @media only screen and (max-width: 768px) {
                .carousel {
                    /* max-height: 500px; */
                    overflow: hidden;
                    margin: auto;
                }
                .carousel-inner .carousel-item > img {
                    /* position: absolute; */
                    object-fit: cover;
                    height: 600px;
                    width: 100%;
                }
            }

            .carousel-inner .carousel-item > img {
                /* position: absolute; */
                object-fit: cover;
                height: 600px;
                width: 100%;
            }

            .pagination > li > a,
            .pagination > li > span {
                color: #ffffff;
                background-color: #ec971f;
            }

            .pagination > .active > a,
            .pagination > .active > a:focus,
            .pagination > .active > a:hover,
            .pagination > .active > span,
            .pagination > .active > span:focus,
            .pagination > .active > span:hover {
                background-color: #ec971f;
                border-color: #ec971f;
                color: #ffffff;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <b>GG.Afrika</b>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    style="color: black; top: 10px"
                >
                    <span><i class="bi bi-list fw-bold"></i></span>
                </button>
                <div
                    class="collapse navbar-collapse justify-content-center"
                    id="navbarCollapse"
                >
                    <ul class="navbar-nav mr-auto">
                        @auth
                        @if(Auth::user()->is_admin == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}"
                                >Dashboard</a
                            >
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"
                                >Home</a
                            >
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"
                                >Home</a
                            >
                        </li>
                        @endauth @foreach($categories as $category)
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ route('showcat', $category->name) }}"
                                >{{ $category->name }}</a
                            >
                        </li>
                        @endforeach
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login')) @auth
                        <li class="nav-item">
                            <div>
                                <a
                                    href="{{ route('logout') }}"
                                    class="nav-link"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"
                                >
                                    {{ __('Logout') }}
                                </a>
                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    class="d-none"
                                >
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"
                                ><i class="bi bi-person"></i>Account</a
                            >
                        </li>
                        @endauth @endif
                    </ul>
                </div>
            </div>
        </nav>
        <br />

        @yield('content')

        <br />

        <footer class="footer pt-5">
            <div class="container">
                <div class="row" style="justify-content: center">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-text text-left">
                            <h4 class="text-white title">Gg Afrika</h4>
                            <p>
                                Take courage to invent the future. Make a
                                difference. Let love be won and shared.
                            </p>
                            <h4 class="text-white title">Connect with us</h4>
                            <div class="social">
                                <a
                                    href="https://m.facebook.com/GG-Afrika-107646545139344"
                                    target="_blank"
                                    data-toggle="tooltip"
                                    data-placement="bottom"
                                    title="Facebook"
                                    ><i
                                        class="bi bi-facebook text-white"
                                    ></i></a
                                >&nbsp;
                                <a
                                    href="#"
                                    data-toggle="tooltip"
                                    data-placement="bottom"
                                    title="Twitter"
                                    ><i class="fa fa-twitter"></i></a
                                >&nbsp;
                                <a
                                    href="https://www.instagram.com/ggafrika/"
                                    target="_blank"
                                    data-toggle="tooltip"
                                    data-placement="bottom"
                                    title="Instagram"
                                    ><i
                                        class="bi bi-instagram text-white"
                                    ></i></a
                                >&nbsp;
                                <a
                                    href="https://google.com/q=?ggafrika"
                                    target="_blank"
                                    data-toggle="tooltip"
                                    data-placement="bottom"
                                    title="Google Plus"
                                    ><i class="bi bi-google text-white"></i></a
                                >&nbsp;
                                <a
                                    href="https://"
                                    target="_blank"
                                    data-toggle="tooltip"
                                    data-placement="bottom"
                                    title="YouTube"
                                    ><i class="bi bi-youtube text-white"></i></a
                                >&nbsp;
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <h4 class="text-white title">Contact Us</h4>
                            <p class="link-widget">
                                <a
                                    href="mailto:info@ggafrika.com"
                                    target="_blank"
                                    ><i class="bi bi-envelope"></i>
                                    info@ggafrika.com
                                </a>
                            </p>
                            <p class="link-widget">
                                <a href="tel:+254 701 700 144"
                                    ><i class="bi bi-phone"></i> +254 701 700
                                    144</a
                                >
                            </p>
                            <p class="link-widget">
                                <a href="#"
                                    ><i class="bi bi-house"></i> P.O Box
                                    20100-00100 Nairobi, KE</a
                                >
                            </p>
                        </div>
                    </div>
                    <br />
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <h4 class="text-white title">About Us</h4>
                            <p class="link-widget">
                                <a href="{{ route('about') }}"
                                    >About GG Afrika</a
                                >
                            </p>
                            <p class="link-widget">
                                <a href="{{ route('advertising')}}"
                                    >Advertising</a
                                >
        </p>
                            <p class="link-widget">
                                <a href="{{ route('support')}}"
                                    >Support & FAQs</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
                <br />
                <div class="text-warning text-center">
                    &copy; GG Afrika <span id="year"></span>.
                </div>
                <br />
            </div>
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            &#8593;
        </button>
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
        <script>
            // Get Year
            var d = new Date();
            document.getElementById("year").innerHTML = d.getFullYear();

            //Get the button
            var mybutton = document.getElementById("myBtn");
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction();
            };
            function scrollFunction() {
                if (
                    document.body.scrollTop > 20 ||
                    document.documentElement.scrollTop > 20
                ) {
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
            /* Clients Slider */
            new Swiper(".gallery-slider", {
                speed: 400,
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                slidesPerView: "auto",
                pagination: {
                    el: ".swiper-pagination",
                    type: "bullets",
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 5,
                    },
                },
            });
        </script>
    </body>
</html>
