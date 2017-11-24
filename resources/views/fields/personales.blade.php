<div class="row">
	{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('nombres', 'Nombre', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nombres', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('primerAp', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('primerAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('segundoAp', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('segundoAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('rfc', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('rfc', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('fechaNacimiento', 'Fecha de nacimiento', ['class' => 'col-form-label-sm']) !!}
			<div class='input-group date calendarioCompleto'>
				{!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm','required'=>'', 'placeholder' => 'DD/MM/AAAA']) !!}
				<span class="input-group-addon">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</span>
			</div>
		</div>
	</div>
	<div class="col-3">
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('edad', 'Edad', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('edad', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la edad', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('sexo', 'Sexo', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('sexo', ['1' => 'Hombre', '2' => 'Mujer'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el sexo', 'required']) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('curp', 'C.U.R.P.', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('curp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el C.U.R.P.', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idNacionalidad', 'Nacionalidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idNacionalidad', ['1' => 'Mexicana', '2' => 'Colombiana'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la nacionalidad', 'required']) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('idEtnia', 'Etnia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEtnia', ['1' => 'Indígena', '2' => 'Totonaca'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la etnia', 'required']) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('idLengua', 'Lengua', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLengua', ['1' => 'Indígena', '2' => 'Totonaca'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la lengua', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idEstadoOrigen', 'Entidad federativa de origen', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstadoOrigen', ['1' => 'Veracruz', '2' => 'CDMX'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idMunicipioOrigen', 'Municipio de origen', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMunicipioOrigen', ['1' => '>Xalapa', '2' => 'Altotonga'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un municipio', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('telefono', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('telefono', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('motivoEstancia', 'Motivo de estancia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('motivoestancia', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el motico de estancia', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idOcupacion', 'Ocupación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idOcupacion', ['1' => 'ING.', '2' => 'Lic.'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la ocupación', 'required']) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('idEstadoCivil', 'Estado civil', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstadoCivil', ['1' => 'Soltero', '2' => 'Casado'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el estado civil', 'required']) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('idReligion', 'Religión', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idReligion', ['1' => 'Católica', '2' => 'Budista'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la religión', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idEscolaridad', 'Escolaridad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEscolaridad', ['1' => 'Primaria', '2' => 'Secundaria'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la escoalridad', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('docIdentificacion', 'Documento de identificación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('docIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el docto. de identificacion', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('numDocIdentificacion', 'Núm. de documento de identificación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numDocIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el núm. del docto. de identificación', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			<label class="col-form-label col-form-label-sm" for="formGroupExampleInput">¿Es empresa?</label>
			<div class="clearfix"></div>
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label col-form-label-sm">
					<input class="form-check-input" type="radio" id="esEmpresa1" name="esEmpresa"> Sí
				</label>
			</div>
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label col-form-label-sm">
					<input class="form-check-input" type="radio" id="esEmpresa2" name="esEmpresa"> No
				</label>
			</div>
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('representanteLegal', 'Representante legal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('representanteLegal', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre del representante legal', 'required']) !!}
		</div>
	</div>
	{{--{!! Form::close() !!}--}}
</div>

{{--<div id="accordion" role="tablist">
	<div class="card">
		<div class="card-header" role="tab" id="headingGenerales">
			<h5 class="mb-0">
				<a data-toggle="collapse" href="#collapseGen" aria-expanded="true" aria-controls="collapseGen">
					Datos personales
				</a>
			</h5>
		</div>
		<div id="collapseGen" class="collapse show boxcollapse" role="tabpanel" aria-labelledby="headingGenerales" data-parent="#accordion">
			<div class="boxtwo">
				@include('fields.personales')
			</div>
		</div>
	</div>
</div>--}}