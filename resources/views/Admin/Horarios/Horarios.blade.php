@extends('adminlte::page')

@section('title', 'Horarios')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
@stop

@section('content_header')
    <h1>Horarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">


            <table id="restaurantes" class="table table-striped nowrap" style="width:100%">
                <thead>
                    <tr>
                        <td>Dia</td>
                        <td>Hora</td>
                        @if ($usuario->hasRole('Admin'))
                        <td>Restaurante</td>
                        @endif
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($horarios as $h)
                        <tr>
                            <td class="border">{{$h->dia}}</td>
                            <td class="border">{{$h->hora}}</td>
                            @if ($usuario->hasRole('Admin'))
                                <td class="border">{{ $h->restaurante->nom_rest }}</td>
                            @endif

                            <td scope="col" class="text-center border">
                                <!-- Botones de edición y eliminación -->
                                <form action="{{route('horarios.edit',$h->id)}}" method="get">
                                    <button class="btn btn-warning"><i class="fas fa-edit" aria-hidden="true"></i></button>
                                </form> <br>
                            </td>
                        </tr>
                    @endforeach

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
