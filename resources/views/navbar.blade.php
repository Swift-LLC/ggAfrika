<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>gg Afrika- @yield('title')</title>
        <meta
            name="keywords"
            content="ggafrika, startup and smes,tourism and ecoculture,afrika,ggafrika market place, culture and heritage, gg la wananchi,"
        />
        <meta
            name="description"
            content="Social media across Afika to the world.The hub of future innovations and budding entreprenuers. Do take a snap, tour with us and be part if Afrika's journey.Market place for all outlooks and outfits for growing businesses. Young and budding entreprenuers advertise across Afrika.
          Reach out, build, innovate and grow to your full potential.Take courage to invent the future. Make a difference. Let love be won and shared."
        />
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
                background-color: #fffffff !important;
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
                background: #fffffff;
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
<body class="h-100">
    <nav class="navbar navbar-expand-lg ">
        <div class="container justify-content-center">
            <h2 class="text-center title pt-2"><img src="{{asset('images/logo.jpeg') }}" alt="gg afrika" style="width: 50px; height: 40px; border-radius: 50px;"> GG Afrika</h2>
        </div>
        </nav>
        
        
        @yield('content')

        {!! NoCaptcha::renderJs() !!}
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
