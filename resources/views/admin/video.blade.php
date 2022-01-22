@extends('layouts.admin')
@section('content')
<br><br><br>
<form class="container" action="{{route('store_video')}}"  method="POST" enctype = 'multipart/form-data'>
  @csrf
  <div class="form-group">
    <label for="video">Video Title</label>
    <input type="text" id="name" name="name" class="form-control" id="video" aria-describedby="textHelp" placeholder="Enter video name">
    
  </div>
  <br><br>
  <div class="form-group">
    <label for="video">YOUTUBE URL</label>
    <input type="text" name="url" id="url" class="form-control" id="video" aria-describedby="textHelp" placeholder="Enter video url here">
    <small id="textHelp" class="form-text text-muted">Copy and paste the url video here</small>
  </div>
  <br><br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br><br>
@endsection