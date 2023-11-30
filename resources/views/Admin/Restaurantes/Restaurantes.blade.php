@extends('adminlte::page')

@section('title', 'Restaurantes')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
@stop

@section('content_header')
    <h1>Restaurantes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">


            <table id="restaurantes" class="table table-striped nowrap" style="width:100%">
                <thead>
                    @if ($usuario->hasRole('Admin'))
                        <a class="float-right ml-6 btn btn-primary sm" href="{{ route('Restaurante.create') }}"><i
                                class="fa fa-user-plus" aria-hidden ="true"></i></a>
                    @endif
                    <tr>
                        <td>Nombre</td>
                       
                        <td>Telefono</td>
                        <td>Correo</td>

                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @if ($rest)
                        @foreach ($rest as $r)
                            <tr>
                                <td>{{ $r->nom_rest }}</td>
                                
                                <td>{{ $r->telefono_rest }}</td>
                                <td>{{ $r->correo_rest }}</td>

                                <td>
                                    <!-- Botones de edición y eliminación -->
                                    <form action="{{ route('Restaurante.edit', $r->id) }}" method="get">
                                        <button class="btn btn-warning"><i class="fas fa-edit"
                                                aria-hidden="true"></i></button>
                                    </form> <br>
                                    @if ($usuario->hasRole('Admin'))
                                        <form action="{{ route('Restaurante.destroy', $r->id) }}" method="get">
                                            <button class="btn btn-danger" id=""><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                    @endif
                                    </form> <br>
                                    {{-- <a class="btn btn-success" href="{{ route('restaurantes.categorias', $r->id) }}">C</a>
                                <a class="btn btn-success" href="{{ route('restaurantes.productos', $r->id) }}">P</a> --}}

                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop



@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script>
        new DataTable('#restaurantes', {
            responsive: true,
            "language": {
                "lengthMenu": "Mostar_MENU_ registros por pagina",
                "zeroRecords": "Nada Encontrado - Disculpa",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                'search': 'Buscar',
                'paginate': {
                    'next': 'Siguiente',
                    'previous': 'Anterior'
                }

            }
        });
    </script>
@stop
