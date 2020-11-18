<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('colegio_id')->nullable();
            $table->foreign('colegio_id')->references('id')->on('colegios')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedInteger('reservas_activos_id')->nullable();
            $table->foreign('reservas_activos_id')->references('id')->on('reservas_activos')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedTinyInteger('estado_prestamo_id')->nullable();
            $table->foreign('estado_prestamo_id')->references('id')->on('estados_prestamos')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('funcionario_pnie_id')->nullable();
            $table->foreign('funcionario_pnie_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->date('fecha_efectiva_devolucion');
            $table->text('observaciones');

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
        Schema::dropIfExists('prestamos');
    }
}
