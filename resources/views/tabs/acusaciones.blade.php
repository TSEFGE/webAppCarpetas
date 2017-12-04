{!! Form::open(['route' => 'store.acusacion', 'method' => 'POST'])  !!}
<div class="row no-gutters">
	<div class="col-12">
		<div class="boxtwo">
			<h6>Datos sobre la acusación</h6>
			<div class="row">
			<div class="col-4">
				@if(!empty($idCarpeta))
					{!! Form::hidden('idCarpeta', $idCarpeta) !!}
				@endif
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
					<select name="idTipifDelito" id="idTipifDelito" class="form-control form-control-sm" required>
						<option value="">Seleccione un delito</option>
						@foreach($tipifdelitos as $tipifdelito)
							<option value="{{ $tipifdelito->id }}">{{ $tipifdelito->nombre }}</option>
						@endforeach
					</select>
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
</div>
{!! Form::close() !!}

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