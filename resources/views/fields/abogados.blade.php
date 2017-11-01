<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nominvolucrado', 'Nombre', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nominvolucrado', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('primerapinv', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('primerapinv', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('segundoapinv', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('segundoapinv', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('sector', 'Sector', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('sector', ['1' => 'Público', '2' => 'Particular'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un sector', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('cedulaprof', 'Cédula profesional', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('cedulaprof', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la cédula profesional', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('telabogado', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('telabogado', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono del abogado', 'required']) !!}
		</div>
	</div>
</div>
@include('fields.direcciones')