<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposDocIdentidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_doc_identidad', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nombre', 50);
        });

//        DB::table('tipos_doc_identidad')->insert([
//            ['tipo_doc_identidad' => 'cédula'],
//            ['tipo_doc_identidad' => 'pasaporte'],
//            ['tipo_doc_identidad' => 'cédula residencia'],
//            ['tipo_doc_identidad' => 'otro']
//        ]);

        DB::unprepared(file_get_contents(base_path('database/migrations/data/tipos_doc_identidad.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_doc_identidad');
    }
}
