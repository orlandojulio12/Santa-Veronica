<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $usuario = User::findOrFail($userId);
    
        if ($usuario->hasRole('Admin')) {
            // Si el usuario es un administrador, mostrar todas las categorías sin restricciones de restaurante
            $cat = Categorias::all();
        } else {
            // Si no es un administrador, obtener las categorías del restaurante del usuario
            $restaurante = $usuario->restaurante()->first(); // Obtener el restaurante asociado al usuario
            $restauranteId = $restaurante->id;
    
            $cat = Categorias::where('id_restaurante', $restauranteId)->get();
        }
    
        return view("Admin.Categorias.Categorias", compact('cat','usuario'));
    }
    
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $usuario = User::findOrFail($userId);
        $restaurantes=Restaurante::all();
        return view('Admin.Categorias.Crear',compact('restaurantes','usuario'));
    }

    /**
     * Store a newly created resource in storage.
     */ public function agregar(Request $request)
{
    $categoria = new Categorias();
    $categoria->nom_categoria = $request->post('nombre');
    $userId = Auth::id();
    $usuario = User::findOrFail($userId);

    // Verifica si el usuario es administrador o tiene un restaurante asociado
    if ($usuario->hasRole('Admin') || $usuario->restaurante) {
        $categoria->id_restaurante = $request->post('restaurante');
    } else {
        // Asigna el restaurante asociado al usuario por defecto
        $categoria->id_restaurante = $usuario->restaurante_id;
    }
    
    $categoria->save();
    return redirect()->route('admin.indexCat');
}

public function edit($id)
    {
        $categoria = Categorias::findOrFail($id);
        $userId = Auth::id();
        $usuario = User::findOrFail($userId);
        $restaurantes=Restaurante::all();

        return view('Admin.Categorias.Editar', compact('categoria', 'usuario', 'restaurantes'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categorias::findOrFail($id);
        $categoria->nom_categoria = $request->input('nombre');
    
        $userId = Auth::id();
        $usuario = User::findOrFail($userId);
    
        // Verifica si el usuario es administrador o tiene un restaurante asociado
        if ($usuario->hasRole('Admin') || $usuario->restaurante) {
            $categoria->id_restaurante = $request->input('restaurante');
        } else {
            // Asigna el restaurante asociado al usuario por defecto
            $categoria->id_restaurante = $usuario->id_restaurante;
        }
        
        $categoria->save();
        return redirect()->route('admin.indexCat');
    }
    public function showDeleteForm($id)
    {
        $categoria = Categorias::findOrFail($id);
        $userId = Auth::id();
        $usuario = User::findOrFail($userId);
        $restaurantes=Restaurante::all();
        return view('Admin.Categorias.Eliminar',  compact('categoria', 'usuario', 'restaurantes'));
    }
    public function delete($id)
    {
        $categoria = Categorias::findOrFail($id);
        $categoria->productos()->delete();
        $categoria->delete();

        // Redirecciona a la página que desees después de eliminar
        return redirect()->route('admin.indexCat')->with('success', 'Categoría eliminada exitosamente');
    }
}
