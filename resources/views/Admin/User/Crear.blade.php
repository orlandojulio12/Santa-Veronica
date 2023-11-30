@extends('adminlte::page')

@section('title', 'Crear Usuarios')

@section('content_header')
<h1>Bienvenidos</h1>
@stop

@section('content')
<div  class="container mt-5 border">
    <div class="card">
        <div class="card-header">
            <h1>Crear Usuarios</h1>
        </div>
        <div class="card-body">

            <form method="POST" action="{{ route('admin.User.agregar') }}">
                @csrf
                <label for="name"  class="form-label">Nombre:</label>
                <input type="text" class="form-control"  name="name" id="name" required> <br>
            
                <label for="email" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" required><br>
                <label for="email" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="email" required> <br>
                <label for="email" class="form-label">Restaurante:</label>
                <select for='restaurante' name="restaurante" class="form-control" id="restaurante" required>
                    <option value="" selected disabled>Selecciona un restaurante</option>
                    @foreach($restaurantes as $rest)
                        <option value="{{ $rest->id }}">{{ $rest->nom_rest }}</option>
                    @endforeach
                </select>
                
                <label for="role" class="form-label">Rol:</label>
                <select name="role" class="form-control" id="role" required>
                    <option value="" selected disabled>Selecciona un Rol</option>
                        @foreach($roles as $rol)
                            <option value="{{ $rol->name }}">{{ $rol->name }}</option>
                        @endforeach
                 
                </select> <br>
                
                
            
                <input name="" id="" class="btn btn-info" type="submit" value="Guardar">
                <a name="" id="" class="btn btn-danger" href="{{route('admin.indexUser')}}">Regresar</a>
            </form>
            
        </div>
        <div class="card-footer text-muted">
            
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