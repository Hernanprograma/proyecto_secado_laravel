<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centrifuga extends Model
{
    protected $fillable = [
    'entrada',
    'salida',
    'centrifuga',
    'consigna',
    'va',
    'vr',
    'par',
    't_entrada',
    't_salida',
    'vibracion',
    'caudal_ent',
    'marcapoli',
    'caudal_poli',
    'aspecto',
    'fecha',
    'hora',
    'user_id',
  ];


    // Relación
    public function user()
    {
        //return $this->hasOne('App\User', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\User');
    }
}
