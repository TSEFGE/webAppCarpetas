<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapsePersonales1" aria-expanded="false" aria-controls="collapsePersonales1">
				Datos personales
			</a>
		</h5>
	</div>
	<div id="collapsePersonales1" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.personales')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseDir1" aria-expanded="false" aria-controls="collapseDir1">
				Dirección
			</a>
		</h5>
	</div>
	<div id="collapseDir1" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.direcciones')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseTrab1" aria-expanded="false" aria-controls="collapseTrab1">
				Datos del trabajo
			</a>
		</h5>
	</div>
	<div id="collapseTrab1" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.lugartrabajo')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseNotifs1" aria-expanded="false" aria-controls="collapseNotifs1">
				Dirección para notificaciones
			</a>
		</h5>
	</div>
	<div id="collapseNotifs1" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.notificaciones')
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseDenun" aria-expanded="false" aria-controls="collapseDenun">
				Información sobre el denunciante
			</a>
		</h5>
	</div>
	<div id="collapseDenun" class="collapse show boxcollapse">
		<div class="boxtwo">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label class="col-form-label col-form-label-sm" for="conoceAlDenunciado">¿Conoce al denunciado?</label>
						<div class="clearfix"></div>
						<div class="form-check form-check-inline">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="radio" id="conoceAlDenunciado1" name="conoceAlDenunciado"> Sí
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="radio" id="conoceAlDenunciado2" name="conoceAlDenunciado"> No
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{--
<div class="card">
	<div class="card-header">
		<h5 class="mb-0 text-center">
			<a data-toggle="collapse" href="#collapseAbogado1" aria-expanded="false" aria-controls="collapseAbogado1">
				Datos del abogado
			</a>
		</h5>
	</div>
	<div id="collapseAbogado1" class="collapse show boxcollapse">
		<div class="boxtwo">
			@include('fields.abogados')
		</div>
	</div>
</div>
--}}

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
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Mark</td>
						<td>Otto</td>
					</tr>
					<tr>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Mark</td>
						<td>Otto</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>