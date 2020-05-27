@extends('layouts.head')
@section('Titulo',"Registro Edificios")
@section('Contenido')
 <link rel="stylesheet" type="text/css" href="styles/register-building.css">
        <div class="formulario">
            <p>REGISTRO</p>
            <h4>Crear nuevo edificio:</h4>
            <br><br><br>
            <form class="frm-lgn" method="POST" action="{{ route('edificios.store') }}"  enctype="multipart/form-data">
                @csrf
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="street" type="text" class="form-control" name="calle" placeholder="Calle">
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
                    <input id="state" type="text" class="form-control" name="estado" placeholder="Estado">
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="state" type="text" class="form-control" name="nomEdificio" placeholder="Nombre de edificio">
                </div>
                <br>
                <div class="input-group ipt-text">
                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="state" type="file" class="form-control" name="foto" placeholder="Imagen de edificio">
                </div>
                <br><br><br>
                <button type="submit" value="Inicio" class="btn btn-warning btn-log">Crear</button>
            </form>
        </div>
@endsection