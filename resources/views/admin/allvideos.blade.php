@extends('layouts.admin')
@section('content')
@foreach ($video_ids as $video)
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video}}" allowfullscreen></iframe>
</div>
    @endforeach
 
  <div class="container">
  <div class="row">
    
    <div class="col-sm">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-sm">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-sm">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
@endsection