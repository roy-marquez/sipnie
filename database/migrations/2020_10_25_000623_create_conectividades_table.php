<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConectividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conectividades', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('tipo_conexion')->comment('Ej: Fibra óptica, Cable Modem, Inalámbrico');
            $table->unsignedSmallInteger('velocidad_max_mbps')->comment('velocidad máxima de descarga en mbps');

        });


        // Insertar conectividades a la base de datos,
        // requiere la existencia previa de las tabla 'conectividades'
        DB::unprepared(file_get_contents(base_path('database/migrations/data/conectividades.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conectividades');
    }
}
