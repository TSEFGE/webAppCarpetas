@extends('template.main')

@section('css')
    
@endsection

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="gencar-tab" data-toggle="tab" href="#gencar" role="tab" aria-controls="gencar" aria-selected="true">Generales carpeta</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="involucrados-tab" data-toggle="tab" href="#involucrados" role="tab" aria-controls="involucrados" aria-selected="false">Involucrados</a>
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
		<a class="nav-link" id="roboauto-tab" data-toggle="tab" href="#roboauto" role="tab" aria-controls="roboauto" aria-selected="false">Robo de auto</a>
	</li>
</ul>

<div class="boxone">
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="gencar" role="tabpanel" aria-labelledby="gencar-tab">
			@include('fields.gencarpeta')
		</div>
		<div class="tab-pane fade" id="involucrados" role="tabpanel" aria-labelledby="involucrados-tab">
			@include('fields.involucrados')
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

            $('#camposdenunciante').hide();
            $('#camposdenunciado').hide();
            $('#camposautoridad').hide();

            $("#denunciante").click(function () {
            	if( $('#denunciante').is(':checked')) {
            		$('#camposdenunciante').show();
            		$('#camposdenunciado').hide();
            		$('#camposautoridad').hide();
            	}else{
            		$('#camposdenunciante').hide();
            	}
            });

            $("#denunciado").click(function () {
            	if( $('#denunciado').is(':checked')) {
            		$('#camposdenunciante').hide();
            		$('#camposdenunciado').show();
            		$('#camposautoridad').hide();
            	}else{
            		$('#camposdenunciado').hide();
            	}
            });

            $("#autoridad").click(function () {
            	if( $('#autoridad').is(':checked')) {
            		$('#camposdenunciante').hide();
            		$('#camposdenunciado').hide();
            		$('#camposautoridad').show();
            	}else{
            		$('#camposautoridad').hide();
            	}
            });
        });
    </script>
@endsection