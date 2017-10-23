<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('entidadfed', 'Entidad federativa') !!}
			{!! Form::select('entidadfed', ['1' => 'Veracruz', '2' => 'Jalisco'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('municipio', 'Municipio') !!}
			{!! Form::select('municipio', ['1' => 'Altotonga', '2' => 'Xalapa'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un municipio', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('localidad', 'Localidad') !!}
			{!! Form::select('localidad', ['1' => 'Atalpas', '2' => 'La palma'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una localidad', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('cp', 'Código Postal') !!}
			{!! Form::select('cp', ['1' => '93700', '2' => '91015'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un código postal', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('colonia', 'Colonia') !!}
			{!! Form::select('localidad', ['1' => 'Altotonga Centro', '2' => 'La palma'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una colonia', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calle', 'Calle') !!}
			{!! Form::text('calle', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la calle', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numint', 'Número interior') !!}
			{!! Form::number('numint', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número interior', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numext', 'Número exterior') !!}
			{!! Form::number('numext', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número exterior', 'required']) !!}
		</div>
	</div>
</div>