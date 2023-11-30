<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol1=Role::create( [ 'name' =>'Admin']);
        $rol2=Role::create( [ 'name' =>'Restaurante']);
   


        Permission::create([ 'name' =>'admin.index'])->syncRoles([$rol1,$rol2]);
        Permission::create([ 'name' =>'admin.indexRest'])->syncRoles([$rol1,$rol2]);
        Permission::create([ 'name' =>'restaurantes.categorias'])->syncRoles([$rol1,$rol2]);
        Permission::create([ 'name' =>'Restaurante.create'])->syncRoles([$rol1,$rol2]);
        Permission::create([ 'name' =>'Restaurante.agregar'])->syncRoles([$rol1,$rol2]);
        Permission::create([ 'name' =>'restaurantes.productos'])->syncRoles([$rol1,$rol2]);
    }
}
