@extends('layouts.head')
@section('Titulo',"Inicio de sesión")
@section('Contenido')
        <link rel="stylesheet" type="text/css" href="styles/login.css">
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
@endsection