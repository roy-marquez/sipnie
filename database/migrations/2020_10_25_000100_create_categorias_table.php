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
            $table->string('nombre', 30)->unique();
            //$table->timestamps();
        });

//        DB::table('categorias')->insert([
//            ['nombre' => 'computadora', 'alias_1'=> 'pc escritorio'],
//            ['nombre' => 'portátil', 'alias_1'=> 'laptop'],
//            ['nombre' => 'tableta', 'alias_1'=> 'tablet'],
//            ['nombre' => 'proyector', 'alias_1'=> 'video beam'],
//            ['nombre' => 'servidor', 'alias_1'=> 'server'],
//            ['nombre' => 'pantalla-tv', 'alias_1'=> 'tv'],
//            ['nombre' => 'accesorios', 'alias_1' => 'complementos']
//        ]);

        DB::unprepared(file_get_contents(base_path('database/migrations/data/categorias.sql')));
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
