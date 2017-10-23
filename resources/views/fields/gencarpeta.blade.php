<div class="boxtwo">
	<h6>Datos generales de la carpeta de investigación</h6>
	<div class="row">
		{{--{!! Form::open(['route' => 'users.store', 'method' => 'POST'])  !!}--}}
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('uipj', 'UIPJ') !!}
				{!! Form::select('uipj', ['xal' => 'Xalapa', 'coa' => 'Coatzacoalcos'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una unidad', 'required']) !!}
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('estadocarpeta', 'Estado de la Carpeta') !!}
				{!! Form::select('estadocarpeta', ['ini' => 'Inicial', 'fin' => 'Final'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione un estado', 'required']) !!}
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('numcarpeta', 'Número de Carpeta') !!}
				{!! Form::text('numcarpeta', null, ['class' => 'form-control', 'placeholder' => 'Número de carpeta', 'required']) !!}
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('nombrefiscal', 'Nombre del Fiscal') !!}
				{!! Form::text('nombrefiscal', null, ['class' => 'form-control', 'placeholder' => 'Nain Lobato', 'required']) !!}
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('fechainicarpeta', 'Fecha de inicio de carpeta') !!}
				<div class='input-group date calendarioCompleto'>
                    {!! Form::text('fechaInicioCarpeta', null, ['class' => 'form-control','required'=>'', 'placeholder' => 'DD/MM/AAAA']) !!}
                    <span class="input-group-addon">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                </div>
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('numfiscal', 'Número del Fiscal') !!}
				{!! Form::number('numfiscal', 22, ['class' => 'form-control', 'placeholder' => '22', 'required']) !!}
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				{!! Form::label('condetenido', 'Con detenido') !!}
				{!! Form::checkbox('condetenido', null, ['class' => 'form-control', 'required']) !!}
				{!! Form::label('relevante', 'Es Relevante') !!}
				{!! Form::checkbox('relevante', null, ['class' => 'form-control', 'required']) !!}
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-dark']) !!}
			</div>
		</div>
		{{--{!! Form::close() !!}--}}
	</div>
</div>