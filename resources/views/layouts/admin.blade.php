@if(Auth::user()->is_admin == 1)

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>
  <meta name="robots" content="noindex, nofollow">
  <!-- Font Awesome Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('images/site.webmanifest')}}">

  <style>

    @media only screen and (max-width: 768px) {
        .menu {
          visibility: hidden;
        }
    }
  </style>
 
</head>
<body class="hold-transition dark-mode">
  <aside class="main-sidebar sidebar-light-primary  aside" id='mySidebar'>
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('images/logo.jpeg')}}" alt="GG Afrika Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ggAfrika</span>
       <a href="javascript:void(0)" class="closebtn " onclick="closeNav()">×</a>
    </a>
    <div class="sidebar" id="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{route('admin')}}" class="nav-link active">
              <i class="nav-icon bi bi-tachometer"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li> 
           <li class="nav-item">
            <a href="{{route('slides')}}" class="nav-link">
              <i class="nav-icon bi bi-image"></i>
              <p>
                Slides
              </p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="{{route('posts')}}" class="nav-link">
              <i class="nav-icon bi bi-table"></i>
              <p>
                Posts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('allvideos')}}" class="nav-link">
              <i class="nav-icon bi bi-play"></i>
              <p>
                Videos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('editors')}}" class="nav-link">
              <i class="nav-icon bi bi-people"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('category')}}" class="nav-link">
              <i class="nav-icon bi bi-list"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('doc')}}" class="nav-link">
              <i class="nav-icon bi bi-file"></i>
              <p>
                Documentation
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
<div style="margin-left" id="main">
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="https://i.postimg.cc/j2rTp7Hm/IMG-20220202-WA0008.jpg" alt="gg afrika logo" height="150" width="150" style="border-radius: 50px;">
  </div>
  <nav class="main-header navbar navbar-expand navbar-dark" style="margin-left:0px;">
    <ul class="navbar-nav">
      <li class="nav-item">
        <div class="menu">
          <button class="openbtn" onclick="openNav()">☰</button>  
        </div>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ms-auto">
                    <a  href="{{ route('logout') }}"
                    class="nav-link"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
    </ul>
  </nav>
  <div class="content-wrapper" style="margin-left:0px;">

    @yield('content')

  </div>

  <script>
	const editor = Jodit.make('#editor', {
    height: 400
  });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px"; 
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
@else 

<div class="text-center">

@yield('content')
</div>

@endif
</html>
