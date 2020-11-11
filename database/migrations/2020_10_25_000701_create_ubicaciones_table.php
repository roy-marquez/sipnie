<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedSmallInteger('colegio_id');
            $table->foreign('colegio_id')->references('id')->on('colegios')->onDelete('cascade');
            $table->string('ubicacion')->comment('lugar donde se ubicara el item, ej. Aula 1, Lab. 2, etc.');

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
        Schema::dropIfExists('ubicaciones');
    }
}
