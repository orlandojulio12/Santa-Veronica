<?php

namespace Database\Seeders;

use App\Models\Horarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Horarios::create([
            'dia' => 'Lunes - Domingo',
            'hora'=>' 8:00 a.m. - 5:00 p.m',
            'id_restaurante'=>'1',
        ]);
        Horarios::create([
            'dia' => 'Lunes - Viernes',
            'hora'=>' 7:30 a.m. - 6:00 p.m',
            'id_restaurante'=>'2',
        ]);
        Horarios::create([
            'dia' => 'Lunes - Domingo',
            'hora'=>' 8:00 a.m. - 6:00 p.m',
            'id_restaurante'=>'3',
        ]);
        Horarios::create([
            'dia' => 'Lunes - Domingo',
            'hora'=>' 8:00 a.m. - 5:00 p.m',
            'id_restaurante'=>'4',
        ]);
    }
}
