<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('estado', 30)->comment('Estado lógico del item, activo o inactivo, baja, etc.');;
//            $table->timestamps();
        });

        DB::table('estados')->insert([
            ['estado' => 'activo'],
            ['estado' => 'inactivo'],
            ['estado' => 'baja']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
