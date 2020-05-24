<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\departamento;
use Illuminate\Database\Eloquent\Relations\HasMany;

class inmueble extends Model
{
    //
    public function regresaDepartamentos(){
        return $this->hasMany('App\departamento','idInmueble1');
    }
    public function regresaUsuarios(){
        return $this->hasMany('App\User','idInmueble');
    }
    public function regresaInformacion($id){
        $inmueble = inmueble::findOrFail($id);
        $datos = array($inmueble->id,$inmueble->calle,$inmueble->colonia,$inmueble->codigoPostal,$inmueble->estado,
        $inmueble->municipio,$inmueble->nombreEdificio);
        return json_encode($datos);
    }

}
