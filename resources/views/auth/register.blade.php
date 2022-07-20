@extends('navbar') @section('content') 
<style>
    ::placeholder {
        font-weight: 300;
        font-size: 0.9rem;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="pb-2">
                <div class="text-center pb-1">
                    <h5 style="font-weight: 900; font-size: 1.2rem">
                        <b
                            >{{ __('Sign up for free to start your journey.')
                            }}</b
                        >
                    </h5>
                </div>

                @if($errors->any())
                <h4
                    class="invalid-feedback text-center alert alert-danger"
                    role="alert"
                >
                    {{$errors->first()}}
                </h4>
                @endif
                <div class="card-body px-2 pt-2">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group offset-md-2">
                            <label for='email'>
                            <small for="email" class="form-label"
                                ><b>{{ __('What\'s your email?') }}</b></small
                            >
                        </label>
                            <div class="w-100">
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    placeholder="Your email "
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

                        <div class="form-group offset-md-2">
                            <label for="password">
                            <small  class="form-label"
                                ><b>{{ __('Create Password') }}</b></small
                            >
                        </label>
                            <div class="w-100">
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    placeholder="Set a new password"
                                    required
                                    autocomplete="new-password"
                                />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group offset-md-2">
                            <label for="password-confirm">
                            <small for="password" class="form-label"
                                ><b>{{ __('Confirm Password') }}</b></small
                            >
                        </label>
                            <div class="w-100">
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password_confirmation"
                                    placeholder="Re-enter the password"
                                    required
                                    autocomplete="new-password"
                                />

                                @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group offset-md-2">
                            <label for="name">
                            <small class="form-label"
                                ><b>{{ __('What\'s your Name?') }}</b>
                                <small class="text-center fw-light">
                                    (This appears on your profile)</small
                                ></small
                            >
                        </label>
                            <div class="w-100">
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    placeholder="Enter a profile name"
                                />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="offset-md-2">
                            <div class="w-100">
                                <small
                                    >By clicking on sign-up, you agree to
                                    Spotify's
                                    <a href="{{route('terms')}}"
                                        >Terms and Conditions of Use</a
                                    >. <br /><br />
                                    To learn more about how GG Afrika collects,
                                    uses, shares and protects your personal
                                    data, please see ggAfrika's
                                    <a href="{{ route('policy') }}"
                                        >Privacy Policy</a
                                    >.</small
                                >
                            </div>
                        </div>
                        <div class="text-center pt-3">
                            <div class="">
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
                                    <small style="font-weight: bold"
                                        >{{ __('Sign up') }}</small
                                    >
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <p>
            <b
                >{{ __('Already have an account?') }}<a
                    href="{{ route('login') }}"
                >
                    {{ __('Login') }}
                </a></b
            >
        </p>
    </div>
    <br /><br /><br />
    @endsection
</div>
