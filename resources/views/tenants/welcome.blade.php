@extends('layouts.app')

@section('content')
<div class="back">
    <div class="container py-4 ml-auto mr-auto">
        <div class="row justify-content-center">
            <div class="col-sm-10">
            <div class="card card-dark bg-dark text-light">
                <div class="card-body">
                <h4 class="card-title text-center h1 mb-4">Cliente</h4>
                <a href="{{route('login')}}" class="btn btn-outline-light btn-block">Ingresar</a>
                <a href="{{route('register')}}" class="btn btn-outline-light btn-block">Registrarse</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
