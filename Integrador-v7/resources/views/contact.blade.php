<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacto - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="styles/contact.css">

        <style>
            .formulario::after {
                content: "" !important;
                background: url(img/departamento.jpg) !important;
                opacity: 0.3 !important;
                top: 0 !important;
                left: 0 !important;
                bottom: 0 !important;
                right: 0 !important;
                position: absolute !important;
                z-index: -1 !important;   
                background-repeat: no-repeat !important;
                background-position: center !important;
                background-size: cover !important;
                background-color: #002C55 !important;
                height: 633px !important;
            }
        </style>

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
            <br>
            
            <div class="registro">
                <p>CONTACTO</p>
                <br>
                <h3>Iván Eduardo Martínez Cadena</h3>
                <h3>Sanjuana Erendira Guardiola Tovar</h3>
                <h3>Oscar David Sanchez Martínez</h3>
                <h3>Manuel Alejandro Robledo Briones</h3>
                <h3>Efraín Emanuel Morín Miranda</h3>
                <h3>EnterSL</h3>
            </div>
        </div>
    </body>
</html>
