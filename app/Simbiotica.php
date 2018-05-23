<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simbiotica extends Model
{
    protected $fillable=[
  'caudal','totalizado','fecha','hora','incidencias','user_id',
                    ];








    // Relación
    public function user()
    {
        //return $this->hasOne('App\User', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\User');
    }
}
