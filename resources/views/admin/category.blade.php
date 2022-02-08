@extends("layouts.admin")
@section("content")
@if (Auth::user()->is_admin == 1)
 

<section class="vh-100 px-4" style="background-color: #eee;">
<br><br>
<a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
    <i class="fas fa-arrow-left" aria-hidden="true"></i>
    <span class="hidden-xs">
    Back To DashBoard
    </span>
</a>
<a href="#" class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#form" data-placement="right" title="{!! trans('tooltips.post.create') !!}">
    <i class="fas fa-plus" aria-hidden="true"></i>
    <span class="hidden-xs">
    Add New Category
    </span>
</a>
<div class="fluid-container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">
          <div class="card bg-white">
            <div class="card-header p-3">
        
            <div class="card-body overflow-auto" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px; overflow-x:auto; ">
              <table class="table mb-0" style="width: 1200px;">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">No. of Posts</th>
                    <th scope="col">Actions</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($category as $category)
                      <tr class="fw-normal">
                      <th>
                        <span class="ms-2">{{ $category->id}}</span>
                      </th>
                      <td class="align-middle">
                        <span >{{$category->name}}</span >
                      </td>
                      <td class="align-middle">
                        <h6 class="mb-0"><span >{{$category->posts->count()}}</span></h6>
                      </td>

                     
                     
                      <td class="align-middle d-flex w-20 justify-content-between">
                       
                        <form method="POST" action="{{route('deleteCategory',['cat'=>$category->id])}}">
                          
                          @csrf
                          @method('DELETE')
                          <button type="submit"  class="btn btn-danger"  title="Remove"><i class="fas fa-trash-alt"></i>Delete</button>
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
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form method="POST" action="{{route('cat')}}" enctype='multipart/form-data'>
        @csrf
        <div class="modal-body">
            <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter category name">
            </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>
    </div>
    </div>
</div>
</div>
</div>


  </section>
  @endif
@endsection