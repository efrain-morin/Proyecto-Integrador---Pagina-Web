<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Ingresar sesión - Control App</title> 

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="styles/login.css">
    </head>
    <body>
        <div class="barraNaranja">
            <div class="layoutNaranja">
                <a href="http://entersl.com.mx"><b>entersl.com.mx</b></a>
                <a href="/" class="btn btn-outline-light inicio">Inicio</a>
                <div class="redes-sociales">
                    <a href="https://business.facebook.com/Enter-de-San-Luis-2375424602530416/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/enterdesanluis/?hl=es-la"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="formulario">
            <p>Iniciar Sesión</p> 
            <br><br>
        <form class="frm-lgn" method="POST" action="{{route('login')}}">
            @csrf
                <div class="input-group ipt-text {{$errors->has('email') ? 'has-error' : ''}} ">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="user" type="email" class="form-control" name="email" placeholder="Correo" value="{{old('email')}}">
                    {!! $errors->first('email','<span class="help-block">:message</span>')!!}
                </div>
                <br>
                <div class="input-group ipt-text {{$errors->has('password') ? 'has-error' : ''}} ">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                    {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                </div>
                <br><br><br>
                <button class="btn btn-primary btn block">Iniciar</button>
            </form>
        </div>
    </body>
</html>
