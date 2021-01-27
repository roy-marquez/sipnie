<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('identificador del dia de la semana: 1=lunes...7=domingo');
            $table->string('dia')->comment('dia de la semana: lunes a domingo');
        });

//        DB::table('dias')->insert([
//            ['dia' => 'lunes'],
//            ['dia' => 'martes'],
//            ['dia' => 'miércoles'],
//            ['dia' => 'jueves'],
//            ['dia' => 'viernes'],
//            ['dia' => 'sábado'],
//            ['dia' => 'domingo']
//        ]);

        DB::unprepared(file_get_contents(base_path('database/migrations/data/dias.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dias');
    }
}
