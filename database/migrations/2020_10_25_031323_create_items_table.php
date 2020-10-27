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
            $table->unsignedSmallInteger('colegio_id')->comment('Id de Colegio al que pertenece el ítem');
            $table->foreign('colegio_id')->references('id')->on('colegios');
            $table->unsignedInteger('modelo_id')->comment('Modelo del item, referenciado a una marca');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->unsignedTinyInteger('categoria_id')->comment('Ejemplo: laptop, tableta, etc.');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedSmallInteger('colegio_codigo')
                ->comment('Código del colegio al que pertenece el ítem');
            $table->unsignedInteger('item_num',6)
                ->comment('Consecutivo interno de items del colegio, min=1, max=999999', 6);
            $table->string('registro', 50)
                ->comment('Registro:tomo, folio, asiento. En libro de actas del colegio');
            $table->string('estado', 50)
                ->comment('Estado lógico del item, activo o inactivo, baja.');
            $table->string('placa', 11)
                ->comment('Placa de registro = código de colegio + item_num = 9999-999999. 11 chars');
            $table->string('serie', 100)->comment('Identificador único del fabricante');
            $table->text('nota')->nullable()->comment('Observación especial sobre el articulo');
            $table->string('estado_fisico', 50)
                ->comment('Estado físico del ítem: bueno, regular, malo, desecho.');
            $table->tinyInteger('tipo')->comment('tipo=0 es de planta, tipo=1 para préstamo');
            $table->date('fecha_entrada')->comment('Fecha de ingreso al inventario');
            $table->date('fecha_baja')->comment('Fecha de baja del inventario');
            $table->string('foto_ruta')->nullable()->comment('Foto del articulo');
            $table->string('ubicacion')->comment('Ubicación del item. aula, laboratorio, etc.');
            $table->timestamps();
        });
        DB::unprepared("ALTER TABLE  `items` CHANGE  `item_num`  `item_num` INT( 6 ) UNSIGNED ZEROFILL NOT NULL DEFAULT '1';");
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
