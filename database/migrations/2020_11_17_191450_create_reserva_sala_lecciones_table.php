<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaSalaLeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_sala_lecciones', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('reserva_sala_id')->nullable();
            $table->foreign('reserva_sala_id')->references('id')->on('reserva_salas');

            $table->unsignedInteger('leccion_id');
            $table->foreign('leccion_id')->references('id')->on('lecciones');

            $table->date('fecha');

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
        Schema::dropIfExists('reserva_sala_lecciones');
    }
}
