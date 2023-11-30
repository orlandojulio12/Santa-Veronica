<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    // ... otras propiedades y métodos

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurante', 'id');
    }
    
    public function productos()
    {
        return $this->hasMany(Productos::class, 'id_categoria', 'id');
    }

}
