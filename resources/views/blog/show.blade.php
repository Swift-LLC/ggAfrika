@extends('index')
@section('title')
{!! $post->title !!}
@endsection
@section('content')
 <br><br>
<div class="row " style="text-align:center; padding-left: 40px;">
    <div class="col-lg-8">
        <h2 class="text-center">{!! $post->title !!}</h2>
    <br>
    <div class="our_img" style="text-align:v=center;">
            <figure><img style="width:100%; height:300px;" src="/storage/{{$post->potrait}}" alt="post-image"/></figure>
    </div>
    <p>{!! $post->body !!}</p>
    <a href="{{route('showcat',['category'=>$post->category_id])}}" class="btn btn-info" data-mdb-toggle="tooltip" title="View"><i class=" me-3"></i>&#8592; Related Stories</a>
    </div>
    <div class="col-lg-3 card">
        <h2>Related Posts</h2>
        <div class="card" style="width: 18rem;">
        @foreach ($related as $category)
        @if(strcmp($category->slug,$post->slug)!=0)
            <img class="card-img-top" src="/storage/{{$category->potrait}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{!! $category->title !!}</h5>
                <p class="card-text">{!! $category->about !!}</p>
                <a href="{{route('show',$category->id)}}" class="btn btn-primary float-right">Read More	&#8594;</a>
            </div>
        @else
        @foreach ($posts as $category)
        @if(strcmp($category->slug,$post->slug)!=0)
            <img class="card-img-top" src="/storage/{{$category->potrait}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{!! $category->title !!}</h5>
                <p class="card-text">{!! $category->about !!}</p>
                <a href="{{route('show',$category->id)}}" class="btn btn-primary float-right">Read More	&#8594;</a>
            </div>
        @endif
        @endforeach
        @endif
        @endforeach
        </div>
    </div>

</div>
<br><br>
@endsection