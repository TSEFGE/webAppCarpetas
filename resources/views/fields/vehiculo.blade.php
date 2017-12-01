
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('status', 'Status', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('status', ['INVOLUCRADO' => 'INVOLUCRADO', 'ROBADO' => 'ROBADO'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un status', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('placas', 'Placas', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('placas', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las placas', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idEstado', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstado', $estados, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idMarca', 'Marca', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMarca', $marcas, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una marca']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idSubmarca', 'Submarca', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idSubmarca', ['' => 'Seleccione una submarca'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('modelo', 'Modelo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::number('modelo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el modelo', 'min' => 2000, 'max' => 2050, 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idColor', 'Color', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColor', $colores, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un color']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nrpv', 'NRPV', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nrpv', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el NRPV']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('numSerie', 'Núm. Serie', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numSerie', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de serie', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('numMotor', 'Núm. Motor', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numMotor', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de motor', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('permiso', 'Permiso', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('permiso', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el permiso']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idClaseVehiculo', 'Clase de Vehículo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idClaseVehiculo', $clasesveh, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una clase de vehículo']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idTipoVehiculo', 'Tipo de vehículo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idTipoVehiculo', ['' => 'Seleccione un tipo de vehículo'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idTipoUso', 'Tipo de uso', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idTipoUso', $tiposuso, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un tipo de uso']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idProcedencia', 'Procedencia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idProcedencia', $procedencias, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione procedencia']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idAseguradora', 'Aseguradora', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idAseguradora', $aseguradoras, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una aseguradora']) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('senasPartic', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('senasPartic', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares','rows' => '3', 'required']) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			{!! Form::submit('Guardar', ['class' => 'btn btn-dark']) !!}
		</div>
	</div>
