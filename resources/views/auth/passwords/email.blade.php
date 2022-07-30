@extends('navbar') @section('content')
<hr />
<div class="container h-90">
    <div class="row">
        <div class="">
            <div class="pt-5">
                <h1 class="text-center"><b>{{ __('Password Reset') }}</b></h1>
                <p class="text-center">
                    Enter the <b>email address</b> that you used to register.
                    We'll send you an email with your username and a link to
                    reset your password.
                </p>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="col-md-4 offset-md-4">
                            <label for="email" class="">Email Address</label>

                            <div class="">
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-md-4 offset-md-4">
                            {!! NoCaptcha::display() !!} 
                            @if($errors->has('g-recaptcha-response'))
                            <span class="invalid-feedback" role="alert">
                                <strong
                                    >{{ $errors->first('g-recaptcha-response')
                                    }}</strong
                                >
                            </span>
                            @endif
                        </div>

                        <div class="col-md-4 offset-md-4 pt-3">
                            <div class="text-center">
                                <button
                                    type="submit"
                                    style="
                                        border-radius: 20px;
                                        height: 40px;
                                        color: #000;
                                        width: 100px;
                                    "
                                    class="btn btn-warning"
                                >
                                    {{ __('Send') }}
                                </button>
                            </div>
                        </div>
                        <hr />
                        <div class="text-center pt-4">
                            <small
                                >If you still need help, contact
                                <a href="" class="text-warning"
                                    >ggafrika support</a
                                >!
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{!! NoCaptcha::renderJs() !!}
@endsection
