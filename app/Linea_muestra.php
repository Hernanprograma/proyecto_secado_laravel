<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea_muestra extends Model
{
    protected $fillable = [
  'fecha',
  'hora',
  'linea',
  'sequedadentrada',
  'sequedadsalida',
  'tt1',
  'tt2',
  'tt3',
  'tt4',
  'intensidadtambor',
  'herziosbomba',
  'vueltasbomba',
  'nivelsilo',
  'posicionvalvula',
  'user_id',
];

    // Relación
    public function user()
    {
        //return $this->hasOne('App\User', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\User');
    }
}
