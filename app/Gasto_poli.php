<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto_poli extends Model
{
    protected $fillable = [

  'fecha',
  'hora',
  'incidencias',
  'marca_id',
  'user_id',
];

    // Relación
    public function poli()
    {
        //return $this->hasOne('App\User', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\Poli_marca', 'marca_id');
    }

    // Relación
    public function user()
    {
        //return $this->hasOne('App\User', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\User');
    }
}
