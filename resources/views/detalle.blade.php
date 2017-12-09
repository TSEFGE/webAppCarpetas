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
                </div>

                <div class="boxtwo">
                    @include('tables.denunciados')
                </div>
                

                <div class="boxtwo">
                    @include('tables.autoridades')
                </div>

                <div class="boxtwo">
                    @include('tables.abogados')
                </div>

                <div class="boxtwo">
                    @include('tables.defensas')
                </div>

                <div class="boxtwo">
                    @include('tables.familiares')
                </div>


                <div class="boxtwo">
                    @include('tables.delitos')
                </div>

                <div class="boxtwo">
                    @include('tables.acusaciones')
                </div>

                @if($delits==true)
                <div class="boxtwo">
                    @include('tables.vehiculos')
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection