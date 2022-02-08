@extends('index')
@section('custom')
 <!-- style css -->
 
 
 <link rel="stylesheet" href="{{asset('css/style2.css')}}">
 <!-- Responsive-->
 <link rel="stylesheet" href="{{asset('css/resp.css')}}">
@endsection
@section('content')
    <div class="splide1">
      <div class="splide__track">
          <ul class="splide__list">
            @foreach ($post as $post)
             @if ($post->published == 1)
             <li class="splide__slide px-3" >
                <img  src="{{$post->potrait}}" alt="post image"/>
                <div class="splide_slide_container">
                   <div class="slide_content text-center" style="padding-top: 200px;">
                      <h1 class="text-white"> {{$post->title}}</h1>
                       <a href="{{route('show',$post->id)}}" class="btn btn-primary ">Read More	&#8594;</a>
                   </div>
                </div>
                <br><br><br>
             </li>
             @endif
             @endforeach
          </ul>
      </div>
    </div>
   <br><br>
   <div class="container-fluid">

     
      <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="home" aria-selected="true">Latest</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="profile" aria-selected="false">Popular</a>
  </li>
  
</ul>
<br>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="home-tab">
     <div class="row">
      @foreach ($posts as $post)
      @if ($post->published == 1)
      <div class="col-md-4 our_text_box three_box">
         <div class="our_img px-2">
            <figure><img style="height:200px;" src="{{$post->potrait}}" alt="post image"/></figure>
         </div>
         <div class="">
            <div class="post_box d_flex padding_top3">
                <h3 class="awesome padding_flot">{{$post->title}}</h3>
                <p>{{$post->about}} </p>
                <a href=""><b>by</b> {{$post->user->name}}</a>
            <a href="{{route('show',$post->id)}}" class="btn btn-primary float-right">Read More	&#8594;</a>
            </div>
         </div>
      </div>
      @endif
   @endforeach
</div>

  </div>
  <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="profile-tab">
     <div class="row">
      @foreach ($popular as $post)
      @if ($post->published == 1)
      <div class="col-md-4 our_text_box three_box">
         <div class="our_img px-2">
            <figure><img style="height:200px;" src="{{$post->potrait}}" alt="post image"/></figure>
         </div>
         <div class="">
            <div class="post_box d_flex padding_top3">
                <h3 class="awesome padding_flot">{{$post->title}}</h3>
                <p>{{$post->about}} </p>
                <a href=""><b>by</b> {{$post->user->name}}</a>
            <a href="{{route('show',$post->id)}}" class="btn btn-primary float-right">Read More	&#8594;</a>
            </div>
         </div>
      </div>
      @endif
   @endforeach
  </div>
  </div>
  
</div>
   
<hr>
<h3>Recent Videos </h3>
<div class="row our_img">
      @foreach ($videos as $video)
      @if ($video->published == 1)
      <div class="col-md-4 ">
         <div class="embed-responsive embed-responsive-16by9">
           <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->url}}" allowfullscreen></iframe>
        </div>
        <h3 class="awesome padding_flot">{{$video->name}}</h3>
      </div>
      @endif
  @endforeach
  </div>
  {{ $videos->links() }}

</div>
</div>
<hr>


   <section id="gallery" class="gallery text-center">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Partners</h2>
          <p>The best companies we work with to ensure you get Adventorous experience of Afrika</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg"><img src="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg"><img src="https://i.postimg.cc/j2rTp7Hm/IMG-20220202-WA0008.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg"><img src="{{asset('images/logo.jpeg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg"><img src="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg"><img src="https://i.postimg.cc/j2rTp7Hm/IMG-20220202-WA0008.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="https://i.postimg.cc/63Zwb0vC/IMG-20220202-WA0009.jpg"><img src="{{asset('images/logo.jpeg')}}" class="img-fluid" alt=""></a></div>
           
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>


@endsection
