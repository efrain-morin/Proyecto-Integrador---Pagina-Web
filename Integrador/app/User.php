<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\tipoUsuario;
use App\permiso;
use PhpParser\Node\Expr\AssignOp\Concat;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function RegresaTipoUsuario($id){
        $TipoUser = tipoUsuario::find($id);
        return $TipoUser->tipoUsuario;
    }
 
    public function RegresaNombre($id){
        $usuario = user::find($id);
        $nombreCompleto = $usuario->nombre . " " . $usuario->apellidoPaterno . " " . $usuario->apellidoMaterno;
        return $nombreCompleto;
    }

    public function RegresaPermiso($id){
        $permiso = permiso::find($id);

        return $permiso->tipoPermiso;
    }

    public function RegresaInformacion($id){
        $usuario = User::find($id);
        $datos = array($usuario->id,$usuario->nombre,$usuario->apellidoPaterno,$usuario->apellidoMaterno,$usuario->fechaNacimiento,
        $usuario->CURP, $usuario->email,$usuario->telefono, $usuario->celular);
        return json_encode($datos);
        
    }
    public function RegresaEdificio($id)
    {
        return DB::table('inmuebles')->where('id',$id)->get();
    }
    public function RegresaDepartamento($id)
    {
        $departamento =  DB::table('departamentos')->where('id',$id)->get();
        return $departamento[0]->numero;
    }
    
}
