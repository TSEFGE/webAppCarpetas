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
                    <a href="{{ route('denunciante', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
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
                    <a href="{{ route('denunciado', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
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
                    <a href="{{ route('familiar', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
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
                    <a href="{{ route('delito', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar delito</a><hr>
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
                    <a href="{{ route('acusacion', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar delito</a><hr>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection