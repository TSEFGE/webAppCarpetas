@extends('template.form')

@section('title', 'Agregar Delito')

@section('contenido')
    {!! Form::open(['route' => 'store.delito', 'method' => 'POST'])  !!}
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
				<h6>Información sobre la comisión del delito</h6>
				@include('fields.delito')
			</div>
		</div>
	</div>

	<div class="boxtwo">
		<h6>Información sobre el lugar de los hechos</h6>
		@include('fields.direcciones')
		@include('fields.lugar-hechos')	
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="boxtwo">
		@include('tables.delitos')
	</div>
@endsection