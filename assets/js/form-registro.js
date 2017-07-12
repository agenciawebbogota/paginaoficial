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
		}



		
		console.log(data)
	})



	// console.log(formRegistro)
});