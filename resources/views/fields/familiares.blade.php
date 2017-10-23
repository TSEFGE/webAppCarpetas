<div class="row no-gutters">
	<div class="col-10">
		<div class="boxtwo">
			<h6>Datos del familiar (Denunciante/Denunciado)</h6>
			<div class="row">
			{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('nombrefam', 'Nombre') !!}
					{!! Form::text('nombrefam', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del familiar', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('primerapfam', 'Primer apellido') !!}
					{!! Form::text('primerapfam', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('segundoapfam', 'Segundo apellido') !!}
					{!! Form::text('segundoapfam', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el segundo apellido', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('famde', 'Familiar de') !!}
					{!! Form::select('famde', ['1' => 'Román', '2' => 'José'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un involucrado', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('parentesco', 'Parentesco') !!}
					{!! Form::select('parentesco', ['1' => 'Hijo(a)', '2' => 'Padre/Madre', '3' => 'Cónyuge'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un parentesco', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('ocupacion', 'Ocupación') !!}
					{!! Form::select('ocupacion', ['1' => 'Lic.', '2' => 'Ing.'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una ocupación', 'required']) !!}
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
						<th scope="col">Familiar de</th>
						<th scope="col">Nombre</th>
						<th scope="col">Primer apellido</th>
						<th scope="col">Segundo apellido</th>
						<th scope="col">Parentesco</th>
						<th scope="col">Ocupación</th>
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