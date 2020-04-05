<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Usuarios - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin: 0 !important;
                padding: 0 !important;
            }

            body {
                font-family: 'Nunito', Verdana, Geneva, Tahoma, sans-serif !important;
                background-color: #295482 !important;
            }

            .barraNaranja {
                width: 100% !important;
                background-color: #F58634 !important;
            }

            .layoutNaranja {
                width: 1000px !important;
                height: 50px !important;
                margin: 0px auto !important;
                padding-top: 15px !important;
                font-size: 15px !important;
            }

            .layoutNaranja a {
                text-decoration: none !important;
                color: #002C55 !important;
                float: left !important;
            }

            .redes-sociales {
                float: right !important;
            }

            .redes-sociales a {
                padding-left: 30px !important;
            }
            
            .tabla {
                width: 1300px !important;
                margin: 0px auto !important;
                padding-top: 20px !important;
                color: white;
                font-size: 20px;
            }

            .texto {
                color: white;
                font-size: 30px;
                margin-left: 35px !important;
                margin-top: 40px !important;
            }

            .tabla a {
                color: black;
            }

            .tabla a:hover {
                color: white;
            }

            .boton {
                margin: 50px !important;
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
        <div class="texto">
            <p>Tus accesos temporales</p>
        </div>
        <div class="table-responsive tabla">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Parenteco</th>
                        <th>Email</th>
                        <th>Fecha de expiración</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Efrain Morin</td>
                        <td>Padre</td>
                        <td>efrain@morin.com</td>
                        <td>20/12/2021</td>
                        <td><a href="/modify-user">MODIFICAR</a></td>
                        <td><a href="#">ELIMINAR</a></td>
                    </tr>
                    <tr>
                        <td>Ivan Cadena</td>
                        <td>Hijo</td>
                        <td>ivan@cadena.com</td>
                        <td>20/12/2021</td>
                        <td><a href="/modify-user">MODIFICAR</a></td>
                        <td><a href="#">ELIMINAR</a></td>
                    </tr>
                    <tr>
                        <td>Sanjuana Guardiola</td>
                        <td>Esposa</td>
                        <td>sanjuana@guardiola.com</td>
                        <td>20/12/2021</td>
                        <td><a href="/modify-user">MODIFICAR</a></td>
                        <td><a href="#">ELIMINAR</a></td>
                    </tr>
                    <tr>
                        <td>Oscar Sanchez</td>
                        <td>Hijo</td>
                        <td>oscar@sanchez.com</td>
                        <td>20/12/2021</td>
                        <td><a href="/modify-user">MODIFICAR</a></td>
                        <td><a href="#">ELIMINAR</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="boton">
            <a href="/register" class="btn btn-success btn-lg" role="button">Crear llave temporal</a>
        </div>
    </body>
</html>
