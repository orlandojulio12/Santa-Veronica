<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonios extends Model
{
    use HasFactory;
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurante', 'id');
    }
}
