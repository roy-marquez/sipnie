<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategorias', function (Blueprint $table) {
            $table->smallIncrements('id');

            $table->unsignedTinyInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->string('nombre', 30)->unique();
            $table->string('alias_1',30)->nullable()->comment('1er nombre alternativo para la subcategoría');
            $table->string('alias_2',30)->nullable()->comment('2do nombre alternativo para la subcategoría');
            $table->string('alias_3',30)->nullable()->comment('3er nombre alternativo para la subcategoría');
        });

        DB::unprepared(file_get_contents(base_path('database/migrations/data/subcategorias.sql')));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategorias');
    }
}
