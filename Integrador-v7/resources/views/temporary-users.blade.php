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

        <link rel="stylesheet" type="text/css" href="styles/temporary.css">
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
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Parentesco</th>
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
                        <td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Sanjuana Guardiola</td>
                        <td>Esposa</td>
                        <td>sanjuana@guardiola.com</td>
                        <td>20/12/2021</td>
                        <td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
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
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="pwd-ant" type="password" class="form-control" name="pwd-ant" placeholder="Contraseña anterior">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="pwd" type="password" class="form-control" name="pwd" placeholder="Contraseña nueva">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="pwd-re" type="password" class="form-control" name="pwd-re" placeholder="Vuelve a ingresar la contraseña">
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
            <a href="/register-temporary" class="btn btn-success btn-lg" role="button">Crear llave temporal</a>
        </div>
    </body>
</html>
