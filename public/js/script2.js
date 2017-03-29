$(document).ready(function(){
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/modulos";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.nombre_modulo+"</td><td><button value="+value.id+"OnClic='Mostrar(this);' class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>");
		});
	});
});
