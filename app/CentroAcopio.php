<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroAcopio extends Model
{
    protected $fillable=['nombre','direccion','provincia_id'];

    public function provincia()
    {

      return $this->belongsTo('App\Provincia');
    }
   
}
