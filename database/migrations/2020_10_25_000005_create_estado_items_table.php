<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_items', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('estado', 30)->comment('Estado lógico del item, activo o inactivo, baja, etc.');;
//            $table->timestamps();
        });

//        DB::table('estado_items')->insert([
//            ['estado_item' => 'activo'],
//            ['estado_item' => 'inactivo'],
//            ['estado_item' => 'baja']
//        ]);

        DB::unprepared(file_get_contents(base_path('database/migrations/data/estado_items.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_items');
    }
}
