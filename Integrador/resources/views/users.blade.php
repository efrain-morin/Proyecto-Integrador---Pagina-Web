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

        <div></div>
        <div class="texto">
            <p>Crear, modificar o eliminar usuarios:</p>
        </div>
        <div class="table-responsive tabla">
            <table class="table">
                <thead class="thead-dark">
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
                        <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Sanjuana Guardiola</td>
                        <td>Sanjuis456</td>
                        <td>sanjuana@guardiola.com</td>
                        <td>08/02/2020</td>
                        <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Iván Cadena</td>
                        <td>Ivan456</td>
                        <td>ivan@cadena.com</td>
                        <td>16/09/2020</td>
                        <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Oscar Sánchez</td>
                        <td>Oscar456</td>
                        <td>oscar@sanchez.com</td>
                        <td>03/11/2020</td>
                        <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Manuel Briones</td>
                        <td>Briones456</td>
                        <td>manuel@Briones.com</td>
                        <td>30/05/2020</td>
                        <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
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
                        <br>
                        <h4>Modificar Usuario</h4>
                        <br>
                    </div>
                    <div class="modal-body frm-lgn">
                        <br><br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Nombre(s)">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="apl-pat" type="text" class="form-control" name="apl-pat" placeholder="Apellido Paterno">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="apl-mat" type="text" class="form-control" name="apl-mat" placeholder="Apellido Materno">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input id="date" type="date" class="form-control" name="date" placeholder="Fecha de Nacimiento">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-book"></i></span>
                            <input id="curp" type="text" class="form-control" name="curp" placeholder="CURP">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input id="tel" type="number" class="form-control" name="tel" placeholder="Teléfono">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-phone"></i></span>
                            <input id="cel" type="number" class="form-control" name="cel" placeholder="Celular">
                        </div>
                        <br><br>
                    </div>
                    <div class="modal-footer">
                        <br>
                        <button type="reset" value="cancelar" class="btn btn-info btn-log2" data-dismiss="modal">Cancelar</button>
                        <button type="submit" value="guardar" class="btn btn-warning btn-log">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="eliminate">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                        <br>
                        <h4>Eliminar Usuario</h4>
                        <br>
                    </div>
                    <div class="modal-body frm-lgn">
                        <br>
                            <h3>¿Deseas eliminar al usuario?</h3>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <br>
                        <button type="reset" value="cancelar" class="btn btn-info btn-log2" data-dismiss="modal">Cancelar</button>
                        <button type="submit" value="guardar" class="btn btn-danger btn-log2">Eliminar Usuario</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="boton">
            <a href="/register" class="btn btn-success btn-lg" role="button">Agregar usuario</a>
        </div>
    </body>
</html>
