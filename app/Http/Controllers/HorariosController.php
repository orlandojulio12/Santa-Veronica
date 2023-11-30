<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HorariosController extends Controller
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
            $horarios = Horarios::all();
        } else {
            // Si no es un administrador, obtener las categorías del restaurante del usuario
            $restaurante = $usuario->restaurante()->first(); // Obtener el restaurante asociado al usuario
            $restauranteId = $restaurante->id;
    
            $horarios = Horarios::where('id_restaurante', $restauranteId)->get();
        }
    
        return view("Admin.Horarios.Horarios", compact('horarios','usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Horarios $horarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $userId = Auth::id();
        $usuario = User::findOrFail($userId);
        $restaurantes=Restaurante::all();
        $horario = Horarios::findOrFail($id);
    return view('Admin.Horarios.Editar', compact('horario','restaurantes','usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $horario = Horarios::findOrFail($id);

    // Actualizar los campos del horario con los valores del formulario
    $horario->dia = $request->input('dia');
    $horario->hora = $request->input('hora');
    $userId = Auth::id();
        $usuario = User::findOrFail($userId);
    
        // Verifica si el usuario es administrador o tiene un restaurante asociado
        if ($usuario->hasRole('Admin') || $usuario->restaurante) {
            $horario->id_restaurante = $request->input('restaurante');
        } else {
            // Asigna el restaurante asociado al usuario por defecto
            $horario->id_restaurante = $usuario->id_restaurante;
        }
        

    $horario->save();

    return redirect()->route('admin.indexHorario')->with('success', 'Horario actualizado exitosamente');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horarios $horarios)
    {
        //
    }
}
