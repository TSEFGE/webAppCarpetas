$(document).ready(function(){
    $("#conDetenido").prop("checked", false);
    $('#conDet1').css('display', 'none');
    $("#conDetenido").change(function(event){
        if ($('#conDetenido').is(':checked') ) {
            $('#conDet1').css('display', 'block');
        }else{
            $('#conDet1').css('display', 'none');
        }
    });

    $("#esEmpresa1").prop("checked", false);
    $("#esEmpresa2").prop("checked", false);
    $('#personaFisica').css('display', 'none');
    $('#personaMoral').css('display', 'none');
    $('#btn-submit').css('display', 'none');
    $("#esEmpresa1").change(function(event){
        if ($('#esEmpresa1').is(':checked') ) {
            $('#personaMoral').css('display', 'block');
            $('#personaFisica').css('display', 'none');
            $('#btn-submit').css('display', 'block');
        }
    });
    $("#esEmpresa2").change(function(event){
        if ($('#esEmpresa2').is(':checked') ) {
            $('#personaMoral').css('display', 'none');
            $('#personaFisica').css('display', 'block');
            $('#btn-submit').css('display', 'block');
        }
    });

    $('#datosVehiculo').css('display', 'none');
    $("#idDelito").change(function(event){
        if((event.target.value>=130 && event.target.value<=135) || (event.target.value>=242 && event.target.value<=245) || event.target.value==227){
            //alert(event.target.value); 
            $('#datosVehiculo').css('display', 'block');
        }else{
            $('#datosVehiculo').css('display', 'none');
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

    $(document).ready(function() {
        $('.select2').select2();
    });

});