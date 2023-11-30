<?php

namespace Database\Seeders;

use App\Models\Testimonios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonioSeeder extends Seeder
{
    public function run()
    {
        // Crear usuarios manualmente
        Testimonios::create([
            'testimonio' => 'Está justo frente al mar. Excelente atención de su propietario y demás personal que lo asiste',
            'id_restaurante'=>'1',
        ]);
        Testimonios::create([
            'testimonio' => 'La comida es deliciosa, recomiendo pedir una Posta de sierra frita y quedan satisfechos',
            'id_restaurante'=>'1',
        ]);
        Testimonios::create([
            'testimonio' => 'Muy buena comida y atención',
            'id_restaurante'=>'4',
        ]);
        Testimonios::create([
            'testimonio' => 'Restaurante con buen menú, y lugar cómodo',
            'id_restaurante'=>'4',
        ]);
        Testimonios::create([
            'testimonio' => 'Buen lugar para pasar en familia, muy buena comida y excelente atención, lo recomiendo',
            'id_restaurante'=>'3',
        ]);
        Testimonios::create([
            'testimonio' => 'Atendiendo por los propietarios excelente atención, buenos precios, la comida es deliciosa, higiene buena',
            'id_restaurante'=>'3',
        ]);
        Testimonios::create([
            'testimonio' => 'Buen restaurante 🍴 atendido por los propietarios con mucho amor y su comida es muy buena',
            'id_restaurante'=>'3',
        ]);
        Testimonios::create([
            'testimonio' => 'Buen restaurante su comida es muy buena y sus Cócteles',
            'id_restaurante'=>'2',
        ]);
        Testimonios::create([
            'testimonio' => 'Delicioso cóctel de camarón con salsa rosada, De lo mejor',
            'id_restaurante'=>'2',
        ]);
        // Crea más usuarios si es necesario

        $this->command->info('Testimonios creados manualmente con éxito.');
    }
}
