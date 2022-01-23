@extends('index')
@section('content')
<br><br><br>

    <div class="row">
       <div class="col-md-12">
          <div class="titlepage">
            
             <h2>{{$name}} blogs</h2>
             <span>It is a long established fact that a reader will be distracted by the readable content of a page </span>
          </div>
       </div>
    </div>
    <!-- fist section -->
    <div class="row">
       @foreach ($category as $category)
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
                     <h3 class="awesome pa_wi">The biggest and most awesome Photo of  year</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model </p>
                     <a href="{{route('show',$category->id)}}" class="btn btn-primary float-right">Read More	&#8594;</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
    </div>
@endsection