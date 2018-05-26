<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $fillable=[
      'fecha',
      'hora',
      'nivel_seco_a',
      'nivel_seco_b',
      'silo_nuevo',
      'silo_almacen',
      'digestor',
      'tolva_recepcion',
      'gas',
      'linea_a',
      'linea_b',
      'centrifuga_a',
      'centrifuga_b',
      'centrifuga_c',
      'user_id',
    ];

    // Relación
    public function user()
    {
        //return $this->hasOne('App\User', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\User');
    }
}
