<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro Edificios - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="styles/register-building.css">
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
            <h4>Crear nuevo edificio:</h4>
            <br><br><br>
            
            <form class="frm-lgn">
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <select name="admin" id="admin" class="form-control">
                        <option selected>Administrador...</option>
                        <option value="Efrain Morin">Efrain Morin</option>
                        <option value="Efrain Morin">Iván Cadena</option>
                        <option value="Efrain Morin">Sanjuana Guardiola</option>
                        <option value="Efrain Morin">Oscar Sanchez</option>
                        <option value="Efrain Morin">Manuel Briones</option>
                    </select>
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="street" type="text" class="form-control" name="street" placeholder="Calle">
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="colonia" type="text" class="form-control" name="colonia" placeholder="Colonia">
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-book"></i></span>
                    <input id="cp" type="text" class="form-control" name="cp" placeholder="Código Postal">
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="municipio" type="text" class="form-control" name="municipio" placeholder="Municipio">
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="state" type="text" class="form-control" name="state" placeholder="Estado">
                </div>
                <br><br><br>
                <button type="submit" value="Inicio" class="btn btn-warning btn-log">Crear</button>
            </form>
        </div>
    </body>
</html>
