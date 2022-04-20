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
            $table->string('nombre4');
            $table->string('codigo4');
            $table->string('semestre4');
            $table->string('carrera4');
            $table->string('cu4');
            $table->string('telefono4');
            $table->string('nombre5');
            $table->string('codigo5');
            $table->string('semestre5');
            $table->string('carrera5');
            $table->string('cu5');
            $table->string('telefono5');
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
