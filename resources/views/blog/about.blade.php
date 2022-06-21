
@extends('index')
@section('title')
About
@endsection

@section('content')
<br><br> <br><br>
<div class="container">
     <h1 class="title text-center">About GG Afrika</h1>
    <img src="{{ asset('about.svg') }}" alt="About gg Afrika" style="height: 150px;" class="text-center">
    <ul>
        <li><p>Tales of Afrika to the world.</p></li>
        <li><p>Social Cultural fun facts</p></li>
        <li><p>Heritage and Splendor</p></li>
        <li><p>Keeping it music & entertainment </p></li>
        <li><p>This is how to do business in Afrika</p></li>
    </ul>
    
</div>
@endsection