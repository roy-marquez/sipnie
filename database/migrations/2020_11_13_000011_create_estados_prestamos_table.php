<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosPrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_prestamos', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('estado_prestamo')
                ->comment('estado del préstamo por ejemplo: sin_iniciar, en_ejecución, finalizado');
            $table->timestamps();
        });

        DB::table('estados_prestamos')->insert([
            ['estado_prestamo' => 'sin_iniciar'],
            ['estado_prestamo' => 'en_ejecucion'],
            ['estado_prestamo' => 'finalizado']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados_reservas');
    }
}
