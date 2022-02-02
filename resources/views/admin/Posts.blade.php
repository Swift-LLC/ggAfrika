@extends('layouts.admin')
@section('content')

@if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
@endif
<section class="vh-100" style="background-color: #eee;">
    <div class="fluid-container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">
          <div class="card bg-white">
            <div class="card-header p-3">
              <a href="{{route('create')}}" class="btn btn-success float-right" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
                <i class="fas fa-plus" aria-hidden="true"></i>
                <span class="hidden-xs">
                    Create Post
                </span>
            </a>
            <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Post List</h5>
            </div>
            <div class="card-body overflow-auto" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px; overflow-x:auto; ">
              <table class="table mb-0" style="width: 1200px;">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                      <tr class="fw-normal">
                      <th>
                        <span class="ms-2">{{ $post->id}}</span>
                      </th>
                      <td class="align-middle">
                        <span >{{$post->created_at}}</span >
                      </td>
                      <td class="align-middle">
                        <h6 class="mb-0"><span >{{$post->title}}</span></h6>
                      </td>
                      <td class="align-middle">
                        <span ></span >
                      </td>
                      <td class="align-middle d-flex w-20 justify-content-between">
                        <a href="{{route('edit',$post->id)}}" class="btn btn-warning" data-mdb-toggle="tooltip" title="Edit"><i class="fas fa-edit text-success me-3 "></i>Edit</a>
                        <a href="{{route('show',['post'=>$post->id])}}" class="btn btn-info" data-mdb-toggle="tooltip" title="View"><i class="fas fa-eye text-success me-3"></i>View</a>
                        <form method="POST" action="{{route('delete',['post'=>$post->id])}}">
                          @method('DELETE')
                          @csrf
                          <button type="submit"  class="btn btn-danger"  title="Remove"><i class="fas fa-trash-alt text-danger"></i>Delete</button>
                        </form>
                        <form method="POST" action="{{route('publish',['post'=>$post->id])}}">
                          @method('PUT')
                          @csrf
                          @if ($post->published == 1)
                          <button type="submit"  class="btn btn-success"  title="publish"><i class="fas fa-trash-alt text-success"></i>Published</button>
                          @else
                          <button type="submit"  class="btn btn-danger"  title="publish"><i class="fas fa-trash-alt text-danger"></i>Publish</button>
                          @endif
                        </form>
                      </td>
                      </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection
