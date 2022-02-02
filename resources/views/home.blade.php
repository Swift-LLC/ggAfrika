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
                   <div class="slide_content" style="padding-top: 200px;">
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
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
            <a href="{{route('show',$post->id)}}" class="btn btn-primary float-right">Read More	&#8594;</a>
            </div>
         </div>
      </div>
      @endif
   @endforeach
</div>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
  </div>
  
</div>
    <div class="container-fluid">
       <h2> Recent Posts <i class="fa fa-feed text-warning" ></i></h2>
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
            <a href="{{route('show',$post->id)}}" class="btn btn-primary float-right">Read More	&#8594;</a>
            </div>
         </div>
      </div>
      @endif
   @endforeach
</div>
<hr>
<h2>Recent Videos <i class="fa fa-video-camera text-warning" ></i></h2>
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
<section class="partners text-center">
   <h1>Partners</h1>
   <p>Sometimes the best way to envision the future is to invent it. Sometimes the best way to envision the future is to invent it. Sometimes the best way to envision the future is to invent it.</p>
   <div class="partners-image text-center">
      <ul>
         <li>
            <img class="rounded- circle" src="{{asset('images/logo.jpeg')}}" alt="">
         </li>
         <li>
            <img class="rounded- circle" src="{{asset('images/logo.jpeg')}}"alt="">
         </li>
         <li>
            <img class="rounded- circle" src="{{asset('images/logo.jpeg')}}" alt="">
         </li>
         <li>
            <img class="rounded- circle" src="{{asset('images/logo.jpeg')}}" alt="">
         </li>
      </ul>
   </div>
</div>
</section><br><br><br>
<hr>
@endsection
