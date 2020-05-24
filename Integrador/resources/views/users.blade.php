@extends('layouts.head')
@section('Titulo',"Usuarios administrador - Control App")
@section('Contenido')
<link rel="stylesheet" href="styles/users.css">
        <div class="barraNaranja">
            <div class="layoutNaranja">
                <a href="http://entersl.com.mx"><b>entersl.com.mx</b></a>
                <a href="/" class="btn btn-outline-light inicio">Inicio</a>
                <div class="redes-sociales">
                    <a href="https://business.facebook.com/Enter-de-San-Luis-2375424602530416/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/enterdesanluis/?hl=es-la"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div></div>

        @if (Auth::user()->regresaTipoUsuario(Auth::user()->idTipoUsuario) == "Administrador sistema")
            <div class="texto">
                <p>Crear o eliminar usuarios :</p>
            </div>
            <div class="table table-responsive tabla">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Tipo de usuario</th>
                            <th>Permiso</th>
                            <th>Email</th>
                            <!--<th></th>-->
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->RegresaNombre($usuario->id)}}</td>
                                <td>{{$usuario->RegresaTipoUsuario($usuario->idTipoUsuario)}}</td>
                                <td>{{$usuario->RegresaPermiso($usuario->idPermiso)}}</td>
                                <td>{{$usuario->email}}</td>
                                <!---<td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify"
                                    onclick="modificaUsuario({{$usuario->RegresaInformacion($usuario->id)}})">Modificar</a></td>-->
                                <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate"
                                    onclick="PasaDato({{$usuario->id}})">Eliminar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="boton">
                <a href="/alta-Usuario" class="btn btn-success btn-lg" role="button">Agregar usuario</a>
            </div>
        @else
            <div class="texto">
                <p>Lista de inquilinos</p>
                <div class="table table-responsive tabla">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Departameto</th>
                                <th>Email</th>
                                <!--<th></th>-->
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    @if ($usuario->RegresaTipoUsuario($usuario->idTipoUsuario) == "Inquilino")
                                        <td>{{$usuario->RegresaNombre($usuario->id)}}</td>
                                        <td>{{$usuario->RegresaDepartamento($usuario->id)}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate"
                                            onclick="PasaDato({{$usuario->id}})">Eliminar</a></td>
                                    @endif

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif


        <!---<div class="modal fade" id="modify">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>x</span>
                        </button>
                        <br>
                        <h4>Modificar Usuario</h4>
                        <br>
                    </div>
                    <div class="modal-body frm-lgn">
                        <br><br>
                        <form action="" id="form-editar" method="POST">
                            @csrf
                            @method('put')
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="apP" type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido Paterno" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="apM" type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido Materno" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input id="fechaNac" type="date" class="form-control" name="fechaNac" placeholder="Fecha de Nacimiento" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-book"></i></span>
                                <input id="CURP" type="text" class="form-control" name="CURP" placeholder="CURP" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input id="tel" type="text" class="form-control" name="telefono" placeholder="Teléfono" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-phone"></i></span>
                                <input id="cel" type="text" class="form-control" name="celular" placeholder="Celular" required>
                            </div>
                            <br>
                            <button type="reset" value="cancelar" class="btn btn-info btn-log2" data-dismiss="modal">Cancelar</button>
                            <button type="submit" value="guardar" class="btn btn-warning btn-log">Guardar Cambios</button>
                        </form>
                        <br><br>
                    </div>
                    <div class="modal-footer">
                        <br>
                        
                    </div>
                </div>
            </div>
        </div>-->

        <div class="modal fade" id="eliminate">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                        <h4 class='modal-title m-auto'>Aviso importante</h4>
                    </div>
                    <div class="modal-body frm-lgn">
                        <br>
                            <h3>¿Deseas eliminar al usuario?</h3>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <br>
                        <form action="" id="form-eliminar" method="POST">
                            @csrf
                            <button type='submit' value="eliminar" class='btn btn-danger btn-log2'>Eliminar</button>
                            <button type='button' value="cancelar" class='btn btn-info btn-log2' data-dismiss='modal'>Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<script  type="text/javascript">
    function PasaDato($iduser){
        var id = $iduser;
        document.getElementById('form-eliminar').setAttribute('action','/bajaUsuario/'+id);
    }
    /*function modificaUsuario($informacion){
        var id = $informacion[0];
        document.getElementById('form-editar').setAttribute('action','/Usuarios/'+id);
        document.getElementById('nombre').value=$informacion[1];
        document.getElementById('apP').value=$informacion[2];
        document.getElementById('apM').value=$informacion[3];
        document.getElementById('fechaNac').value=$informacion[4];
        document.getElementById('CURP').value=$informacion[5];
        document.getElementById('email').value=$informacion[6];
        document.getElementById('tel').value=$informacion[7];
        document.getElementById('cel').value=$informacion[8];
    }*/
</script>

@endsection