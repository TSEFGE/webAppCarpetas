$(document).ready(function(){
    //Para el inicio de carpeta
    $("#conDetenido").prop("checked", false);
    $('#conDet1').css('display', 'none');
    $("#horaIntervencion").prop('required',false);
    $("#npd").prop('required',false);
    $("#numIph").prop('required',false);
    $("#fechaIph").prop('required',false);
    $("#narracionIph").prop('required',false);
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

    //Para el tipo de denunciado
    $("#tipoDenunciado1").prop("checked", false);
    $("#tipoDenunciado2").prop("checked", false);
    $("#tipoDenunciado3").prop("checked", false);
    $('#qrr').hide();
    $('#conocido').hide();
    $('#comparecencia').hide();
    $("#tipoDenunciado1").change(function(event){
        if ($('#tipoDenunciado1').is(':checked') ) {
            $('#qrr').show();
            $('#conocido').hide();
            $('#comparecencia').hide();
        }
    });
    $("#tipoDenunciado2").change(function(event){
        if ($('#tipoDenunciado2').is(':checked') ) {
            $('#qrr').hide();
            $('#conocido').show();
            $('#comparecencia').hide();
        }
    });
    $("#tipoDenunciado3").change(function(event){
        if ($('#tipoDenunciado3').is(':checked') ) {
            $('#qrr').hide();
            $('#conocido').hide();
            $('#comparecencia').show();
        }
    });

    //Para el tipo de persona(Moral/Física)
    $("#esEmpresa1").prop("checked", false);
    $("#esEmpresa2").prop("checked", false);
    $('#datosPer').hide();
    $('#personaFisica').hide();
    $('#personaMoral').hide();
    $('#datosDir').hide();
    $('#datosTrab').hide();
    $('#datosNotif').hide();
    $('#datosExtra').hide();
    //Si es empresa
    $("#esEmpresa1").change(function(event){
        if ($('#esEmpresa1').is(':checked') ) {
            $('#datosPer').show();
            $('#personaFisica').hide();
            $('#personaMoral').show();
            $('#datosDir').show();
            $('#datosTrab').hide();
            $('#datosNotif').show();
            $('#datosExtra').show();

            //Datos personales requeridos de Persona Moral o Empresa
            $('#nombres2').prop('required', true);
            $('#rfc2').prop('required', true);
            $('#representanteLegal').prop('required', true);
            
            //Datos personales no requeridos de Persona Física
            $("#nombres").prop('required',false);   
            $("#primerAp").prop('required',false);   
            $("#segundoAp").prop('required',false);   
            $("#rfc").prop('required',false);   
            $("#fechaNacimiento").prop('required',false);   
            $("#edad").prop('required',false);   
            $("#sexo").prop('required',false);   
            $("#curp").prop('required',false);   
            $("#idNacionalidad").prop('required',false);   
            $("#idEtnia").prop('required',false);   
            $("#idLengua").prop('required',false);   
            $("#idEstadoOrigen").prop('required',false);   
            $("#idMunicipioOrigen").prop('required',false);   
            $("#telefono").prop('required',false);   
            $("#motivoEstancia").prop('required',false);   
            $("#idOcupacion").prop('required',false);   
            $("#idEstadoCivil").prop('required',false);   
            $("#idReligion").prop('required',false);   
            $("#idEscolaridad").prop('required',false);   
            $("#docIdentificacion").prop('required',false);   
            $("#numDocIdentificacion").prop('required',false);   
            
            //Datos del trabajo no requeridos de Persona Física
            $("#lugarTrabajo").prop('required',false);   
            $("#telefonoTrabajo").prop('required',false);   
            $("#idEstado2").prop('required',false);   
            $("#idMunicipio2").prop('required',false);   
            $("#idLocalidad2").prop('required',false);   
            $("#cp2").prop('required',false);   
            $("#idColonia2").prop('required',false);   
            $("#calle2").prop('required',false);   
            $("#numExterno2").prop('required',false);   
            $("#numInterno2").prop('required',false);               

        }
    });
    //No es empresa
    $("#esEmpresa2").change(function(event){
        if ($('#esEmpresa2').is(':checked') ) {
            $('#datosPer').show();
            $('#personaFisica').show();
            $('#personaMoral').hide();
            $('#datosDir').show();
            $('#datosTrab').show();
            $('#datosNotif').show();
            $('#datosExtra').show();

            //Datos personales no requeridos de Persona Moral o Empresa
            $('#nombres2').prop('required', false);
            $('#rfc2').prop('required', false);
            $('#representanteLegal').prop('required', false);
            
            //Datos personales requeridos de Persona Física
            $("#nombres").prop('required',true);   
            $("#primerAp").prop('required',true);   
            $("#segundoAp").prop('required',true);   
            $("#rfc").prop('required',true);   
            $("#fechaNacimiento").prop('required',true);   
            $("#edad").prop('required',true);   
            $("#sexo").prop('required',true);   
            $("#curp").prop('required',true);   
            $("#idNacionalidad").prop('required',true);   
            $("#idEtnia").prop('required',true);   
            $("#idLengua").prop('required',true);   
            $("#idEstadoOrigen").prop('required',true);   
            $("#idMunicipioOrigen").prop('required',true);   
            $("#telefono").prop('required',true);   
            $("#motivoEstancia").prop('required',true);   
            $("#idOcupacion").prop('required',true);   
            $("#idEstadoCivil").prop('required',true);   
            $("#idReligion").prop('required',true);   
            $("#idEscolaridad").prop('required',true);   
            $("#docIdentificacion").prop('required',true);   
            $("#numDocIdentificacion").prop('required',true);   
            
            //Datos del trabajo requeridos de Persona Física
            $("#lugarTrabajo").prop('required',true);   
            $("#telefonoTrabajo").prop('required',true);   
            $("#idEstado2").prop('required',true);   
            $("#idMunicipio2").prop('required',true);   
            $("#idLocalidad2").prop('required',true);   
            $("#cp2").prop('required',true);   
            $("#idColonia2").prop('required',true);   
            $("#calle2").prop('required',true);   
            $("#numExterno2").prop('required',true);   
            $("#numInterno2").prop('required',true);   
        }
    });

    //Para delito, con o sin violencia
    $('#violencia').hide();
    $(".cv").prop('required',false);
    $("#conViolencia1").change(function(event){
        if ($('#conViolencia1').is(':checked') ) {
            $('#violencia').hide();
            $(".cv").prop('required',false);
            //$("#idTipoArma").prop('required',false);
            //$("#idArma").prop('required',false);
        }
    });
    $("#conViolencia2").change(function(event){
        if ($('#conViolencia2').is(':checked') ) {
            $('#violencia').show();
            $(".cv").prop('required',true);
            //$("#idTipoArma").prop('required',true);
            //$("#idArma").prop('required',true);
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
           format: 'LT',
           maxDate: moment()
       });
    });
    $(function () {
        $('#fechaiph2').datetimepicker({
           format: 'YYYY-MM-DD',
           maxDate: moment()
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
           maxDate: moment().subtract(18, 'years').format('YYYY-MM-DD')
       });
       });
    $("#fechanac").on("change.datetimepicker", function (e) {
        $('#edad').val(moment().diff(e.date,'years'));
    });

    $(function () {
        $('#fechadelit').datetimepicker({
           format: 'YYYY-MM-DD',
           maxDate: moment()
       });
    });

    $(function () {
        $('#horadelit').datetimepicker({
           format: 'LT',
           maxDate: moment()
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