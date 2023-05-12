function validar_registro(){
	//validación del nombre
	if (document.registro.nombre.value.length==0){
		alert("Tiene que escribir su nombre")
		document.registro.nombre.focus()
		return 0;
	}
}