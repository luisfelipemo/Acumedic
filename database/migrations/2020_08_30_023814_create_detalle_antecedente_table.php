<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleAntecedenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DetalleAntecedente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdPaciente');
            $table->unsignedBigInteger('IdTipoAntecedente');
            $table->string('Nombre')->nullable();
            $table->string('Descripcion')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('IdTipoAntecedente')->references('id')->on('TipoAntecedente');
            $table->foreign('IdPaciente')->references('id')->on('Paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DetalleAntecedente');
    }
}
