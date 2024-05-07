<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = ['categoria_id', 'nombre_servicio', 'descripcion_servicio', 'precio_servicio', 'imagen'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
