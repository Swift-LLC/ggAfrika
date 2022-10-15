@extends('index')

@section('title')
Social media across Afrika to the world.The hub of future innovations and budding entreprenuers
@endsection

@section('content')
<main id="main">

<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider">
  <div class="container-md" data-aos="fade-in">
    <div class="row">
      <div class="col-12">
        <div class="swiper sliderFeaturedPosts">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('gg2.png');">
                <div class="img-bg-inner">
                  <h2>Welcome to gg afrika</h2>
                  <p>Take courage to invent the future. Make a difference. Let love be won and shared.</p>
                </div>
              </a>
            </div>
            @foreach($slides as $slide)
            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('/storage/{{$slide->image}}');">
                <div class="img-bg-inner">
                  <h2>{{ $slide->name }}</h2>
                </div>
              </a>
            </div>
            @endforeach

          </div>
          <div class="custom-swiper-button-next">
            <span class="bi-chevron-right"></span>
          </div>
          <div class="custom-swiper-button-prev">
            <span class="bi-chevron-left"></span>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Hero Slider Section -->

<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
  <div class="container" data-aos="fade-up">
    <div class="row g-5">
      <div class="col-lg-4">
        <div class="post-entry-1 lg">
          <a href="{{ route('show', $latest->id) }}"><img src="/storage/{{ $latest->potrait }}" alt="" class="img-fluid"></a>
          <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>{{ $latest->created_at }}</span></div>
          <h2><a href="{{ route('show', $latest->id) }}">{{ $latest->title }}</a></h2>
          <p class="mb-4 d-block">{!!  \Illuminate\Support\Str::limit($latest->body, 200, $end='...') !!}</p>
          <div class="d-flex align-items-center author">
            <div class="name">
              <h3 class="m-0 p-0">{{ $latest->user->name }}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="row g-5">
          <div class="col-lg-4 border-start custom-border">
            @foreach($posts as $post)
            <div class="post-entry-1">
              <a href="{{ route('show', $post->id ) }}"><img src="/storage/{{ $post->potrait }}" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
              <h2><a href="{{ route('show', $post->id ) }}">{{ $post->title }}</a></h2>
            </div>
            @endforeach
          </div>
          <div class="col-lg-4 border-start custom-border">
            @foreach($popular as $post)
            <div class="post-entry-1">
              <a href="{{ route('show', $post->id ) }}"><img src="storage/{{ $post->potrait }}" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
              <h2><a href="{{ route('show', $post->id ) }}">{{ $post->title }}</a></h2>
            </div>
            @endforeach
          </div>
          <!-- Trending Section -->
          <div class="col-lg-4">
            <div class="trending">
              <h3>Trending</h3>
              <ul class="trending-post">
                @foreach($topopular as $post)
                <li>
                  <a href="{{ route('show', $post->id ) }}">
                    <span class="number">{{ $post->id }}</span>
                    <h3>{{ $post->title }}</h3>
                    <span class="author">{{ $post->author }}</span>
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div> <!-- End Trending Section -->
        </div>
      </div>
    </div> <!-- End .row -->
  </div>
</section> <!-- End Post Grid Section -->

<section class="category-section">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2>videos</h2>
          <div><a href="#" class="more">See All </a></div>
        </div>

        <div class="row">
          <div class="col-md-9">

            <div class="d-lg-flex post-entry-2">
            <div class="video-post">
                <a href="https://www.youtube.com/embed/{{$video->url}}" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="{{ asset('logo.jpeg') }}" alt="{{ $video->name }}" class="img-fluid">
                </a>
              </div>
              <div class="ml-4">
                <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>{{ $any->created_at }}</span></div>
                <h3><a href="{{ route('show', $any->id ) }}">{{ $any->title }}</a></h3>
                <p>{!!  \Illuminate\Support\Str::limit($any->body, 200, $end='...') !!}</p>
                <div class="d-flex align-items-center author">
                  <div class="name">
                    <h3 class="m-0 p-0">{{ $any->user->name }}</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4">
                <div class="post-entry-1 border-bottom">
                  <a href="{{ route('show', $post->id ) }}"><img src="/storage/{{ $post->potrait }}" alt="{{ $post->title }}" class="img-fluid"></a>
                  <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
                  <h2 class="mb-2"><a href="{{ route('show', $post->id ) }}">{{ $post->title }}</a></h2>
                  <span class="author mb-3 d-block">{{ $post->user->name }}</span>
                  <p class="mb-4 d-block">{!!  \Illuminate\Support\Str::limit($post->body, 200, $end='...') !!}</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="post-entry-1">
                <a href="https://www.youtube.com/embed/{{$videos->url}}" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="{{ asset('gg2.png') }}" alt="{{ $video->name }}" class="img-fluid">
                </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
          @foreach($topopular as $post)
            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
              <h2 class="mb-2"><a href="{{ route('show', $post->id ) }}">{{ $post->title }}</a></h2>
              <span class="author mb-3 d-block">{{ $post->user->name }}</span>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </section><!-- End Culture Category Section -->


</main>
@endsection
