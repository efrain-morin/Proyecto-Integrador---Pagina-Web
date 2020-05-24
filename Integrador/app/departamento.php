<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Database\Eloquent\Relations\HasMany;

class departamento extends Model
{
    //
    public function regresaDueño($id)
    {   
        $user = DB::table('users')->where('idDepartamento',$id)->get();
        if(count($user) == 0)
            return "-";
        $user = user::find($user[0]->id);
        return $user;
    }
    public function regresaEdificio($id)
    {
        return DB::table('inmuebles')->where('id',$id)->get();
    }

    public function regresaUsuarios(){
        return $this->hasMany('App\User','idDepartamento');
    }
}
