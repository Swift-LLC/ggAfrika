@extends('index')
@section('custom')
 <!-- style css -->
 <link rel="stylesheet" href="{{asset('css/style2.css')}}">
 <!-- Responsive-->
 <link rel="stylesheet" href="{{asset('css/resp.css')}}">
@endsection
@section('content')
    <div class="splide">
      <div class="splide__track">
          <ul class="splide__list">
            @foreach ($post as $post)
             @if ($post->published == 1)
             <li class="splide__slide px-3" >
                <img  src="https://i.postimg.cc/3NGvdrZV/1-0.jpg" alt="post image"/>
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
    <div class="container-fluid">
       <h2> Recent Posts <i class="fa fa-feed text-warning" ></i></h2>
      <div class="row">
      @foreach ($posts as $post)
      @if ($post->published == 1)
      <div class="col-md-4 our_text_box three_box">
         <div class="our_img px-2">
            <figure><img style="height:200px;" src="https://i.postimg.cc/3NGvdrZV/1-0.jpg" alt="post image"/></figure>
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
@endsection
