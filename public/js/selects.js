$("#idEstado").change(function(event){
	$.get("municipios/"+event.target.value+"", function(response, state){
		$("#idMunicipio").empty();
		for(i=0; i<response.length; i++){
			$("#idMunicipio").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
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

$("#idEstado").change(event => {
	$.get(`municipios/${event.target.value}`, function(res, sta){
		$("#idMunicipio").empty();
		res.forEach(element => {
			$("#idMunicipio").append(`<option value=${element.id}> ${element.name} </option>`);
		});
	});
});*/