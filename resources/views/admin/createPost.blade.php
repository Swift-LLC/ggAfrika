@extends('layouts.admin')
@section('content')
 <br>
  <div class="">
    <div class="container">
      <div class="">
        <a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
          <i class="bi bi-arrow-left" aria-hidden="true"></i>
          <span class="hidden-xs">
            Back
          </span>
        </a>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="card-body">
            <h5 class="text-center">create new post</h5>
              <form action="" method="POST" enctype='multipart/form-data'>
                @csrf
                @method('POST')
              
                <div class="form-group">
                  <label for="title">￼Blog Title <span class="require">*</span></label>
                  <input type="text" value="" class="form-control" name="title" />
                </div>
                <div class="form-group">
                  <label for="category">Choose Blog Category</label>
                  <select class="form-control" id="category" name="category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{$category->name}}</option>
                    @endforeach

                  </select>
                </div>
                <div class="form-group">
                  <label for="image" class="form-label">Blog Image </label>
                  <input class="form-control form-control-file" value="" id="image" name="image" type="file">
                  
                </div>

                <div class="form-group">
                  <label for="description">Blog excerpt</label>
                  <textarea value="" rows="5" class="form-control" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="content">Blog Content</label>
                  <textarea value="" name="content" id="editor"></textarea>
                </div>

                <div class="form-group">
                  <p><span class="require">*</span> - required fields</p>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                    Update
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
  </div>
  <script>
    $(document).ready(function() {
      $('#content').summernote({
        height: 400,
        placeholder: 'write/paste here',
      });
    });
  </script>

@endsection