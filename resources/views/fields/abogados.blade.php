<h6>Datos del abogado</h6>
<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nominvolucrado', 'Nombre') !!}
			{!! Form::text('nominvolucrado', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('primerapinv', 'Primer apellido') !!}
			{!! Form::text('primerapinv', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('segundoapinv', 'Segundo apellido') !!}
			{!! Form::text('segundoapinv', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el segundo apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('sector', 'Sector') !!}
			{!! Form::select('sector', ['1' => 'Público', '2' => 'Particular'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un sector', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('cedulaprof', 'Cédula profesional') !!}
			{!! Form::text('cedulaprof', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cédula profesional', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('telabogado', 'Teléfono') !!}
			{!! Form::text('telabogado', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono del abogado', 'required']) !!}
		</div>
	</div>
</div>
@include('fields.direcciones')