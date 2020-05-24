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

        <link rel="stylesheet" href="styles/info.css">

    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="row ">
                <br>
                <h1 class="m-auto">Información de usuario</h1>
            </div>
            <form class="bg-form"  method ="POST" action="/modificaUsuario">
                
                <br/>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label>Nombre </label>
                        <br>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                            value="" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                            <label for="nameapP" class="  text-md-right">Apellido Paterno</label>

                            <input id="apP" type="text" class="form-control" name="apellidoPaterno" value="" required autofocus>
                    </div>
                    <div class="col-md-6 col-sm-12">
                            <label for="nameapM" class=" text-md-right">Apellido Materno</label>
                            <input id="apM" type="text" class="form-control" name="apellidoMaterno" value="" required autofocus>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > Fecha de Nacimiento </label>
                        <br>
                        <input type="date" name="fechaNac" id="nomusuario" class="form-control"
                        value="" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > CURP </label>
                        <br>
                        <input type="text" name="CURP" id="nomusuario" class="form-control"
                        value="" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > Email </label>
                        <br>
                        <input type="text" name="email" id="nomusuario" class="form-control"
                        value="" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > Teléfono </label>
                        <br>
                        <input type="text" name="telefono" id="nomusuario" class="form-control"
                        value="" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > Celular </label>
                        <br>
                        <input type="text" name="celular" id="nomusuario" class="form-control"
                        value="" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right " > Contraseña Actual</label>
                        <br>
                        <input type="password" name="password" id="nomusuario" class="form-control"
                        >
                        
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > Nueva Contraseña </label>
                        <br>
                        <input type="password" name="pwd" id="nomusuario" class="form-control"
                        >
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > Confirmar Contraseña </label>
                        <br>
                        <input type="password" name="Cpwd" id="nomusuario" class="form-control"
                        >
                        <br />
                    </div>
                    
                </div>
                <input type="submit" class="btn btn-pink" value="Modificar" name="btnRegistrar" />
                <br />
            </form>
        </div>
    </div>
    </body>
</html>
