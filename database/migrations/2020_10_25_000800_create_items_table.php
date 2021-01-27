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


            $table->unsignedTinyInteger('categoria_id')->nullable()->comment('Ejemplo: laptop, tableta, etc.');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');

            $table->unsignedSmallInteger('colegio_codigo')
                ->comment('Código del colegio al que pertenece el ítem');

            $table->unsignedInteger('item_num')
                ->comment('Consecutivo interno de items del colegio, min=1, max=999999');

            $table->string('placa', 11)
                ->comment('Placa de registro = código de colegio + item_num = 9999-999999. 11 chars');

            $table->string('serie', 100)
                ->comment('Identificador único del fabricante');

            $table->unsignedSmallInteger('registro_tomo')->nullable()
                ->comment('Registro:tomo En libro de actas del colegio');

            $table->unsignedSmallInteger('registro_folio')->nullable()
                ->comment('Registro:folio. En libro de actas del colegio');

            $table->unsignedSmallInteger('registro_asiento')->nullable()
                ->comment('Registro:asiento. En libro de actas del colegio');

            $table->text('nota')->nullable()
                ->comment('Observación especial sobre el articulo');

            $table->date('fecha_entrada')->comment('Fecha de ingreso al inventario');
            $table->date('fecha_baja')->comment('Fecha de baja del inventario (Cambio de estado=baja)');

            $table->unsignedTinyInteger('estado_item_id')
                ->comment('Estado lógico del ítem: activo, inactivo, baja');
            $table->foreign('estado_item_id')->references('id')->on('estado_items');

            $table->unsignedInteger('agregado_por')->comment('user_id del usuario agregó el item');
            $table->unsignedInteger('modificado_por')->comment('user_id del usuario modificó el item');

            $table->unsignedTinyInteger('condicion_id')->nullable()
                ->comment('Estado físico del ítem: bueno, regular, malo, desecho.');
            $table->foreign('condicion_id')->references('id')->on('condiciones')->onDelete('set null');

            $table->unsignedTinyInteger('uso_id')->nullable()
                ->comment('tipo=1 es de planta, tipo=2 para préstamo, tipo=3 es condicionado');
            $table->foreign('uso_id')->references('id')->on('usos')->onDelete('set null');

            $table->string('foto_ruta')->nullable()->comment('Foto del item');

            $table->unsignedInteger('ubicacion_id')->nullable()->comment('id de la ubicación del item: aula, laboratorio, etc.');
            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onUpdate('cascade')->onDelete('set null');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::raw("ALTER TABLE 'items' CHANGE  `item_num`  `item_num` INT( 6 ) UNSIGNED ZEROFILL NOT NULL DEFAULT '1';");
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
