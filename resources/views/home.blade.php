@extends('layouts.app')

@section('content')
<div class="back">
    <div class="container py-4 ml-auto mr-auto">
        <div class="row">
            <div class="col-sm-12">
            <div class="card card-dark bg-dark text-light">
                <div class="card-body">
                <h4 class="card-title text-center h1">Bienvenido</h4>
                <p class="card-text text-center">Tu host ya está habilitado visitalo en: {{$hostname->fqdn}}</p>
                <a href="http://{{$hostname->fqdn}}" target="_blank" class="btn btn-outline-light btn-block">Ver</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
