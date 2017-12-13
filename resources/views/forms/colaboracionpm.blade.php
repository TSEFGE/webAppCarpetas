@extends('template.form')

@section('title', 'Generar documento de colaboración con Policia Ministerial')
@section('contenido')
    {!! Form::open(['route' => 'colaboracion.pm', 'method' => 'POST'])  !!}
	@include('forms.idcarpeta')
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
				<h6>Acusaciones</h6>
				<div class="table">
				    <table class="table table-striped">
				        <thead>
				        	<th>Seleccione una</th>
				            <th>Nombre denunciante</th>
				            <th>Delito</th>
				            <th>Nombre denunciado</th>
				        </thead>
				        <tbody>
				            @if(count($acusaciones)==0)
				                <tr><td colspan="3" class="text-center">Sin registros</td></tr>
				            @else
				                @foreach($acusaciones as $acusacion)
				                    <tr>
				                    	<td><input type="radio" value="{{ $acusacion->id }}"></td>
				                        <td>{{ $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp }}</td>
				                        <td>{{ $acusacion->delito }}</td>
				                        <td>{{ $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2 }}</td>
				                    </tr>
				                @endforeach
				            @endif
				        </tbody>
				    </table>
				</div>
			</div>

			<div class="boxtwo">
				<div class="form-group">
					@foreach($servicios as $servicio)
						<div class="form-check">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="checkbox" name="servicios" value="{{ $servicio->id }}"> {{ $servicio->nombre }}
							</label>
						</div>
					@endforeach
				</div>
				<div class="text-center">
					<a href="{{ route('colaboracion.pm') }}" class="btn btn-secondary">Generar</a><hr>
				</div>
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
@endsection