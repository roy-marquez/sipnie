<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_usuarios', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('estado_usuario')->comment('Ej. activo, inactivo, suspendido');
//            $table->timestamps();
        });

//        DB::table('estado_usuarios')->insert([
//            ['estado_usuario' => 'activo'],
//            ['estado_usuario' => 'inactivo'],
//            ['estado_usuario' => 'suspendido']
//        ]);

        DB::unprepared(file_get_contents(base_path('database/migrations/data/estado_usuarios.sql')));
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
