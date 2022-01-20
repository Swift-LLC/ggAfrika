@extends('index')
@section('content')
 
<div class="bg-red" style="padding: 20px;">
    <p>{!! $post->body !!}</p>
</div>

@endsection