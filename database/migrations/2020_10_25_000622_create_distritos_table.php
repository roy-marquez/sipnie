<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distritos', function (Blueprint $table) {
            $table->unsignedMediumInteger('id')->primary()
                ->comment('código de distrito, 5 dígitos: 1 de provincia, 2 de cantón y 2 de distrito ');
            $table->unsignedSmallInteger('canton_id');
            $table->foreign('canton_id')->references('id')->on('cantones');
            $table->string('nombre', 45);
        });

        // Insertar distritos a la base de datos,
        // requiere la existencia previa de las tabla 'distritos'
        DB::unprepared(file_get_contents(base_path('database/migrations/data/distritos.sql')));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distritos');
    }
}
