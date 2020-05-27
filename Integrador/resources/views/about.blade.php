@extends('layouts.head')
        <link rel="stylesheet" type="text/css" href="styles/about.css">

        <style>
    .formulario::after {
        content: "" !important;
        background-image: url(img/departamento.jpg) !important;
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
        height: 100% !important;
        color: white;
    }
        </style>
@section('Contenido')

        <div class="formulario">
            <br>
                <div>
                    <h4>ACERCA DE NOSOTROS<h4>
                    <br>
                    <p>Página creada para la materia de Proyecto Integrador</p>
                    <p>Integrantes: </p>
                    <h5>Iván Eduardo Martínez Cadena</h5>
                    <h5>Sanjuana Erendira Guardiola Tovar</h5>
                    <h5>Oscar David Sanchez Martínez</h5>
                    <h5>Manuel Alejandro Robledo Briones</h5>
                    <h5>Efraín Emanuel Morín Miranda</h5>
                </div>
        </div>
@endsection