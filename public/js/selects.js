$("#idEstado").change(function(event){
	$.get("municipios/"+event.target.value+"", function(response, estado){
		$("#idMunicipio").empty();
		for(i=0; i<response.length; i++){
			$("#idMunicipio").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idMunicipio").change(function(event){
	$.get("localidades/"+event.target.value+"", function(response, municipio){
		$("#idLocalidad").empty();
		for(i=0; i<response.length; i++){
			$("#idLocalidad").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idMunicipio").change(function(event){
	$.get("codigos/"+event.target.value+"", function(response, municipio){
		$("#cp").empty();
		for(i=0; i<response.length; i++){
			$("#cp").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
		}
	});
});

$("#cp").change(function(event){
	var xd = $('#cp option:selected').html();
	$.get("colonias/"+xd+"", function(response, cp){
		$("#idColonia").empty();
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