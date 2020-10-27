<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('codigo',5)->unique()->comment('código presupuestario');
            $table->string('nombre');
            $table->integer('cedula_juridica',10)->unique()->nullable()
                ->comment('10 dígitos, sin cero al inicio ni guiones');
            $table->unsignedInteger('matricula')->nullable()->comment('cantidad de alumnos del colegio');

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
        Schema::dropIfExists('colegios');
    }
}
