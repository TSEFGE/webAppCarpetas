<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idEstado', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstado', $estados, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idMunicipio', 'Municipio', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMunicipio', $municipios, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un municipio', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idLocalidad', 'Localidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLocalidad', ['1' => 'Atalpas', '2' => 'La palma'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una localidad', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('cp', 'Código Postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cp', ['1' => '93700', '2' => '91015'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un código postal', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idColonia', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColonia', ['1' => 'Altotonga Centro', '2' => 'La palma'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una colonia', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calle', 'Calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calle', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numExterno', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::number('numExterno', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número exterior', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numInterno', 'Número interior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::number('numInterno', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número interior', 'required']) !!}
		</div>
	</div>
</div>