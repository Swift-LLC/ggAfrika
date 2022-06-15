@extends('index')

@section('title')
    {!! $post->title !!}
@endsection

@section('content')
<style>
   .text-center > a{
        color: #000;
   }
</style>
<!-- <br>
    <div class="bg-warning" style="height: 50px;">
      <div class="text-center pt-2">
         <p class="lead"><a href="">Home &nbsp;>&nbsp;</a>{!! $post->title !!}</p>
      </div>
    </div>

<br> -->

<br>
<div class="container pt-2">
    <div class="row">
        <div class="col-lg-7 col-sm-12">
            <div class="card">
                <div class="justify">
                    <img src="/storage/{{$post->potrait}}" alt="{{ $post->title }}" class="img-fluid">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">{{ $post->title }}</h5> <i class="bi bi-clock pri"></i><small> {{ $post->created_at }}</small>
                    </div>
                    <div class="container">
                        <p>{!!  $post->body  !!}</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-lg-5 col-sm-12">
        <h5 class="text-center">Related Posts</h5>
        <div class="card">
            <div class="card-body">
            @foreach ($related as $category)
            <div class="row no gutters">
                <div class="col">
                    <h5>{{ $category->title }}</h5>
                    <p>{{ \Illuminate\Support\Str::limit($category->about, 30, $end='...') }}</p>
                    <a href="{{ route('show', $category->id ) }}" class="btn btn-warning">Read More</a>
                </div>
                <div class="col">
                    <img src="/storage/{{$category->potrait}}" alt="" class="card-img-top" >
                </div>
            </div>
            <hr>
            @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@endsection