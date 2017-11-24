@extends('template.main')

@section('css')
    
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
			@include('fields.gencarpeta')
		</div>
		<div class="tab-pane fade" id="denunciantes" role="tabpanel" aria-labelledby="denunciantes-tab">
			@include('fields.denunciantes')
		</div>
		<div class="tab-pane fade" id="denunciados" role="tabpanel" aria-labelledby="denunciados-tab">
			@include('fields.denunciados')
		</div>
		<div class="tab-pane fade" id="autoridades" role="tabpanel" aria-labelledby="autoridades-tab">
			@include('fields.autoridades')
		</div>
		<div class="tab-pane fade" id="abogados" role="tabpanel" aria-labelledby="abogados-tab">
			@include('fields.abogados')
		</div>
		<div class="tab-pane fade" id="familiares" role="tabpanel" aria-labelledby="familiares-tab">
			@include('fields.familiares')
		</div>
		<div class="tab-pane fade" id="narraciones" role="tabpanel" aria-labelledby="narraciones-tab">
			@include('fields.narraciones')
		</div>
		<div class="tab-pane fade" id="delitos" role="tabpanel" aria-labelledby="delitos-tab">
			@include('fields.delitos')
		</div>
		<div class="tab-pane fade" id="roboauto" role="tabpanel" aria-labelledby="roboauto-tab">
			@include('fields.vehiculos')
		</div>
	</div>
</div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        
            $(function (){
                $('.calendarioCompleto').datepicker({
                        format: "dd/mm/yyyy",
                        weekStart: 0,
                        startDate: "01/01/2013",
                        //endDate: "today",
                        todayBtn: "linked",
                        language: "es",
                        orientation: "bottom auto",
                        multidate: false,
                        todayHighlight: true,
                        autoclose: true,
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

            $('#horadelito').timepicker();

            $(".chosen-select").chosen({
				placeholder_text_siple: 'Seleccione una categoría...',
				max_selected_options: 3,
				no_results_text: 'No se han encontrado la categoría'
			});

        });
    </script>
@endsection