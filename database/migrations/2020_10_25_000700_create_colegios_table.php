<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('codigo')->unique()->comment('código presupuestario');
            $table->string('nombre');

            $table->unsignedTinyInteger('clasificacion_id')->nullable();
            $table->foreign('clasificacion_id')->references('id')->on('clasificaciones')->onDelete('set null');

            $table->integer('cedula_juridica')->nullable()
                ->comment('10 dígitos, sin cero al inicio ni guiones');
            $table->unsignedInteger('matricula')->nullable()->comment('cantidad de alumnos del colegio');
            $table->string('director')->nullable()->comment('nombre del director actual del colegio');
            $table->string('telefono')->nullable()
                ->comment('telefono oficial del colegio en formato 6 dígitos sin guiones xxxxxxxx');

            $table->unsignedTinyInteger('provincia_id')->nullable();
            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('set null');

            $table->unsignedSmallInteger('canton_id')->nullable();
            $table->foreign('canton_id')->references('id')->on('cantones')->onDelete('set null');

            $table->unsignedMediumInteger('distrito_id')->nullable();
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('set null');

            $table->string('localizacion')->nullable()->comment('localización, otras señas adicionales');
            $table->string('dre')->nullable()
                ->comment('Nombre de la dirección regional, a la cual esta adscrito el colegio');
            $table->unsignedTinyInteger('circuito')->nullable()->comment('circuito de la dre adscrito');
            $table->string('web')->nullable()->comment('dirección de la pagina web del colegio');
            $table->string('facebook')->nullable()->comment('dirección de perfil de facebook');

            $table->unsignedTinyInteger('estado_colegio_id');
            $table->foreign('estado_colegio_id')->references('id')->on('estados_colegios');

            $table->string('escudo_ruta')->nullable()->comment('imagen del escudo o estandarte');
            $table->unsignedInteger('sipnie_admin_id')->nullable()
                ->comment('usuario-funcionario designado administrador del sipnie para el colegio ');

            $table->unsignedSmallInteger('conectividad_id')->nullable();
            $table->foreign('conectividad_id')->references('id')->on('conectividades')->onDelete('set null');

            $table->timestamp('creado_en')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('actualizado_en')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colegios');
    }
}
