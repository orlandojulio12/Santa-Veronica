@extends('adminlte::page')

@section('title', 'Restaurantes')

@section('content_header')
<h1>Bienvenidos</h1>
@stop

@section('content')
<table class="table">
    <thead class="border thead-dark">
        <tr>
            <th scope="col" colspan="5" class ="text-center border">Productos del Restaurante: {{ $restaur->nom_rest }}</th>
        </tr>
        <tr>
            <th scope="col" class="text-center border">Nombre</th>
            <th scope="col" class="text-center border">Descripción</th>
            <th scope="col" class="text-center border">Precio</th>
            <th scope="col" class="text-center border">Categoria</th>
            <th scope="col" class="text-center border">Restaurante</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($productos as $p)
            <tr>
                <th class="border">{{ $p->nom_produc }}</th>
                <td class="border">{{ $p->desc_produc}}</td>
                <td class="border">{{ $p->precio_produc}}</td>
                <td class="border">{{ $p->categoria->nom_categoria }}</td>
                <td class="border">{{ $p->restaurante->nom_rest}}</td>
            </tr>
            @endforeach
    </tbody>
    
</table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop