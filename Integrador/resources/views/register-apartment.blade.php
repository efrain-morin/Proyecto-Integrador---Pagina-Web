@extends('layouts.head')
@section('Titulo',"Registro Departamento")
@section('Contenido')
        <link rel="stylesheet" type="text/css" href="styles/register-building.css">

        <div class="formulario">
            <p>REGISTRO</p>
            <h4>Crear nuevo departamento:</h4>
            <br><br><br>
            
            <form class="frm-lgn">
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
                <br><br><br>
                <button type="submit" value="Inicio" class="btn btn-warning btn-log">Crear</button>
            </form>
        </div>
@endsection