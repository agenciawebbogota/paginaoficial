$(document).ready(function() {
	var formRegistro = $('#form-registro');

	var registros = {

	}
	formRegistro.submit(function(event){
		event.preventDefault();
		var data = {
			nombre:$('#form-registro input[name=nombre]').val(),
			apellido:$('#form-registro input[name=apellido]').val(),
			telefono:$('#form-registro input[name=telefono]').val(),
			correo:$('#form-registro input[name=correo]').val(),
			mensaje:$('#form-registro textarea[name=mensaje]').val(),
		}
///////////////////////Enviar datos al servidor//////////////////////////
//////////////////////AJAX //////////////////////////////////////////////
		$.ajax({
			url: 'controladores/guarda.php',
			type: 'POST',
			dataType: 'html',
			data: data,
			beforeSend:function(){
				$('#resultado').css({
					backgroundColor:"#62c462"
				});
				$('#resultado').text("Cargando tu solicitud...");
			}
		})
		.done(function(data) {

			if (data) {
				$('#resultado').text("Pronto nuestro equipo te contactará.....");
				///////redireccionar a página de saludo o bienvenida
			}else{
				console.log(data)
			}

		})		
	
	})



	// console.log(formRegistro)
});

