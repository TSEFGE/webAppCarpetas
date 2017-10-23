<div class="row no-gutters">
	<div class="col-10">
		<div class="boxtwo">
			<h6>Narración de los hechos</h6>
			<div class="row">
			{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
			<div class="col-12">
				<div class="form-group">
					{!! Form::label('involucrado', 'Involucrado') !!}
					{!! Form::select('involucrado', ['1' => 'Román', '2' => 'José'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un involucrado', 'required']) !!}
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					{!! Form::label('narracion', 'Narración') !!}
					{!! Form::textarea('narracion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la narración de los hechos', 'required']) !!}
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