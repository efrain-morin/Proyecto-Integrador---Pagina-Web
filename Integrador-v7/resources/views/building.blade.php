<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edificios - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="styles/building.css">

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
                <form autocomplete="off" action="" class="autocomplete_f">
                    <div class="autocomplete" style="width:300px;">
                        <input id="myInput" type="text" name="myCountry" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-outline">Buscar</button>
                </form>
            </div>
        </div>     

        <div></div>
        <div class="texto">
            <p>Crear, modificar o eliminar edificios:</p>
        </div>
        <div class="table table-responsive tabla">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Administrador</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>CP</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Efrain Morin</td>
                        <td>Av. Venustiano Carranza</td>
                        <td>Tequisquiapan</td>
                        <td>78180</td>
                        <td>San Luis Potosí, SLP</td>
                        <td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Efrain Morin</td>
                        <td>Av. Venustiano Carranza</td>
                        <td>Tequisquiapan</td>
                        <td>78180</td>
                        <td>San Luis Potosí, SLP</td>
                        <td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal de modificar -->
        <div class="modal fade" id="modify">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>x</span>
                        </button>
                        <br>
                        <h4>Modificar Edificio</h4>
                        <br>
                    </div>
                    <div class="modal-body frm-lgn">
                        <br><br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                            <select name="admin" id="admin" class="form-control">
                                <option selected>Administrador...</option>
                                <option value="Efrain Morin">Efrain Morin</option>
                                <option value="Efrain Morin">Iván Cadena</option>
                                <option value="Efrain Morin">Sanjuana Guardiola</option>
                                <option value="Efrain Morin">Oscar Sanchez</option>
                                <option value="Efrain Morin">Manuel Briones</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="street" type="text" class="form-control" name="street" placeholder="Calle">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="colonia" type="text" class="form-control" name="colonia" placeholder="Colonia">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-book"></i></span>
                            <input id="cp" type="text" class="form-control" name="cp" placeholder="Código Postal">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input id="municipio" type="text" class="form-control" name="municipio" placeholder="Municipio">
                        </div>
                        <br>
                        <div class="input-group ipt-text">
                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="state" type="text" class="form-control" name="state" placeholder="Estado">
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

        <!-- Modal de eliminar -->
        <div class="modal fade" id="eliminate">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                        <br>
                        <h4>Eliminar Edificio</h4>
                        <br>
                    </div>
                    <div class="modal-body frm-lgn">
                        <br>
                            <h3>¿Deseas eliminar al edificio?</h3>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <br>
                        <button type="reset" value="cancelar" class="btn btn-info btn-log2" data-dismiss="modal">Cancelar</button>
                        <button type="submit" value="guardar" class="btn btn-danger btn-log2">Eliminar Edificio</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="boton">
            <a href="/register-building" class="btn btn-success btn-lg" role="button">Agregar edificio</a>
        </div>

        <script src="js/autocomplete.js"></script>
    </body>
</html>
