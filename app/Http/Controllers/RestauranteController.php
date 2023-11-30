<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Testimonios;
use App\Models\Productos;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $usuario = User::with('restaurante')->findOrFail($userId);
    
        if ($usuario->hasRole('Admin')) {
            // Si el usuario es un administrador, mostrar todos los restaurantes
            $rest = Restaurante::all();
        } else {
            // Si no es un administrador, mostrar solo el restaurante del usuario
            $rest = $usuario->restaurante;
        }
    
        return view("Admin.Restaurantes.Restaurantes", compact('rest','usuario'));
    }


    /**
     * Display the specified resource.
     */
        public function create(Restaurante $restaurante)
        {
            return view('Admin.Restaurantes.Crear');
        }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function agregar(Request $request)
    {
        $imagenes = []; // Almacenar las rutas de las imágenes

    // Iterar sobre cada campo de imagen y guardar las rutas
    for ($i = 1; $i <= 5; $i++) {
        $nombreCampo = 'foto' . $i;
        $imagen = $request->file($nombreCampo);

        // Verificar si se cargó una imagen para ese campo
        if ($imagen) {
            $rutaImagen = $imagen->store('Imagenes', 'public_custom');
         
            $imagenes[] = $rutaImagen;
        } else {
            $imagenes[] = null; // Si no se cargó una imagen, se asigna null
        }
    }

    $logo = $request->file('logo');
    $rutaLogo = null; // Inicializar la ruta del logo como nulo

    // Guardar el logo en la carpeta y obtener su ruta si se ha cargado
    if ($logo) {
        $rutaLogo = $logo->store('Imagenes', 'public_custom');
    }

    // Crear una instancia del modelo Restaurante y guardar los datos en la base de datos
    $restaurante = new Restaurante();
    $restaurante->nom_rest = $request->post('nombre');
    $restaurante->ubicacion_rest = $request->post('ubicacion');
    $restaurante->telefono_rest = $request->post('telefono');
    $restaurante->correo_rest = $request->post('correo');
    $restaurante->desc_rest = $request->post('descripcion');

    // Asignar las rutas de las imágenes a los campos correspondientes
    $restaurante->foto_1_rest = $imagenes[0];
    $restaurante->foto_2_rest = $imagenes[1];
    $restaurante->foto_3_rest = $imagenes[2];
    $restaurante->foto_4_rest = $imagenes[3];
    $restaurante->foto_5_rest = $imagenes[4];
    $restaurante->logo_rest = $rutaLogo;

    $restaurante->save();

    return redirect()->route('admin.indexRest');
    }
    
    public function edit($id)
    {
        $restaurant=Restaurante::all();
        $restaurant=Restaurante::find($id);
        return view('Admin.Restaurantes.Editar',compact('restaurant'));
    }
    public function update(Request $request, $id)
    {
        // Encontrar el restaurante por su ID
        $restaurante = Restaurante::findOrFail($id);
    
        // Actualizar los datos del restaurante con los nuevos valores
        $restaurante->nom_rest = $request->post('nombre');
        $restaurante->ubicacion_rest = $request->post('ubicacion');
        $restaurante->telefono_rest = $request->post('telefono');
        $restaurante->correo_rest = $request->post('correo');
        $restaurante->desc_rest = $request->post('descripcion');
    
        // Verificar y actualizar las imágenes si se proporcionaron nuevas
        for ($i = 1; $i <= 5; $i++) {
            $nombreCampo = 'foto' . $i;
            $imagen = $request->file($nombreCampo);
    
            // Obtener el nombre del campo de la foto actual en la base de datos
            $nombreCampoDB = 'foto_' . $i . '_rest';
            $fotoActual = $restaurante->$nombreCampoDB;
    
            // Verificar si se proporcionó una nueva imagen para el campo
            if ($imagen) {
                $rutaImagen = $imagen->store('Imagenes');
                $restaurante->$nombreCampoDB = $rutaImagen;
            } else {
                // Si no se proporcionó una nueva imagen, mantener la imagen actual
                $restaurante->$nombreCampoDB = $fotoActual;
            }
        }
    
        // Actualizar el logo si se proporcionó una nueva imagen para el logo
        if ($request->hasFile('logo')) {
            $rutaLogo = $request->file('logo')->store('Imagenes');
            $restaurante->logo_rest = $rutaLogo;
        }
        // Si no se proporcionó una nueva imagen para el logo, se conserva el logo existente
    
        // Guardar los cambios en la base de datos
        $restaurante->save();
    
        return redirect()->route('admin.indexRest');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $r = Restaurante::find($id);
        return view('Admin.Restaurantes.Eliminar',compact('r'));
    }
    public function delete($id)
    {
        $restaurante = Restaurante::find($id);
    
        if ($restaurante) {
            // Eliminar los horarios relacionados
            $restaurante->horarios()->delete();
    
            // Eliminar los testimonios relacionados
            $restaurante->testimonios()->delete();
    
            // Eliminar las categorías relacionadas (si se encuentran)
            if ($restaurante->categorias()->exists()) {
                $restaurante->categorias()->delete();
            }
    
            // Eliminar el restaurante
            $restaurante->delete();
        }
        return redirect()->route('admin.indexRest');
    }
        
    
    // Aqui Empiezan Las Funciones Para las vistas que no son del ADMIN
    public function Home(Restaurante $restaurante)
    {
        $restaurante= Restaurante::all();
        $testimonio=Testimonios::all();
        return view("welcome",compact('restaurante','testimonio'));
    }

    public function Restaurante1($idRestaurante)
    {
        $restaurant = Restaurante::with('categorias.productos')->findOrFail($idRestaurante);
        $categoria = Categorias::with('productos')->get();
        $testimonio = $restaurant->testimonios;
        $horarios=$restaurant->horarios;
    
        return view("Restaurantes", compact('restaurant', 'categoria', 'testimonio','horarios'));
    }

    public function Menu($idRestaurante)
    {
        $restaurant = Restaurante::with('categorias.productos')->findOrFail($idRestaurante);
        $categorias = Categorias::with('productos')
                        ->where('id_restaurante', $idRestaurante)
                        ->get();
                        $horarios=$restaurant->horarios;
        return view('Menu', compact('restaurant', 'categorias','horarios'));
    }
}
