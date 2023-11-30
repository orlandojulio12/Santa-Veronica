<?php

namespace Database\Seeders;

use App\Models\Categorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */  public function run()
    {
        // Crear usuarios manualmente
        Categorias::create([
            'nom_categoria' => 'Platos Fuertes.',
            'id_restaurante'=>'1',
        ]);
        Categorias::create([
            'nom_categoria' => 'Entradas.',
            'id_restaurante'=>'1',
        ]);
        Categorias::create([
            'nom_categoria' => 'Bebidas.',
            'id_restaurante'=>'1',
        ]);
        Categorias::create([
            'nom_categoria' => 'Mariscos.',
            'id_restaurante'=>'1',
        ]);
        Categorias::create([
            'nom_categoria' => 'Adicionales de Salsas.',
            'id_restaurante'=>'1',
        ]);
        Categorias::create([
            'nom_categoria' => 'Sancocho.',
            'id_restaurante'=>'1',
        ]);
        Categorias::create([
            'nom_categoria' => 'Menu Infantil.',
            'id_restaurante'=>'1',
        ]);
        
    

        // Crea más usuarios si es necesario

        $this->command->info('categorias creadas manualmente con éxito.');
    }
}
