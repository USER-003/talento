<?php
// app/Models/Usuario.php

namespace App\Models;

use \app\Models\MiServicio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'email',
        'password',
    ];

    public function serviciosPersonales()
    {
        return $this->hasMany(MiServicio::class);
    }
}
