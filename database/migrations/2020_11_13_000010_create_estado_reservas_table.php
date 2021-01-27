<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_reservas', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('estado_reserva')
                ->comment('estado en que se encuentra la reserva puede por ejemplo: revisión, aprobada, rechazada');
        });

//        DB::table('estado_reservas')->insert([
//            ['estado_reserva' => 'revisión'],
//            ['estado_reserva' => 'aprobada'],
//            ['estado_reserva' => 'rechazada']
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
