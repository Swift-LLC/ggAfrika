@extends('index')
@section('title')
Advertising
@endsection
@section('content')
<br><br><br>
<div class="container-fluid text-center">
    <img src="{{ asset('media.svg') }}" alt="Advertising" style="height: 150px;" class="text-center">
    <h2 class="title">GG Afrika brings you closer to your prospective clients.</h2>
    <div class='text-center'>
        <h3 class="title">To Advertise on the platform contact us.</h3>
        <div>
            <p>Reach us via</p>
            <ul>
                <li><a href="mailto: info@ggafrika.com" target="_blank" >info@ggafrika.com</a></li>
                <li> <a href="tel: 254 701 700 144">+254 701 700 144</p></li>
            </ul>
        </div>
    </div>
</div>
@endsection