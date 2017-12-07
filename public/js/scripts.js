$(document).ready(function(){
    $("#conDetenido").prop("checked", false);
    $('#conDet1').css('display', 'none');
    $("#conDetenido").change(function(event){
        if ($('#conDetenido').is(':checked') ) {
            $('#conDet1').css('display', 'block');
            $("#horaIntervencion").prop('required',true);
            $("#npd").prop('required',true);
            $("#numIph").prop('required',true);
            $("#fechaIph").prop('required',true);
            $("#narracionIph").prop('required',true);
        }else{
            $('#conDet1').css('display', 'none');
            $("#horaIntervencion").prop('required',false);
            $("#npd").prop('required',false);
            $("#numIph").prop('required',false);
            $("#fechaIph").prop('required',false);
            $("#narracionIph").prop('required',false);
        }
    });


    $("#tipoDenunciado1").prop("checked", false);
    $("#tipoDenunciado2").prop("checked", false);
    $("#tipoDenunciado3").prop("checked", false);
    $('#qrr').css('display', 'none');
    $('#conocido').css('display', 'none');
    //$('#comparecencia').css('display', 'none');
    $("#tipoDenunciado1").change(function(event){
        if ($('#tipoDenunciado1').is(':checked') ) {
            $('#qrr').css('display', 'block');
            $('#conocido').css('display', 'none');
            $('#comparecencia').css('display', 'none');
        }
    });
    $("#tipoDenunciado2").change(function(event){
        if ($('#tipoDenunciado2').is(':checked') ) {
            $('#qrr').css('display', 'none');
            $('#conocido').css('display', 'block');
            $('#comparecencia').css('display', 'none');
        }
    });
    $("#tipoDenunciado3").change(function(event){
        if ($('#tipoDenunciado3').is(':checked') ) {
            $('#qrr').css('display', 'none');
            $('#conocido').css('display', 'none');
            $('#comparecencia').css('display', 'block');
        }
    });


    $("#esEmpresa1").prop("checked", false);
    $("#esEmpresa2").prop("checked", false);
    $('#personaFisica').css('display', 'none');
    $('#personaMoral').css('display', 'none');
    $("#esEmpresa1").change(function(event){
        if ($('#esEmpresa1').is(':checked') ) {
            $('#personaMoral').css('display', 'block');
            $('#personaFisica').css('display', 'none');
        }
    });
    $("#esEmpresa2").change(function(event){
        if ($('#esEmpresa2').is(':checked') ) {
            $('#personaMoral').css('display', 'none');
            $('#personaFisica').css('display', 'block');
        }
    });

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

    
    $('.select2').select2();

});