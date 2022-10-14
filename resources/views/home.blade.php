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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                </div>
              </a>
            </div>
            @foreach($slides as $slide)
            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('/storage/{{$slide->image}}');">
                <div class="img-bg-inner">
                  <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
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

</main>
@endsection
