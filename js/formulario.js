var emailField = document.getElementById(email-field);
var emailError = document.getElementById(email-error);

function validar_registro(){
	//validación de la contraseña
	if(document.registro.contraseña.value != document.registro.contraseña2.value){
		alert("Las contraseñas ingresadas son distintas")
	}
}

// cambio de alancin