$('document').ready(function() {
	$('form[name=edit-item]').submit(function(evt) {
		evt.preventDefault();
		
		var id = $(this).data('id');
		var remitente = $('input[name=item-remitente]').val();
		var receptor = $('input[name=item-receptor]').val();
		var guia = $('input[name=item-guia]').val();
		

		
		if(remitente == '') {
			alert('Por favor, introduzca un remitente');
			return false;
		}
		if(receptor == '') {
			alert('Por favor, introduzca un receptor');
			return false;
		}
		
		$.post('editar-correspondencia.php', {
			'act':'1',
			'itemid':id,
			'remitente':remitente,
			'receptor':receptor,
			'guia':guia
		},function(data) {
			if(data == '1') {
				$("body").overhang({
					type: "success",
					message: "Se han realizado los cambios exitosamente correctamente",
					duration: 0.5,
					callback: function(){
						window.location.href = "editar-correspondencia.php";
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