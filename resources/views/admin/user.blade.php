@extends('layouts.admin')
@section('content')
 <div class="container">
    <div class="">
      <a href="{{route('admin')}}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.post.create') !!}">
        <i class="fas fa-arrow-left" aria-hidden="true"></i>
        <span class="hidden-xs">
          Back To DashBoard
        </span>
      </a>
      <a href="#" class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#form" data-placement="right" title="{!! trans('tooltips.post.create') !!}">
        <i class="fas fa-plus" aria-hidden="true"></i>
        <span class="hidden-xs">
          Add New Editor/Admin
        </span>
      </a>
      <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
             <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                     <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> 
                </div>
              </div>
              <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <br><br>
      <ul class="list-group">
          <table class="table mb-0" style="width: 1200px;">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">Email Address</th>
                
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
                    </tr>
           @endforeach
     </ul>
</div>
@endsection
