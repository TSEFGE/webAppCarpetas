@extends('template.main')

@section('css')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Carpeta de Investigación: {{ $carpeta[0]->numCarpeta }}</div>
            <div class="card-body boxone">
                <div class="boxtwo">
                    <h6>Denunciates</h6>
                    <div class="table">
                        <table class="table table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>RFC</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Teléfono</th>
                            </thead>
                            <tbody>
                                @foreach($denunciantes as $denunciante)
                                <tr>
                                    <td>{{ $denunciante->nombres." ".$denunciante->primerAp." ".$denunciante->segundoAp }}</td>
                                    <td>{{ $denunciante->rfc }}</td>
                                    <td>{{ $denunciante->edad }}</td>
                                    <td>{{ $denunciante->sexo }}</td>
                                    <td>{{ $denunciante->telefono }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciante', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    <h6>Denunciados</h6>
                    <div class="table">
                        <table class="table table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>RFC</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Teléfono</th>
                            </thead>
                            <tbody>
                                @foreach($denunciados as $denunciado)
                                <tr>
                                    <td>{{ $denunciado->nombres." ".$denunciado->primerAp." ".$denunciado->segundoAp }}</td>
                                    <td>{{ $denunciado->rfc }}</td>
                                    <td>{{ $denunciado->edad }}</td>
                                    <td>{{ $denunciado->sexo }}</td>
                                    <td>{{ $denunciado->telefono }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciado', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>
                

                <div class="boxtwo">
                    <h6>Autoridades</h6>
                    <div class="table">
                        <table class="table table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Antigüedad</th>
                                <th>Rango</th>
                                <th>Horario laboral</th>
                                <th>Documento</th>
                                <th>Num. documento</th>
                            </thead>
                            <tbody>
                                @foreach($autoridades as $autoridad)
                                <tr>
                                    <td>{{ $autoridad->nombres." ".$autoridad->primerAp." ".$autoridad->segundoAp }}</td>
                                    <td>{{ $autoridad->antiguedad }}</td>
                                    <td>{{ $autoridad->rango }}</td>
                                    <td>{{ $autoridad->horarioLaboral }}</td>
                                    <td>{{ $autoridad->docIdentificacion }}</td>
                                    <td>{{ $autoridad->numDocIdentificacion }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"> 
                        <a href="{{ route('new.autoridad', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar Autoridad</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    <h6>Abogados</h6>
                    <div class="table">
                        <table class="table table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Cédula</th>
                                <th>Sector</th>
                                <th>Defiende a</th>                                
                            </thead>
                            <tbody>
                                @foreach($abogados as $abogado)
                                <tr>
                                    <td>{{ $abogado->nombres." ".$abogado->primerAp." ".$abogado->segundoAp }}</td>
                                    <td>{{ $abogado->cedulaProf }}</td>
                                    <td>{{ $abogado->sector }}</td>
                                    <td>{{ $abogado->nombres2." ".$abogado->primerAp2." ".$abogado->segundoAp2 }}</td>                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"> 
                        <a href="{{ route('new.abogado', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    <h6>Familiares</h6>
                    <div class="table">
                        <table class="table table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Familiar de</th>
                                <th>Parentesco</th>
                                <th>Ocupación</th>
                            </thead>
                            <tbody>
                                @foreach($familiares as $familiar)
                                <tr>
                                    <td>{{ $familiar->familiarNombre." ".$familiar->familiarPrimerAp." ".$familiar->familiarSegundoAp }}</td>
                                    <td>{{ $familiar->nombres." ".$familiar->primerAp." ".$familiar->segundoAp }}</td>
                                    <td>{{ $familiar->parentesco }}</td>
                                    <td>{{ $familiar->ocupacion }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"> 
                        <a href="{{ route('new.familiar', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>


                <div class="boxtwo">
                    <h6>Delitos</h6>
                    <div class="table">
                        <table class="table table-striped">
                            <thead>
                                <th>Delito</th>
                                <th>Modalidad</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                            </thead>
                            <tbody>
                                @foreach($delitos as $delito)
                                <tr>
                                    <td>{{ $delito->delito }}</td>
                                    <td>{{ $delito->modalidad }}</td>
                                    <td>{{ $delito->fecha }}</td>
                                    <td>{{ $delito->hora }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"> 
                        <a href="{{ route('new.delito', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar delito</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    <h6>Acusaciones</h6>
                    <div class="table">
                        <table class="table table-striped">
                            <thead>
                                <th>Nombre denunciante</th>
                                <th>Delito</th>
                                <th>Nombre denunciado</th>
                            </thead>
                            <tbody>
                                @foreach($acusaciones as $acusacion)
                                <tr>
                                    <td>{{ $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp }}</td>
                                    <td>{{ $acusacion->delito }}</td>
                                    <td>{{ $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2 }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"> 
                        <a href="{{ route('new.acusacion', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar Acusación</a><hr>
                    </div>
                </div>

                @if($delits==true)
                <div class="boxtwo">
                    <h6>Vehículos</h6>
                    <div class="table">
                        <table class="table table-striped">
                            <thead>
                                <th>Delito asociado</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Placas</th>
                                <th>Tipo vehículo</th>
                                <th>Color</th>
                            </thead>
                            <tbody>
                                @foreach($vehiculos as $vehiculo)
                                <tr>
                                    <td>{{ $vehiculo->delito }}</td>
                                    <td>{{ $vehiculo->marca }}</td>
                                    <td>{{ $vehiculo->modelo }}</td>
                                    <td>{{ $vehiculo->placas }}</td>
                                    <td>{{ $vehiculo->tipovehiculo }}</td>
                                    <td>{{ $vehiculo->color }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"> 
                        <a href="{{ route('new.vehiculo', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar Vehículo</a><hr>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection