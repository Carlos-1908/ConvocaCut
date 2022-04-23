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
        Schema::create('integrantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_del_equipo')->unique();
            $table->string('convocatoria');
            $table->string('num_Integrantes');
            $table->string('nombre1');
            $table->string('codigo1');
            $table->string('semestre1');
            $table->string('carrera1');
            $table->string('cu1');
            $table->string('telefono1');
            $table->string('nombre2');
            $table->string('codigo2');
            $table->string('semestre2');
            $table->string('carrera2');
            $table->string('cu2');
            $table->string('telefono2');
            $table->string('nombre3');
            $table->string('codigo3');
            $table->string('semestre3');
            $table->string('carrera3');
            $table->string('cu3');
            $table->string('telefono3');
            $table->string('nombre4')->nullable();
            $table->string('codigo4')->nullable();
            $table->string('semestre4')->nullable();
            $table->string('carrera4')->nullable();
            $table->string('cu4')->nullable();
            $table->string('telefono4')->nullable();
            $table->string('nombre5')->nullable();
            $table->string('codigo5')->nullable();
            $table->string('semestre5')->nullable();
            $table->string('carrera5')->nullable();
            $table->string('cu5')->nullable();
            $table->string('telefono5')->nullable();
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
