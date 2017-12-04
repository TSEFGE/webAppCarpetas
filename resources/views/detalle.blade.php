@extends('template.main')

@section('css')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Carpeta de Investigación {{ $carpeta[0]->numCarpeta }}</div>
            <div class="card-body boxone">
                <label>Fecha de inicio:</label> <label>{{ $carpeta[0]->fechaInicio }}</label><br>
                <label>Con detenido:</label> <label>{{ $carpeta[0]->conDetenido }}</label><br>
                <label>Es relevante:</label> <label>{{ $carpeta[0]->esRelevante }}</label><br>
                <label>Estado de carpeta:</label> <label>{{ $carpeta[0]->estadoCarpeta }}</label><br>
                <label>Descripcion de los hechos:</label> <label>{{ $carpeta[0]->descripcionHechos }}</label><br>

{{-- --}}
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
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection