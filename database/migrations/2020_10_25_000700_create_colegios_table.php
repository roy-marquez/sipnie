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

            $table->unsignedBigInteger('cedula_juridica')->nullable()
                ->comment('10 dígitos, sin cero al inicio ni guiones');
            $table->unsignedInteger('matricula')->nullable()->comment('cantidad de alumnos del colegio');
            $table->string('director')->nullable()->comment('nombre del director actual del colegio');
            $table->string('telefono')->nullable()
                ->comment('telefono oficial del colegio en formato 6 dígitos sin guiones xxxxxxxx');
            $table->string('email')->nullable()
                ->comment('email oficial del colegio, email mep');

            $table->unsignedTinyInteger('provincia_id')->nullable();
            $table->foreign('provincia_id')->references('id')->on('provincias');

            $table->unsignedSmallInteger('canton_id')->nullable();
            $table->foreign('canton_id')->references('id')->on('cantones');

            $table->unsignedMediumInteger('distrito_id')->nullable();
            $table->foreign('distrito_id')->references('id')->on('distritos');

            $table->string('localizacion')->nullable()->comment('localización, otras señas adicionales');
            $table->string('dre')->nullable()
                ->comment('Nombre de la dirección regional, a la cual esta adscrito el colegio');
            $table->unsignedTinyInteger('circuito')->nullable()->comment('circuito de la dre adscrito');
            $table->string('web')->nullable()->comment('dirección de la pagina web del colegio');
            $table->string('facebook')->nullable()->comment('dirección de perfil de facebook');

            $table->unsignedTinyInteger('estado_colegio_id');
            $table->foreign('estado_colegio_id')->references('id')->on('estado_colegios');

            $table->string('escudo_ruta')->nullable()->comment('imagen del escudo o estandarte');
            $table->unsignedInteger('sipnie_admin_id')->nullable()
                ->comment('usuario-funcionario designado administrador del sipnie para el colegio ');

            $table->unsignedSmallInteger('conectividad_id')->nullable();
            $table->foreign('conectividad_id')->references('id')->on('conectividades')->onDelete('set null');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        // Insertar colegios a la base de datos,
        // requiere la existencia previa de las tabla 'colegios'
        DB::unprepared(file_get_contents(base_path('database/migrations/data/colegios.sql')));
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
