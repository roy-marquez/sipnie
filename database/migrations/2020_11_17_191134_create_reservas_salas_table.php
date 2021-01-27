<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_salas', function (Blueprint $table) {
            $table->integerIncrements('id');

            $table->unsignedSmallInteger('sala_id')->nullable();
            $table->foreign('sala_id')->references('id')->on('salas')
                ->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');

            $table->date('fecha_solicitud')->comment('fecha en que realiza la solicitud');
            $table->date('fecha_inicio')->comment('fecha de inicio de reserva');
            $table->date('fecha_fin')->comment('fecha de fin de reserva');

            $table->unsignedSmallInteger('materia_id')->nullable();
            $table->foreign('materia_id')->references('id')->on('materias')->onUpdate('cascade')->onDelete('set null');

            $table->mediumText('actividad')->nullable()
                ->comment('Breve descripción de la actividad que se realizará en la sala de innovación');

            $table->unsignedTinyInteger('estado_reserva_id')->nullable();
            $table->foreign('estado_reserva_id')->references('id')->on('estado_reservas')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('reserva_salas');
    }
}
