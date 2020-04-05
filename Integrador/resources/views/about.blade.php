<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acerca - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                font-family: 'Nunito', Verdana, Geneva, Tahoma, sans-serif;
                background-color: #295482;
            }

            .barraNaranja {
                width: 100%;
                background-color: #F58634;
            }

            .layoutNaranja {
                width: 1000px;
                height: 40px;
                margin: 0px auto;
                padding-top: 15px;
            }

            .layoutNaranja a {
                text-decoration: none;
                color: #002C55;
                float: left;
            }

            .redes-sociales {
                float: right;
            }

            .redes-sociales a {
                padding-left: 30px;
            }

            .formulario {
                text-align: center;
            }

            .formulario::after {
                content: "";
                background: url(img/departamento.jpg);
                opacity: 0.5;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                position: absolute;
                z-index: -1;   
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-color: #002C55;
                height: 633px;
            }

            .formulario p {
                text-align: center;
                padding-top: 30px;
                color: white;
                font-size: 45px;
            }

            .registro {
                padding-top: 80px;
                color: white;
                float: left;
                margin-left: 150px;
            }

            .campo {
                float: right;
                border-radius: 30px;
                height: 30px;
                width: 150px;
                border-color: #F58634;
                background-color: #295482;
                color: white;
            }

            .regist {
                float: right;
                height: 30px;
                width: 150px;
                color: black;
                border-radius: 30px;
                border-color: #F58634;
                background-color: #F58634;
                font-size: 20px;
                margin-right: 150px;
            }

            .inicio {
                margin-left: 40px !important;
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
