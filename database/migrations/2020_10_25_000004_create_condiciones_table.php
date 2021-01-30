<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condiciones', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nombre', 50)
                ->comment('condición física del articulo: bueno, regurar, malo, desecho');
            //$table->timestamps();
        });

//        DB::table('condiciones')->insert([
//            ['condicion' => 'bueno'],
//            ['condicion' => 'regular'],
//            ['condicion' => 'malo'],
//            ['condicion' => 'desecho']
//        ]);

        DB::unprepared(file_get_contents(base_path('database/migrations/data/condiciones.sql')));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condiciones');
    }
}
