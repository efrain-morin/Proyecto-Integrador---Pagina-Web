<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\permiso;
use App\tipoUsuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function regresaUsuarios()
    {
        $usuario = User::all();
        return view('users',[
            'usuarios'=>$usuario
        ]);
    }

    public function vistaCreaUsuario()
    {
        $permiso = permiso::all();
        $tipoUsuario = tipoUsuario::all();
        return view('registerSUser',[
            'permiso'=>$permiso,
            'tUsuario'=>$tipoUsuario
        ]);
    }


    public function registro(request $data)
    {
        $user = DB::table('users')->where('email', $data['email'])->first();
        if(is_Null($user) == false)
            return redirect()->back()->withErrors(['email'=>"El correo ya está registrado."]);
        $data->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if (strcmp($data->get('password'), $data->get('cPassword')) != 0){
            return redirect()->back()->withErrors(['password'=>"Las contraseñas no coinciden."]);
        }
        $user = new User;
        $user->nombre = $data['nombre'];
        $user->email = $data['email'];
        $user->apellidoPaterno = $data['apellidoPaterno'];
        $user->apellidoMaterno = $data['apellidoMaterno'];
        $user->CURP = $data['CURP'];
        $user->telefono = $data['telefono'];
        $user->celular = $data['celular'];
        $user->fechaNacimiento = $data['fechaNac'];
        $user->idTipoUsuario = $data['tipoUsuario'];
        $user->idPermiso = $data['permiso'];
        $user->password = Hash::make($data['password']);
        if(is_Null($data['idInmueble'])== false)
        {
            $user->idInmueble = $data['idInmueble'];
            $user->save();
            return redirect()->route('edificios.index');
        }
        else if(is_Null($data['idDepartamento'])== false)
        {
            $user->idDepartamento = $data['idDepartamento'];
            $user->save();
            return redirect()->route('Departamentos.index');
        }
        else
        {
            $user->save();
            return redirect()->route('Usuarios');
        }
    }
    public function eliminaUsuario($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('Usuarios');
    }

    public function modificaUsuario(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
        if(is_null($request->get('password')) == false || is_null($request->get('pwd')) == false || is_null($request->get('Cpwd')) == false){
            if(!(Hash::check($request->get('password'),Auth::user()->password))){
                return redirect()->back()->withErrors(['password'=>"La contraseña actual no coincide. Por favor vuelva a intentar."]);
            }
            else if(Hash::check($request->get('pwd'), Auth::user()->password)){
                return redirect()->back()->withErrors(['password'=>"La nueva contraseña no puede ser la misma que la actual. Por favor escoge una diferente."]);
            }
            else if (strcmp($request->get('pwd'), $request->get('Cpwd')) != 0){
                return redirect()->back()->withErrors(['password'=>"La nueva contraseña no coincide con la contraseña de confirmación."]);
            }
            if(strlen($request->get('password')) < 8)
                return redirect()->back()->withErrors(['password'=>"La nueva contraseña debe de ser de mínimo 8 carácteres."]);
            $user->password =Hash::make($request->get('pwd'));
        }
        $user->nombre = $request->get('nombre');
        $user->apellidoPaterno = $request->get('apellidoPaterno');
        $user->apellidoMaterno = $request->get('apellidoMaterno');
        $user->fechaNacimiento = $request->get('fechaNac');
        $user->CURP = $request->get('CURP');
        $user->email = $request->get('email');
        $user->telefono = $request->get('telefono');
        $user->celular = $request->get('celular');
        $user->save();
        return redirect()->route('informacionUsuario');
    }
    public function vistaModificaUsuario()
    {
        return view('infoUsuarios');
    }
}
