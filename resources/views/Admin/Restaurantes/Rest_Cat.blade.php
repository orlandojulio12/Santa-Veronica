@extends('adminlte::page')

@section('title', 'Restaurantes')

@section('content_header')
<h1>Bienvenidos</h1>
@stop

@section('content')
<table class="table">
    <thead class="border thead-dark">
        <tr>
            <th scope="col" colspan="2" class ="text-center border">Categorias del Restaurante: {{ $restaur->nom_rest }}</th>
            <th scope="col" class ="text-center border"> <a class="ml-6 btn btn-primary" href="#"><i class="fa fa-user-plus" aria-hidden ="true"></i></a></th>
        </tr>
        <tr>
            <th scope="col" class="text-center border">Nombre</th>
            <th scope="col" class="text-center border">Restaurante</th>
            <th scope="col" class="text-center border">Acciones</th>
            
        </tr>
    </thead>
    <tbody>
       @foreach ($categorias as $c)
            <tr>
                <td class="border">{{ $c->nom_categoria }}</td>
                <td class="border">{{ $c->restaurante->nom_rest }}</td>
                <td scope="col" class="text-center border">
                    <!-- Botones de edición y eliminación -->
                    <form action="#" method="get">
                        <button class="btn btn-warning" ><i class="fas fa-edit" aria-hidden="true"></i></button> 
                    </form> <br>
                    <form  action="#" method="get">
                        <button class="btn btn-danger" id="" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>        
                
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