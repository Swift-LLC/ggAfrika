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
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />
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
                font-family: "Jost", sans-serif;
            }
            .btn-warning {
                color: #fff;
                background-color: #ec971f !important;
                border-color: #ec971f;
            }

            a {
                color: #000000;
            }
            a:hover {
                color: #000000;
                text-decoration: none;
            }

            .btn-warning:hover {
                color: #fff;
                background-color: #ec971f;
                border-color: #eb9316;
            }
            .bg-warning {
                background-color: #ec971f !important;
            }

            .d-flex {
                justify-content: space-between;
            }
            .link-widget > a {
                text-decoration: none;
            }

            .navbar {
                background-color: #ffffff !important;
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
          

            .bg-orange {
                background-color: #ff6347 !important;
            }
            .text-warning {
                color: #ec971f !important;
            }

            body {
                font-family: "Open Sans", sans-serif;
                min-height: 90vh;
                background: #fffffff;
            }
            h1, h2, h3, h4, h5, h6 {
    font-family: "Jost", sans-serif;
  }
           
            
        </style>
    </head>
<body class="h-100">
    <nav class="navbar navbar-expand-lg ">
        <div class="container justify-content-center">
            <h2 class="text-center title pt-2"><img src="{{asset('images/logo.jpeg') }}" alt="gg afrika" style="width: 50px; height: 40px; border-radius: 50px;"><a href="{{ url('/') }}">GG Afrika</a></h2>
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
