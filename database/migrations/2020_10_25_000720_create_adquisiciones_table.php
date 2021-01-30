<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdquisicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adquisiciones', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nombre')->comment('origen adquisitivo del activo');
            $table->string('descripcion');
        });

        DB::table('adquisiciones')->insert([
            ['nombre' => 'Indefinido','descripcion' => 'El origen adquisitivo del ítem esta indefinido.' ],
            ['nombre' => 'PNIE','descripcion' => 'El ítem fue donación del Programa Nacional de Innovación Educativa.'],
            ['nombre' => 'FOD','descripcion' => 'El ítem fue donación de Fundación Omar Dengo (PRONIE).'],
            ['nombre' => 'Junta Admin.','descripcion' => 'El ítem se adquirió con recursos de la Junta Directiva'],
            ['nombre' => 'Proveeduría MEP','descripcion' => 'El ítem fue cedido por Proveduría MEP'],
            ['nombre' => 'Donación','descripcion' => 'El ítem fue donado por un tercero a la institución'],
            ['nombre' => 'Reciclaje','descripcion' => 'El ítem era parte componente de un activo que fué dado de baja.'],
            ['nombre' => 'Otro(MEP)','descripcion' => 'El ítem proviene de otro departamento del MEP'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adquisiciones');
    }
}
