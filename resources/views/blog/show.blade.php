@extends('index')
@section('content')
 <br><br><br>
<div class="container " style="padding: 20px;">
    <h2 class="text-center">{!! $post->title !!}</h2>
    <br>
    <div class="our_img" style="text-align:v=center;">
            <figure><img  src="{{url ('/images/', $post->potrait)}}" alt="post-image"/></figure>
    </div>
    <p>{!! $post->body !!}</p>

    <a href="{{route('showcat',['category'=>$post->category_id])}}" class="btn btn-info" data-mdb-toggle="tooltip" title="View"><i class=" me-3"></i>&#8592;Related Stories</a>
</div>
<br><br>
@endsection