<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapsePersonales2" aria-expanded="false" aria-controls="collapsePersonales2">
				Datos personales
			</a>
		</h5>
	</div>
	<div id="collapsePersonales2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.personales')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseDir2" aria-expanded="false" aria-controls="collapseDir2">
				Dirección
			</a>
		</h5>
	</div>
	<div id="collapseDir2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.direcciones')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseTrab2" aria-expanded="false" aria-controls="collapseTrab2">
				Datos del trabajo
			</a>
		</h5>
	</div>
	<div id="collapseTrab2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.lugartrabajo')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseNotifs2" aria-expanded="false" aria-controls="collapseNotifs2">
				Dirección para notificaciones
			</a>
		</h5>
	</div>
	<div id="collapseNotifs2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.notificaciones')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseDenun2" aria-expanded="false" aria-controls="collapseDenun2">
				Otros datos
			</a>
		</h5>
	</div>
	<div id="collapseDenun2" class="collapse show boxcollapse">
		<div class="boxtwo">
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('alias', 'Alias', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('alias', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el alias', 'required']) !!}
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('senasparticden', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('senasparticden', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares', 'required']) !!}
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('residenciaant', 'Residencia anterior', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('residenciaant', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la  residencia anterior', 'required']) !!}
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('ingreso', 'Ingreso', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('ingreso', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el ingreso', 'required']) !!}
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('periodoingreso', 'Periodo de ingreso', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('periodoingreso', ['1' => 'Semanal', '2' => 'Quincenal'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un periodo', 'required']) !!}
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('personasguarda', 'personasguarda', ['class' => 'col-form-label-sm']) !!}
						{!! Form::number('personasguarda', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de personas bajo su guarda', 'required']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseAbogado2" aria-expanded="false" aria-controls="collapseAbogado2">
				Datos del abogado
			</a>
		</h5>
	</div>
	<div id="collapseAbogado2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.abogados')
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="boxtwo">
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr class="table-dark">
						<th scope="col">Nombre</th>
						<th scope="col">Primer apellido</th>
						<th scope="col">Segundo apellido</th>
						<th scope="col">R.F.C.</th>
						<th scope="col">Sexo</th>
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