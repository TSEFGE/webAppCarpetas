{!! Form::open(['route' => 'store.denunciado', 'method' => 'POST'])  !!}
<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapsePersonales2" aria-expanded="false" aria-controls="collapsePersonales2">
				Datos personales
			</a>
		</h5>
	</div>
	<div id="collapsePersonales2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.personales')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseDir2" aria-expanded="false" aria-controls="collapseDir2">
				Dirección
			</a>
		</h5>
	</div>
	<div id="collapseDir2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.direcciones')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseTrab2" aria-expanded="false" aria-controls="collapseTrab2">
				Datos del trabajo
			</a>
		</h5>
	</div>
	<div id="collapseTrab2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.lugartrabajo')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseNotifs2" aria-expanded="false" aria-controls="collapseNotifs2">
				Dirección para notificaciones
			</a>
		</h5>
	</div>
	<div id="collapseNotifs2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.notificaciones')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseDenun2" aria-expanded="false" aria-controls="collapseDenun2">
				Otros datos
			</a>
		</h5>
	</div>
	<div id="collapseDenun2" class="collapse show boxcollapse">
		<div class="boxtwo">
			<div class="row">
				<div class="col-3">
					@if(!empty($idCarpeta))
						{!! Form::hidden('idCarpeta', $idCarpeta) !!}
					@endif
					<div class="form-group">
						{!! Form::label('idPuesto', 'Puesto', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('idPuesto', $puestos, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un puesto']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('alias', 'Alias', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('alias', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el alias']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('personasBajoSuGuarda', 'Personas bajo su guarda', ['class' => 'col-form-label-sm']) !!}
						{!! Form::number('personasBajoSuGuarda', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de personas bajo su guarda']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('ingreso', 'Ingreso', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('ingreso', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el ingreso']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('periodoIngreso', 'Periodo de ingreso', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('periodoIngreso', ['DIARIO' => 'DIARIO', 'SEMANAL' => 'SEMANAL', 'QUINCENAL' => 'QUINCENAL', 'MENSUAL' => 'MENSUAL', 'SIN INFORMACION' => 'SIN INFORMACION'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un periodo']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('residenciaAnterior', 'Residencia anterior', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('residenciaAnterior', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la  residencia anterior']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label class="col-form-label col-form-label-sm" for="perseguidoPenalment">¿Perseguido penalmente?</label>
						<div class="clearfix"></div>
						<div class="form-check form-check-inline">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="radio" id="perseguidoPenalmente1" name="perseguidoPenalmente"> Sí
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="radio" id="perseguidoPenalmente2" name="perseguidoPenalmente"> No
							</label>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('vestimenta', 'Vestimenta', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('vestimenta', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la vestimenta']) !!}
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						{!! Form::label('senasPartic', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
						{!! Form::textarea('senasPartic', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares','rows' => '3']) !!}
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						{!! Form::label('narracion', 'Narración', ['class' => 'col-form-label-sm']) !!}
						{!! Form::textarea('narracion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la narración de los hechos', 'rows' => '5']) !!}
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
{{--<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseAbogado2" aria-expanded="false" aria-controls="collapseAbogado2">
				Datos del abogado
			</a>
		</h5>
	</div>
	<div id="collapseAbogado2" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.abogados')
		</div>
	</div>
</div>--}}