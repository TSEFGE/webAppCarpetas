<div class="row no-gutters">
	<div class="col-10">
		<div class="boxtwo">
			<h6>Datos del involucrado</h6>
			<div class="row">
			{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('nominvolucrado', 'Nombre') !!}
					{!! Form::text('nominvolucrado', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('primerapinv', 'Primer apellido') !!}
					{!! Form::text('primerapinv', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('segundoapinv', 'Segundo apellido') !!}
					{!! Form::text('segundoapinv', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el segundo apellido', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('rfc', 'R.F.C.') !!}
					{!! Form::text('rfc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el R.F.C.', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('fechanacinv', 'Fecha de nacimiento') !!}
					<div class='input-group date calendarioCompleto'>
	                    {!! Form::text('fechanacinv', null, ['class' => 'form-control','required'=>'', 'placeholder' => 'DD/MM/AAAA']) !!}
	                    <span class="input-group-addon">
	                        <i class="fa fa-calendar" aria-hidden="true"></i>
	                    </span>
	                </div>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('edadinv', 'Edad') !!}
					{!! Form::text('edadinv', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la edad', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('curp', 'C.U.R.P.') !!}
					{!! Form::text('curp', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el C.U.R.P.', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('sexo', 'Sexo') !!}
					{!! Form::select('sexo', ['1' => 'Hombre', '2' => 'Mujer'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione el sexo', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('nacionalidad', 'Nacionalidad') !!}
					{!! Form::select('nacionalidad', ['1' => 'Mexicana', '2' => 'Colombiana'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione la nacionalidad', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('ocupacioon', 'Ocupación') !!}
					{!! Form::select('ocupacion', ['1' => 'ING.', '2' => 'Lic.'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione la ocupación', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('estadociv', 'Estado civil') !!}
					{!! Form::select('estadociv', ['1' => 'Soltero', '2' => 'Casado'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione el estado civil', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('escolaridad', 'Escolaridad') !!}
					{!! Form::select('escolaridad', ['1' => 'Primaria', '2' => 'Secundaria'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione la escoalridad', 'required']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('etnia', 'Etnia') !!}
					{!! Form::select('etnia', ['1' => 'Indígena', '2' => 'Totonaca'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione la etnia', 'required']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('lengua', 'Lengua') !!}
					{!! Form::select('lengua', ['1' => 'Indígena', '2' => 'Totonaca'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione la lengua', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('religion', 'Religión') !!}
					{!! Form::select('religion', ['1' => 'Católica', '2' => 'Budista'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione la religión', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('entidadfedorigen', 'Entidad federativa de origen') !!}
					{!! Form::select('entidadfedorigen', ['1' => 'Veracruz', '2' => 'CDMX'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('municipioorigen', 'Municipio de origen') !!}
					{!! Form::select('municipioorigen', ['1' => '>Xalapa', '2' => 'Altotonga'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un municipio', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('doctoidentif', 'Documento de identificación') !!}
					{!! Form::text('doctoidentif', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el docto. de identificacion', 'required']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('numdocto', 'Núm. de documento de identificación') !!}
					{!! Form::text('numdocto', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el núm. del docto. de identificación', 'required']) !!}
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
	<h6>Dirección del involucrado</h6>
	@include('fields.direcciones')
</div>

<div class="boxtwo">
	<h6>Datos del trabajo del involucrado</h6>
	<div class="row">
		<div class="col-8">
			<div class="form-group">
				{!! Form::label('lugartrabajo', 'Lugar de trabajo') !!}
				{!! Form::text('lugartrabajo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el lugar de trabajo', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('teltrabajo', 'Teléfono del trabajo') !!}
				{!! Form::text('teltrabajo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono del trabajo', 'required']) !!}
			</div>
		</div>
	</div>
	@include('fields.direcciones')
</div>

<div class="boxtwo">
	<h6>Tipo de involucrado</h6>
	<div class="row">
		<div class="col-6">
			<div class="form-group ml-3">
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="tipoinv" id="denunciante" value="1" checked>
						Denunciante
					</label>
				</div>
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="tipoinv" id="denunciado" value="2">
						Denunciado
					</label>
				</div>
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="tipoinv" id="autoridad" value="3">
						Autoridad
					</label>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="boxtwo" id="camposdenunciante">
	<h6>Información sobre el denunciante</h6>
	<div class="boxtwo">
		@include('fields.notificaciones')
	</div>
	<div class="boxtwo">
		<h6>Sobre el denunciado</h6>
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('conocede', 'Lo conoce de:') !!}
					{!! Form::text('conocede', null, ['class' => 'form-control', 'placeholder' => 'Ingrese si el denunciante conoce al denunciado', 'required']) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="boxtwo">
		@include('fields.abogados')
	</div>
</div>

<div class="boxtwo" id="camposdenunciado">
	<h6>Información sobre el denunciado</h6>
	<div class="boxtwo">
		@include('fields.notificaciones')
	</div>
	<div class="boxtwo">
		<h6>Otros datos</h6>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('alias', 'Alias') !!}
					{!! Form::text('alias', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el alias', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('senasparticden', 'Señas particulares') !!}
					{!! Form::text('senasparticden', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las señas particulares', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('residenciaant', 'Residencia anterior') !!}
					{!! Form::text('residenciaant', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la  residencia anterior', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('ingreso', 'Ingreso') !!}
					{!! Form::text('ingreso', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el ingreso', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('periodoingreso', 'Periodo de ingreso') !!}
					{!! Form::select('periodoingreso', ['1' => 'Semanal', '2' => 'Quincenal'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un periodo', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('personasguarda', 'personasguarda') !!}
					{!! Form::number('personasguarda', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de personas bajo su guarda', 'required']) !!}
				</div>
			</div>
		</div>
		@include('fields.direcciones')
	</div>
	<div class="boxtwo">
		@include('fields.abogados')
	</div>
</div>

<div class="boxtwo" id="camposautoridad">
	<h6>Información sobre la autoridad</h6>
	<div class="row">
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('rango', 'Rango') !!}
				{!! Form::select('rango', ['1' => 'Cabo', '2' => 'Comandante'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un rango', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('antiguedad', 'Antigüedad') !!}
				{!! Form::number('antiguedad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la antigüedad', 'required']) !!}
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('horariiolaboral', 'Horario laboral') !!}
				{!! Form::number('horariolaboral', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el horario laboral', 'required']) !!}
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
						<th scope="col">Nombre</th>
						<th scope="col">Primer apellido</th>
						<th scope="col">Segundo apellido</th>
						<th scope="col">R.F.C.</th>
						<th scope="col">Sexo</th>
						<th scope="col">Tipo</th>
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