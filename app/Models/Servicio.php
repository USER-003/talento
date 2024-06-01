<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_servicio';

    public function categoria()
    {
        return $this->belongsTo(CategoriaDeServicio::class, 'id_categoria');
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'servicios_personales', 'id_servicio', 'id_usuario')
                    ->withPivot('fecha_contratacion', 'estado_contratacion');
    }
}
