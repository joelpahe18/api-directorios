<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbicacionServicios extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Direccionservicio',
        'SectorBarrio',
        'Coordenadalatitud',
        'Coordenadalongitud',
        'Telefonofijo',
        'MaestroMunicipios_id',
        'DirectorioServicios_id',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the directorio that owns the comment.
     */
    public function directorio()
    {
        return $this->belongsTo('App\Models\DirectorioServicios');
    }

    /**
     * Get the municipio record associated with the user.
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\MaestroMunicipios');
    }

}
