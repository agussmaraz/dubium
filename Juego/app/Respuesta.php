<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Respuesta extends Model
{
    public $guarded = [];

     public function Pregunta(){
         return $this->belongsTo('App\Pregunta');
     }
}
