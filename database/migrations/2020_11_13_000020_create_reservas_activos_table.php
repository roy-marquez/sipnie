<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_activos', function (Blueprint $table) {
            $table->integerIncrements('id');

            $table->unsignedSmallInteger('colegio_id')->nullable()->comment('colegio dueño del activo');
            $table->foreign('colegio_id')->references('id')->on('colegios')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('solicitante_id')->nullable()->comment('usuario que genera la reserva');
            $table->foreign('solicitante_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->date('fecha_solicitud');
            $table->date('fecha_devolucion');
            $table->unsignedSmallInteger('materia_id')->comment('materia en la cuál se asigna la reserva');
            $table->text('actividad')->comment('Se describe el tipo de actividad que van a realizar');

            $table->unsignedTinyInteger('reserva_estado_id')->nullable()->default(1);
            $table->foreign('reserva_estado_id')->references('id')->on('estado_reservas')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('revisor_id')->nullable()->comment('Funcionario pnie que revisa la reserva');
            $table->foreign('revisor_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->text('notas_revision')->nullable()->comment('Campo para comunicar motivo de rechazo o para dar información adicional');

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
        Schema::dropIfExists('reservas_activos');
    }
}
