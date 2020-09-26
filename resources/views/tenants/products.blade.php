@extends('layouts.app')
@section('content')

<div class="back">
    <div class="container py-4">
        <div class="card bg-dark col-md-9 mr-auto ml-auto">
            <h4 class="card-title h2 text-center py-3">Productos</h4>
            <div class="row col-md-9 mr-auto ml-auto">
                <div class="col">
                    <a href="#"
                        class="btn btn-outline-light btn-block">{{ __('Crear') }}</a>
                </div>
            </div>
                <div class="table-responsive col-md-10 mr-auto ml-auto py-3">
                    <table class="table table-light ">
                        <thead class="thead-dark text-light">
                            <th>
                                {{ __('Id') }}
                            </th>
                            <th>
                                {{ __('Nombre') }}
                            </th>
                            <th>
                                {{ __('Precio') }}
                            </th>
                            <th>
                                {{ __('Acciones') }}
                            </th>

                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>
                                        {{$product->id}}
                                    </td>
                                    <td>
                                        {{$product->name}}
                                    </td>
                                    <td>
                                        {{$product->price}}
                                    </td>


                                <td >

                                        <a href="#"  data-original-title="" title=""><i class="fas fa-eye icon"></i></a> | <a href="#"  data-original-title="" title=""><i class="fas fa-edit icon"></i></a> |<button class="btn btn-link btn-sm" type="button" ><i class="fas fa-trash-alt icon"></i></button>


                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
