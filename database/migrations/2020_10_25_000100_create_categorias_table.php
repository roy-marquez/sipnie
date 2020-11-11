<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nombre', 30);
            $table->string('alias_1',30)->nullable()->comment('1er nombre alternativo para la categoría');
            $table->string('alias_2',30)->nullable()->comment('2do nombre alternativo para la categoría');
            $table->string('alias_3',30)->nullable()->comment('3er nombre alternativo para la categoría');
            //$table->timestamps();
        });

        DB::table('categorias')->insert([
            ['nombre' => 'computadora', 'alias_1'=> 'pc escritorio'],
            ['nombre' => 'portátil', 'alias_1'=> 'laptop'],
            ['nombre' => 'tableta', 'alias_1'=> 'tablet'],
            ['nombre' => 'proyector', 'alias_1'=> 'video beam'],
            ['nombre' => 'servidor', 'alias_1'=> 'server'],
            ['nombre' => 'pantalla-tv', 'alias_1'=> 'tv'],
            ['nombre' => 'accesorios', 'alias_1' => 'complementos']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
