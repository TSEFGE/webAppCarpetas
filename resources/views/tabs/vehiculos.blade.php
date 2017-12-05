{!! Form::open(['route' => 'store.vehiculo', 'method' => 'POST'])  !!}
<div class="row no-gutters">
	<div class="col-12">
		<div class="boxtwo">
			<h6>Datos generales de la unidad</h6>
			<div class="row">
				@if(!empty($idCarpeta))
					{!! Form::hidden('idCarpeta', $idCarpeta) !!}
				@endif
				@include('fields.vehiculo')
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
						<th scope="col">Marca</th>
						<th scope="col">Modelo</th>
						<th scope="col">Placas</th>
						<th scope="col">Tipo vehículo</th>
						<th scope="col">Clase</th>
						<th scope="col">Color</th>
						<th scope="col">Entidad</th>
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
					 	<td>@mdo</td>
					</tr>
					<tr>
						<td>Mark</td>
					    <td>Otto</td>
					    <td>@mdo</td>
					    <td>Mark</td>
					    <td>Otto</td>
					    <td>@mdo</td>
					    <td>@mdo</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>