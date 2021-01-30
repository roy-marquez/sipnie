<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegioUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegio_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedSmallInteger('colegio_id');
            $table->foreign('colegio_id')->references('id')->on('colegios');

            //$table->timestamps();
        });

        //Llenado de la tabla pivote con usuarios default en los 94 colegios.
        for($cole = 1; $cole <=94; $cole++){
            for($user = 1; $user <= 7; $user++){
                DB::table('colegio_user')->insert([
                    ['user_id' => $user, 'colegio_id' =>  $cole]
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colegio_user');
    }
}
