<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'id_categoria', 'id');
    }

   
    public function getImagenUrlAttribute()
    {
        return asset('storage/imagenes/' . $this->foto_produc);
    }

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'id_categoria', 'id');
    }

    
}
