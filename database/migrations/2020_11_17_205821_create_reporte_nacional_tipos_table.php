<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporteNacionalTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_nacional_tipos', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('tipo');
        });

        DB::unprepared(file_get_contents(base_path('database/migrations/data/reporte_nacional_tipos.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporte_nacional_tipos');
    }
}
