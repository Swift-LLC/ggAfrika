@extends('index')
@section('content')
<br><br><br>

    <div class="row">
       <div class="col-md-12">
          <div class="titlepage">
             <h2>{{$name}} blogs</h2>
          </div>
       </div>
    </div>
    <!-- fist section -->
    <div class="row">
       @foreach ($posts as $category)
       <div class="col-md-12">
         <div class="our_two_box">
            <div class="row d_flex">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                  <div class="our_img">
                     <figure><img src="{{url('/images/',$category->potrait)}}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
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