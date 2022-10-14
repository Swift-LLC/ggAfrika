@extends('index')
@section('title')
Advertising
@endsection
@section('content')
<main id="main">
<div class="container-fluid text-center">
    <img src="{{ asset('media.svg') }}" alt="Advertising" style="height: 150px;" class="text-center">
    <h2 class="title">GG Afrika brings you closer to your prospective clients.</h2>
    <div class='text-center'>
        <h3 class="title">To Advertise on the platform contact us.</h3>
        <div>
            <p>Reach us via</p>
                <p><a href="mailto: info@ggafrika.com" target="_blank" >info@ggafrika.com</a></p>
                <p> <a href="tel: 254 701 700 144">+254 701 700 144</a></p>
          
        </div>
    </div>
</div>
</main>
@endsection