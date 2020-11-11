<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecciones', function (Blueprint $table) {
            $table->integerIncrements('id');

            $table->unsignedSmallInteger('colegio_codigo');
            $table->foreign('colegio_codigo')->references('id')->on('colegios')->onDelete('cascade');

            $table->unsignedTinyInteger('horario_id')->nullable()->default(1)
                ->comment('tipo de horario, ejemplo: 1 corresponde a horario académico de 12 lecciones de 40 minutos');
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('set null');

            $table->unsignedTinyInteger( 'dia_id')->nullable();
            $table->foreign('dia_id')->references('id')->on('dias')->onDelete('set null');

            $table->unsignedTinyInteger('leccion_num');
            $table->time('hora_inicio')->nullable();
            $table->time('hora_fin')->nullable();
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
        Schema::dropIfExists('lecciones');
    }
}
