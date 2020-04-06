<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acerca - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="styles/about.css">

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

        <div class="formulario" style="background: url(img/departamento.jpg) !important; background-repeat: no-repeat !important;
            background-position: center !important; background-size: cover !important; background-color: #002C55 !important; height: 633px !important; ">
            <br>
            
            <form action="" method="get" class="registro">
            <p>ACERCA DE NOSOTROS</p>
            <br>
            <p>Página creada para la materia de Proyecto Integrador</p>
            <h5>Iván Eduardo Martínez Cadena</h5>
            <h5>Sanjuana Erendira Guardiola Tovar</h5>
            <h5>Oscar David Sanchez Martínez</h5>
            <h5>Manuel Alejandro Robledo Briones</h5>
            <h5>Efraín Emanuel Morín Miranda</h5>
            </form>
        </div>
    </body>
</html>
