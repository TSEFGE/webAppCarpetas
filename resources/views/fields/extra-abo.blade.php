<div class="row">
	<div class="col-4">
		@if(!empty($idCarpeta))
		{!! Form::hidden('idCarpeta', $idCarpeta, ['id' => 'idCarpeta']) !!}
		@endif
		<div class="form-group">
			{!! Form::label('sector', 'Sector', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('sector', ['PÚBLICO' => 'PÚBLICO', 'PARTICULAR' => 'PARTICULAR'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un sector', 'required']) !!}
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