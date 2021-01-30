<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('colegio_id')->nullable();
            $table->foreign('colegio_id')->references('id')->on('colegios')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedInteger('reserva_activo_id')->nullable();
            $table->foreign('reserva_activo_id')->references('id')->on('reservas_activos')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedTinyInteger('estado_prestamo_id')->nullable();
            $table->foreign('estado_prestamo_id')->references('id')->on('estado_prestamos')->onUpdate('cascade')->onDelete('set null');

//            Entrega del activo
            $table->unsignedBigInteger('entregado_por')
                ->comment('Id del funcionario PNIE que entrega el activo. Se extrae automáticamente de la session activa');
            $table->unsignedBigInteger('entregado_a')
                ->comment('Id del docente que recibe el activo. Se extrae de la reserva con opción a editar');
            $table->date('fecha_real_entrega');
            $table->text('observaciones_entrega')->nullable();

//            Devolución del activo
            $table->unsignedBigInteger('devuelto_a')
                ->comment('Id del funcionario PNIE que recibe la devolución. Se extrae automáticamente de la session activa');
            $table->unsignedBigInteger('devuelto_por')
                ->comment('Id del docente que recibe el activo. Se extrae de la reserva con opción a editar');
            $table->date('fecha_real_devolucion');
            $table->text('observaciones_devolucion')->nullable();

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
        Schema::dropIfExists('prestamos');
    }
}
