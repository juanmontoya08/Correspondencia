$('document').ready(function() {
	$('form[name=new-radicado]').submit(function(evt) {
		evt.preventDefault();
		var asunto = $('textarea[name=cor-asunto]').val();
		var tipor1 = $('input:radio[name=tipor]:checked').val();

		
		if(asunto == '') {
			alert('Por favor, introduzca un asunto');
			return false;
		}
		if(tipor1 == '1'){

			var enlace = "reportes/pdf/tickets.php";
		}

		if(tipor1 == '2'){
			var enlace = "nuevo-radicado.php";
		}
		
		

$.ajax({
	type: "POST",
	data: "act=1&asunto="+asunto+"&tipor1="+tipor1,
	url: "nuevo-radicado.php",
	success: function(){
		$("body").overhang({
		type: "success",
		message: "Nuevo radicado registrado correctamente"+tipor1,
		duration: 0.5,

		callback: function(){
		window.location.href = enlace;
			}
		});
	}
});
	});
});