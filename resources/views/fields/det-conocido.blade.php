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
			{!! Form::label('alias', 'Alias', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('alias', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el alias', 'required']) !!}
		</div>
	</div>
</div>
@include('fields.direcciones')
<div class="row">
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('senasPartic', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('senasPartic', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares','rows' => '3', 'required']) !!}
		</div>
	</div>
</div>