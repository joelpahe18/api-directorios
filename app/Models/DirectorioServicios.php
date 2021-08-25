<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectorioServicios extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NombreServicio',
        'TipoServicio',
        'ServicioDomicilio',
        'HorarioAtencion',
        'PaginaWeb',
        'CorreoElectronico',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ 'created_at', 'updated_at'];

    /**
     * Get the ubicaciones for the blog post.
     */
    public function ubicaciones()
    {
        return $this->hasMany('App\Models\UbicacionServicios');
    }
}
