@extends('template.form')

@section('title', 'Iniciar nueva Carpeta de Investigación')

@section('contenido')
    {!! Form::open(['route' => 'store.carpeta', 'method' => 'POST'])  !!}
	<div class="boxtwo">
		<h6>Datos generales de la carpeta de investigación</h6>
		@include('fields.carpeta')
		@include('forms.buttons')
	</div>
	{!! Form::close() !!}
@endsection