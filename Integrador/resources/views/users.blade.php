<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Usuarios administrador - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="styles/users.css">

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
            <p>Crear, modificar o eliminar usuarios:</p>
        </div>
        <div class="table-responsive tabla">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Fecha Ingreso</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Efrain Morin</td>
                        <td>efra456</td>
                        <td>efrain@morin.com</td>
                        <td>26/07/2019</td>
                        <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#">ELIMINAR</a></td>
                    </tr>
                    <tr>
                        <td>Sanjuana Guardiola</td>
                        <td>Sanjuis456</td>
                        <td>sanjuana@guardiola.com</td>
                        <td>08/02/2020</td>
                        <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#">ELIMINAR</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="modify">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                        <h4>Modificar Usuario</h4>
                    </div>
                    <div class="modal-body">
                        "Formulario"
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="boton">
            <a href="/register" class="btn btn-success btn-lg" role="button">Agregar usuario</a>
        </div>
    </body>
</html>
