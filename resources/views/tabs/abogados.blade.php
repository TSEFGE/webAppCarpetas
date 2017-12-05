{!! Form::open(['route' => 'store.abogado', 'method' => 'POST'])  !!}

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapsePersonales3" aria-expanded="false" aria-controls="collapsePersonales3">
				Datos personales
			</a>
		</h5>
	</div>
	<div id="collapsePersonales3" class="collapse show boxcollapse">
		<div class="boxtwo">
			<div class="row">
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
						<div class="input-group date" id="fechanac" data-target-input="nearest">
			                {!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechanac', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
			                <span class="input-group-addon" data-target="#fechanac" data-toggle="datetimepicker">
			                    <i class="fa fa-calendar" aria-hidden="true"></i>
			                </span>
			            </div>
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('sexo', 'Sexo', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('sexo', ['SIN INFORMACIÓN' => 'SIN INFORMACIÓN', 'HOMBRE' => 'HOMBRE', 'MUJER' => 'MUJER'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el sexo', 'required']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('idEstadoOrigen', 'Entidad federativa de origen', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('idEstadoOrigen', $estados, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('idMunicipioOrigen', 'Municipio de origen', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('idMunicipioOrigen', ['' => 'Seleccione un municipio'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('idEstadoCivil', 'Estado civil', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('idEstadoCivil', $estadoscivil, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el estado civil', 'required']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('telefono', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('telefono', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono del abogado', 'required']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseTrab3" aria-expanded="false" aria-controls="collapseTrab3">
				Datos del trabajo
			</a>
		</h5>
	</div>
	<div id="collapseTrab3" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.lugartrabajo-abo')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseAutoridad" aria-expanded="false" aria-controls="collapseAutoridad">
				Información sobre el abogado
			</a>
		</h5>
	</div>
	<div id="collapseAutoridad" class="collapse show boxcollapse">
		<div class="boxtwo">
			<div class="row">
				<div class="col-4">
					@if(!empty($idCarpeta))
						{!! Form::hidden('idCarpeta', $idCarpeta) !!}
					@endif
					<div class="form-group">
						{!! Form::label('sector', 'Sector', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('sector', ['PÚBLICO' => 'PÚBLICO', 'PARTICULAR' => 'PARTICULAR'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un sector', 'required']) !!}
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('cedulaProf', 'Cédula profesional', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('cedulaProf', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la cédula profesional', 'required']) !!}
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('correo', 'Correo', ['class' => 'col-form-label-sm']) !!}
						{!! Form::email('correo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el correo del abogado', 'required']) !!}
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						{!! Form::submit('Guardar', ['class' => 'btn btn-dark']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}

<div class="row">
	<div class="col-12">
		<div class="boxtwo">
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr class="table-dark">
						<th scope="col">Nombre</th>
						<th scope="col">Primer apellido</th>
						<th scope="col">Segundo apellido</th>
						<th scope="col">Sector</th>
						<th scope="col">Cédula</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Mark</td>
						<td>Otto</td>
					</tr>
					<tr>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Mark</td>
						<td>Otto</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>