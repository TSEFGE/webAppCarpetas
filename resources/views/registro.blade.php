@extends('template.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
@endsection

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="gencar-tab" data-toggle="tab" href="#gencar" role="tab" aria-controls="gencar" aria-selected="true">Generales carpeta</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="denunciantes-tab" data-toggle="tab" href="#denunciantes" role="tab" aria-controls="denunciantes" aria-selected="false">Denunciantes</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="denunciados-tab" data-toggle="tab" href="#denunciados" role="tab" aria-controls="denunciados" aria-selected="false">Denunciados</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="autoridades-tab" data-toggle="tab" href="#autoridades" role="tab" aria-controls="autoridades" aria-selected="false">Autoridades</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="abogados-tab" data-toggle="tab" href="#abogados" role="tab" aria-controls="abogados" aria-selected="false">Abogados</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="familiares-tab" data-toggle="tab" href="#familiares" role="tab" aria-controls="familiares" aria-selected="false">Familiares</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="narraciones-tab" data-toggle="tab" href="#narraciones" role="tab" aria-controls="narraciones" aria-selected="false">Narraciones</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="delitos-tab" data-toggle="tab" href="#delitos" role="tab" aria-controls="delitos" aria-selected="false">Delitos</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="roboauto-tab" data-toggle="tab" href="#roboauto" role="tab" aria-controls="roboauto" aria-selected="false">Vehículos</a>
	</li>
</ul>

<div class="boxone">
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="gencar" role="tabpanel" aria-labelledby="gencar-tab">
			@include('tabs.gencarpeta')
		</div>
		<div class="tab-pane fade" id="denunciantes" role="tabpanel" aria-labelledby="denunciantes-tab">
			{{--@include('tabs.denunciantes')--}}
		</div>
		<div class="tab-pane fade" id="denunciados" role="tabpanel" aria-labelledby="denunciados-tab">
			{{--@include('tabs.denunciados')--}}
		</div>
		<div class="tab-pane fade" id="autoridades" role="tabpanel" aria-labelledby="autoridades-tab">
			{{--@include('tabs.autoridades')--}}
		</div>
		<div class="tab-pane fade" id="abogados" role="tabpanel" aria-labelledby="abogados-tab">
			@include('tabs.abogados')
		</div>
		<div class="tab-pane fade" id="familiares" role="tabpanel" aria-labelledby="familiares-tab">
			@include('tabs.familiares')
		</div>
		<div class="tab-pane fade" id="narraciones" role="tabpanel" aria-labelledby="narraciones-tab">
			@include('tabs.narraciones')
		</div>
		<div class="tab-pane fade" id="delitos" role="tabpanel" aria-labelledby="delitos-tab">
			@include('tabs.delitos')
		</div>
		<div class="tab-pane fade" id="roboauto" role="tabpanel" aria-labelledby="roboauto-tab">
			@include('tabs.vehiculos')
		</div>
	</div>
</div>

@endsection

@section('scripts')
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/es.js') }}"></script>
    <script src="{{ asset('js/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}" ></script>
    <script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
    <script src="{{ asset('js/selects.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();  

            $(function () {
                $('#fechaInicial').datetimepicker({
                	format: 'YYYY-MM-DD',
                    defaultDate: moment()
                });
            });
            $(function () {
                $('#horaInter').datetimepicker({
                	format: 'LT'
                });
            });
            $(function () {
                $('#fechaiph2').datetimepicker({
                	format: 'YYYY-MM-DD',
                });
            });
            $(function () {
                $('#fechadet').datetimepicker({
                    format: 'YYYY-MM-DD',
                    defaultDate: moment()
                });
            });

            $(function () {
                $('#fechanac').datetimepicker({
                	format: 'YYYY-MM-DD',
                });
            });

            $(function () {
                $('#fechadelit').datetimepicker({
                	format: 'YYYY-MM-DD'
                });
            });

            $(function () {
                $('#horadelit').datetimepicker({
                	format: 'LT'
                });
            });

            $('#camposdenunciante').show();
            $('#camposdenunciado').hide();
            $('#camposautoridad').hide();

            $("#denunciante").click(function () {
            	$('#camposdenunciante').show();
            	$('#camposdenunciado').hide();
            	$('#camposautoridad').hide();
            });

            $("#denunciado").click(function () {
            	$('#camposdenunciante').hide();
            	$('#camposdenunciado').show();
            	$('#camposautoridad').hide();
            });

            $("#autoridad").click(function () {
            	$('#camposdenunciante').hide();
            	$('#camposdenunciado').hide();
            	$('#camposautoridad').show();
            });

            $(".chosen-select").chosen({
				placeholder_text_siple: 'Seleccione una categoría...',
				max_selected_options: 3,
				no_results_text: 'No se han encontrado la categoría'
			});

            $(document).ready(function() {
                $('.select2').select2();
            });

        });
    </script>
@endsection