<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>gg afrika</title>
  <meta content="social interactions across Africa and to the world" name="description">
  <meta content="gg afrika, startup and smes, tourism and ecoculture,afrika, ggafrika market place, culture and heritage, gg la wananchi" name="keywords">

  <meta name="robots" content="index, follow" />
        <meta name="author" content="_wawiny" />
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
      
        <!-- <img src="{{ asset('gg2.png') }}" alt="" style="border-radius: 50;"> -->
        <h1>GG Afrika</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          @foreach($categories as $category)
          <li><a href="{{ route('showcat', [$category->id ,$category->name]) }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        @guest
        <a href="https://www.instagram.com/ggafrika/" target="_blank" class="mx-2"><span class="bi-instagram"></span></a>
        <a href="{{ route('login') }}" class="mx-2"><span class="bi bi-box-arrow-in-right"></span> login</a>
        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list text-black mobile-nav-toggle"></i>


        
        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->
        @endguest
        @auth
        <a href="{{ route('admin') }}" class="mx-2"><span class="bi bi-speedometer"> dashboard</span></a>
        <a
                                    href="{{ route('logout') }}"
                                    class="mx-2"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"
                                >
                                <span class="bi bi-box-arrow-left"> {{ __('logout') }}
                                </a>
                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    class="d-none"
                                >
                                    @csrf
                                </form>
        @endauth

      </div>

    </div>

  </header><!-- End Header -->

        @yield('content')

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-content">
    <div class="container">

      <div class="row g-5">
        <div class="col-lg-4">
          <h3 class="footer-heading">About gg afrika</h3>
          <p>Take courage to invent the future. Make a difference. Let love be won and shared.</p>
          <p><a href="{{ route('about') }}" class="footer-link-more">Learn More</a></p>
        </div>
        <div class="col-6 col-lg-2">
          <h3 class="footer-heading">Quick Links</h3>
          <ul class="footer-links list-unstyled">
            <li><a href="{{ url('/') }}"><i class="bi bi-chevron-right"></i> Home</a></li>
            <li><a href="{{ route('about') }}"><i class="bi bi-chevron-right"></i> About us</a></li>
            <li><a href="{{ route('home') }}"><i class="bi bi-chevron-right"></i> Contact</a></li>
            <li><a href="{{ route('support') }}"><i class="bi bi-chevron-right"></i> FAQs</a></li>
            <li><a href="{{ route('policy') }}"><i class="bi bi-chevron-right"></i> Privacy Policy</a></li>
            <li><a href="{{ route('advertising') }}"><i class="bi bi-chevron-right"></i> Advertising</a></li>
            
          </ul>
        </div>
        <div class="col-6 col-lg-2">
          <h3 class="footer-heading">Categories</h3>
          <ul class="footer-links list-unstyled">
            @foreach($categories as $category )
            <li><a href="{{ route('showcat', [$category->id , $category->name]) }}"><i class="bi bi-chevron-right"></i>{{ $category->name }}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="footer-heading">Recent Posts</h3>

          <ul class="footer-links footer-blog-entry list-unstyled">

          @foreach($posts as $post )
            <li>
              <a href="{{ route('show', $post->id ) }}" class="d-flex align-items-center">
                <img src="/storage/{{ $post->potrait }}" alt="{{ $post->title }}" class="img-fluid me-3">
                <div>
                  <div class="post-meta d-block"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
                  <span>{{ $post->title }}</span>
                </div>
              </a>
            </li>
        @endforeach
          </ul>

        </div>
      </div>
    </div>
  </div>

  <div class="footer-legal">
    <div class="container">

      <div class="row justify-content-between">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          <div class="copyright">
            © Copyright <strong><span>gg afrika</span></strong>. 2022
          </div>

        </div>

        <div class="col-md-6">
          <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://m.facebook.com/GG-Afrika-107646545139344" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/ggafrika/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="tel: +254701700144" class="google-plus"><i class="bi bi-phone"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>

        </div>

      </div>

    </div>
  </div>

</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>