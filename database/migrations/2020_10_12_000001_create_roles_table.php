<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('role', 50)->default('invitado');
        });

        DB::table('roles')->insert([
            ['role' => 'invitado'],
            ['role' => 'dev'],
            ['role' => 'administrador_pnie'],
            ['role' => 'ingeniero_pnie'],
            ['role' => 'docente_pnie'],
            ['role' => 'docente_colegio'],
            ['role' => 'administrativo_colegio']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
