@extends('adminlte::page')

@section('title', 'Crear Restaurante')

@section('content_header')
    <h1>Bienvenidos</h1>
@stop

@section('content')
    <div class="container mt-5 border">
        <div class="card">
            <div class="card-header">
                <h1>Crear Restaurante</h1>
            </div>
            <div class="card-body">

                <form action="{{ route('Restaurante.agregar') }}" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <!-- Primer bloque de campos -->
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
                                <label for="" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" placeholder="" value="" required>
                                <label for="" class="form-label">Descripción</label>
                                <textarea class="form-control" name="descripcion" rows="4" required></textarea>
                                <label for="" class="form-label">Foto Principal</label>
                                <input type="file" class="form-control" name="foto1" placeholder="" value="" required>

                                <label for="" class="form-label">Foto Secundaria</label>
                                <input type="file" class="form-control" name="foto2" placeholder="" value="" required>
                                
                                
                                
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <!-- Segundo bloque de campos -->
                                <label for="" class="form-label">Ubicación</label>
                                <input type="text" class="form-control" name="ubicacion" placeholder="" value="" required>
                                <label for="" class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" placeholder="" value="" required>
                                <label for="" class="form-label">Fotos Parte Inferior 1</label>
                                <input type="file" class="form-control" name="foto3" placeholder="" value="" required>
                                <label for="" class="form-label">Foto Parte Inferiro 2</label>
                                <input type="file" class="form-control" name="foto4" placeholder="" value="" required>
                                <label for="" class="form-label">Foto Parte Inferior 3</label>
                                <input type="file" class="form-control" name="foto5" placeholder="" value="" required>
                                <label for="" class="form-label">Logo</label>
                                <input type="file" class="form-control" name="logo" placeholder="" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <!-- Botones de Guardar y Regresar -->
                    <input name="" id="" class="btn btn-info" type="submit" value="Guardar">
                    <a name="" id="" class="btn btn-danger"
                        href="{{ route('admin.indexRest') }}">Regresar</a>
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
