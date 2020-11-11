<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_usuarios', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('estado_usuario')->comment('Ej. activo, inactivo, suspendido');
//            $table->timestamps();
        });

        DB::table('estados_usuarios')->insert([
            ['estado_usuario' => 'activo'],
            ['estado_usuario' => 'inactivo'],
            ['estado_usuario' => 'suspendido']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados_usuarios');
    }
}
