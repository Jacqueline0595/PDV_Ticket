function validar_registro(){
	//validación de la contraseña
	if(document.registro.contraseña.value.length==0 && document.registro.contraseña2.value.length==0){
		alert("Los campos de contraseña no pueden estar vacios")
		return 0;
	}
	if(document.registro.contraseña.value == document.registro.contraseña2.value){
		alert("Ambas contraseñas son iguales")
	} else{
		alert("Las contraseñas ingresadas son distintas")
	}


}

// cambio de alancin