<div class="boxtwo">
	<h6>Datos generales de la carpeta de investigación</h6>
	<div class="row">
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('nombres', 'Nombre', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('nombres', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('primerAp', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('primerAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('segundoAp', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('segundoAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido', 'required']) !!}
			</div>
		</div>
		<div class="col-2">
			<div class="form-group">
				{!! Form::label('sector', 'Sector', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('sector', ['PÚBLICO' => 'PÚBLICO', 'PARTICULAR' => 'PARTICULAR'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un sector', 'required']) !!}
			</div>
		</div>
		<div class="col-2">
			<div class="form-group">
				{!! Form::label('telefono', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('telefono', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono del abogado', 'required']) !!}
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
	</div>
	@include('fields.direcciones')
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