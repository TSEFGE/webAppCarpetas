$("#idEstadoOrigen").change(function(event){
	$.get("../municipios/"+event.target.value+"", function(response, estado){
		$("#idMunicipioOrigen").empty();
		$("#idMunicipioOrigen").append("<option value=''>Seleccione un municipio</option>");
		for(i=0; i<response.length; i++){
			$("#idMunicipioOrigen").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idEstado").change(function(event){
	$.get("../municipios/"+event.target.value+"", function(response, estado){
		$("#idMunicipio").empty();
		$("#idMunicipio").append("<option value=''>Seleccione un municipio</option>");
		for(i=0; i<response.length; i++){
			$("#idMunicipio").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idMunicipio").change(function(event){
	$.get("../localidades/"+event.target.value+"", function(response, municipio){
		$("#idLocalidad").empty();
		$("#idLocalidad").append("<option value=''>Seleccione una localidad</option>");
		for(i=0; i<response.length; i++){
			$("#idLocalidad").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
	$.get("../codigos/"+event.target.value+"", function(response, municipio){
		$("#cp").empty();
		$("#cp").append("<option value=''>Seleccione un código postal</option>");
		for(i=0; i<response.length; i++){
			$("#cp").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
		}
	});
});

$("#cp").change(function(event){
	$.get("../colonias/"+$('#cp option:selected').html()+"", function(response, cp){
		$("#idColonia").empty();
		$("#idColonia").append("<option value=''>Seleccione una colonia</option>");
		for(i=0; i<response.length; i++){
			$("#idColonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idEstado2").change(function(event){
	$.get("../municipios/"+event.target.value+"", function(response, estado){
		$("#idMunicipio2").empty();
		$("#idMunicipio2").append("<option value=''>Seleccione un municipio</option>");
		for(i=0; i<response.length; i++){
			$("#idMunicipio2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idMunicipio2").change(function(event){
	$.get("../localidades/"+event.target.value+"", function(response, municipio){
		$("#idLocalidad2").empty();
		$("#idLocalidad2").append("<option value=''>Seleccione una localidad</option>");
		for(i=0; i<response.length; i++){
			$("#idLocalidad2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
	$.get("../codigos/"+event.target.value+"", function(response, municipio){
		$("#cp2").empty();
		$("#cp2").append("<option value=''>Seleccione un código postal</option>");
		for(i=0; i<response.length; i++){
			$("#cp2").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
		}
	});
});

$("#cp2").change(function(event){
	$.get("../colonias/"+$('#cp2 option:selected').html()+"", function(response, cp){
		$("#idColonia2").empty();
		$("#idColonia2").append("<option value=''>Seleccione una colonia</option>");
		for(i=0; i<response.length; i++){
			$("#idColonia2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idEstado3").change(function(event){
	$.get("../municipios/"+event.target.value+"", function(response, estado){
		$("#idMunicipio3").empty();
		$("#idMunicipio3").append("<option value=''>Seleccione un municipio</option>");
		for(i=0; i<response.length; i++){
			$("#idMunicipio3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idMunicipio3").change(function(event){
	$.get("../localidades/"+event.target.value+"", function(response, municipio){
		$("#idLocalidad3").empty();
		$("#idLocalidad3").append("<option value=''>Seleccione una localidad</option>");
		for(i=0; i<response.length; i++){
			$("#idLocalidad3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
	$.get("../codigos/"+event.target.value+"", function(response, municipio){
		$("#cp3").empty();
		$("#cp3").append("<option value=''>Seleccione un código postal</option>");
		for(i=0; i<response.length; i++){
			$("#cp3").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
		}
	});
});

$("#cp3").change(function(event){
	$.get("../colonias/"+$('#cp3 option:selected').html()+"", function(response, cp){
		$("#idColonia3").empty();
		$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
		for(i=0; i<response.length; i++){
			$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idClaseVehiculo").change(function(event){
	$.get("../tipoVehiculos/"+event.target.value+"", function(response, tipo){
		$("#idTipoVehiculo").empty();
		$("#idTipoVehiculo").append("<option value=''>Seleccione un tipo de vehículo</option>");
		for(i=0; i<response.length; i++){
			$("#idTipoVehiculo").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idMarca").change(function(event){
	$.get("../submarcas/"+event.target.value+"", function(response, marca){
		$("#idSubmarca").empty();
		$("#idSubmarca").append("<option value=''>Seleccione una submarca</option>");
		for(i=0; i<response.length; i++){
			$("#idSubmarca").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#idTipoArma").change(function(event){
	$.get("../armas/"+event.target.value+"", function(response, arma){
		$("#idArma").empty();
		$("#idArma").append("<option value=''>Seleccione un arma</option>");
		$("#idArma").append("<option value='1'>Pistola</option>");
		for(i=0; i<response.length; i++){
			$("#idArma").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
	});
});

$("#tipo").change(function(event){
	if(event.target.value==1){
		$.get("../denunciantes/"+$("#idCarpeta").val()+"", function(response, municipio){
			$("#idInvolucrado").empty();
			$("#idInvolucrado").append("<option value=''>Seleccione un denunciante</option>");
			for(i=0; i<response.length; i++){
				$("#idInvolucrado").append("<option value='"+response[i].id+"'> "+response[i].nombres+"</option>");
			}
		});
	}else{
		if(event.target.value==2){
			$.get("../denunciados/"+$("#idCarpeta").val()+"", function(response, municipio){
				$("#idInvolucrado").empty();
				$("#idInvolucrado").append("<option value=''>Seleccione un denunciado</option>");
				for(i=0; i<response.length; i++){
					$("#idInvolucrado").append("<option value='"+response[i].id+"'> "+response[i].nombres+"</option>");
				}
			});
		}
	}
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