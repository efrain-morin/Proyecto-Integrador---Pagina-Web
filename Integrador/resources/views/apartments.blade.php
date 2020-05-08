<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edificio #1 - Control App</title>

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
            </div>
        </div>

        <div></div>
        <div class="texto">
            <p>Edificio #1</p>
            <h4>Departamentos</h4>
        </div>
        <div class="table table-responsive tabla">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Dueño</th>
                        <th>Piso</th>
                        <th>Número</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Efrain Morin</td>
                        <td>Planta Baja</td>
                        <td>2</td>
                        <td>1-234-567</td>
                        <td>efrain@morin</td>
                        <td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Sanjuana Guardiola</td>
                        <td>Segundo Piso</td>
                        <td>8</td>
                        <td>1-234-567</td>
                        <td>sanjuana@guardiola</td>
                        <td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Ivan Cadena</td>
                        <td>Planta Baja</td>
                        <td>4</td>
                        <td>1-234-567</td>
                        <td>ivan@cadena</td>
                        <td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Oscar Sanchez</td>
                        <td>Primer Piso</td>
                        <td>6</td>
                        <td>1-234-567</td>
                        <td>oscar@sanchez</td>
                        <td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify">Modificar</a></td>
                        <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate">Eliminar</a></td>
                    </tr>
                    <tr>
                        <td>Manuel Briones</td>
                        <td>Tercer Piso</td>
                        <td>10</td>
                        <td>1-234-567</td>
                        <td>manuel@briones</td>
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
                        <h4>Modificar Departamento</h4>
                        <br>
                    </div>
                    <div class="modal-body frm-lgn">
                        <br><br>
                        <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <select name="owner" id="owner" class="form-control">
                        <option selected>Dueño...</option>
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
                    <select name="building" id="building" class="form-control">
                        <option selected>Edificio...</option>
                        <option value="Efrain Morin">Edificio #1</option>
                        <option value="Efrain Morin">Edificio #2</option>
                        <option value="Efrain Morin">Edificio #3</option>
                        <option value="Efrain Morin">Edificio #4</option>
                        <option value="Efrain Morin">Edificio #5</option>
                    </select>
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="floor" type="text" class="form-control" name="floor" placeholder="Piso">
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="number" type="text" class="form-control" name="number" placeholder="Número">
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
                        <h4>Eliminar Departamento</h4>
                        <br>
                    </div>
                    <div class="modal-body frm-lgn">
                        <br>
                            <h3>¿Deseas eliminar al departamento?</h3>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <br>
                        <button type="reset" value="cancelar" class="btn btn-info btn-log2" data-dismiss="modal">Cancelar</button>
                        <button type="submit" value="guardar" class="btn btn-danger btn-log2">Eliminar Departamento</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="boton">
            <a href="/register-apartment" class="btn btn-success btn-lg" role="button">Agregar departamento</a>
        </div>
    </body>
</html>
