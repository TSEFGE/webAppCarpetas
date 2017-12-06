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