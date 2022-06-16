@extends("layouts.admin")
@section("content")

    <div class="container-fluid px-2 py-2">
        <form method="POST" action="{{route('newCat')}}" enctype='multipart/form-data'>
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
@endsection
