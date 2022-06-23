@extends('layouts.admin')
@section('content')
<br >
@if (Auth::user()->is_admin == 1)
 <div class="container">
    <div class="">
      <a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
        <i class="bi bi-arrow-left" aria-hidden="true"></i>Back
      </a>

      <a href="{{ route('createform') }}" class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#form" data-placement="right" title="{!! trans('tooltips.post.create') !!}">
        <i class="bi bi-plus" aria-hidden="true"></i>Add New Editor
      </a>

      <br >

      <ul class="list-group">
          <table class="table mb-0" style="width: 1200px;">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr class="fw-normal">
                      <th>
                        <span class="ms-2">{{ $user->id}}</span>
                      </th>
                      <td class="align-middle">
                        <span >{{$user->name}}</span >
                      </td>
                      <td class="align-middle">
                        <span >{{$user->email}}</span >
                      </td>
                      <td class="align-middle d-flex w-20 justify-content-between">
                        @if (Auth::user()->id == $user->id )
                          <a href="{{ route('updateform', Auth::user()->id )}}" class="btn btn-success" style="float:right;" data-placement="right">
                            <i class="bi bi-plus" aria-hidden="true"></i> Edit
                          </a>    
                        @else
                        <form method="POST" action="{{route('deleteUser',['user'=>$user->id])}}">
                          @method('DELETE')
                          @csrf
                          <button type="submit"  class="btn btn-danger"  title="Remove"><i class="fas fa-trash-alt"></i>Delete</button>
                        </form>
                        @endif
                      </td>
                    </tr>
                  @endforeach
      </ul>
</div>

@else

<table class="table mb-0" style="width: 1200px;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">Email Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
@foreach ($users as $user)
  @if (Auth::user()->id == $user->id )
      <tr class="fw-normal">
        <th>
          <span class="ms-2">{{ $user->id}}</span>
        </th>
        <td class="align-middle">
          <span >{{$user->name}}</span >
        </td>
        <td class="align-middle">
          <span >{{$user->email}}</span >
        </td>
        <td class="align-middle d-flex w-20 justify-content-between">
          <a href="#" class="btn btn-success" style="float:right;" data-placement="right">
        <i class="bi bi-plus" aria-hidden="true"></i>Edit
      </a>
     
        </td>
      </tr>
  @endif
@endforeach
</table>
@endif
@endsection
