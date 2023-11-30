@extends('adminlte::page')

@section('title', 'Eliminar Producto')

@section('content_header')
    <h1>Eliminar Producto</h1>
@stop

@section('content')
    <div class="container mt-5 border">
        <div class="card">
            <div class="card-header">
                <h4>¿Estás seguro de eliminar este producto?</h4>
            </div>
            <div class="card-body">
                <div class="alert" role="alert">
                    <table class="table table-sm table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Categoría</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $producto->nom_produc }}</td>
                                <td>{{ $producto->desc_produc }}</td>
                                <td>{{ $producto->precio_produc }}</td>
                                <td>{{ $producto->categoria->nom_categoria }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <form action="{{route('Productos.delete',$producto->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('admin.indexProd')}}" class="btn btn-info">Regresar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
