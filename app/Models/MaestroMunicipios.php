<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaestroMunicipios extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigoMunicipio',
        'NombreMunicipio',
        'NombreDepartamento'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the ubicacion that owns the phone.
     */
    public function ubicacion()
    {
        return $this->belongsTo('App\Models\UbicacionServicios');
    }

}
