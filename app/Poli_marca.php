<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poli_marca extends Model
{
    protected $fillable = [
      'name', 'peso', 'precio','user_id'
  ];
    // Relación
    public function user()
    {
        //return $this->hasOne('App\User', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\User');
    }

    // Relación con linea_muestra
    public function gastopolis()
    {
        return $this->hasMany('App\Gasto_poli');
    }
}
