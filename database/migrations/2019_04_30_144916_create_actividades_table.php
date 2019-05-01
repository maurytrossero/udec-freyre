<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('descripcion');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_finalizacion');
            $table->double('costo_mensual');
            $table->string('dia_cursado');
            $table->string('horario');
            $table->string('estado_inscripcion');

            $table->unsignedBigInteger('tipo_actividad_id');
            $table->foreign('tipo_actividad_id')->references('id')->on('tipos_actividades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
