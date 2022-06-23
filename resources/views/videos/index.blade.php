@extends('layouts.admin')
@section('content')
<div class="container px-2 py-2">

      <a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
        <i class="bi bi-arrow-left" aria-hidden="true"></i>Back
      </a>

      <a href="{{ route('createvideo')}}" class="btn btn-success" style="float:right;"  data-placement="right" title="{!! trans('tooltips.post.create') !!}">
        <i class="bi bi-plus" aria-hidden="true"></i>Add Videos
      </a>

  <div class="row py-2">
    @foreach ($videos as $videos)
    <div class="col-md-4 col-lg-4 col-sm-12">
      <div class="card">
        <div class="card-body">
            <h5 class="text-center">{{$videos->name}}</h5>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$videos->url}}" allowfullscreen></iframe>
            </div>
              
            <br>
            @if (Auth::user()->is_admin == 1)
            <div class="d-flex text-center justify-content-between">
              @if ($videos->published == 1)
              <form method="POST" action="{{route('v_publish',['post'=>$videos->id])}}">
                @method('PUT')
                @csrf
                <button type="submit"  class="btn btn-warning"  title="Remove"><i class="bi bi-x-octagon"></i> Remove</button>
              </form>
              @else
              <form method="POST" action="{{route('v_publish',['post'=>$videos->id])}}">
                @method('PUT')
                @csrf
                <button type="submit"  class="btn btn-success"  title="Remove"><i class="bi bi-upload"></i> Publish</button>
              </form>
              @endif

              <form method="POST" action="{{route('delete_video',['video'=>$videos->id])}}">
                @method('DELETE')
                @csrf
                <button type="submit"  class="btn btn-danger"  title="Remove"><i class="bi bi-trash text-danger"></i> Delete</button>
              </form>
            </div>
            @endif
           
        </div>
      </div>
    </div>
     @endforeach
  </div>
</div>
</div>
@endsection
