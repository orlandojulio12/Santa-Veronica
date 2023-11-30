@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
    <div class="container mt-5 border">
        <div class="card">
            <div class="card-header">
                <h1>Editar Usuario</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.User.update', $usuario->id) }}">
                    @csrf
                    @method('PUT')
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $usuario->name }}" required><br>

                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $usuario->email }}" required><br>

                    <label for="email" class="form-label">Contraseña:</label>
                    <input type="text" class="form-control" name="password" id="password" value="{{ $usuario->password }}" required><br>

                    @if(!$usuario->hasRole('Admin'))
                    <!-- Si el usuario no es administrador, se agrega un campo oculto para el id del restaurante -->
                    <input type="hidden" name="restaurante" value="{{ $usuario->id_restaurante }}">
                @else
                    <!-- Si el usuario es administrador, muestra todos los restaurantes en un select -->
                    <label for="" class="form-label">Restaurante</label>
                    <select name="restaurante" class="form-control" id="restaurante" required>
                        @foreach($restaurantes as $restaurante)
                            <option value="{{ $restaurante->id }}" {{ $restaurante->id == $usuario->id_restaurante ? 'selected' : '' }}>{{ $restaurante->nom_rest }}</option>
                        @endforeach
                    </select>
                @endif
                    @if ($usuario->hasRole('Admin'))
                    <label for="role" class="form-label">Rol:</label>
                    <select name="role" class="form-control" id="role" required>
                        <option value="" selected disabled>Selecciona un Rol</option>
                        @foreach($roles as $rol)
                            <option value="{{ $rol->name }}" @if($usuario->hasRole($rol->name)) selected @endif>{{ $rol->name }}</option>
                        @endforeach
                    </select><br>
                    @endif
                    <input name="" id="" class="btn btn-info" type="submit" value="Guardar">
                    <a name="" id="" class="btn btn-danger" href="{{route('admin.indexUser')}}">Regresar</a>
                </form>
            </div>
            <div class="card-footer text-muted"></div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop
