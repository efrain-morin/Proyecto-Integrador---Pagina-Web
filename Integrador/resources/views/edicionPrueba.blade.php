<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Info - Control App</title>

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab9be42588.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="styles/register-admin.css">

    </head>
    <body>
    <div class="barraNaranja">
            <div class="layoutNaranja">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <a href="http://entersl.com.mx"><b>entersl.com.mx</b></a>
                            <a href="/admin" class="btn btn-outline-light inicio">Inicio</a>
                            <a href="/users" class="btn btn-outline-light inicio">Usuarios</a>
                        </div>

                        <div class="col-lg-4">
                            <div class="redes-sociales">
                                <a href="https://business.facebook.com/Enter-de-San-Luis-2375424602530416/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/enterdesanluis/?hl=es-la"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="formulario">
            <p>REGISTRO</p>
            
                <h4>Alta de usuario para departamento:</h4>
            
                <h4>Alta de Administrador para edificio</h4>
            
            <br><br><br>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-sm-4">
                            <h4>Edificio: </h4>
                            <h4>Calle: </h4>
                            <h4>Colonia: </h4>
                            <h4>CP: </h4>
                            <h4>Estado: </h4>
                            <h4>Municipio: </h4>
                            <img class="img-fluid " src="" alt="Edificio">
                            <br><br>
                    </div>

                    <div class="col-sm-8">
                        <form action="/alta-Administrador" method="POST">
                            
                            <div class="row">
                                <div class="form-horizontal frm-lgn">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <div class="input-group ipt-text">
                                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="name" type="text" class="form-control" name="nombre" placeholder="Nombre(s)" required>
                                        </div>
                                        <br>
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group ipt-text">
                                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="apl-pat" type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido Paterno" required>
                                        </div>
                                        <br>
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group ipt-text">
                                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="apl-mat" type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido Materno" required>
                                        </div>
                                        <br>
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group ipt-text">
                                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-calendar"></i></span>
                                            <input id="date" type="date" class="form-control" name="fechaNac" placeholder="Fecha de Nacimiento" required>
                                        </div>
                                        <br>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group ipt-text">
                                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-book"></i></span>
                                                <input id="curp" type="text" class="form-control" name="CURP" placeholder="CURP" required>
                                            </div>
                                            <br>
                                        </div>
                                        
                                            <div class="form-group">
                                                <div class="input-group ipt-text">
                                                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input id="pwd-re"  type="text" class="form-control" name="per" value="Administrar inmueble" readonly="readonly">
                                                    <input type="hidden" value="2" name="permiso">
                                                </div>
                                                <br>
                                            </div>
                                       
                                        <div class="form-group">
                                            <div class="input-group ipt-text">
                                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="pwd-re"  type="text" class="form-control" name="per" value="Administrar departamento" readonly="readonly">
                                                <input type="hidden" value="1" name="permiso">
                                            </div>
                                            <br>
                                        </div>
                                        

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <div class="input-group ipt-text">
                                            <span class="input-group-addon icn-lgn  "><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                                        </div>
                                        
                                        <br>
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group ipt-text">
                                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input id="tel" type="tet" class="form-control" name="telefono" placeholder="Teléfono" required>
                                        </div>
                                        <br>
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group ipt-text">
                                            <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-phone"></i></span>
                                            <input id="cel" type="text" class="form-control" name="celular" placeholder="Celular" required>
                                        </div>
                                        <br>
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group ipt-text">
                                            <span class="input-group-addon icn-lgn "><i class="glyphicon glyphicon-lock"></i></span>
                                            <input id="pwd" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                        </div>
                                        
                                        <br>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group ipt-text">
                                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="pwd-re" type="password" class="form-control" name="cPassword" placeholder="Vuelve a ingresar la contraseña" required>
                                            </div>
                                            <br>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="input-group ipt-text">
                                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="pwd-re" type="text" class="form-control" name="Admin" value="Administrador" readonly="readonly">
                                                <input type="hidden" value="2" name="tipoUsuario">
                                            </div>
                                            <input value="" type="hidden" class="form-control" name="idInmueble" >
                                            <br>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="input-group ipt-text">
                                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="pwd-re" type="text" class="form-control" name="Admin" value="Inquilino" readonly="readonly">
                                                <input type="hidden" value="1" name="tipoUsuario">
                                            </div>
                                            <input value="" type="hidden" class="form-control" name="idDepartamento" >
                                            <br>
                                        </div>
                                        
                                    </div>
                                    <button type="submit" value="Inicio" class="btn btn-warning btn-log">Crear</button>
                                    <br><br><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
