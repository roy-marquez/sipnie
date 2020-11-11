<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCantonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantones', function (Blueprint $table) {
            $table->unsignedSmallInteger('id')->primary()
                ->comment('código de cantón, 3 dígitos: 1 de provincia y 2 de canton');
            $table->unsignedTinyInteger('provincia_id');
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->string('canton_nombre', 45);
        });

        // Insertar cantones a la base de datos,
        // requiere la existencia previa de las tabla 'cantones'
        DB::unprepared(file_get_contents(base_path('database/migrations/data/cantones.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cantones');
    }
}
