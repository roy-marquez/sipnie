<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USUARIOS <-> ROLES

        //Developer
        User::create([
            'role_id' => '2',
            'name' => 'dev',
            'email' => 'dev@sipnie.net',
            'password' => bcrypt('123456789'),
            'estado_usuario_id' => '1',
            'es_funcionario_pnie' => '1',
            'avatar_ruta' => 'assets/system/avatars/dev.png'
        ]);

        //Administrador PNIE
        User::create([
            'role_id' => '3',
            'name' => 'admin.pnie',
            'email' => 'admin.pnie@sipnie.net',
            'password' => bcrypt('123456789'),
            'estado_usuario_id' => '1',
            'es_funcionario_pnie' => '1',
            'avatar_ruta' => 'assets/system/avatars/pnie-admin-m.png'
        ]);

        //Ingeniero PNIE
        User::create([
            'role_id' => '4',
            'name' => 'ing.pnie',
            'email' => 'ing.pnie@sipnie.net',
            'password' => bcrypt('123456789'),
            'estado_usuario_id' => '1',
            'es_funcionario_pnie' => '1',
            'avatar_ruta' => 'assets/system/avatars/pnie-ing-m.png'
        ]);

        //Docente PNIE
        User::create([
            'role_id' => '5',
            'name' => 'docente.pnie',
            'email' => 'docente.pnie@sipnie.net',
            'password' => bcrypt('123456789'),
            'estado_usuario_id' => '1',
            'es_funcionario_pnie' => '1',
            'avatar_ruta' => 'assets/system/avatars/pnie-docente-m.png'
        ]);

        //administrativo colegio
        User::create([
            'role_id' => '6',
            'name' => 'administrativo.cole',
            'email' => 'administrativo.cole@sipnie.net',
            'password' => bcrypt('123456789'),
            'estado_usuario_id' => '1',
            'es_funcionario_pnie' => '0',
            'avatar_ruta' => 'assets/system/avatars/cole-admin-m.png'
        ]);

        //docente colegio
        User::create([
            'role_id' => '7',
            'name' => 'docente.colegio',
            'email' => 'docente.cole@sipnie.net',
            'password' => bcrypt('123456789'),
            'estado_usuario_id' => '1',
            'es_funcionario_pnie' => '0',
            'avatar_ruta' => 'assets/system/avatars/cole-admin-docente-m.png'
        ]);
    }
}
