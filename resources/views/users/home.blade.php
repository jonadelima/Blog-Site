@extends('layout._home')

@section('content')

<div class="main-con">
    <div class="tagline">
        <h1>Explore Beyond Limits </h1>
        <h4>Your Adventure Awaits!</h4>
    </div>
    <img src="{{asset("images/bg-image.jpg")}}" alt="">
</div>
<div class="card-container">
    <h3 class="section-title d-flex justify-content-center">Spotlight Destinations</h3>
    <div class="cards-con mt-5 d-flex justify-content-evenly">
        <div class="card" style="width: 18rem; height: 400px">
            <img src="{{asset("images/beach.jpg")}}" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-title" id="beach">Beaches/Resorts</h5>
                <p class="card-text">
                    Where the sun kisses the sea and every wave brings serenity. Escape to paradise on the perfect beach!
                </p>
              <a href="{{ route('places.beaches_resorts') }}" class="btn btn-primary" id="explore">Explore Places</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; height: 400px">
            <img src="{{asset("images/cities.jpg")}}" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title" id="beach">Cities</h5>
                <p class="card-text">
                    Majestic peaks kissing the skies, where adventure meets serenity.
                </p>
                <a href="{{ route('places.cities') }}" class="btn btn-primary" id="explore">Explore Places</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; height: 400px">
            <img src="{{asset("images/mountain.jpg")}}" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title" id="beach">Landscapes</h5>
                <p class="card-text">
                    Vibrant hubs of culture, and endless adventure—cities are where dreams come alive and every corner tells a story!
                </p>
                <a href="{{ route('places.landscapes') }}" class="btn btn-primary" id="explore">Explore Places</a>
            </div>
        </div>
    </div>
</div>

@endsection
