@extends('index')

@section('title')
   {{$name}}
@endsection

@section('content')
<style>
      /* @media screen and (max-width: 468px) {
         .imej {
            visibility: hidden;
         }
         
      } */
</style>
<br><br>

   <div class="display">
      <div class="text-center">
         <h3 class="title">Home<i class="bi bi-slash"></i>{{ $name }}</h3>
      </div>
   </div>

   <hr>

<div class="container">

   @foreach ($posts as $category)
   <div class="row no-gutters">
      <div class="col">
         <h1 class="title">{{$category->title}}</h1>
         <p>{{  \Illuminate\Support\Str::limit($category->about, 200, $end='...') }}</p>
         <a href="{{ route('show', $category->id ) }}" class="btn btn-warning">Read More <i class="bi bi-arrow-right-short"></i></a>
      </div>
      <div class="col">
         <img src="/storage/{{$category->potrait}}" alt="{{ $category->title }}" style="height:150px; object-fit: cover; width: 200px;" class="card-img-top" >
      </div>
   </div>
   <hr>
   @endforeach
        


<h2 class="text-center title">{{ $name }} Videos </h2>
<div class="row">
      @foreach ($videos as $video)
      @if ($video->published == 1) 
         <div class="col-md-4 col-lg-4">
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
</div>
</div>
@endsection