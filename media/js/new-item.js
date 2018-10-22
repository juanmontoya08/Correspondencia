$('document').ready(function() {
	$('form[name=new-cor]').submit(function(evt) {
		evt.preventDefault();
		
		var receptor = $('input[name=cor-receptor]').val();
		
		var remitente = $('input[name=cor-remitente]').val();
		var guia = $('input[name=cor-guia]').val();	
		
		if(receptor == '') {
			alert('Por favor, introduzca el nombre del RECEPTOR');
			return false;
		}
		if(remitente == '') {
			alert('Por favor, introduzca el nombre del REMITENTE');
			return false;
		}

$.ajax({
	type: "POST",
	data: "act=1&receptor="+receptor+"&remitente="+remitente+"&guia="+guia,
	url: "nueva_correspondencia.php",

	beforeSend: function() {
	$("#cor-submit").html("enviando...");
	$("#cor-submit").attr("disabled", "disabled");
       $("body").overhang({
		type: "info",
  message: "Cargando ... Por favor espere",
		});
    },
	success: function(){
		$("body").overhang({
		type: "success",
		message: "Correspondencia Registrada correctamente",
		callback: function(){
		window.location.href = "nueva_correspondencia.php";
		$("#cor-submit").html("Guardar datos");
		$("#cor-submit").removeAttr("disabled");
			}
		});
	}


});

	});
});