{{--{!! Form::open(['route' => 'store.familiar', 'method' => 'POST'])  !!}--}}
<div class="row no-gutters">
	<div class="col-10">
		<div class="boxtwo">
			<h6>Datos sobre la acusación</h6>
			<div class="row">
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idDenunciante', 'Denunciante', ['class' => 'col-form-label-sm']) !!}
					<select name="idDenunciante" id="idDenunciante" class="form-control form-control-sm" required>
						<option value="">Seleccione un denunciante</option>
						@foreach($denunciantes as $denunciante)
							<option value="{{ $denunciante->id }}">{{ $denunciante->nombres." ".$denunciante->primerAp." ".$denunciante->segundoAp }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idTipifDelito', 'Delito', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idTipifDelito', $delitos, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un delito', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idDenuciado', 'Denunciado', ['class' => 'col-form-label-sm']) !!}
					<select name="idDenunciado" id="idDenuncidoe" class="form-control form-control-sm" required>
						<option value="">Seleccione un denunciado</option>
						@foreach($denunciados as $denunciado)
							<option value="{{ $denunciado->id }}">{{ $denunciado->nombres." ".$denunciado->primerAp." ".$denunciado->segundoAp }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					{!! Form::submit('Guardar', ['class' => 'btn btn-dark']) !!}
				</div>
			</div>
			</div>
		</div>
	</div>

	<div class="col-2">
		@include('fields.botones')
	</div>
</div>
{{--{!! Form::close() !!}--}}

<div class="row">
	<div class="col-12">
		<div class="boxtwo">
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr class="table-dark">
						<th scope="col">Familiar de</th>
						<th scope="col">Nombre</th>
						<th scope="col">Primer apellido</th>
						<th scope="col">Segundo apellido</th>
						<th scope="col">Parentesco</th>
						<th scope="col">Ocupación</th>
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