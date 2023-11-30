<div>
    <div class="container mt-5 border">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4 ">
                <form class="mt-4 form-inline" action="#" method="GET">
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
                        <th scope="col" class ="text-center border"> <a class="ml-6 btn btn-primary" href="#"><i class="fa fa-user-plus" aria-hidden ="true"></i></a></th>
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
                            <form action="#" method="get">
                                <button class="btn btn-warning" ><i class="fa fa-pencil" aria-hidden="true"></i></button> 
                            </form>
                            <form  action="#" method="get">
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
                        <th scope="col" class ="text-center border"> <a class="ml-6 btn btn-primary" href="#"><i class="fa fa-user-plus" aria-hidden ="true"></i></a></th>
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
                            @if ($producto !== null)
                            <th scope="row" class="border">{{ $producto->id }}</th>
                        @else
                            <th scope="row" class="border">Producto no encontrado</th>
                        @endif
                        
                        <td class="border">
                            @if ($producto !== null)
                                {{ $producto->nombre }}
                            @else
                                Producto no encontrado
                            @endif
                        </td>
                        
                        <td class="border">
                            @if ($producto !== null)
                                {{ $producto->descripcion }}
                            @else
                                Producto no encontrado
                            @endif
                        </td>
                        
                        <td class="border">
                            @if ($producto !== null)
                                {{ $producto->stock }}
                            @else
                                Producto no encontrado
                            @endif
                        </td>
                        
                        <td class="border">
                            @if ($producto !== null)
                                {{ $producto->precio }}
                            @else
                                Producto no encontrado
                            @endif
                        </td>
                        
                        <td class="border">
                            @if ($producto !== null && $producto->foto !== null)
                                <img src="{{ asset('storage/imagenes/'. $producto->foto) }}" alt="Descripción de la imagen" width="200">
                            @else
                                Imagen no disponible
                            @endif
                        </td>
                        
                            <td scope="col" class="text-center border">
                                <form action="#" method="get">
                                    <button class="btn btn-warning" ><i class="fa fa-pencil" aria-hidden="true"></i></button> 
                                </form>
                                <form  action="#" method="get">
                                    <button class="btn btn-danger" id="" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
    
    
            @endif
        
    </div>
    
    
</div>
