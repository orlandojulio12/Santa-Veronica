@extends('adminlte::page')

@section('title', 'Crear Productos')

@section('content_header')
    <h1>Bienvenidos</h1>
@stop

@section('content')
    <div class="container mt-5 border">
        <div class="card">
            <div class="card-header">
                <h1>Crear Productos</h1>
            </div>
            <div class="card-body">

                <form action="{{ route('Productos.agregar') }}" method="post">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-4">
                                @csrf
                                <!-- Campo del formulario -->
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="" value=""
                                    required><br>
                                <label for="" class="form-label">Descripción</label>
                                <input type="text" class="form-control" name="descripcion" placeholder="" value=""
                                    ><br>
                                <label for="" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" placeholder="" value=""
                                    ><br>
                                <label for="" class="form-label">Categoría</label>
                               
                                @if (!$usuario->hasRole('Admin'))
                                
                                    <!-- Si el usuario no es administrador, muestra las categorías asociadas al usuario -->
                                    <select name="categoria" class="form-control" id="categoria" required>
                                        <option value="" selected disabled>Seleccione una categoría</option>
                                        @foreach ($categoriasUsuario as $catUsu)
                                            <option value="{{ $catUsu->id }}">{{ $catUsu->nom_categoria }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <!-- Si el usuario es administrador, muestra todas las categorías en un select -->
                                    <select name="categoria" class="form-control" id="categoria" required>
                                        <option value="" selected disabled>Seleccione una categoría</option>
                                        @foreach ($categoriasAdmin as $cateAdmin)
                                            <option value="{{ $cateAdmin->id }}">{{ $cateAdmin->nom_categoria }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                    </div>
                    <!-- Botones de Guardar y Regresar -->
                    <input name="" id="" class="btn btn-info" type="submit" value="Guardar">
                    <a name="" id="" class="btn btn-danger"
                        href="{{ route('admin.indexProd') }}">Regresar</a>
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
    <script></script>
@stop
