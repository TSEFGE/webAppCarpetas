<div class="row no-gutters">
	<div class="col-10">
		<div class="boxtwo">
			<h6>Datos generales de la unidad</h6>
			<div class="row">
			{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('status', 'Status', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('status', ['1' => 'Involucrado', '2' => 'Robado'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un status', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('placas', 'Placas', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('placas', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las placas', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('entidadfedv', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('entidadfedv', ['1' => 'Veracruz', '2' => 'CDMX'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('marca', 'Marca', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('marca', ['1' => 'Jeep', '2' => 'Nissan'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una marca', 'required']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('submarca', 'Submarca', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('submarca', ['1' => 'Jeep', '2' => 'Nissan'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una submarca', 'required']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('modelo', 'Modelo', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('modelo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el modelo', 'required']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('color', 'Color', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('color', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el color', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('nrpv', 'NRPV', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('nrpv', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el NRPV', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('nummotor', 'Núm. Motor', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('nummotor', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de motor', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('numserie', 'Núm. Serie', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('numserie', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de serie', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('permiso', 'Permiso', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('permiso', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el permiso', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('clasevehiculo', 'Clase de Vehículo', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('clasevehiculo', ['1' => 'AUTOMOVIL', '2' => 'CAMIONETA'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una clase de vehículo', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('tipov', 'Tipo de vehículo', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('tipov', ['1' => 'Uno', '2' => 'Dos'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un tipo de vehículo', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('tipouso', 'Tipo de uso', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('tipouso', ['1' => 'Uno', '2' => 'Dos'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un tipo de uso', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('procedencia', 'Procedencia', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('procedencia', ['1' => 'NACIONAL', '2' => 'EXTRANJERO'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione procedencia', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('aseguradora', 'Aseguradora', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('aseguradora', ['1' => 'ABA SEGUROS, S.A.', '2' => 'AGROASEMEX, S.A.'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una aseguradora', 'required']) !!}
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					{!! Form::label('senaspartic', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
					{!! Form::textarea('senaspartic', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares','rows' => '3', 'required']) !!}
				</div>
			</div>
			{{--{!! Form::close() !!}--}}
			</div>
		</div>
	</div>

	<div class="col-2">
		@include('fields.botones')
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="boxtwo">
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr class="table-dark">
						<th scope="col">Marca</th>
						<th scope="col">Modelo</th>
						<th scope="col">Placas</th>
						<th scope="col">Tipo vehículo</th>
						<th scope="col">Clase</th>
						<th scope="col">Color</th>
						<th scope="col">Entidad</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mark</td>
					    <td>Otto</td>
					    <td>@mdo</td>
					    <td>Mark</td>
					    <td>Otto</td>
					    <td>@mdo</td>
					 	<td>@mdo</td>
					</tr>
					<tr>
						<td>Mark</td>
					    <td>Otto</td>
					    <td>@mdo</td>
					    <td>Mark</td>
					    <td>Otto</td>
					    <td>@mdo</td>
					    <td>@mdo</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>