{!! Form::open(['route' => 'store.narracion', 'method' => 'POST'])  !!}
<div class="row no-gutters">
	<div class="col-10">
		<div class="boxtwo">
			<h6>Narración de los hechos</h6>
			<div class="row">
			<div class="col-12">
				<div class="form-group">
					{!! Form::label('idVariablesPersona', 'Involucrado', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idVariablesPersona', ['1' => 'Román Pérez Escobar', '2' => 'José José'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un involucrado', 'required']) !!}
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					{!! Form::label('narracion', 'Narración', ['class' => 'col-form-label-sm']) !!}
					{!! Form::textarea('narracion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la narración de los hechos', 'rows' => '5', 'required']) !!}
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
{!! Form::close() !!}

<div class="row">
	<div class="col-12">
		<div class="boxtwo">
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr class="table-dark">
						<th scope="col">Involucrado</th>
						<th scope="col">Narración</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mark</td>
					    <td>Otto</td>
					</tr>
					<tr>
						<td>Mark</td>
					    <td>Otto</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>