<div class="boxtwo">
	<h6>Datos generales de la carpeta de investigación</h6>
	<div class="row">
		{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
		<div class="col-3">
			<div class="form-group">
				{!! Form::label('numcarpeta', 'Número de Carpeta', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('numcarpeta', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Número de carpeta', 'required']) !!}
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				{!! Form::label('fechainicarpeta', 'Fecha de inicio de carpeta', ['class' => 'col-form-label-sm']) !!}
				<div class='input-group date calendarioCompleto'>
                    {!! Form::text('fechaInicioCarpeta', null, ['class' => 'form-control form-control-sm','required'=>'', 'placeholder' => 'DD/MM/AAAA']) !!}
                    <span class="input-group-addon">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                </div>
			</div>
		</div>
		<div class="col-2">
			<div class="form-group">
				{!! Form::label('horaintervencion', 'Hora de Intervención', ['class' => 'col-form-label-sm']) !!}
				<div class="input-group bootstrap-timepicker timepicker">
					{!! Form::text('horaintervencion', null, ['class' => 'form-control form-control-sm','required'=>'', 'placeholder' => '00:00']) !!}
					<span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
		<div class="col-2">
			<div class="form-group">
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" id="condetenido" name="condetenido"> Con detenido
					</label>
				</div>
			</div>
		</div>
		<div class="col-2">
			<div class="form-group">
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" id="esrelevante" name="esrelevante"> Es Relevante
					</label>
				</div>
			</div>
		</div>
		{{--
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('uipj', 'UIPJ', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('uipj', ['xal' => 'Xalapa', 'coa' => 'Coatzacoalcos'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una unidad', 'readonly', 'required']) !!}
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('estadocarpeta', 'Estado de la Carpeta', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('estadocarpeta', ['ini' => 'Inicial', 'fin' => 'Final'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un estado', 'readonly', 'required']) !!}
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('nombrefiscal', 'Nombre del Fiscal', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('nombrefiscal', "Nain Lobato", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre del fiscal', 'readonly', 'required']) !!}
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('numfiscal', 'Número del Fiscal', ['class' => 'col-form-label-sm']) !!}
				{!! Form::number('numfiscal', 22, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de fiscal', 'readonly', 'required']) !!}
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				{!! Form::submit('Iniciar', ['class' => 'btn btn-dark']) !!}
			</div>
		</div>
		--}}
		{{--{!! Form::close() !!}--}}
	</div>
</div>