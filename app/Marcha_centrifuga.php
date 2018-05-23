<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcha_centrifuga extends Model
{
    protected $fillable=[
      'centrifuga',
      'estado',
      'fecha',
      'hora',
      'incidencias',
      'user_id',
    ];

    // Relación
    public function user()
    {
        //return $this->hasOne('App\User', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\User');
    }
}
