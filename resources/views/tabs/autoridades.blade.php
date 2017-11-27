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
			@include('fields.personales')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseDir3" aria-expanded="false" aria-controls="collapseDir3">
				Dirección
			</a>
		</h5>
	</div>
	<div id="collapseDir3" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.direcciones')
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
			@include('fields.lugartrabajo')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseAutoridad" aria-expanded="false" aria-controls="collapseAutoridad">
				Información sobre la autoridad
			</a>
		</h5>
	</div>
	<div id="collapseAutoridad" class="collapse show boxcollapse">
		<div class="boxtwo">
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('antiguedad', 'Antigüedad', ['class' => 'col-form-label-sm']) !!}
						{!! Form::number('antiguedad', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la antigüedad', 'required']) !!}
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('rango', 'Rango', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('rango', ['CABO' => 'CABO', 'COMANDANTE' => 'COMANDANTE'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un rango', 'required']) !!}
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('horarioLaboral', 'Horario laboral', ['class' => 'col-form-label-sm']) !!}
						{!! Form::number('horarioLaboral', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el horario laboral', 'required']) !!}
					</div>
				</div>
			</div>
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