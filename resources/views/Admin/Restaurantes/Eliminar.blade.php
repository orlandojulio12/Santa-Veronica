@extends('adminlte::page')

@section('title', 'Eliminar Restaurante')

@section('content_header')
<h1>Bienvenidos</h1>
@stop

@section('content')
<div  class="container mt-5 border">
    <div class="card">
        <!-- Tarjeta para Eliminar pedidos -->
            <h4 class="card-header"> Estas Seguro De Eliminar Este Restaurante!!!</h4>
        <div class="card-body">
            <p class="card-text">
                <!-- Tarjeta para alertat de elimnado de  pedidos -->
                <div class="alert" role="alert">
                    
                    <table class="table table-sm table-hover table-bordered" >
                        <thead>
                        <td>Nombre</td>
                        <td>Ubicacion</td>
                        <td>Telefono</td>
                        <td>Correo</td>
                        <td>Descripción</td>
                         
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>{{ $r->nom_rest }}</td>
                                <td>{{ $r->ubicacion_rest }}</td>
                                <td>{{ $r->telefono_rest }}</td>
                                <td>{{ $r->correo_rest }}</td>
                                <td>{{ $r->desc_rest }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <hr>
                    <form action="{{route('Restaurante.delete',$r->id)}}" method="POST">
                        @csrf
                            @method('DELETE')
                        
                            <a name="" id="" class="btn btn-info" href="{{route('admin.indexRest')}}">Regresar</a>
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



