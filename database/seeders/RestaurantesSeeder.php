<?php

namespace Database\Seeders;

use App\Models\Restaurante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Crear usuarios manualmente
        Restaurante::create([
            'nom_rest' => 'El Rescate Marino',
            'ubicacion_rest'=>'Cl 7a #15B-6, Santa Veronica, Juan de Acosta, Atlántico.',
            'telefono_rest'=>'3015972474',
            'correo_rest' => 'andres.alba1793gmail.com',
            'desc_rest' => 'Rescate Marino: Donde la pasión por el mar se saborea en cada plato, superando desafíos con frescura y sabor desde 1992.', 
     ]);

        Restaurante::create([
        'nom_rest' => 'Villa Alcatraz',
        'ubicacion_rest'=>'Vía 6 No. 20 – 589 Entre Sabanilla y Salgar, Atlántico, Colombia',
        'telefono_rest'=>'3157391612',
        'correo_rest' => 'info@villaalcatraz.com',
        'desc_rest' => 'Un paraíso frente al mar... Cómodas Carpas y Kioskos para relajarse y pasar un rato agradable', 
    ]);
        Restaurante::create([
    'nom_rest' => 'Los Caracoles',
    'ubicacion_rest'=>'Carrera 15B No 5 39 Juan de Acosta, SANTA VERONICA, Atlántico Colombia',
    'telefono_rest'=>'3118185711',
    'correo_rest' => '.....',
    'desc_rest' => 'Los Caracoles: Sabores del mar desde 1992, resistiendo el tiempo y las tormentas con auténticas delicias que perduran.', 
    ]);
        Restaurante::create([
    'nom_rest' => 'La Esperanza',
    'ubicacion_rest'=>'Cl 7a #1612 Santa Verónica, Juan de Acosta',
    'telefono_rest'=>'3205670542',
    'correo_rest' => '.....',
    'desc_rest' => 'La Esperanza: 65 años de sabor junto al mar. Nuestro legado culinario te invita a un viaje gastronómico único.', 
    ]);

        // Crea más usuarios si es necesario

        $this->command->info('restaurantes creados manualmente con éxito.');
    }
}
