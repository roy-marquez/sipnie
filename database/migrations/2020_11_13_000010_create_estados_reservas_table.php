<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_reservas', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('estado_reserva')
                ->comment('estado en que se encuentra la reserva puede por ejemplo: revisión, aprobada, rechazada');
            $table->timestamps();
        });

        DB::table('estados_reservas')->insert([
            ['estado_reserva' => 'revisión'],
            ['estado_reserva' => 'aprobada'],
            ['estado_reserva' => 'rechazada']
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
