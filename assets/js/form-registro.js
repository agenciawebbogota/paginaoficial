$(document).ready(function() {
	var formRegistro = $('#form-registro');

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
				$('#form-registro input[name=nombre]').text(""),
				$('#form-registro input[name=apellido]').text(""),
				$('#form-registro input[name=telefono]').text(""),
				$('#form-registro input[name=correo]').text(""),
				$('#form-registro textarea[name=mensaje]').text(""),
				$('#resultado').text("Pronto nuestro equipo te contactará.....");
				///////redireccionar a página de saludo o bienvenida
			}else{
				// console.log(data)
			}

		})		
	
	})

////////Formulario de suscripción //////////////
	var suscribirse = $('#suscribirse');
	suscribirse.submit(function(event){
		event.preventDefault();
		var correos = $('#suscribirse input[name=correo-suscribe]').val();
		//////Enviar por ajax////
		$.ajax({
			url: 'controladores/suscribe.php',
			type: 'POST',
			dataType: 'html',
			data: {correo: correos},
		})
		.done(function(data) {
			if (data) {
				$('#suscribirse input[name=correo-suscribe]').text("")
				$('#resultado-sus')
				.text("Pronto recibirás nuestras novedades..")
				.css({
					fontSize:"20px"
				})
			}
		})
	});
});

