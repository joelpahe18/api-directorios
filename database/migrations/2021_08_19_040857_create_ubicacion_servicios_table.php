<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion_servicios', function (Blueprint $table) {
            $table->id();
            $table->mediumText('Direccionservicio');
            $table->mediumText('SectorBarrio');
            $table->mediumText('Coordenadalatitud');
            $table->mediumText('Coordenadalongitud');
            $table->mediumText('Telefonofijo');
            $table->mediumText('Telefonomovil');
            $table->foreignId('MaestroMunicipios_id')
                ->constrained('maestro_municipios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('DirectorioServicios_id')
                ->constrained('directorio_servicios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacion_servicios');
    }
}
