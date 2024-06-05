<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
   
    protected $table = 'servicios_personales';
    protected $primaryKey = 'id_servicios_personales';

    protected $fillable = [
        'id_categoria', 'id_usuario', 'nombre_servicio', 'descripcion_servicio', 'precio', 'imagen', 'numero_contacto',
    ];

    public function categoria()
    {
        return $this->belongsTo(CategoriaDeServicio::class, 'id_categoria');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
