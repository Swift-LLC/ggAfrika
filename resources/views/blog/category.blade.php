@extends('index')

@section('title')
   {{ $name }}
@endsection

@section('content')

<main id="main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9" data-aos="fade-up">
            <h3 class="category-title">Category: {{ $name }}</h3>
               @foreach($posts as $post)
            <div class="d-md-flex post-entry-2 half">
              <a href="{{ route('show', $post->id ) }}" class="me-4 thumbnail">
                <img src="/storage/{{ $post->potrait}} " alt="" class="img-fluid">
              </a>
              <div>
                <div class="post-meta"><span class="date">{{ $name }}</span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
                <h3><a href="{{ route('show', $post->id ) }}">{{ $post->title }}</a></h3>
                <p>{!!  \Illuminate\Support\Str::limit($post->body, 200, $end='...') !!}</p>
                <div class="d-flex align-items-center author">
                  <div class="name">
                    <h3 class="m-0 p-0">{{ $post->user->name }}</h3>
                  </div>
                </div>
              </div>
            
            </div>
            @endforeach
          
            <div class="text-start py-4">
              <div class="custom-pagination">
                <a href="#" class="prev">Previous</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#" class="next">Next</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">

                <!-- Popular -->
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                 
                  @foreach($related as $post)
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
                    <h2 class="mb-2"><a href="{{ route('show', $post->id ) }}">{{ $post->title }}</a></h2>
                    <span class="author mb-3 d-block">{{ $post->user->name }}</span>
                  </div>
                  @endforeach

   
                </div> <!-- End Popular -->

                <!-- Trending -->
                <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
               
                  @foreach($related as $post)
                  <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
                  <h2 class="mb-2"><a href="{{ route('show', $post->id ) }}">{{ $post->title }}</a></h2>
                  <span class="author mb-3 d-block">{{ $post->user->name }}</span>
                  </div>
                  @endforeach

                </div> <!-- End Trending -->

                <!-- Latest -->
                <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">

                @foreach($related as $post)
                  <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
                  <h2 class="mb-2"><a href="{{ route('show', $post->id ) }}">{{ $post->title }}</a></h2>
                  <span class="author mb-3 d-block">{{ $post->user->name }}</span>
                  </div>
                  @endforeach

                </div> 
               
              </div>
            </div>

            <div class="aside-block">
              <h3 class="aside-title">Video</h3>

              @foreach($videos as $video)
              <div class="video-post">
                <a href="https://www.youtube.com/embed/{{$video->url}}" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="{{ asset('post-landscape-5.jpg') }}" alt="{{ $video->name }}" class="img-fluid">
                </a>
              </div>
              @endforeach
            </div><!-- End Video -->

            <div class="aside-block">
              <h3 class="aside-title">Categories</h3>
              <ul class="aside-links list-unstyled">
                @foreach($categories as $category)
               <li><a href="{{ route('showcat', [$category->id ,$category->name]) }}"> <i class="bi bi-chevron-right"></i> {{ $category->name }}</a></li>
               @endforeach
              </ul>
            </div><!-- End Categories -->

            <div class="aside-block">
              <h3 class="aside-title">Tags</h3>
              <ul class="aside-tags list-unstyled">
              @foreach($categories as $category)
               <li><a href="{{ route('showcat', [$category->id ,$category->name]) }}">{{ $category->name }}</a></li>
               @endforeach
              </ul>
            </div><!-- End Tags -->

          </div>

        </div>
      </div>
    </section>
  </main><!-- End #main -->
@endsection