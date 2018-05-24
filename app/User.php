<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','surname', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // Relación con centrífugas
    public function centrifugas()
    {
        return $this->hasMany('App\Centrifuga');
    }

    // Relación con simbioticas
    public function simbioticas()
    {
        return $this->hasMany('App\Simbiotica');
    }

    // Relación con linea_muestra
    public function lineamuestras()
    {
        return $this->hasMany('App\Linea_muestra');
    }
    // Relación con linea_dato
    public function lineadatos()
    {
        return $this->hasMany('App\Linea_dato');
    }
    // Relación con Marcha_centrifuga
    public function marchacentrifugas()
    {
        return $this->hasMany('App\Marcha_centrifuga');
    }
    // Relación con Gasto_poli
    public function gastopolis()
    {
        return $this->hasMany('App\Gasto_poli');
    }
    // Relación con poli_marcas
    public function polimarcas()
    {
        return $this->hasMany('App\Poli_marca');
    }
}
