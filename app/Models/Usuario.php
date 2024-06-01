<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_usuario';

    protected $fillable = ['nombre', 'email', 'password'];

    protected $hidden = ['password'];

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'servicios_personales', 'id_usuario', 'id_servicio')
                    ->withPivot('fecha_contratacion', 'estado_contratacion');
    }
}
