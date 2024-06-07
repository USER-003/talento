<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasDeServicio extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_categoria';

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'id_categoria');
    }
}
