@extends('layouts.head')

@section('Contenido')
<link rel="stylesheet" type="text/css" href="styles/welcome.css">
<style>
    .formulario::after {
        content: "" !important;
        background-image: url(img/departamento.jpg) !important;
        opacity: 0.3 !important;
        top: 0 !important;
        left: 0 !important;
        bottom: 0 !important;
        right: 0 !important;
        position: absolute !important;
        z-index: -1 !important;   
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: cover !important;
        background-color: #002C55 !important;
        height: 100% !important;
    }
</style>
        <div class="formulario">
            <br>
            
            <div class="info">
                <p>Sistema web para la gestión de inmuebles, departamentos y usuarios</p>
                @guest
                <p>Bienvenido</p>
                    
                
                @else
                    <p>Bienvenido {{Auth::User()->nombre}}</p>
                @endguest
                <h4>La forma mas segura de cuidar tus departamentos</h4>
                <br>
                    
            </div>
            
        </div>
@endsection