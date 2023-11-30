<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Restaurante;
use App\Models\Categorias;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $usuario = User::findOrFail($userId);
    
        if ($usuario->hasRole('Admin')) {
            // Si el usuario es un administrador, mostrar todos los productos sin restricciones
            $productos = Productos::all();
        } else {
            // Si no es un administrador, obtener los productos del restaurante del usuario y sus categorías
            $restaurante = $usuario->restaurante()->first(); // Obtener el restaurante asociado al usuario
            $restauranteId = $restaurante->id;
    
            $categoriasIds = Categorias::where('id_restaurante', $restauranteId)->pluck('id'); // Obtener los IDs de las categorías del restaurante del usuario
            $productos = Productos::with('restaurante')->whereIn('id_categoria', $categoriasIds)->get();
        }
    
        return view("Admin.Productos.Productos", compact('productos', 'usuario'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $usuario = User::findOrFail($userId);
    
        // Obtener todas las categorías para el administrador
        $categoriasAdmin = Categorias::all();
    
        // Verificar si el usuario es administrador
        if ($usuario->hasRole('Admin')) {
            // Si es administrador, todas las categorías son accesibles
            $categoriasUsuario = $categoriasAdmin;
        } else {
            // Si no es administrador, obtener las categorías asociadas al restaurante del usuario
            $restaurante = $usuario->restaurante()->first();
            $categoriasUsuario = Categorias::where('id_restaurante', $restaurante->id)->get();
        }
    
        return view('Admin.Productos.Crear', compact('categoriasAdmin', 'categoriasUsuario','usuario'));
    }
    

    /**
     * Store a newly created resource in storage.
     */     public function agregar(Request $request)
{
    $producto = new Productos();
    $producto->nom_produc = $request->post('nombre');
    $producto->desc_produc = $request->post('descripcion');
    $producto->precio_produc = $request->post('precio');
    $producto->id_categoria = $request->post('categoria');
    $producto->save();
    return redirect()->route('admin.indexProd');
}

public function edit(Productos $productos,$id)
{
    $producto=Productos::find($id);
    $userId = Auth::id();
    $usuario = User::findOrFail($userId);

    // Obtener todas las categorías para el administrador
    $categoriasAdmin = Categorias::all();

    // Verificar si el usuario es administrador
    if ($usuario->hasRole('Admin')) {
        // Si es administrador, todas las categorías son accesibles
        $categoriasUsuario = $categoriasAdmin;
    } else {
        // Si no es administrador, obtener las categorías asociadas al restaurante del usuario
        $restaurante = $usuario->restaurante()->first();
        $categoriasUsuario = Categorias::where('id_restaurante', $restaurante->id)->get();
    }
    return view('Admin.Productos.Editar', compact('categoriasAdmin','categoriasUsuario','usuario','producto'));
}

public function update(Request $request, $id)
{
    $producto = Productos::findOrFail($id);
    $producto->nom_produc = $request->input('nombre');
    $producto->desc_produc = $request->input('descripcion');
    $producto->precio_produc = $request->input('precio');
    $producto->id_categoria = $request->input('categoria');
    $producto->save();

    return redirect()->route('admin.indexProd');
}

    public function showDelete($id)
    {
        $producto = Productos::findOrFail($id);
        return view('Admin.Productos.Eliminar', compact('producto'));
    }
    public function delete($id)
    {
        $producto = Productos::find($id);

        if ($producto) {
            // Eliminar el producto
            $producto->delete();
        }

        return redirect()->route('admin.indexProd');
    }
   

}
