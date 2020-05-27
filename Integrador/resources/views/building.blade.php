@extends('layouts.head')
@section('Titulo',"Información de los edificios")
@section('Contenido')
        <link rel="stylesheet" type="text/css" href="styles/building.css">
        <div class="texto">
            <p>Crear, modificar o eliminar edificios:</p>
        </div>
        <div class="table table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre del edificio</th>
                        <th>Administrador</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Número de departamentos</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($edificios as $in)
                        @php
                            $administrador=$in->regresaUsuarios;
                            $altaAdministrador = false;
                        @endphp
                        
                        <td>{{$in->nombreEdificio}}</td>
                           <td> <a href="/alta-Administrador/{{$in->id}}">Crear administrador</a>
                                @foreach ($administrador as $admin)
                                <br>
                                    <b>{{Auth::user()->RegresaNombre($admin->id)}}
                                @endforeach
                             </td>
                            <td>{{$in->calle}}</td>
                            <td>{{$in->colonia}}</td>
                            <td>{{$in->estado}}</td>
                            <td>{{$in->municipio}}</td>
                            <td>@php echo count($in->regresaDepartamentos) @endphp</td>
                            <td><a href="#" class="btn btn-warning button" data-toggle="modal" data-target="#modify"
                                onclick="informacionInmueble({{$in->regresaInformacion($in->id)}})">Modificar</a></td>
                            <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate"
                                onclick="idInmueble({{$in->regresaInformacion($in->id)}})">Eliminar</a></td>
                        </tr>
                    @endforeach
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
                        <form action="" id="form-modificar" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                <select name="admin" id="admin" class="form-control">
                                    <option selected value="-1">Administrador...</option>
                                    @foreach ($administradores as $usuario)
                                        <option value="{{$usuario->id}}">{{Auth::user()->RegresaNombre($usuario->id)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="Calle" type="text" class="form-control" name="calle" placeholder="Calle" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="colonia" type="text" class="form-control" name="colonia" placeholder="Colonia" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-book"></i></span>
                                <input id="cp" type="text" class="form-control" name="cp" placeholder="Código Postal" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="municipio" type="text" class="form-control" name="municipio" placeholder="Municipio" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="estado" type="text" class="form-control" name="estado" placeholder="Estado" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="nomEdificio" type="text" class="form-control" name="nomEdificio" placeholder="Nombre" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="state" type="file" class="form-control" name="foto" placeholder="Foto del edificio">
                            </div>
                            <br><br>
                            <button type="reset" value="cancelar" class="btn btn-info btn-log2" data-dismiss="modal">Cancelar</button>
                            <button type="submit" value="guardar" class="btn btn-warning btn-log">Guardar Cambios</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <br>
                        
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
                        <h4>Eliminar Edificio <span id="nombreEdificio"></span></h4>
                        <br>
                    </div>
                    <form action="" method="POST" id="form-eliminar">
                        @csrf
                        @method('delete')
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
                    </form>
                </div>
            </div>
        </div>
        
        <div class="boton">
            <a href="/alta-Edificio" class="btn btn-success btn-lg" role="button">Agregar edificio</a>
        </div>
        <script type="text/javascript">
            function informacionInmueble($datos)
            {
                document.getElementById('form-modificar').setAttribute('action','/modifica-Edificio/'+$datos[0]);
                document.getElementById('Calle').value=$datos[1];
                document.getElementById('colonia').value=$datos[2];
                document.getElementById('cp').value=$datos[3];
                document.getElementById('estado').value=$datos[4];
                document.getElementById('municipio').value=$datos[5];
                document.getElementById('nomEdificio').value=$datos[6];
            }
            function idInmueble($datos)
            {
                document.getElementById('form-eliminar').setAttribute('action','/baja-Edificio/'+$datos[0]);
                document.getElementById('nombreEdificio').value=$datos[6];
            }
        </script>
@endsection