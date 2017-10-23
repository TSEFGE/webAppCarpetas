<div class="row no-gutters">
	<div class="col-10">
		<div class="boxtwo">
			<h6>Información sobre la comisión del delito</h6>
			<div class="row">
			{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('delito', 'Delito') !!}
					{!! Form::select('delito', ['1' => 'Homicidio', '2' => 'Robo'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un delito', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('arma|', 'Arma') !!}
					{!! Form::text('arma|', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el arma', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<p>¿Con violencia?</p>
				<div class="form-group ml-3">
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="conviolencia" id="si" value="1" checked>
							Sí
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="conviolencia" id="no" value="0">
							No
						</label>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('modalidad', 'Modalidad') !!}
					{!! Form::select('modalidad', ['1' => 'Uno', '2' => 'Dos'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una modalidad', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('formacomision', 'Forma de comisión') !!}
					{!! Form::select('formacomision', ['1' => 'Uno', '2' => 'Dos'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una forma de comisión', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('consumacion', 'Consumación') !!}
					{!! Form::text('consumacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la consumación', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('fechadelito', 'Fecha') !!}
					<div class='input-group date calendarioCompleto'>
	                    {!! Form::text('fechadelito', null, ['class' => 'form-control','required'=>'', 'placeholder' => 'DD/MM/AAAA']) !!}
	                    <span class="input-group-addon">
	                        <i class="fa fa-calendar" aria-hidden="true"></i>
	                    </span>
	                </div>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('horadelito', 'Hora') !!}
					<div class="input-group bootstrap-timepicker timepicker">
						{!! Form::text('horadelito', null, ['class' => 'form-control','required'=>'', 'placeholder' => '00:00']) !!}
						<span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
					</div>
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
				{!! Form::label('entrecalle', 'Entre calle') !!}
				{!! Form::text('entrecalle', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una calle perpendicular', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('ycalle', 'Y calle') !!}
				{!! Form::text('ycalle', null, ['class' => 'form-control', 'placeholder' => 'Ingrese otra calle perpendicular', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('calletrasera', 'Calle trasera') !!}
				{!! Form::text('calletrasera', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la calle trasera', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('lugar', 'Lugar') !!}
				{!! Form::select('lugar', ['1' => 'Uno', '2' => 'Dos'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un lugar', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('zonaubic', 'Zona de ubicación') !!}
				{!! Form::select('zonaubic', ['1' => 'Uno', '2' => 'Dos'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una zona de ubicación', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('puntoref', 'Punto de referencia') !!}
				{!! Form::text('puntoref', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un punto de referencia', 'required']) !!}
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
						<th scope="col">Municipio</th>
						<th scope="col">Localidad</th>
						<th scope="col">C.P.</th>
						<th scope="col">Colonia</th>
						<th scope="col">Fecha</th>
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