<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Pregunta extends Model
{
    public $guarded = [];

    public function Respuesta(){
        return $this->belongsTo('App\Respuesta');
    }
    public function User(){
        return $this->belongsTo('App\User');
    }
   
}
