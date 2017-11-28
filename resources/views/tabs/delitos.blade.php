<div class="row no-gutters">
	<div class="col-10">
		<div class="boxtwo">
			<h6>Información sobre la comisión del delito</h6>
			<div class="row">
			{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idDelito', 'Delito', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idDelito', $delitos, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un delito', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('fecha', 'Fecha', ['class' => 'col-form-label-sm']) !!}
					<div class="input-group date" id="fechadelit" data-target-input="nearest">
	                    {!! Form::text('fecha', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechadelit', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
	                    <span class="input-group-addon" data-target="#fechadelit" data-toggle="datetimepicker">
	                        <i class="fa fa-calendar" aria-hidden="true"></i>
	                    </span>
	                </div>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('hora', 'Hora', ['class' => 'col-form-label-sm']) !!}
					<div class="input-group date" id="horadelit" data-target-input="nearest">
	                    {!! Form::text('hora', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#horadelit', 'required', 'placeholder' => '00:00']) !!}
	                    <span class="input-group-addon" data-target="#horadelit" data-toggle="datetimepicker">
	                        <i class="fa fa-clock-o" aria-hidden="true"></i>
	                    </span>
	                </div>
				</div>
			</div>
			<div class="col-4">
				<p class="col-form-label-sm">¿Con violencia?</p>
				<div class="form-group">
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label-sm">
							<input class="form-check-input" type="radio" name="conViolencia" id="si" value="1" checked>
							Sí
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label-sm">
							<input class="form-check-input" type="radio" name="conViolencia" id="no" value="0">
							No
						</label>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idTipoArma', 'Tipo de Arma', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idTipoArma', $tiposarma, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un tipo de arma', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('arma', 'Arma', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('arma', ['' => 'Seleccione el arma'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idModalidad', 'Modalidad', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idModalidad', $modalidades, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una modalidad', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('formaComision', 'Forma de comisión', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('formaComision', ['CULPOSO' => 'CULPOSO', 'DOLOSO' => 'DOLOSO'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una forma de comisión', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('consumacion', 'Consumación', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('consumacion', ['Instantánea' => 'Instantánea', 'Permanente' => 'Permanente'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una forma de consumación', 'required']) !!}
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


<div class="boxtwo">
	<h6>Información sobre el lugar de los hechos</h6>
	@include('fields.direcciones')
	<div class="row">
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('entreCalle', 'Entre calle', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('entreCalle', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese una calle perpendicular', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('yCalle', 'Y calle', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('yCalle', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese otra calle perpendicular', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('calleTrasera', 'Calle trasera', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('calleTrasera', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle trasera', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('zonaubic', 'Zona de ubicación', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('zonaubic', $zonas, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una zona de ubicación', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('idLugar', 'Lugar', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('idLugar', $lugares, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un lugar', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('puntoReferencia', 'Punto de referencia', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('puntoReferencia', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese un punto de referencia', 'required']) !!}
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
						<th scope="col">Delito</th>
						<th scope="col">Lugar</th>
						<th scope="col">Localidad</th>
						<th scope="col">Municipio</th>
						<th scope="col">Zona</th>
						<th scope="col">Fecha</th>
						<th scope="col">Hora</th>
						<th scope="col">C.P.</th>
						<th scope="col">Colonia</th>
						<th scope="col">Calle</th>
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