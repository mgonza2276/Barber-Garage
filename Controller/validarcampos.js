function validar(){
	nombre=document.getElementById('nombre').value;
	clave=document.getElementById('clave').value;
	email=document.getElementById('email').value;

	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (nombre==="") {
		swal("El campo nombre esta vacio");
		return false;
	} 

	if (clave.length<6) {
		swal("La clave debe contener almenos 6 caracteres");
		return false;
	}

	if ( !expr.test(email) ) {
        swal("Error: La dirección de correo " + email + " es incorrecta.");
    	return false;
    	}

}