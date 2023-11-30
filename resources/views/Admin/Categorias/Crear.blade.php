@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('content_header')
    <h1>Bienvenidos</h1>
@stop

@section('content')
    <div class="container mt-5 border">
        <div class="card">
            <div class="card-header">
                <h1>Crear Categorias</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('Categorias.agregar') }}" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                @csrf
                                <!-- Campo del formulario -->
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="" value="" required><br>
                                
                                @if(!$usuario->hasRole('Admin'))
                                    <!-- Si el usuario no es administrador, se agrega un campo oculto para el id del restaurante -->
                                    <input type="hidden" name="restaurante" value="{{ $usuario->id_restaurante }}">
                                @else
                                    <!-- Si el usuario es administrador, muestra todos los restaurantes en un select -->
                                    <label for="" class="form-label">Restaurante</label>
                                    <select name="restaurante" class="form-control" id="restaurante" required>
                                        @foreach($restaurantes as $restaurante)
                                            <option value="{{ $restaurante->id }}">{{ $restaurante->nom_rest }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Botones de Guardar y Regresar -->
                    <input name="" id="" class="btn btn-info" type="submit" value="Guardar">
                    <a name="" id="" class="btn btn-danger" href="{{ route('admin.indexCat') }}">Regresar</a>
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
