<div class="row">
	<div class="col-8">
		<div class="form-group">
			{!! Form::label('lugartrabajo', 'Lugar de trabajo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('lugartrabajo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el lugar de trabajo', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('teltrabajo', 'Teléfono del trabajo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('teltrabajo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono del trabajo', 'required']) !!}
		</div>
	</div>
</div>
@include('fields.direcciones')