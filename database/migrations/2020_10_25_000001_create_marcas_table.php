<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('marca', 50);
            $table->string('alias_1', 50)->nullable();
            $table->string('alias_2', 50)->nullable();
            $table->string('alias_3', 50)->nullable();
            $table->string('logo_ruta')->nullable();
            $table->timestamps();
        });

        // Insertar marcas a la base de datos,
        // requiere la existencia previa de las tabla 'marcas'
        DB::unprepared(file_get_contents(base_path('database/migrations/data/marcas.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
