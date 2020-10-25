<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //devuelve la ruta de la imagen del usuario
    public function adminlte_image(){
        if(!isset($_SESSION['user_image_num']))
            $_SESSION['user_image_num'] = rand(1,99);
//        return 'https://picsum.photos/300/300?people';
//        return 'https://source.unsplash.com/300x300/?people,face';
//        return 'https://randomuser.me/api/portraits/men/99.jpg';
        return 'https://randomuser.me/api/portraits/men/'.$_SESSION['user_image_num'].'.jpg';
    }

    //devuelve la descripción (rol) del usuario
    public function adminlte_desc(){
        $roles = [
            'administrador_pnie',
            'ingeniero_pnie',
            'docente_pnie',
            'docente_colegio',
            'administrativo_colegio'
            ];

        return $roles[array_rand($roles)];
    }

    public function adminlte_profile_url(){
        return 'perfil/id#';
    }
}
