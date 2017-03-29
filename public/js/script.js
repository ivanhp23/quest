$("#registro").click(function(){
	var dato = $("#nombre_modulo").val();
	var route = "/modulo";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{nombre_modulo: dato},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.nombre_modulo);
			$("#msj-error").fadeIn();
		}
	});
});