<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->smallIncrements('id');

            $table->unsignedSmallInteger('colegio_id')->nullable();
            $table->foreign('colegio_id')->references('id')->on('colegios')->onDelete('set null');

            $table->string('nombre', 100)->comment('Nombre con el que se conoce la sala.');
            $table->string('horario')->nullable()
                ->comment('horario de disponibilidad de la sala: ej.: L-V de 7:00 a 4:00 pm. Es un campo informativo y de restricción');
            $table->unsignedTinyInteger('capacidad')->comment('numero total de personas que pueden trabajar simultaneamente en la sala');
            $table->text('descripcion')->nullable()->comment('descripcion general de la sala');
            $table->string('foto_ruta');

            $table->timestamp('creado_en')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('actualizado_en')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
