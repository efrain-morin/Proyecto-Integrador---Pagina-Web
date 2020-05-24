<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
//use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public function login()
    {
        $info = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);
        
        if(Auth::attempt($info))
        {
            return redirect('/');
        }
        else
        {
           
            return back()
            ->withErrors(['email'=>"Credenciales incorrectas"])
            ->withInput(request(['email']));
        }
    }
    public function index(){
        return view ('welcome');
    }
    public function logout(){
        Auth::logout();;
        return redirect('/');
    }
}
