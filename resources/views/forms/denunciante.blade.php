@extends('template.form')

@section('title', 'Agregar Denunciante')

@section('contenido')
	{{--<div class="row justify-content-end">
	    <div class="col-6 justify-content-end">
			<hr><a href="{{ url('/carpeta-inicial', $idCarpeta) }}" class="btn btn-secondary text-center">Volver atrás</a><hr>
	    </div>
  	</div>--}}
    @include('tabs.denunciantes')
@endsection