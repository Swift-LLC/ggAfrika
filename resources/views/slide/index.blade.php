@extends('layouts.admin')
@section('content')
<div class="container px-2 py-2">

      <a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left">
        <i class="bi bi-arrow-left" aria-hidden="true"></i>Back
      </a>

      <a href="{{ route('newSlide')}}" class="btn btn-success" style="float:right;"  data-placement="right">
        <i class="bi bi-plus" aria-hidden="true"></i>Add Image Content
      </a>

  <div class="row py-2">
    @foreach ($slides as $slide)
    <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="card">
             <img src="/storage/{{$slide->image}}" alt="{{$slide->name}}" class="card-img-top" style="object-fit: cover; height: 250px;">
             <div class="card-body">
                <h5 class="text-center">{{$slide->name}}</h5>
                <div class="d-flex justify-content-between">
                    @if ($slide->published == 1)
                    <form method="POST" action="{{route('s_publish',['slide'=>$slide->id])}}">
                    @method('PUT')
                    @csrf
                    <button type="submit"  class="btn btn-warning" ><i class="bi bi-x-octagon"></i> Remove</button>
                    </form>
                    @else
                    <form method="POST" action="{{route('s_publish',['slide'=>$slide->id])}}">
                    @method('PUT')
                    @csrf
                    <button type="submit"  class="btn btn-success" ><i class="bi bi-upload"></i> Publish</button>
                    </form>
                    @endif

                    <form method="POST" action="{{route('deleteSlide', ['slide' => $slide->id])}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit"  class="btn btn-danger"><i class="bi bi-trash text-danger"></i> Delete</button>
                    </form>
                </div>
             </div>
        </div> 
    </div>
      @endforeach
    </div>
</div>
@endsection