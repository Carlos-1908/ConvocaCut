<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('departamento');
            $table->string('email_Dudas');
            $table->string('telefono_Dudas');
            $table->string('requisitos');
            $table->string('fecha_de_Registro');
            $table->string('fecha_de_Revision');
            $table->string('fecha_de_Emision_de_Constancias');
            $table->string('fecha_de_Envio_de_Proyecto');
            $table->string('fecha_de_Publicacion_de_Resutados'); 
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
        //
    }
};
