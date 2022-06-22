@extends('index')

@section('title')
Social media across Afrika to the world.The hub of future innovations and budding entreprenuers
@endsection


@section('content')
      <div id="carouselExampleControls" class="carousel slide carousel-slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block " src="https://i.postimg.cc/j2rTp7Hm/IMG-20220202-WA0008.jpg" alt="Beautiful Highlights" style=" object-fit: cover;">
                </div>
                @foreach($slides as $slide)
                    <div class="carousel-item">
                        <img class="d-block " src="/storage/{{$slide->image}}" alt="Beautiful Highlights" style="object-fit: cover;" alt="{{ $slide->name }}">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span><i class="bi bi-arrow-left-circle-fill" style="font-size: 50px; color: #ec971f; "  aria-hidden="true"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span><i class="bi bi-arrow-right-circle-fill" style="font-size: 50px; color:#ec971f;"  aria-hidden="true"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
<br />
   <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
            <a class="nav-link active" style="color: #ec971f; font-weight: bold;" id="home-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="home" aria-selected="true">Latest</a>
         </li>
         <li class="nav-item">
            <a class="nav-link " style="color: #ec971f; font-weight: bold;"  id="profile-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="profile" aria-selected="false">Popular</a>
         </li>
      </ul>
<br>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="home-tab">
     <div class="row">
      @foreach($posts as $post)
      @if ($post->published == 1)
         <div class="col-lg-4 col-md-4 col-sm-12 ">
            <div class="card">
               <img style="height:200px; object-fit: cover;" src="/storage/{{$post->potrait}}" alt="{{ $post->title }}">
               <div class="card-body">
                     <h3 class="title">{{ $post->title}}</h3>
                     <p>{{ \Illuminate\Support\Str::limit($post->about, 90, $end='...') }}</p>
                     <div class="d-flex space-between">
                        <small><i class="bi bi-pen"></i>{{$post->user->name}}</small>
                        <a href="{{route('show',$post->id)}}" class="btn btn-warning">Read More	&#8594;</a>
                     </div>
               </div>
            </div>
         </div>
      @endif
      @endforeach
   </div>
   <br />
</div>

<!-- Popular  -->
<div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="profile-tab">
   <div class="row">
      @foreach($popular as $post)
      @if ($post->published == 1)
      <div class="col-lg-4 col-md-4 col-sm-12">
         <div class="card">
            <img style="height:200px; object-fit: cover;"  src="/storage/{{$post->potrait}}" alt="{{ $post->title }}" class="card-img-top"/>
            <div class="card-body">
                     <h3 class="title">{{ $post->title }}</h3>
                     <p>{{ \Illuminate\Support\Str::limit($post->about, 90, $end='...') }}</p>
                     <div class="d-flex space-between">
                        <small><i class="bi bi-pen"></i>{{$post->user->name}}</small>
                        <a href="{{route('show',$post->id)}}" class="btn btn-warning">Read More	&#8594;</a>
                     </div>
               </div>
         </div>
      </div>
      @endif
   @endforeach
  </div>
</div>
<br>

<!-- Videos  -->
<h3 class="text-center title">Recent Videos </h3>
<div class="row">
      @foreach ($videos as $video)
      @if ($video->published == 1)
         <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card">
               <div class="card-body">
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->url}}" allowfullscreen></iframe>
                  </div>
                  <h3 class="title text-center">{{$video->name}}</h3>
               </div>
            </div>
         </div>
      @endif
  @endforeach
</div>
  {!! $videos->links() !!}
</div>
</div>

<br>
<!-- Partners  -->
   <!-- <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">
        <div class="text-center">
          <h5>Partners</h5>
          <p>The best companies we work with to ensure you get Adventorous experience of Afrika</p>
        </div>
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg" alt="partner"></div>
            <div class="swiper-slide"><img src="https://i.postimg.cc/j2rTp7Hm/IMG-20220202-WA0008.jpg" alt="partner"></div>
            <div class="swiper-slide"><img src="{{asset('images/logo.jpeg')}}" alt="partner"></div>
            <div class="swiper-slide"><img src="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg" alt="partner"></div>
            <div class="swiper-slide"><img src="https://i.postimg.cc/j2rTp7Hm/IMG-20220202-WA0008.jpg" alt="partner"></div>
            <div class="swiper-slide"><img src="{{asset('images/logo.jpeg')}}" alt="partner"></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section> -->


@endsection
