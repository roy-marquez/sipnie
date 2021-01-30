<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesNacionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_nacionales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');

            $table->date('fecha');
//            $table->enum('tipo',['préstamos por colegio', 'préstamos por materia', 'préstamos por categoría'])
//                ->comment('El informe presenta cantidad de prestamos por colegio, materia o categoría');
            $table->unsignedTinyInteger('rn_tipo_id');
            $table->foreign('rn_tipo_id')->references('id')->on('reporte_nacional_tipos');
//            $table->enum('formato', ['oficial', 'informal'])
            $table->boolean('formato_oficial')
                ->comment('El informe puede ir con cabecera y pie de página (formato_oficial) o sin ellos (informal)');
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
        Schema::dropIfExists('reporte_nacionales');
    }
}
