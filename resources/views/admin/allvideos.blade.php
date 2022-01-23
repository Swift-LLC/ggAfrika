@extends('layouts.admin')
@section('content')
<div class="row">
@foreach ($videos as $videos)

    
  <div class="col-sm">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$videos->url}}" allowfullscreen></iframe>
    </div>
    @if ($videos->published == 1)
    <form method="POST" action="{{route('v_publish',['post'=>$videos->id])}}">
      @method('PUT')
      @csrf
    
      <button type="submit"  class="btn btn-success"  title="Remove"><i class="fas fa-upload"></i>Published</button>
    </form>
    @else
    <form method="POST" action="{{route('v_publish',['post'=>$videos->id])}}">
      @method('PUT')
      @csrf
    
      <button type="submit"  class="btn btn-danger"  title="Remove"><i class="fas fa-ban"></i>Remove</button>
    </form>
        
    @endif
  </div>
  



    @endforeach
  </div>
 
  <div class="container">
 
</div>
@endsection