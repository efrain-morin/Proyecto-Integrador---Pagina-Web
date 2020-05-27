@extends('layouts.head')
@section('Titulo',"Registro Administrador Edificio")
@section('Contenido')
        <link rel="stylesheet"  href="{{ asset('styles/register-admin.css') }}">
        <div class="formulario">
            <p>REGISTRO</p>
            @if (Auth::user()->RegresaTipoUsuario(Auth::user()->idTipoUsuario)=="Administrador")
                <h4>Alta de usuario para departamento:</h4>
            @else
                <h4>Alta de Administrador para edificio</h4>
            @endif
            <br>
            <div class="container-fluid">
                <div class="row">
                    @if (Auth::user()->RegresaTipoUsuario(Auth::user()->idTipoUsuario) == "Administrador")
                        @php
                            $edificio = $departamento->regresaEdificio($departamento->idInmueble1);
                            $edificio = $edificio[0];
                        @endphp
                    @endif
                    <div class="col-sm-4">
                            <h4>Edificio: {{$edificio->nombreEdificio}}</h4>
                            <br>
                            <h4>Calle: {{$edificio->calle}}.</h4>
                            <br>
                            <h4>Colonia: {{$edificio->colonia}}.</h4>
                            <br>
                            <h4>CP: {{$edificio->codigoPostal}}.</h4>
                            <br>
                            <h4>Estado: {{$edificio->estado}}.</h4>
                            <br>
                            <h4>Municipio: {{$edificio->municipio}}.</h4>
                            <br>
                            <div class="text-center">
                                <img class="img-fluid rounded" src="/storage/{{$edificio->fotoEdificio}}" alt="Edificio">
                              </div>
                            
                            <br><br>
                    </div>

                    <div class="col-sm-8">
                        <form action="/alta-Administrador" method="POST">
                            @csrf
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
                                        @if (Auth::user()->RegresaTipoUsuario(Auth::user()->idTipoUsuario) == "Super Usuario")
                                            <div class="form-group">
                                                <div class="input-group ipt-text">
                                                    <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input id="pwd-re"  type="text" class="form-control" name="per" value="Administrar inmueble" readonly="readonly">
                                                    <input type="hidden" value="2" name="permiso">
                                                </div>
                                                <br>
                                            </div>
                                        @else
                                        <div class="form-group">
                                            <div class="input-group ipt-text">
                                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="pwd-re"  type="text" class="form-control" name="per" value="Administrar departamento" readonly="readonly">
                                                <input type="hidden" value="1" name="permiso">
                                            </div>
                                            <br>
                                        </div>
                                        @endif

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <div class="input-group ipt-text">
                                            <span class="input-group-addon icn-lgn  {{$errors->has('email') ? 'has-error' : ''}}"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                                        </div>
                                        {!! $errors->first('email','<span class="help-block">:message</span>')!!}
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
                                            <span class="input-group-addon icn-lgn {{$errors->has('password') ? 'has-error' : ''}}"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input id="pwd" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                        </div>
                                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                                        <br>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group ipt-text">
                                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="pwd-re" type="password" class="form-control" name="cPassword" placeholder="Vuelve a ingresar la contraseña" required>
                                            </div>
                                            <br>
                                        </div>
                                        @if (Auth::user()->RegresaTipoUsuario(Auth::user()->idTipoUsuario) == "Super Usuario")
                                        <div class="form-group">
                                            <div class="input-group ipt-text">
                                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="pwd-re" type="text" class="form-control" name="Admin" value="Administrador" readonly="readonly">
                                                <input type="hidden" value="2" name="tipoUsuario">
                                            </div>
                                            <input value="{{$edificio->id}}" type="hidden" class="form-control" name="idInmueble" >
                                            <br>
                                        </div>
                                        @else
                                        <div class="form-group">
                                            <div class="input-group ipt-text">
                                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="pwd-re" type="text" class="form-control" name="Admin" value="Inquilino" readonly="readonly">
                                                <input type="hidden" value="1" name="tipoUsuario">
                                            </div>
                                            <input value="{{$departamento->id}}" type="hidden" class="form-control" name="idDepartamento" >
                                            <br>
                                        </div>
                                        @endif
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
@endsection
