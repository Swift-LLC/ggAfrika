@extends('index')
@section('custom')
 <!-- style css -->
 <link rel="stylesheet" href="{{asset('css/style2.css')}}">
 <!-- Responsive-->
 <link rel="stylesheet" href="{{asset('css/resp.css')}}">
@endsection
@section('content')
    <br><br><br>
    <div class="splide">
      <div class="splide__track">
          <ul class="splide__list">
            @foreach ($posts as $post)
             <li class="splide__slide">
               <div class="row d_flex">
                  <div class="col-md-5">
                     <div class="creative">
                        <h1> {{$post->title}}</h1>
                        <p>{{$post->about}}</p>
                        <a class="read_more" href="Javascript:void(0)">Contact us</a>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="agency">
                        <figure><img src="images/{{$post->potrait}}" alt="#"/></figure>
                     </div>
                  </div>
               </div>

             </li>
             @endforeach
          </ul>
      </div>
    </div>
    <br><br><br>

    <div class="container-fluid">
       <h1> Recent Posts <i class="fa fa-feed text-warning" ></i></h1>
      <div class="row">
      @foreach ($posts as $post)
      @if ($post->published == 1)
      <div class="col-md-4">
         <div class="our_img">
            <figure><img src="images/{{$post->potrait}}" alt="#"/></figure>
         </div>
         <div class="our_text_box three_box">
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
