$("#idEstado").change(function(event){
	$.get("municipios/"+event.target.value+"", function(response, estado){
		$("#idMunicipio").empty();
		$("#idMunicipio").append("<option value=''>Seleccione un municipio</option>");
		for(i=0; i<response.length; i++){
			$("#idMunicipio").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idMunicipio").change(function(event){
	$.get("localidades/"+event.target.value+"", function(response, municipio){
		$("#idLocalidad").empty();
		$("#idLocalidad").append("<option value=''>Seleccione una localidad</option>");
		for(i=0; i<response.length; i++){
			$("#idLocalidad").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
	$.get("codigos/"+event.target.value+"", function(response, municipio){
		$("#cp").empty();
		$("#cp").append("<option value=''>Seleccione un código postal</option>");
		for(i=0; i<response.length; i++){
			$("#cp").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
		}
	});
});

$("#cp").change(function(event){
	$.get("colonias/"+$('#cp option:selected').html()+"", function(response, cp){
		$("#idColonia").empty();
		$("#idColonia").append("<option value=''>Seleccione una colonia</option>");
		for(i=0; i<response.length; i++){
			$("#idColonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

/*
$("#idEstado").change(event =>{
	$.get(`municipios/${event.target.value}`, function(res, estado){
		$("idMunicipio").empty();
		res.forEach(element => {
			$("#idMunicipio").append(`<option value=${element.id}> ${element.nombre} </option`);
		});
	});
});
*/