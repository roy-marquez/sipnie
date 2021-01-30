<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegioMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegio_materia', function (Blueprint $table) {
            $table->integerIncrements('id');

            $table->unsignedSmallInteger('colegio_id');
            $table->foreign('colegio_id')->references('id')->on('colegios')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedSmallInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materias')
                ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colegios_materias');
    }
}
