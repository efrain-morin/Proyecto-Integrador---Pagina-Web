<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modificar - Control App</title>

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

            .formulario p {
                text-align: center;
                padding-top: 50px;
                color: #002C55;
                font-size: 40px;
                text-decoration: underline;
            }

            .formulario h4 {
                color: #002C55;
                padding-left: 130px;
            }

            .registro {
                padding-left: 130px;
                padding-top: 40px;
            }

            .registro h3 {
                color: #295482;
            }

            .campo {
                border-radius: 15px;
                height: 30px;
                width: 345px;
                padding-left: 20px;
                outline: none;
                border-color: #F58634;
            }

            .regist {
                height: 40px;
                width: 345px;
                color: white;
                border-radius: 30px;
                border-color: #002C55;
                background-color: #002C55;
                font-size: 20px;
            }

            .regist:hover {
                color: #002C55;
                background-color: white;
            }

            .regist1 {
                height: 40px;
                width: 345px;
                color: #002C55;
                border-radius: 30px;
                border-color: #002C55;
                background-color: white;
                font-size: 20px;
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
                <a href="/admin" class="btn btn-outline-light inicio">Inicio</a>
                <div class="redes-sociales">
                    <a href="https://business.facebook.com/Enter-de-San-Luis-2375424602530416/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/enterdesanluis/?hl=es-la"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="formulario">
            <p>MODIFICAR</p>
            <h4>Modificar usuario usuario:</h4>
            <form action="" method="get" class="registro">
                <h3>Nombre Completo:</h3>
                <input type="text" name="name" id="name" class="campo">
                <h3>Correo Electrónico:</h3>
                <input type="email" name="email" id="email" class="campo">
                <h3>Contraseña:</h3>
                <input type="password" name="pwd" id="pwd" class="campo">
                <h3>Confirmar Contraseña:</h3>
                <input type="password" name="pwd2" id="pwd2" class="campo"><br><br>
                <input type="submit" value="Aceptar cambios" class="regist">
                <!-- Cambiar a /users para ver la vista del administrador princpal -->
                <!-- Cambiar a /temporary-users para ver la vista del usuario normal -->
                <a href="/users"><button type="button" value="Cancelar" class="regist1">Cancelar</button></a>
            </form>
        </div>
    </body>
</html>
