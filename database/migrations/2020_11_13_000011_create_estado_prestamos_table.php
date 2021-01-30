<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoPrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_prestamos', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('estado')
                ->comment('estado del préstamo por ejemplo: "sin iniciar", "en ejecución", "finalizado" ');
        });
//        DB::table('estados_prestamos')->insert([
//            ['estado_prestamo' => 'sin iniciar'],
//            ['estado_prestamo' => 'en_ejecucion'],
//            ['estado_prestamo' => 'finalizado']
//        ]);
        DB::unprepared(file_get_contents(base_path('database/migrations/data/estado_prestamos.sql')));
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
