@extends('layouts.admin')
@section('content')

<div class="container px-2 py-2">
  <form method="POST" action="{{route('newCat')}}">
    @csrf
    @method('POST')
    <div class="modal-body">
      <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter category name">
      </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-success">Add Category</button>
    </div>
  </form>
</div>

@endsection
