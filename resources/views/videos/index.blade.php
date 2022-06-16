@extends('layouts.admin')
@section('content')
<div class="container-fluid px-2 py-2">
   <div class="">
      <a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
        <i class="fas fa-arrow-left" aria-hidden="true"></i>
        <span class="hidden-xs">
          Back To DashBoard
        </span>
      </a>
      <a href="#" class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#form" data-placement="right" title="{!! trans('tooltips.post.create') !!}">
        <i class="fas fa-plus" aria-hidden="true"></i>
        <span class="hidden-xs">
          Add Videos
        </span>
      </a>
      <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title" id="exampleModalLabel">Add Videos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="container" action="{{route('store_video')}}"  method="POST" enctype = 'multipart/form-data'>
              @csrf
              <div class="modal-body">
              <div class="form-group">
                <label for="video">Video Title</label>
                <input type="text" id="name" name="name" class="form-control" id="video" aria-describedby="textHelp" placeholder="Enter video name">
                
              </div>
              <br><br>
              <div class="form-group">
                <label for="category">Choose Category</label>
                <select class="form-control" id="category" name="category">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <br><br>
              <div class="form-group">
                <label for="video">YOUTUBE URL</label>
                <input type="text" name="url" id="url" class="form-control" id="video" aria-describedby="textHelp" placeholder="Enter video url here">
                <small id="textHelp" class="form-text text-muted">Copy and paste the url video here</small>
              </div>
              <br><br>
              
              <button type="submit" class="btn btn-primary">Add</button>
              </div>              
            </form>
            
          </div>
        </div>
      </div>
<div class="row py-2">
@foreach ($videos as $videos)
  <div class="col-md-4">
    <div>{{$videos->name}}</div>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$videos->url}}" allowfullscreen></iframe>
    </div>
    @if (Auth::user()->is_admin == 1)
    <div class="d-flex justify-content-between">
      @if ($videos->published == 1)
    <form method="POST" action="{{route('v_publish',['post'=>$videos->id])}}">
      @method('PUT')
      @csrf
      <button type="submit"  class="btn btn-warning"  title="Remove"><i class="bi bi-ban"></i>remove</button>
    </form>
    @else
    <form method="POST" action="{{route('v_publish',['post'=>$videos->id])}}">
      @method('PUT')
      @csrf
      <button type="submit"  class="btn btn-success"  title="Remove"><i class="bi bi-upload"></i>publish</button>
    </form>
    @endif
     <form method="POST" action="{{route('delete_video',['video'=>$videos->id])}}">
        @method('DELETE')
        @csrf
        <button type="submit"  class="btn btn-danger"  title="Remove"><i class="bi bi-trash text-danger"></i>Delete</button>
      </form>
    </div>
    @endif
  </div>
    @endforeach
  </div>
      </div>
@endsection
