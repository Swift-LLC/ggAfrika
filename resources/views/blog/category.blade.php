@extends('index')

@section('title')
   {{$name}}
@endsection

@section('content')
<style>
      @media screen and (max-width: 768px) {
         .card-img-top{
            height: 70px;
            width: 100%;
            /* visibility: hidden; */
            padding-bottom: 0;
         }
         
      }
</style>
<br><br>

   <div class="display">
      <div class="text-center">
         <p class="lead">Home<i class="bi bi-slash"></i>{{ $name }}</p>
      </div>
   </div>

   <hr>

<div class="container">
      @foreach ($posts as $category)
      <div class="row no-gutters">
         <div class="col">
            <h3 class="">{{ \Illuminate\Support\Str::limit($category->title, 20, $end='...') }}</h3>
            <p>{{ \Illuminate\Support\Str::limit($category->about, 50, $end='...') }} </p>
            <div class="text-center">
               <a href="{{ route('show', $category->id) }}" class="btn btn-warning">Read More <i class="bi bi-arrow-right-short"></i></a>
            </div>
         </div>
         <div class="col">
            <img style="height:150px; object-fit: cover; width: 200px;" src="/storage/{{$category->potrait}}" alt="post image" class="card-img-top"/>
         </div>
      </div>
       <hr>
      @endforeach

<h3 class="text-center">{{ $name }} Videos </h3>
<div class="row">
      @foreach ($videos as $video)
      <!-- @if ($video->published == 1) -->
         <div class="col-md-4 col-lg-4">
            <div class="card">
               <div class="card-body">
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->url}}" allowfullscreen></iframe>
                  </div>
                  <p class="awesome padding_flot text-center">{{$video->name}}</p>
               </div>
            </div>
         </div>
      <!-- @endif -->
  @endforeach
</div>
</div>
</div>
@endsection