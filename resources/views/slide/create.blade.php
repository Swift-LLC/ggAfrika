@extends('layouts.admin')
@section('content')
<div class="container">
   <a href="{{route('slides')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left">
        <i class="bi bi-arrow-left" aria-hidden="true"></i>Back
      </a>

  <div class="text-center">
    <p class="lead">Add a image content for your users</p>
  </div>
  <form action="{{route('createSlide')}}"  method="POST" enctype = 'multipart/form-data'>
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="name" class="form-label">Title</label>
      <input type="text" id="name" name="name" class="form-control" id="name" aria-describedby="textHelp" placeholder="Enter a name relating to the content">
    </div>

    <div class="form-group">
      <label for="video" class="form-label">Image</label>
      <input type="file" name="image" id="image" class="form-control-file" id="image" aria-describedby="textHelp" >
      <small id="textHelp" class="form-text text-muted">Copy and paste the url video here</small>
    </div>
    
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>            
  </form>
</div>
@endsection