@extends('adminlte::page')

@section('title', 'Eliminar Categoría')

@section('content_header')
    <h1>Eliminar Categoría</h1>
@stop

@section('content')
    <div class="container mt-5 border">
        <div class="card">
            <div class="card-header">
                <h4>¿Estás seguro de eliminar esta categoría?</h4>
            </div>
            <div class="card-body">
                <div class="alert" role="alert">
                    <table class="table table-sm table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                @if ($usuario->hasRole('Admin'))
                                <th>Restaurante</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $categoria->nom_categoria}}</td>
                                @if ($usuario->hasRole('Admin'))
                                    <td class="border">{{ $categoria->restaurante->nom_rest }}</td>
                                @endif

                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <form action="{{ route('Categorias.delete', $categoria->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('admin.indexCat') }}" class="btn btn-info">Regresar</a>
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
