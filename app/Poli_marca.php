<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poli_marca extends Model
{
  protected $fillable = [
      'name', 'peso', 'precio',
  ];
}
