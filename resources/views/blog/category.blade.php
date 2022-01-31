@extends('index')
@section('content')
<br><br>
    <div class="row">
       <div class="col-md-12">
          <div class="titlepage text-center" style="text-transform: capitalize;">
             <h2>{{$name}}</h2>
          </div>
       </div>
    </div>
    <div class="row">
       @foreach ($posts as $category)
       <div class="col-md-12">
         <div class="our_two_box py-2">
            <div class="row d_flex">
                  <div class="col-md-3">
                  <div class="our_img px-2" >
                     <figure><img style="height:200px;" src="{{url('/images',$category->potrait)}}" alt="post image"/></figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="our_text_box">
                     <h3 class="awesome pa_wi">{{$category->title}}</h3>
                     <p>{{$category->about}}</p>
                     <br>
                     <a href="{{route('show',$category->id)}}" class="btn btn-primary float-right">Read More	&#8594;</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
    </div>
@endsection