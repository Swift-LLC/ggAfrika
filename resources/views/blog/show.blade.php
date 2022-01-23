@extends('index')
@section('content')
 <br><br><br>
<div class="container " style="padding: 20px;">
    <h2 class="text-center">{!! $post->title !!}</h2>
    <br>
    <p>{!! $post->body !!}</p>
</div>
<br><br>
@endsection