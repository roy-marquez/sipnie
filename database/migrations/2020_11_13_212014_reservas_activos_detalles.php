<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservasActivosDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_activos_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('reservas_activos_id');
            $table->foreign('reservas_activos_id')->references('id')->on('reservas_activos');

            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('leccion_id')->comment('lección en que estará reservado el articulo');
            $table->foreign('leccion_id')->references('id')->on('lecciones')->onUpdate('cascade')->onDelete('cascade');

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
}
