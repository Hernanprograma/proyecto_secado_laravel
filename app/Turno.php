<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $fillable=[
'turno','fecha','hora','user_id',
                  ];


    // Relación
    public function user()
    {
        //return $this->hasOne('App\Jornada', 'id'); // Le indicamos que se va relacionar con el atributo id
        return $this->belongsTo('App\User');
    }
    // Relación
    public function tareas()
    {
        return $this->hasMany('App\Tarea');
    }
}
