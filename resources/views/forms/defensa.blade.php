@extends('template.form')

@section('title', 'Agregar Defensa')
@section('contenido')
    {!! Form::open(['route' => 'store.defensa', 'method' => 'POST'])  !!}
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
				@include('fields.defensa')
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
@endsection