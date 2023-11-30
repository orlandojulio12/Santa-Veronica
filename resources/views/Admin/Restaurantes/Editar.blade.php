@extends('adminlte::page')

@section('title', 'Editar Restaurante')

@section('content_header')
    <h1>Bienvenidos</h1>
@stop

@section('content')
    <div class="container mt-5 border">
        <div class="card">
            <div class="card-header">
                <h1>Editar Restaurante</h1>
            </div>
            <div class="card-body">

                <form action="{{ route('Restaurante.update', $restaurant->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <!-- Primer bloque de campos -->
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder=""
                                    value="{{ $restaurant->nom_rest }}" required>
                                <label for="" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" placeholder=""
                                    value="{{ $restaurant->telefono_rest }}" required>
                                <label for="" class="form-label">Descripción</label>
                                <textarea class="form-control" name="descripcion" required>{{ $restaurant->desc_rest }}</textarea>
                                <label for="" class="form-label">Foto Principal</label>
                                @if (!$restaurant->foto1)
                                    <p>Foto actual:</p>
                                    <img src="{{ asset('storage/' . $restaurant->foto_1_rest) }}" alt="Foto actual"
                                        width="200px">
                                @endif
                                <input type="file" class="form-control" name="foto1" placeholder="" value="{{$restaurant->foto_1_rest}}">

                                <label for="" class="form-label">Foto Secundaria</label>
                                @if (!$restaurant->foto2)
                                <p>Foto actual:</p>
                                <img src="{{ asset('storage/' . $restaurant->foto_2_rest) }}" alt="Foto actual"
                                    width="200px">
                            @endif
                                <input type="file" class="form-control" name="foto2" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <!-- Segundo bloque de campos -->
                                <input type="text" class="form-control" name="ubicacion" placeholder=""
                                    value="{{ $restaurant->ubicacion_rest }}" required>
                                <label for="" class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" placeholder=""
                                    value="{{ $restaurant->correo_rest }}" required>
                                <label for="" class="form-label">Fotos Parte Inferior 1</label>
                                @if (!$restaurant->foto3)
                                <p>Foto actual:</p>
                                <img src="{{ asset('storage/' . $restaurant->foto_3_rest) }}" alt="Foto actual"
                                    width="200px">
                            @endif
                                <input type="file" class="form-control" name="foto3" placeholder="" value="">
                                <label for="" class="form-label">Fotos Parte Inferior 2</label>
                                @if (!$restaurant->foto4)
                                <p>Foto actual:</p>
                                <img src="{{ asset('storage/' . $restaurant->foto_4_rest) }}" alt="Foto actual"
                                    width="200px">
                            @endif
                                <input type="file" class="form-control" name="foto4" placeholder="" value="">
                                <label for="" class="form-label">Fotos Parte Inferior 3</label>
                                @if (!$restaurant->foto5)
                                <p>Foto actual:</p>
                                <img src="{{ asset('storage/' . $restaurant->foto_5_rest) }}" alt="Foto actual"
                                    width="200px">
                            @endif
                                <input type="file" class="form-control" name="foto5" placeholder="" value="">
                                <label for="" class="form-label">Logo</label>
                                @if (!$restaurant->logo)
                                <p>Foto actual:</p>
                                <img src="{{ asset('storage/' . $restaurant->logo_rest) }}" alt="Foto actual"
                                    width="200px">
                            @endif
                                <input type="file" class="form-control" name="logo" placeholder="" value="">
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
