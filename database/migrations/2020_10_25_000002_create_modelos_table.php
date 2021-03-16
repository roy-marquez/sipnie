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

            $table->unsignedSmallInteger('subcategoria_id');
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias');

            $table->unsignedSmallInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marcas');

            $table->string('nombre',50)->unique()
                ->comment('Codigo alfanumérico o nombre del modelo del articulo ');

            $table->text('descripcion')->nullable()
                ->comment('características adicionales, ficha técnica, referencias manuales, etc.');
            $table->timestamps();
        });

        // Insertar modelos a la base de datos,
        // requiere la existencia previa de las tabla 'modelos'
        DB::unprepared(file_get_contents(base_path('database/migrations/data/modelos.sql')));
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
