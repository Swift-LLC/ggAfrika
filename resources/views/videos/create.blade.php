@extends('layouts.admin')
@section('content')
<div class="container">
   <a href="{{route('allvideos')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
        <i class="bi bi-arrow-left" aria-hidden="true"></i>Back
      </a>

  <div class="text-center">
    <p class="lead">Add a video for your users</p>
  </div>
  <form action="{{route('store_video')}}"  method="POST" enctype = 'multipart/form-data'>
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="video" class="form-label">Video Title</label>
      <input type="text" id="name" name="name" class="form-control" id="video" aria-describedby="textHelp" placeholder="Enter video name">
    </div>

    <div class="form-group">
      <label for="category" class="form-label">Choose Category</label>
      <select class="form-control" id="category" name="category">
        @foreach ($categories as $category)
        <option value="{{ $category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="video" class="form-label">YOUTUBE URL</label>
      <input type="url" name="url" id="url" class="form-control" id="video" aria-describedby="textHelp" placeholder="Enter video url here">
      <small id="textHelp" class="form-text text-muted">Copy and paste the url video here</small>
    </div>
    
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>            
  </form>
</div>
@endsection