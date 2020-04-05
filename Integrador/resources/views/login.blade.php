<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ingresar sesión - Control App</title>

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

            .formulario p {
                text-align: center;
                padding-top: 50px;
                color: white;
                font-size: 40px;
            }

            .registro {
                padding-top: 80px;
            }

            .campo {
                border-radius: 15px;
                height: 30px;
                width: 345px;
                padding-left: 20px;
                outline: none;
                border-color: #F58634;
                background-color: #295482;
                color: white;
            }

            .regist {
                height: 40px;
                width: 345px;
                color: black;
                border-radius: 30px;
                border-color: #F58634;
                background-color: #F58634;
                font-size: 20px;
            }
        </style>
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

        <div class="formulario">
            <p>Iniciar Sesión</p>
            <form action="" method="get" class="registro">
                <h3>Usuario:</h3>
                <input type="text" name="name" id="name" class="campo">
                <h3>Contraseña:</h3>
                <input type="password" name="pwd" id="pwd" class="campo">
                <br><br><br>
                <a href="/admin"><button type="button" value="Iniciar" class="regist">Iniciar</button></a>
            </form>
        </div>
    </body>
</html>
