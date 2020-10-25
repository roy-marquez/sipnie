<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('colegio_id')->comment('Colegio al que pertenece el item');
            $table->foreign('colegio_id')->references('id')->on('colegios');
            $table->unsignedInteger('modelo_id')->comment('Modelo del item, referenciado a una marca');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->unsignedTinyInteger('categoria_id')->comment('Ejemplo: laptop, tableta, etc.');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedInteger('item_num')->comment('Consecutivo interno de items del colegio');
            $table->string('registro', 50)->comment('Registro:tomo, folio, asiento. En libro de actas del colegio');
            $table->string('estado', 50)->comment('Estado lógico del item, activo o inactivo, baja.');
            $table->string('placa', 11)->comment('Placa de registro = código de colegio + item_num. 11 chars');
            $table->string('serie', 100)->comment('Identificador único del fabricante');
            $table->text('nota')->comment('Observación especial sobre el articulo');
            $table->string('estado_fisico', 50)->comment('Estado físico del ítem: bueno, regular, malo, desecho.');
            $table->tinyInteger('tipo')->comment('tipo=0 es de planta, tipo=1 para préstamo');
            $table->date('fecha_entrada')->comment('Fecha de ingreso al inventario');
            $table->date('fecha_baja')->comment('Fecha de baja del inventario');
            $table->string('foto_ruta')->comment('Foto del articulo');
            $table->string('ubicacion')->comment('Ubicación del item. aula, laboratorio, etc.');
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
        Schema::dropIfExists('items');
    }
}
