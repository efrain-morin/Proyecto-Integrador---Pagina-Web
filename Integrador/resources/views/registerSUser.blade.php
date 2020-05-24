<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="styles/register.css">
    </head>
    <body>
        <div class="barraNaranja">
            <div class="layoutNaranja">
                <a href="http://entersl.com.mx"><b>entersl.com.mx</b></a>
                <a href="/admin" class="btn btn-outline-light inicio">Inicio</a>
                <a href="/users" class="btn btn-outline-light inicio">Usuarios</a>
                <div class="redes-sociales">
                    <a href="https://business.facebook.com/Enter-de-San-Luis-2375424602530416/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/enterdesanluis/?hl=es-la"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div> 

        <div class="formulario">
            <p>REGISTRO</p>
            <h4>Crear nuevo usuario:</h4>
            <br><br><br>
            
            <form class="frm-lgn" method="POST" action="/registro">
                @csrf
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="name" type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="apl-pat" type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido Paterno" required>
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="apl-mat" type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido Materno" required>
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input id="date" type="date" class="form-control" name="fechaNac" placeholder="Fecha de Nacimiento" required>
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-book"></i></span>
                    <input id="curp" type="text" class="form-control" name="CURP" placeholder="CURP" required>
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input id="tel" type="text" class="form-control" name="telefono" placeholder="Teléfono" required>
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-phone"></i></span>
                    <input id="cel" type="text" class="form-control" name="celular" placeholder="Celular" required>
                </div>
                <br>
                <div class="input-group ipt-text {">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="pwd" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" id="cpass" class="form-control" name="" placeholder="Confirmar contraseña" required>

                </div>
                <br>
                <div class="input-group ipt-text">
                    @foreach ($permiso as $p)
                        @if ($p->tipoPermiso == 'Administrar sistema')
                            <input type="text" class="form-control" value="{{$p->tipoPermiso}}" readonly="readonly" required>
                            <input type="hidden" value="{{$p->id}}" name="permiso">
                        @endif
                    @endforeach
                </div>
                <br>
                <div class="input-group ipt-text">
                    @foreach ($tUsuario as $tU)
                        @if ($tU->tipoUsuario == 'Super Usuario')
                            <input type="text" class="form-control" value="{{$tU->tipoUsuario}}" readonly="readonly" required>
                            <input type="hidden" value="{{$tU->id}}" name="tipoUsuario">
                        @endif
                    @endforeach
                </div>
                <br>
                <button type="submit" value="Inicio" class="btn btn-warning btn-log">Crear</button>
            </form>
        </div>
    </body>
</html>
