<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nombre')->comment('nombre-tipo de horario por ejemplo: Académico_1');
            $table->text('descripcion')->nullable();

            $table->unsignedTinyInteger('clasificacion_id')->nullable();
            $table->foreign('clasificacion_id')->references('id')->on('clasificaciones')->onDelete('set null');

            //$table->timestamps();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('horarios')->insert([
            ['nombre' => 'Académico_1', 'descripcion' => 'Opción por default, horario para colegios académicos de 12 lecciones de 40 minutos', 'clasificacion_id' => 1],
            ['nombre' => 'CTP_académico_1', 'descripcion' => 'Horario para CTP en jornada académica de 12 lecciones de 40 minutos', 'clasificacion_id' => 3],
            ['nombre' => 'CTP_especialidad_1', 'descripcion' => 'Horario para CTP en jornada Especialidad/Tecnología de 12 lecciones de 60 minutos', 'clasificacion_id' => 3],
            ['nombre' => 'Exp_Bilingüe_1', 'descripcion' => 'horario para colegios experimientales biligües, de 12 lecciones de 40 minutos', 'clasificacion_id' => 3],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
