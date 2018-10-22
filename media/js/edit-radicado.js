$('document').ready(function() {
	$('form[name=edit-item]').submit(function(evt) {
		evt.preventDefault();
		
		var id = $(this).data('id');
		var asunto = $('textarea[name=asunto]').val();

		if(asunto == '') {
			$("body").overhang({
					type: "error",
					message: "Introduzca un asunto e inténtelo de nuevo",
					duration: 0.5
				});
				return false;
		}
		
		$.post('editar-radicado.php', {
			'act':'1',
			'radid':id,
			'asunto':asunto
		},function(data) {
			if(data == '1') {
				$("body").overhang({
					type: "success",
					message: "Se han realizado los cambios exitosamente correctamente",
					duration: 0.5,
					callback: function(){
						window.location.href = "editar-radicado.php";
					}
				});

			}else if (data != '1'){
								$("body").overhang({
					type: "error",
					message: "Algo salió mal, inténtelo de nuevo",
					callback: function(){
						window.location.href = "editar-correspondencia.php";
					}
				});
				return false;
			}
		});
	});
});