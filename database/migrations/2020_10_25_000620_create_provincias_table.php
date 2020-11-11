<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->unsignedTinyInteger('id' )->primary()->comment('código de provincia de 1 a 7');
            $table->string('provincia_nombre', 45)->comment('nombre de la provincia');
        });

        // Insertar provincias a la base de datos, requiere la existencia previa de la tabla 'provincias'
        DB::unprepared(file_get_contents(base_path('database/migrations/data/provincias.sql')));

//        DB::table('provincias')->insert([
//            ['id' => 1, 'provincia_nombre' => 'San José'],
//            ['id' => 2, 'provincia_nombre' => 'Alajuela'],
//            ['id' => 3, 'provincia_nombre' => 'Cartago'],
//            ['id' => 4, 'provincia_nombre' => 'Heredia'],
//            ['id' => 5, 'provincia_nombre' => 'Guancaste'],
//            ['id' => 6, 'provincia_nombre' => 'Puntarenas'],
//            ['id' => 7, 'provincia_nombre' => 'Limon']
//        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincias');
    }
}
