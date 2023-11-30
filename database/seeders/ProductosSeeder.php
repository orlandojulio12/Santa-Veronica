<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
     public function run()
    {
        // Crear usuarios manualmente
        Productos::create([
            'nom_produc' => 'Mojarra Roja',
            'desc_produc'=>'Mojarra Roja Frita',
            'precio_produc'=>'20000',
            'id_categoria'=>'7',
            
        ]);
        Productos::create([
            'nom_produc' => 'Agua',
            'desc_produc'=>'Agua con gas',
            'precio_produc'=>'20000',
            'id_categoria'=>'2',
          
        ]);
        Productos::create([
            'nom_produc' => 'Camaron',
            'desc_produc'=>'Camarones',
            'precio_produc'=>'20000',
            'id_categoria'=>'3',
           
        ]);

        $this->command->info('Productos creadas manualmente con éxito.');
    }
}
