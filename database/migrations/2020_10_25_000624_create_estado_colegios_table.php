<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_colegios', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('estado_colegio')
                ->comment('estado en que se encuentra el colegio en el sistema, ej.: activo, inactivo.');
//            $table->timestamps();
        });

//        DB::table('estados_colegios')->insert([
//            ['estado_colegio' => 'activo'],
//            ['estado_colegio' => 'inactivo'],
//            ['estado_colegio' => 'activo_sin_admin']
//        ]);

        DB::unprepared(file_get_contents(base_path('database/migrations/data/estado_colegios.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_colegios');
    }
}
