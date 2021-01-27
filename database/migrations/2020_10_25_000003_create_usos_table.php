<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usos', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('uso', 30)
                ->comment('planta=no se prestan, préstamo=disponible para préstamo, condicionado= préstamo bajo condiciones especiales.');
            //$table->timestamps();
        });

//        DB::table('usos')->insert([
//            ['uso' => 'planta'],
//            ['uso' => 'préstamo'],
//            ['uso' => 'condicionado']
//        ]);

        DB::unprepared(file_get_contents(base_path('database/migrations/data/usos.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usos');
    }
}
