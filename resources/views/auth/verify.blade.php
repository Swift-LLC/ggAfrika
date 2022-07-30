@extends('navbar')
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center pt-3"><h3><b>{{ __('Verify Your Email Address') }}</b></h3></div>

                <div class="card-body text-center">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           <p> {{ __('A fresh verification link has been sent to your email address.') }} </p>
                        </div>
                    @endif

                    <p class="">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>{{ __('If you did not receive the email') }},</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn text-warning p-0 m-0 align-baseline">{{ __('click here to request another') }}<i class="bi bi-arrow-right"></i></button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
