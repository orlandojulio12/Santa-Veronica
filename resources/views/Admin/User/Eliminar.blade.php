@extends('adminlte::page')

@section('title', 'Eliminar Usuario')

@section('content_header')
    <h1>Bienvenidos</h1>
@stop

@section('content')
    <div class="container mt-5 border">
        <div class="card">
            <!-- Tarjeta para Eliminar Usuario -->
            <h4 class="card-header"> ¿Estás seguro de eliminar este usuario?</h4>
            <div class="card-body">
                <p class="card-text">
                    <!-- Mostrar detalles del usuario -->
                    <div class="alert" role="alert">
                        <table class="table table-sm table-hover table-bordered">
                            <thead>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <td>Contraseña</td>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password}}</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <!-- Formulario para confirmar la eliminación del usuario -->
                        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('admin.indexUser') }}" class="btn btn-info">Regresar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </p>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop
