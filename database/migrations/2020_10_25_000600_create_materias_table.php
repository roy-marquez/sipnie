<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('nombre',100)->unique()->comment('nombre de la materia, campo único');
            //$table->timestamps();
        });

        // Insertar materias a la base de datos,
        // requiere la existencia previa de las tabla 'materias'
        DB::unprepared(file_get_contents(base_path('database/migrations/data/materias.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
