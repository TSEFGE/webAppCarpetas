<h6>Dirección para notificaciones</h6>
@include('fields.direcciones')
<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('correo', 'Correo electrónico') !!}
			{!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electrónico', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('telefono', 'Teléfono') !!}
			{!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('fax', 'Fax') !!}
			{!! Form::text('fax', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el fax', 'required']) !!}
		</div>
	</div>
</div>