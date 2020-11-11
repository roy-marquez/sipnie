<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegiosHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios_horarios', function (Blueprint $table) {
            $table->tinyIncrements('id');

            $table->unsignedSmallInteger('colegio_id');
            $table->foreign('colegio_id')->references('id')->on('colegios')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedTinyInteger('horario_id');
            $table->foreign('horario_id')->references('id')->on('horarios')
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
        //
        Schema::dropIfExists('colegios_horarios');
    }
}
