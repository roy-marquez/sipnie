<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificaciones', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nombre', 100)->unique()->comment('Tipo de colegio, ej.: Académico Diurno, Técnico Profesional, Experimental Bilingüe');
        });

//        DB::table('clasificaciones')->insert([
//            ['clasificacion' => 'Académico Diurno'],
//            ['clasificacion' => 'Colegio Técnico Profesional (C.T.P)'],
//            ['clasificacion' => 'Experimental Bilingüe'],
//            ['clasificacion' => 'Colegio Artístico']
//        ]);

        DB::unprepared(file_get_contents(base_path('database/migrations/data/clasificaciones.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clasificaciones');
    }
}
