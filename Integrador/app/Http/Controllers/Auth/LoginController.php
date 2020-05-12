<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
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
}
