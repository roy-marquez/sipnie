<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operaciones', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('operacion')->default('indefinida')
                ->comment('tipo de operación: agregar_item, modificar_item, eliminar_ítem, etc.');

            //$table->timestamps();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('operaciones')->insert([
            ['operacion' => 'agregar_item'],
            ['operacion' => 'mostrar_item'],
            ['operacion' => 'modificar_item'],
            ['operacion' => 'eliminar_item'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operaciones');
    }
}
