<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idEstado3', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstado3', $estados, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idMunicipio3', 'Municipio', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMunicipio3', [''=>'Seleccione un municipio'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idLocalidad3', 'Localidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLocalidad3', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('cp3', 'Código Postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cp3', ['' => 'Seleccione un código postal'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idColonia3', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColonia3', ['' => 'Seleccione una colonia'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calle3', 'Calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calle3', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numExterno3', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numExterno3', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número exterior']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numInterno3', 'Número interior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numInterno3', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número interior']) !!}
		</div>
	</div>
</div>