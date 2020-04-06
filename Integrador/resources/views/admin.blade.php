<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Principal - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="styles/admin.css">
    </head>
    <body>
        <div class="barraNaranja">
            <div class="layoutNaranja">
                <a href="http://entersl.com.mx"><b>entersl.com.mx</b></a>
                <div class="redes-sociales">
                    <a href="https://business.facebook.com/Enter-de-San-Luis-2375424602530416/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/enterdesanluis/?hl=es-la"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="formulario" style="background: url(img/departamento.jpg) !important; background-repeat: no-repeat !important;
            background-position: center !important; background-size: cover !important; background-color: #002C55 !important; height: 633px !important; ">
            <br>
            <button type="button" value="Inicio" class="btn btn-primary inicio">Inicio</button>
            <a class="btn btn-primary btn-new" href="/users" role="button">Administrar</a>
            <a class="btn btn-primary btn-new" href="/" role="button">Salir</a>
            <a class="btn btn-primary btn-new" href="/contact" role="button">Contacto</a>
            
            <div class="info">
                <br>
                <p>MI HOGAR</p>
                <br>
                <p>Bienvenido</p>
                <h5>La forma mas segura de cuidar tu hogar</h5>
            </div>
            <img src="img/logo.svg" alt="">
            
            </form>
        </div>
    </body>
</html>
