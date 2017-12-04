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


            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection