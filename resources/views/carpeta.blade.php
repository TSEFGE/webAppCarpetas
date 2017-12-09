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
                    @include('tables.denunciantes')
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciante', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    @include('tables.denunciados')
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciado', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>
                

                <div class="boxtwo">
                    @include('tables.autoridades')
                    <div class="text-right"> 
                        <a href="{{ route('new.autoridad', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar Autoridad</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    @include('tables.abogados')
                    <div class="text-right"> 
                        <a href="{{ route('new.abogado', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    @include('tables.defensas')
                    <div class="text-right"> 
                        <a href="{{ route('new.defensa', $carpeta[0]->id) }}" class="btn btn-secondary">Asignar defensa</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    @include('tables.familiares')
                    <div class="text-right"> 
                        <a href="{{ route('new.familiar', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>


                <div class="boxtwo">
                    @include('tables.delitos')
                    <div class="text-right"> 
                        <a href="{{ route('new.delito', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar delito</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    @include('tables.acusaciones')
                    <div class="text-right"> 
                        <a href="{{ route('new.acusacion', $carpeta[0]->id) }}" class="btn btn-secondary">Agregar Acusación</a><hr>
                    </div>
                </div>

                @if($delits==true)
                <div class="boxtwo">
                    @include('tables.vehiculos')
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