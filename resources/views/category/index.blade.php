@extends("layouts.admin")
@section("content")

@if (Auth::user()->is_admin == 1)
 
<br><br>
<a href="{{route('admin')}}" class="btn btn-success" data-placement="left">
    <i class="bi bi-arrow-left" aria-hidden="true"></i>
    <span class="hidden-xs">
    Back
    </span>
</a>
<div class="text-center">
    <a href="{{ route('createCategory')}}" class="btn btn-primary" >
    <i class="bi bi-plus" aria-hidden="true"></i>
    <span class="hidden-xs">
    Add New Category
    </span>
</a>
</div>


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
</div>
</div>
@endif
@endsection