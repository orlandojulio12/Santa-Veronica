<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear usuarios manualmente
        User::create([
            'name' => 'junior',
            'email' => 'junior@gmail.com',
            'password' => bcrypt('12345678'), 
        ])->assignRole('Admin');

        User::create([
            'name' => 'Orlando Julio',
            'email' => 'orlandojulio76@gmail.com',
            'password' => bcrypt('12345678'), 
            'id_restaurante'=>'1'
          
            // Agrega otros campos si es necesario
        ])->assignRole('Restaurante');
        User::create([
            'name' => 'Andres',
            'email' => 'andres@gmail.com',
            'password' => bcrypt('12345678'), 
            'id_restaurante'=>'3'
          
            // Agrega otros campos si es necesario
        ])->assignRole('Restaurante');
        User::create([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('12345678'), 
            'id_restaurante'=>'4'
          
            // Agrega otros campos si es necesario
        ])->assignRole('Restaurante');
        User::create([
            'name' => 'Alcatraz',
            'email' => 'alcatraz@gmail.com',
            'password' => bcrypt('12345678'), 
            'id_restaurante'=>'2'
          
            // Agrega otros campos si es necesario
        ])->assignRole('Restaurante');

        // Crea más usuarios si es necesario

        $this->command->info('Usuarios creados manualmente con éxito.');
    }
}

