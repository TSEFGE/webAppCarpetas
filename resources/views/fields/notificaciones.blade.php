@include('fields.direcciones')
<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('correo', 'Correo electrónico', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('correo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el correo electrónico', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('telefono', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('telefono', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('fax', 'Fax', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('fax', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el fax', 'required']) !!}
		</div>
	</div>
</div>