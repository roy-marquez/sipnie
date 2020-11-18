<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->integerIncrements('id');

            $table->unsignedSmallInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marcas');

            $table->string('modelo',50);

            $table->string('linea',50)
                ->comment('Linea comercial de la marca: Por ejemplo una impresora: Marca=Epson, Linea=EcoTank');

            $table->text('descripcion')->nullable()
                ->comment('características adicionales, ficha técnica, referencias manuales, etc.');
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
        Schema::dropIfExists('modelos');
    }
}
