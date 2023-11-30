<div class="container mt-5 border">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4 ">
            <form class="mt-4 form-inline" action="{{route('Productos.Buscar')}}" method="GET">
                @csrf
                <div class="mb-2 form-group mx-sm-3">
                    <input type="text" class="form-control" name="txtbuscar" placeholder="Buscar Productos">
                </div>
              
                <button type="submit" class="mb-2 btn btn-success" name="buscar" value="listar">Buscar<i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div> 
    </div>
      
    <div class="row">
        <div class="col-sm-12">
            @if ($mensaje = Session::get('Success'))
            <div class="alert alert-success" role="alert">
                {{ $mensaje }}
            </div>    
            @endif
        </div>
    </div>
    @if (!empty($resultados))
     
        <!-- Tabla para mostrar resultados de búsqueda -->
        <table class="table">
            <thead class="border thead-dark">
                <tr>
                    <th scope="col" colspan="7" class ="text-center border">Productos</th>
                    <th scope="col" class ="text-center border"> <a class="ml-6 btn btn-primary" href="{{route('Productos.create')}}"><i class="fa fa-user-plus" aria-hidden ="true"></i></a></th>
                </tr>
                <tr>
                    <th scope="col" class="text-center border">Id</th>
                    <th scope="col" class="text-center border">Nombre</th>
                    <th scope="col" class="text-center border">Descripcion</th>
                    <th scope="col" class="text-center border">Stock</th>
                    <th scope="col" class="text-center border">Precio</th>
                    <th scope="col" class="text-center border">Foto</th>
                    <th scope="col" class="text-center border">Categoria</th>
                    <th scope="col" class="text-center border">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ciclo para mostrar cada resultado de búsqueda -->
                @foreach ($resultados as $productos)
                <tr>
                    <th scope="row" class="border">{{$productos->id}}</th>
                    <td class="border">{{$productos->nombre}}</td>
                    <td class="border">{{$productos->descripcion}}</td>
                    <td class="border">{{$productos->stock}}</td>
                    <td class="border">{{$productos->precio}}</td>

                    <td class="border">
                        <img src="{{ asset($productos->foto) }}" width="60%">
                    </td>
                    
                    
                    <td class="border">{{$productos->categoria}}</td>
                    <td scope="col" class="text-center border">
                        <!-- Botones de edición y eliminación -->
                        <form action="{{route('Productos.edit',$productos->id)}}" method="get">
                            <button class="btn btn-warning" ><i class="fa fa-pencil" aria-hidden="true"></i></button> 
                        </form>
                        <form  action="{{route('Productos.show',$productos->id)}}" method="get">
                            <button class="btn btn-danger" id="" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach        
            </tbody>
        </table>
        @else
        
        <table class="table">
            <thead class="border thead-dark">
                <tr>
                    <th scope="col" colspan="7" class ="text-center border">Productos</th>
                    <th scope="col" class ="text-center border"> <a class="ml-6 btn btn-primary" href="{{route('Productos.create')}}"><i class="fa fa-user-plus" aria-hidden ="true"></i></a></th>
                </tr>
                <tr>
                    <th scope="col" class="text-center border">Id</th>
                    <th scope="col" class="text-center border">Nombre</th>
                    <th scope="col" class="text-center border">Descripcion</th>
                    <th scope="col" class="text-center border">Stock</th>
                    <th scope="col" class="text-center border">Precio</th>
                    <th scope="col" class="text-center border">Foto</th>
                    <th scope="col" class="text-center border">Categoria</th>
                    <th scope="col" class="text-center border">Acciones</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($productos as $producto)
                    <tr>
                        <th scope="row" class="border">{{$producto->id}}</th>
                        <td class="border">{{$producto->nombre}}</td>
                        <td class="border">{{$producto->descripcion}}</td>
                        <td class="border">{{$producto->stock}}</td>
                        <td class="border">{{$producto->precio}}</td>
                        <td class="border"><img src="{{ asset('storage/imagenes/'. $producto->foto) }}" alt="Descripción de la imagen" width="200" >
                        </td>


                        <td class="border">{{$producto->categoria}}</td>
                        <td scope="col" class="text-center border">
                            <form action="{{route('Productos.edit',$producto->id)}}" method="get">
                                <button class="btn btn-warning" ><i class="fa fa-pencil" aria-hidden="true"></i></button> 
                            </form>
                            <form  action="{{route('Productos.show',$producto->id)}}" method="get">
                                <button class="btn btn-danger" id="" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
            </tbody>
            @endforeach
        </table>


        @endif
    
</div>
