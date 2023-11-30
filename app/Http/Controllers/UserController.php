<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
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
            $users = User::all();
        } else {
            
            $restaurante = $usuario->restaurante()->first(); // Obtener el restaurante asociado al usuario
            $restauranteId = $restaurante->id;
    
            $users = User::where('id_restaurante', $restauranteId)->get();
        }
        return view('Admin.User.User',compact('users','usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        $restaurantes=Restaurante::all();
        return view('Admin.User.Crear',compact('roles','restaurantes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function agregar(Request $request)
    {


        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->id_restaurante = $request->input('restaurante');
    
        // Guardar el usuario
        $user->save();
    
        // Asignación del rol
        $roleName = $request->input('role');
        $role = Role::where('name', $roleName)->first();
        $user->assignRole($role);
    
        return redirect()->route('admin.indexUser')->with('role', $role);
    }
    
    public function edit($id)
{
    $usuario = User::findOrFail($id);
    $restaurantes = Restaurante::all();
    $roles = Role::all();

    return view('Admin.User.Editar', compact('usuario', 'restaurantes', 'roles'));
}

public function update(Request $request, $id)
{
    $usuario = User::findOrFail($id);

    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->password = bcrypt($request->input('password'));
    $usuario->id_restaurante = $request->input('restaurante');
    $usuario->save();

    // Asignación de roles al usuario (asume que tienes la lógica adecuada para esto)
    $rolesSeleccionados = $request->input('role');
    $usuario->syncRoles($rolesSeleccionados);

     return redirect()->route('admin.indexUser');
}

   // Mostrar la vista de eliminación de usuario
   public function showDelete(User $user)
   {
    
       return view('Admin.User.Eliminar', ['user' => $user]);
   }

   // Eliminar el usuario
   public function destroy(User $user)
   {
       $user->delete();
       return redirect()->route('admin.indexUser')->with('success', 'Usuario eliminado exitosamente');
   }
}
