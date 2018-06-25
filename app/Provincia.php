<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{


    public function centroAcopios()
    {
      return $this->hasMany('App\CentroAcopio');
    }
}
