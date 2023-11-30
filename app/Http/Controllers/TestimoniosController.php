<?php

namespace App\Http\Controllers;

use App\Models\Testimonios;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TestimoniosController extends Controller
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
            $testimonios = Testimonios::all();
        } else {
            // Si no es un administrador, obtener las categorías del restaurante del usuario
            $restaurante = $usuario->restaurante()->first(); // Obtener el restaurante asociado al usuario
            $restauranteId = $restaurante->id;
    
            $testimonios = Testimonios::where('id_restaurante', $restauranteId)->get();
        }
    
        return view("Admin.Testimonios.Testimonios", compact('testimonios','usuario'));
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
    public function show(Testimonios $testimonios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonios $testimonios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonios $testimonios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonios $testimonios)
    {
        //
    }
}
