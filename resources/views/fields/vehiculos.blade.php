<div class="row no-gutters">
	<div class="col-10">
		<div class="boxtwo">
			<h6>Datos generales de la unidad</h6>
			<div class="row">
			{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('placas', 'Placas') !!}
					{!! Form::text('placas', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las placas', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('entidadfedv', 'Entidad federativa') !!}
					{!! Form::select('entidadfedv', ['1' => 'Veracruz', '2' => 'CDMX'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('marca', 'Marca') !!}
					{!! Form::select('marca', ['1' => 'Jeep', '2' => 'Nissan'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una marca', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('submarca', 'Submarca') !!}
					{!! Form::select('submarca', ['1' => 'Jeep', '2' => 'Nissan'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una submarca', 'required']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('modelo', 'Modelo') !!}
					{!! Form::text('modelo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el modelo', 'required']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('color', 'Color') !!}
					{!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el color', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('permiso', 'Permiso') !!}
					{!! Form::text('permiso', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el permiso', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('nummotor', 'Núm. Motor') !!}
					{!! Form::text('nummotor', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de motor', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('numserie', 'Núm. Serie') !!}
					{!! Form::text('numserie', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de serie', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('tipov', 'Tipo de vehículo') !!}
					{!! Form::select('tipov', ['1' => 'Uno', '2' => 'Dos'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un tipo de vehículo', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('tipouso', 'Tipo de uso') !!}
					{!! Form::select('tipouso', ['1' => 'Uno', '2' => 'Dos'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un tipo de uso', 'required']) !!}
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					{!! Form::label('senaspartic', 'Señas particulares') !!}
					{!! Form::textarea('senaspartic', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las señas particulares','rows' => '3', 'required']) !!}
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
						<th scope="col">Placas</th>
						<th scope="col">Marca</th>
						<th scope="col">Modelo</th>
						<th scope="col">Tipo vehículo</th>
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
					</tr>
					<tr>
						<td>Mark</td>
					    <td>Otto</td>
					    <td>@mdo</td>
					    <td>Mark</td>
					    <td>Otto</td>
					    <td>@mdo</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>