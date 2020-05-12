<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\departamento;
class inmueble extends Model
{
    //
    public function regresaDepartamentos(){
        return $this->hasMany('App\departamento');
    }
}
