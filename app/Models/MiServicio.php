<?php
// app/Models/ServicioPersonal.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiServicio extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_servicio',
        'id_usuario',
        'fecha_contratacion',
        'estado_contratacion',
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
