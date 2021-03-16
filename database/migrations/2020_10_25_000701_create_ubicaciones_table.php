<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->integerIncrements('id');

//            $table->unsignedSmallInteger('colegio_id');
//            $table->foreign('colegio_id')->references('id')->on('colegios')->onDelete('cascade');

            $table->unsignedSmallInteger('colegio_codigo');
            $table->foreign('colegio_codigo')->references('codigo')->on('colegios')->onDelete('cascade');

            $table->string('nombre')->comment('lugar donde se ubicara el item, ej. Aula 1, Lab. 2, etc.');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::unprepared(file_get_contents(base_path('database/migrations/data/ubicaciones.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicaciones');
    }
}
