@extends('layouts.admin')

@section('content')

  <div class="container">
  <a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
        <i class="bi bi-arrow-left" aria-hidden="true"></i>
        <span class="hidden-xs">
          Back To DashBoard
        </span>
      </a>
    <div class="text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <p>Create post</p>
          <div class="card-body">
            <form action="{{route('store')}}" method="POST" enctype='multipart/form-data'>
              @csrf
              @if($errors->any())
                        <h4 class="invalid-feedback text-center alert alert-danger" role="alert">{{$errors->first()}}</h4>
                @endif
              
              <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" class="form-control" value="{{ old('title') }}"  name="title" required />
              </div>
              <div class="form-group">
                <label for="category">Choose Category*</label>
                <select class="form-control" id="category" name="category">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="image" class="form-label">Post Image*</label>
                <input class="form-control form-control-file" id="image" name="image" type="file">
               
              </div>
              <div class="form-group">
                <label for="description">Description*</label>
                <textarea rows="5" maxlength="150" value="" class="form-control" name="description" required>{{ old('description') }}</textarea>
              </div>
              <div class="form-group">
                <label for="content">Content*</label>
                <textarea value="{{ old('content') }}"  name="content" id="content"   required>{{ old('content') }}</textarea>
              </div>
              <div class="form-group">
                <p><span class="require">*</span> - required fields</p>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">
                  Create
                </button>
                <button class="btn btn-default">
                  Cancel
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#content').summernote({
        height: 400,
        placeholder: 'write/paste here',
      });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection