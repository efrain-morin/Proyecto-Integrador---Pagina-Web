@extends('layouts/head')
@section('Titulo',"Información de usuario")
@section('Contenido')
<link rel="stylesheet" href="styles/info.css">
    <div class="container">
        <div class="row">
            <div class="row ">
                <h1 class="m-auto">Información de usuario</h1>
            </div>
            <form class="bg-form"  method ="POST" action="/modificaUsuario">
                @csrf
                @method('put')
                <br/>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label>Nombre </label>
                        <br>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                            value="{{ Auth::User()->nombre }} " required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                            <label for="nameapP" class="  text-md-right">{{ __('Apellido Paterno') }}</label>

                            <input id="apP" type="text" class="form-control" name="apellidoPaterno" value="{{ Auth::User()->apellidoPaterno }}" required autofocus>
                    </div>
                    <div class="col-md-6 col-sm-12">
                            <label for="nameapM" class=" text-md-right">{{ __('Apellido Materno') }}</label>
                            <input id="apM" type="text" class="form-control" name="apellidoMaterno" value="{{ Auth::User()->apellidoMaterno }}" required autofocus>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > {{ __('Fecha de nacimiento') }} </label>
                        <br>
                        <input type="date" name="fechaNac" id="nomusuario" class="form-control"
                        value="{{ Auth::User()->fechaNacimiento }}" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > {{ __('CURP') }} </label>
                        <br>
                        <input type="text" name="CURP" id="nomusuario" class="form-control"
                        value="{{ Auth::User()->CURP }}" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > {{ __('Email') }} </label>
                        <br>
                        <input type="text" name="email" id="nomusuario" class="form-control"
                        value="{{ Auth::User()->email }}" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > {{ __('Teléfono') }} </label>
                        <br>
                        <input type="text" name="telefono" id="nomusuario" class="form-control"
                        value="{{ Auth::User()->telefono }}" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > {{ __('Celular') }} </label>
                        <br>
                        <input type="text" name="celular" id="nomusuario" class="form-control"
                        value="{{ Auth::User()->celular }}" required>
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right {{$errors->has('password') ? 'has-error' : ''}}" > {{ __('Contraseña actual') }} </label>
                        <br>
                        <input type="password" name="password" id="nomusuario" class="form-control"
                        >
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > {{ __('Nueva contraseña') }} </label>
                        <br>
                        <input type="password" name="pwd" id="nomusuario" class="form-control"
                        >
                        <br />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="  text-md-right" > {{ __('Confirmar contraseña') }} </label>
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
@endsection