<div class="row">
	{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('nominvolucrado', 'Nombre', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nominvolucrado', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('primerapinv', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('primerapinv', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('segundoapinv', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('segundoapinv', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('rfc', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('rfc', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('fechanacinv', 'Fecha de nacimiento', ['class' => 'col-form-label-sm']) !!}
			<div class='input-group date calendarioCompleto'>
				{!! Form::text('fechanacinv', null, ['class' => 'form-control form-control-sm','required'=>'', 'placeholder' => 'DD/MM/AAAA']) !!}
				<span class="input-group-addon">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</span>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('edadinv', 'Edad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('edadinv', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la edad', 'required']) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('sexo', 'Sexo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('sexo', ['1' => 'Hombre', '2' => 'Mujer'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el sexo', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('curp', 'C.U.R.P.', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('curp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el C.U.R.P.', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('nacionalidad', 'Nacionalidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('nacionalidad', ['1' => 'Mexicana', '2' => 'Colombiana'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la nacionalidad', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('ocupacioon', 'Ocupación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('ocupacion', ['1' => 'ING.', '2' => 'Lic.'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la ocupación', 'required']) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('estadociv', 'Estado civil', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('estadociv', ['1' => 'Soltero', '2' => 'Casado'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el estado civil', 'required']) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('etnia', 'Etnia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('etnia', ['1' => 'Indígena', '2' => 'Totonaca'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la etnia', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('escolaridad', 'Escolaridad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('escolaridad', ['1' => 'Primaria', '2' => 'Secundaria'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la escoalridad', 'required']) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('lengua', 'Lengua', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('lengua', ['1' => 'Indígena', '2' => 'Totonaca'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la lengua', 'required']) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('religion', 'Religión', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('religion', ['1' => 'Católica', '2' => 'Budista'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la religión', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('entidadfedorigen', 'Entidad federativa de origen', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('entidadfedorigen', ['1' => 'Veracruz', '2' => 'CDMX'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('municipioorigen', 'Municipio de origen', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('municipioorigen', ['1' => '>Xalapa', '2' => 'Altotonga'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un municipio', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('doctoidentif', 'Documento de identificación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('doctoidentif', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el docto. de identificacion', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('numdocto', 'Núm. de documento de identificación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numdocto', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el núm. del docto. de identificación', 'required']) !!}
		</div>
	</div>
	{{--{!! Form::close() !!}--}}
</div>

{{--<div id="accordion" role="tablist">
	<div class="card">
		<div class="card-header" role="tab" id="headingGenerales">
			<h5 class="mb-0">
				<a data-toggle="collapse" href="#collapseGen" aria-expanded="true" aria-controls="collapseGen">
					Datos personales
				</a>
			</h5>
		</div>
		<div id="collapseGen" class="collapse show boxcollapse" role="tabpanel" aria-labelledby="headingGenerales" data-parent="#accordion">
			<div class="boxtwo">
				@include('fields.personales')
			</div>
		</div>
	</div>
</div>--}}