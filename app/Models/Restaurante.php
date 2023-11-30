<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;
    public function getUrlAttribute()
{
    return asset('storage/' . $this->filename);
}
    public function categorias()
    {
        return $this->hasMany(Categorias::class, 'id_restaurante', 'id');
    }
    public function testimonios()
    {
        return $this->hasMany(Testimonios::class, 'id_restaurante', 'id');
    }
    public function usuarios()
    {
        return $this->hasMany(User::class, 'id_restaurante', 'id');
    }
    public function horarios()
    {
        return $this->hasMany(Horarios::class, 'id_restaurante', 'id');
    }

}
