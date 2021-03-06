
@extends('layouts.head')
@section('Titulo',"Departamentos por edificio")
        <link rel="stylesheet" type="text/css" href="styles/building.css">
@section('Contenido')
        <div class="texto">
            @php
                $inmueble = Auth::user()->regresaEdificio( Auth::user()->idInmueble);
                $inmuebleId = $inmueble[0]->id;
                
            @endphp
            <p>Edificio {{$inmueble[0]->nombreEdificio}}</p>
           
            <h4>Departamentos</h4>
        </div>
        <div class="table table-responsive tabla">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre del inquilino</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Piso</th>
                        <th>Número</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($departamentos as $departamento)
                             @php
                                $inquilino = $departamento->regresaDueño($departamento->id);
                            @endphp
                            <td>
                            @if ($inquilino == "-")
                                <a href="/alta-Inquilino/{{$departamento->id}}">Crear inquilino</a></td>
                                <td>-</td>
                                <td>-</td>
                            @else
                                {{$inquilino->RegresaNombre($inquilino->id)}} </td>
                                <td>{{$inquilino->telefono}}</td>
                               
                                <td>{{$inquilino->email}}</td>
                            @endif  
                            <td>{{$departamento->piso}}</td>
                            <td>{{$departamento->numero}}</td>
                            <td><a href="#" class="btn btn-danger button" data-toggle="modal" data-target="#eliminate"
                                onclick="PasaDato({{$departamento->id}})">Eliminar</a></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>

                
        <div class="boton">
            <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#agregar" role="button">Agregar departamento</a>
        </div>

        <!-- Modal de agregar -->
        <div class="modal fade" id="agregar">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>x</span>
                        </button>
                        <br>
                        <h4>Agregar Departamento</h4>
                        <br>
                    </div>
                    <form action="{{route('Departamentos.store')}}" method="POST">
                    @csrf
                        <div class="modal-body frm-lgn">
                            <br><br>
                            <input type="hidden" value="{{$inmuebleId}}" name="edificio">
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="floor" type="text" class="form-control" name="piso" placeholder="Piso" required>
                            </div>
                            <br>
                            <div class="input-group ipt-text">
                                <span class="input-group-addon icn-lgn"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="number" type="text" class="form-control" name="numero" placeholder="Identificador" required>
                            </div>
                            <br><br>
                        </div>
                            <div class="modal-footer">
                                <br>
                                <button type="reset" value="cancelar" class="btn btn-info btn-log2" data-dismiss="modal">Cancelar</button>
                                <button type="submit" value="guardar" class="btn btn-warning btn-log">Guardar Cambios</button>
                            </div>
                    </form>
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
                        <h4>Eliminar departamento</h4>
                        <br>
                    </div>
                    <form action="" method="POST" id="form-eliminar">
                        @csrf
                        @method('delete')
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
                        </form>
                </div>
            </div>
        </div>
    <script  type="text/javascript">
        function PasaDato($iddep){
            var id = $iddep;
            document.getElementById('form-eliminar').setAttribute('action','/baja-departamento/'+id);
        }
    </script>
@endsection