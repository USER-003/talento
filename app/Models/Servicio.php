<?php
// app/Models/Servicio.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;



    protected $fillable = [
        'id_categoria',
        'nombre_servicio',
        'descripcion_servicio',
        'precio',
        'email',
        'numero_contacto',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function miservicio()
    {
        return $this->hasMany(MiServicio::class);
    }
}
