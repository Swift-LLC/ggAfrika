@extends('index')

@section('title')
   {{$name}}
@endsection

@section('content')
<style>
      @media screen and (max-width: 768px) {
         .img-fluid {
            height: 70px;
            visibility: hidden;
            padding-top: 0;
         }
         
      }
</style>
<br><br>
   <div class="display">
      <div class="text-center">
         <p class="lead">Home &nbsp;</p>
      </div>
   </div>

<div class="container">
      @foreach ($posts as $category)
      <div class="row g-2 pt-2">
         <div class="col-lg-6 col-md-6 col-sm-6">
            <h3 class="">{{$category->title}}</h3>
            <p>{!! $category->about !!} </p>
            <div class="text-right">
               <a href="{{ route('show', $category->id) }}" class="btn btn-warning">Read More <i class="bi bi-arrow-right-short"></i></a>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <img style="height:150px;" src="/storage/{{$category->potrait}}" alt="post image" class="img-fluid"/>
         </div>
      @endforeach
         <hr>
      </div>
      
</div>
</div>
</div>
@endsection