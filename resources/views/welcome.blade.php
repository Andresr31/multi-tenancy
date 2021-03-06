@extends('layouts.app')

@section('content')
<div class="py-4 welcome">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('img/img1.jpeg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/img2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/img4.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
@endsection
