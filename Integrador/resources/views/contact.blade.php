
    @extends('layouts.head')
    @section('Titulo',"Contacto")

        <title>Contacto - Control App</title>
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
    @section('Contenido')

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
@endsection