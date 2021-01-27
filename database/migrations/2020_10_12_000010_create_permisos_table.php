<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->integerIncrements('id');

//            $table->unsignedTinyInteger('roles_id')->default();
//            $table->foreign('roles_id')->references('id')->on('roles');

            $table->string('permiso', 50)
                ->comment('ej.: agregar_item, modificar_item, eliminar_item');
            $table->string('descripcion')->nullable();

//            $table->timestamps();
        });

        DB::table('permisos')->insert([
            ['permiso' => 'agregar_item','descripcion' => 'el usuario puede agregar un item a la tabla "items"'],
            ['permiso' => 'modificar_item','descripcion' => 'el usuario puede modificar un item a la tabla "items"'],
            ['permiso' => 'eliminar_item','descripcion' => 'el usuario puede eliminar un item a la tabla "items"']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos');
    }
}
