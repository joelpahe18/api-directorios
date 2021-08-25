<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorioServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorio_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('NombreServicio')->unique();
            $table->string('TipoServicio');
            $table->boolean('ServicioDomicilio');
            $table->mediumText('HorarioAtencion');
            $table->mediumText('PaginaWeb');
            $table->mediumText('CorreoElectronico');
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
        Schema::dropIfExists('directorio_servicios');
    }
}
