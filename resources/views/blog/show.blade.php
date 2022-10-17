@extends('index')

@section('title')
    {!! $post->title !!}
@endsection

@section('content')
<main id="main">

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
              <h1 class="mb-5">{{ $post->title }}</h1>
              <figure class="my-4 container">
                <img src="/storage/{{ $post->potrait }}" alt="{{ $post->title }}" class="img-fluid">
              </figure>
              {!! $post->body !!}
            </div><!-- End Single Post Content -->

            <!-- ======= Comments ======= -->
            <div class="comments">
              <h5 class="comment-title py-4">Comments</h5>
              <div class="comment d-flex mb-4">
              <div class="comment d-flex">
                @foreach($comments as $comment )
                <div class="flex-shrink-1 ms-2 ms-sm-3">
                  <div class="comment-meta d-flex">
                    <h6 class="me-2">{{ $comment->name }}</h6>
                    <span class="text-muted">{{ $comment->created_at }}</span>
                  </div>
                  <div class="comment-body">
                    {{ $comment->message }}
                  </div>
                </div>
                @endforeach
              </div>
            </div><!-- End Comments -->

            <!-- ======= Comments Form ======= -->
            <div class="row justify-content-center mt-5">
              <div class="col-lg-12">
                <h5 class="comment-title">Leave a Comment</h5>
                <form action="{{ route('comment.new', $post->id ) }}" method="POST">

                  @csrf
                  @method('POST')

                <div class="row">
                  <div class="col-lg-6 mb-3">
                    <label for="comment-name">Name</label>
                    <input type="text" class="form-control" id="comment-name" placeholder="Enter your name">
                  </div>
                  <div class="col-lg-6 mb-3">
                    <label for="comment-email">Email</label>
                    <input type="text" class="form-control" id="comment-email" placeholder="Enter your email">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="comment-message">Message</label>

                    <textarea class="form-control" id="comment-message" placeholder="Enter your name" cols="30" rows="3"></textarea>
                  </div>
                  <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Post comment">
                  </div>
                </div>
              </div>
              </form>
            </div><!-- End Comments Form -->
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
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at }}</span></div>
                    <h2 class="mb-2"><a href="{{ route('show', $post->id ) }}">{{ $post->title }}</a></h2>
                    <span class="author mb-3 d-block">{{ $post->user->name }}</span>
                    </div>
                    @endforeach

                </div> <!-- End Latest -->
              </div>
            </div>

            <div class="aside-block">
              <h3 class="aside-title">Video</h3>
              <div class="video-post">
                <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="{{ asset('gg2.png') }}" alt="" class="img-fluid">
                </a>
              </div>
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
  </main><!-- End #main --
@endsection