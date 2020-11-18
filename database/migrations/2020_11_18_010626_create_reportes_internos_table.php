<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesInternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes_internos', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('colegio_id');
            $table->foreign('colegio_id')->references('id')->on('colegios');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');

            $table->date('fecha');
            $table->enum('tipo',['inventario', 'préstamos'])
                ->comment('El informe puede ser de inventario o de préstamos ejecutados');
            $table->enum('formato', ['oficial', 'informal'])
                ->comment('El informe puede con cabecera y pie de página (oficial) o sin ellos (informal)');
            $table->string('ruta')->nullable();
            $table->string('formato_archivo',5);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes_internos');
    }
}
