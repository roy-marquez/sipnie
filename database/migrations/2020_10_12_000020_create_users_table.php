<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('name');
            $table->string('password');
            $table->string('apellido1')->nullable();
            $table->string('apellido2')->nullable();

            $table->unsignedTinyInteger('tipo_doc_id')->nullable()->default(1);
            $table->foreign('tipo_doc_id')->references('id')->on('tipos_doc_identidad')
                ->onDelete('set null');

            $table->string('num_doc_id')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->unsignedTinyInteger('estado_usuario_id')->default(1);
            $table->foreign('estado_usuario_id')->references('id')->on('estado_usuarios');

            $table->boolean('es_funcionario_pnie')->default(false);

            $table->string('avatar_ruta')->nullable();
            $table->string('celular')->nullable();
            $table->rememberToken();
            //$table->timestamps();

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('users')->insert([
            ['name' => 'dev', 'email' => 'dev@sipnie.net', 'password'=> '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty'],
            ['name' => 'admin', 'email' => 'admin@sipnie.net', 'password'=> '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty'],
            ['name' => 'ingeniero.pnie', 'email' => 'ingeniero.pnie@sipnie.net', 'password'=> '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty'],
            ['name' => 'docente.pnie', 'email' => 'docente.pnie@sipnie.net', 'password'=> '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty'],
            ['name' => 'docente.cole', 'email' => 'docente.cole@sipnie.net', 'password'=> '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty'],
            ['name' => 'admin.cole', 'email' => 'admin.cole@sipnie.net', 'password'=> '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty'],
            ['name' => 'roy', 'email' => 'roy@sipnie.net', 'password'=> '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
